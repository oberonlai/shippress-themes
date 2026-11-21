#!/usr/bin/env python3
"""Hero-diversity check for design-plan.json (rules.hero_diversity, 2026-11-20).

    python3 scripts/check-design-plan.py [design-plan.json]            check; exit 1 on any violation
    python3 scripts/check-design-plan.py [design-plan.json] --guidance print the planning brief plan-next.sh gives the model

The coarse `hero` class cannot stop two themes that look alike (full-bleed photo + text on top + a strip along the
bottom is the same first screen whatever the class says), so every NEW row also carries a composition:
  hero_composition  how the photo sits and is cropped (enums.hero_composition)
  hero_text         where the headline sits, on or beside the photo (enums.hero_text)
  hero_footer       what closes the hero at the bottom (enums.hero_footer)
  hero_fingerprint  "<composition>/<text>/<footer>"
A row is NEW when it has any of these fields, or when its batch id is >= rules.hero_diversity.fields_required_from_batch
(then all four are required). Older rows have none of them: they are never changed and never flagged, and a row without a
fingerprint is simply unknown when others are compared with it. Rejected rows are not themes and are ignored.
For every new row, counting the plan rows before it (the window is rules.hero_diversity.window, 30):
  1. its fingerprint differs from every fingerprint among the previous `window` rows;
  2. its `hero` class is at most max_share_in_window (25%) of the `window` rows ending with it;
  3. its `hero` class is not one whose share among the rows already done before it is above hot_share (20%).
Python 3 standard library only.
"""
import json
import re
import sys

DEFAULTS = {
    "fields_required_from_batch": 38,
    "window": 30,
    "max_share_in_window": 0.25,
    "hot_share": 0.20,
}
FIELDS = ("hero_composition", "hero_text", "hero_footer", "hero_fingerprint")


def config(plan):
    cfg = dict(DEFAULTS)
    cfg.update(((plan.get("rules") or {}).get("hero_diversity") or {}))
    return cfg


def fingerprint(row):
    return "/".join(str(row.get(k, "")) for k in ("hero_composition", "hero_text", "hero_footer"))


def live_rows(plan):
    return [r for r in plan.get("plan", []) if not str(r.get("status", "")).startswith("rejected")]


def batch_of(row):
    m = re.match(r"b(\d+)-", str(row.get("id", "")))
    return int(m.group(1)) if m else 0


def is_new(row, cfg):
    return any(k in row for k in FIELDS) or batch_of(row) >= int(cfg["fields_required_from_batch"])


def hot_classes(rows, cfg):
    """Hero classes above hot_share of the done rows in `rows`."""
    done = [r for r in rows if str(r.get("status", "")).startswith("done")]
    if not done:
        return {}
    out = {}
    for h in {r.get("hero") for r in done}:
        share = sum(1 for r in done if r.get("hero") == h) / len(done)
        if share > float(cfg["hot_share"]):
            out[h] = share
    return out


def check_row(prior, row, plan):
    """Violations of one new `row` given the `prior` live rows (plan order) before it."""
    cfg = config(plan)
    enums = plan.get("enums") or {}
    by_hero = (plan.get("rules") or {}).get("hero_diversity", {}).get("composition_by_hero") or {}
    slug = row.get("slug", "?")
    errs = []
    for k in FIELDS:
        if not row.get(k):
            errs.append(f"{slug}: missing {k}")
    if errs:
        return errs
    for k in ("hero_composition", "hero_text", "hero_footer"):
        if enums.get(k) and row[k] not in enums[k]:
            errs.append(f"{slug}: {k} {row[k]!r} not in enums.{k}")
    if row["hero_fingerprint"] != fingerprint(row):
        errs.append(f"{slug}: hero_fingerprint {row['hero_fingerprint']!r} is not {fingerprint(row)!r}")
    hero = row.get("hero")
    if hero in by_hero and row["hero_composition"] not in by_hero[hero]:
        errs.append(f"{slug}: hero {hero} cannot use composition {row['hero_composition']} (allowed {by_hero[hero]})")
    w = int(cfg["window"])
    for r in prior[-w:]:
        if r.get("hero_fingerprint") == row["hero_fingerprint"]:
            errs.append(f"{slug}: hero_fingerprint {row['hero_fingerprint']} repeats {r.get('slug')} (one of the last {w} themes)")
    recent = prior[-(w - 1):] + [row]
    n = sum(1 for r in recent if r.get("hero") == hero)
    if n / w > float(cfg["max_share_in_window"]):  # fewer than `window` rows so far: measured against a full window
        errs.append(f"{slug}: hero {hero} would be {n}/{w} of the last {w} themes (max {int(float(cfg['max_share_in_window']) * 100)}%)")
    hot = hot_classes(prior, cfg)
    if hero in hot:
        errs.append(f"{slug}: hero {hero} is {hot[hero]:.0%} of the finished themes (> {int(float(cfg['hot_share']) * 100)}%), pick another class")
    return errs


def check(plan):
    cfg = config(plan)
    rows = live_rows(plan)
    errs = []
    for i, row in enumerate(rows):
        if is_new(row, cfg):
            errs += check_row(rows[:i], row, plan)
    return errs


def guidance(plan):
    """Text block for the plan-next prompt: what the next rows may and may not use."""
    cfg = config(plan)
    enums = plan.get("enums") or {}
    rows = live_rows(plan)
    w = int(cfg["window"])
    recent = rows[-w:]
    counts = {}
    for r in recent:
        counts[r.get("hero")] = counts.get(r.get("hero"), 0) + 1
    hot = hot_classes(rows, cfg)
    cap = int(float(cfg["max_share_in_window"]) * w)
    full = sorted(h for h, c in counts.items() if c >= cap)
    prints = [f"{r.get('slug')}: {r['hero_fingerprint']}" for r in recent if r.get("hero_fingerprint")]
    by_hero = (plan.get("rules") or {}).get("hero_diversity", {}).get("composition_by_hero") or {}
    lines = [
        f"Hero diversity (rules.hero_diversity; a row that breaks it is dropped by the validator):",
        f"- every row needs hero_composition {json.dumps(enums.get('hero_composition', []))}, hero_text {json.dumps(enums.get('hero_text', []))}, hero_footer {json.dumps(enums.get('hero_footer', []))} and hero_fingerprint = \"<hero_composition>/<hero_text>/<hero_footer>\".",
        f"- hero_composition must fit the hero class: {json.dumps(by_hero)}.",
        f"- the fingerprint must differ from the fingerprint of each of the last {w} themes and of the rows you write in this batch. Fingerprints in use: {json.dumps(prints, ensure_ascii=False)}.",
        f"- hero class counts in the last {w} themes: {json.dumps(counts)}; a class may be at most {cap} of any {w} consecutive themes (including this batch), so do not use now: {json.dumps(full)}.",
        f"- hero classes above {int(float(cfg['hot_share']) * 100)}% of the finished themes are not allowed for new rows: {json.dumps(sorted(hot))}.",
        "- spread the batch over different hero classes and compositions; the first screen must not be a full-bleed photo with overlaid text and a strip along the bottom unless the class and fingerprint allow it.",
    ]
    return "\n".join(lines)


def main(argv):
    args = [a for a in argv[1:] if not a.startswith("--")]
    path = args[0] if args else "design-plan.json"
    plan = json.load(open(path))
    if "--guidance" in argv:
        print(guidance(plan))
        return 0
    errs = check(plan)
    for e in errs:
        print("hero-diversity:", e, file=sys.stderr)
    if errs:
        return 1
    n = sum(1 for r in live_rows(plan) if is_new(r, config(plan)))
    print(f"hero-diversity ok ({n} row(s) with a composition)")
    return 0


if __name__ == "__main__":
    sys.exit(main(sys.argv))
