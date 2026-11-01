#!/usr/bin/env python3
"""Builds the inner pages (block markup) and the sample article into demo-content.json from copy-inner.json.

Usage: python3 -I build-inner.py <copy-inner.json> <theme dir>
Re-running replaces the inner pages and the article; the home page entry is left alone.
"""
import html
import json
import re
import sys

COPY, THEME = sys.argv[1], sys.argv[2]
copy = json.load(open(COPY, encoding='utf-8'))
PAGES = {p['slug']: p for p in copy['pages']}
en = open(THEME + '/inc/i18n/en.php', encoding='utf-8').read()
ALT = {m.group(1): m.group(3) for m in re.finditer(r"'alt_(\w+)'\s*=>\s*([\"'])(.*?)\2,", en)}
E = lambda s: html.escape(s, quote=False)
EA = lambda s: html.escape(s, quote=True)

FILES = {
    'h1': 'h1-taping', 'h2': 'h2-shoes', 'h3': 'h3-gait', 'h4': 'h4-startline', 'i1': 'i1-ankle', 'i2': 'i2-knee',
    'i3': 'i3-calf', 'i4': 'i4-hip', 'i5': 'i5-shoulder', 'i6': 'i6-back', 'm1': 'm1-goniometer', 'm2': 'm2-calfraise',
    'm3': 'm3-jog', 'n1': 'n1-tape', 'n2': 'n2-band', 'n3': 'n3-hop', 'p1': 'p1-dawn', 'd1': 'd1-solheim',
}
used = {}


def src(k):
    return '{{theme}}/assets/images/%s.webp' % FILES[k]


def img_block(k, cls):
    used.setdefault(CUR, []).append(k)
    return ('<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"%s"} -->\n'
            '<figure class="wp-block-image size-full %s"><img src="%s" alt="%s"/></figure>\n<!-- /wp:image -->'
            % (cls, cls, src(k), EA(ALT[k])))


def para(text, cls=None):
    a = ' {"className":"%s"}' % cls if cls else ''
    c = ' class="%s"' % cls if cls else ''
    return '<!-- wp:paragraph%s -->\n<p%s>%s</p>\n<!-- /wp:paragraph -->' % (a, c, text)


def sentences(t):
    return re.split(r'(?<=[.!?])\s+(?=[A-Z$0-9])', t.strip())


def paras(sents, per=3):
    out = []
    for i in range(0, len(sents), per):
        out.append(' '.join(sents[i:i + per]))
    return out


def group(cls, inner, tag='div', align=False, anchor=None, extra=''):
    attrs = {}
    if tag != 'div':
        attrs['tagName'] = tag
    if align:
        attrs['align'] = 'full'
    if anchor:
        attrs['anchor'] = anchor
    attrs['className'] = cls
    attrs['layout'] = {'type': 'default'}
    j = json.dumps(attrs, separators=(',', ':'))
    idattr = ' id="%s"' % anchor if anchor else ''
    c = 'wp-block-group%s %s' % (' alignfull' if align else '', cls)
    return '<!-- wp:group %s -->\n<%s%s class="%s">%s</%s>\n<!-- /wp:group -->' % (j, tag, idattr, c, inner, tag)


def section(inner, ground=False):
    return group('sj-isec' + (' sj-isec--ground' if ground else ''), inner, tag='section', align=True)


def heading(text, cls='sj-h2'):
    return '<!-- wp:heading {"className":"%s"} -->\n<h2 class="wp-block-heading %s">%s</h2>\n<!-- /wp:heading -->' % (cls, cls, E(text))


def prose(head, sents, ground=False, per=3, anchor=None):
    body = '\n\n'.join(para(E(p)) for p in paras(sents, per))
    h = group('sj-prose__head', heading(head)) if head else ''
    inner = group('sj-wrap sj-prose' + ('' if head else ' sj-prose--rest'), h + '\n\n' + group('sj-prose__body', body), anchor=anchor)
    return section(inner, ground)


def rest_only(sents, ground=False):
    return prose(None, sents, ground)


BAND_CLS = ['assess', 'rebuild', 'return']


def band(i, wash, inset, tab, ghost, kicker, head, lead, anchor=None, link=None):
    cls = BAND_CLS[i % 3]
    rev = i % 2 == 1
    direction = 'right' if rev else 'left'
    words = head.split(' ', 1)
    h = '<span class="sj-band__first">%s</span>%s' % (E(words[0]), (' ' + E(words[1])) if len(words) > 1 else '')
    text = ('<!-- wp:paragraph {"className":"sj-band__kicker"} -->\n<p class="sj-band__kicker">%s</p>\n<!-- /wp:paragraph -->\n\n'
            '<!-- wp:heading {"level":3,"className":"sj-band__h"} -->\n<h3 class="wp-block-heading sj-band__h">%s</h3>\n<!-- /wp:heading -->\n\n'
            % (E(kicker), h)) + para(E(lead), 'sj-band__p')
    go = ''
    if link:
        go = '\n\n<!-- wp:paragraph {"className":"sj-band__go"} -->\n<p class="sj-band__go"><a class="sj-chip" href="%s" aria-label="%s"></a></p>\n<!-- /wp:paragraph -->' % (link, EA(head))
    card = group('sj-band__card sp-reveal sp-reveal--' + direction,
                 para(E(tab), 'sj-band__tab') + '\n\n' + group('sj-band__text', text) + '\n\n' + img_block(inset, 'sj-band__inset') + go)
    inner = (img_block(wash, 'sj-band__wash') + '\n\n' + para(E(ghost), 'sj-band__ghost').replace('<p class="sj-band__ghost">', '<p class="sj-band__ghost" aria-hidden="true">') + '\n\n' + card)
    return section(group('sj-band sj-band--%s%s' % (cls, ' sj-band--rev' if rev else ''), inner, anchor=anchor), True).replace('sj-isec--ground', 'sj-isec--ground sj-isec--bandwrap')


def mini_head(title, latin, left, right):
    panels = ''
    for side, k in (('l', left), ('r', right)):
        panels += group('sj-mini__panel sj-mini__panel--' + side, img_block(k, 'sj-mini__img')) + '\n\n'
    text = (para(E(latin), 'sj-mini__latin') + '\n\n'
            '<!-- wp:heading {"level":1,"className":"sj-mini__h"} -->\n<h1 class="wp-block-heading sj-mini__h">%s</h1>\n<!-- /wp:heading -->\n\n'
            '<!-- wp:separator {"className":"sj-mini__rule is-style-wide"} -->\n<hr class="wp-block-separator has-alpha-channel-opacity sj-mini__rule is-style-wide"/>\n<!-- /wp:separator -->' % E(title))
    head = group('sj-mini', panels + group('sj-mini__text', text), tag='section', align=True)
    return head + '\n\n<!-- wp:template-part {"slug":"nav-strip","className":"sj-strip-part"} /-->'


def intro(text):
    return section(group('sj-wrap sj-intro', para(E(text), 'sj-intro__p')))


def fees_table(rows):
    body = ''.join('<tr><td>%s</td><td>%s</td><td>%s</td></tr>' % tuple(map(E, r)) for r in rows)
    return ('<!-- wp:table {"className":"sj-fees"} -->\n<figure class="wp-block-table sj-fees"><table><thead><tr><th>Item</th><th>Length</th><th>Price</th></tr></thead><tbody>%s</tbody></table></figure>\n<!-- /wp:table -->' % body)


def card(photo, title, label, cap, href):
    return group('sj-card sp-reveal sp-reveal--up',
                 ('<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"sj-card__photo"} -->\n'
                  '<figure class="wp-block-image size-full sj-card__photo"><a href="%s"><img src="%s" alt="%s"/></a></figure>\n<!-- /wp:image -->\n\n' % (href, src(photo), EA(ALT[photo])))
                 + para('<a class="sj-card__title" href="%s">%s</a><a class="sj-chip" href="%s" aria-label="%s"></a>' % (href, E(title), href, EA(title)), 'sj-card__row') + '\n\n'
                 + para(E(label), 'sj-sublabel') + '\n\n' + para(E(cap), 'sj-card__cap'))


def grid(cards):
    used.setdefault(CUR, [])
    return group('sj-wrap sj-grid sp-stagger', '\n\n'.join(cards))


def sec(slug, i):
    return PAGES[slug]['sections'][i]


def S(slug, i):
    return sentences(sec(slug, i)['body'])


def split(slug, i, n=2):
    s = S(slug, i)
    return ' '.join(s[:n]), s[n:]


pages = {}

# ---- Injuries
CUR = 'injuries'
inj = [('i1', 'Ankle and foot', 'ANKLE / FOOT', 'Sprains, tendon pain and a foot that will not settle in training.', '#lower-leg'),
       ('i2', 'Knee', 'KNEE', 'Swelling, joint-line pain and a knee that stiffens or gives after running.', '#knee-hip'),
       ('i3', 'Shin and calf', 'SHIN / CALF', 'Shin soreness and calf strain set against mileage, surface and push-off.', '#lower-leg'),
       ('i4', 'Hip and groin', 'HIP / GROIN', 'Groin and hip pain from kicking, changing direction or a long run.', '#knee-hip'),
       ('i5', 'Shoulder and elbow', 'SHOULDER / ELBOW', 'Overhead pain and elbow load in throwing athletes and club sport.', '#shoulder-back'),
       ('i6', 'Back and neck', 'BACK / NECK', 'Back and neck pain that changes running, lifting or a full session.', '#shoulder-back')]
p = PAGES['injuries']
parts = [mini_head('Injuries', 'WHAT WE TREAT', 'h1', 'p1'), intro(p['intro']), prose(sec('injuries', 0)['heading'], S('injuries', 0)),
         section(grid([card(*c[:2], c[2], c[3], c[4]) for c in inj]), True)]
for i, (anc, wash, ins, tab, ghost, kick) in enumerate([('lower-leg', 'm1', 'n1', 'Lower leg', 'LOWER LEG', 'Ankle, foot, shin, calf'),
                                                         ('knee-hip', 'm2', 'n2', 'Knee and hip', 'KNEE / HIP', 'Knee, hip, groin'),
                                                         ('shoulder-back', 'm3', 'n3', 'Shoulder and back', 'SHOULDER', 'Shoulder, elbow, back, neck')]):
    lead, rest = split('injuries', i + 1)
    parts.append(band(i, wash, ins, tab, ghost, kick, sec('injuries', i + 1)['heading'], lead, anchor=anc))
    parts.append(rest_only(rest, i % 2 == 1 and False))
refer = S('injuries', 4)
parts.append(prose(sec('injuries', 4)['heading'], refer[:1] + refer[1:], True))
parts.append(section(group('sj-wrap sj-refer', para('Referred on, not treated here', 'sj-sublabel') + '\n\n<!-- wp:list {"className":"sj-refer__list"} -->\n<ul class="sj-refer__list"><li>Fractures</li><li>Surgical cases</li></ul>\n<!-- /wp:list -->')))
pages['injuries'] = parts

# ---- Method
CUR = 'method'
parts = [mini_head('Method', 'HOW IT WORKS', 'h3', 'h4'), intro(PAGES['method']['intro'])]
meth = [('m1', 'n1', 'Assess', 'ASSESS', 'First visit, 60 minutes'), ('m2', 'n2', 'Rebuild', 'REBUILD', 'Weeks 1–6'), ('m3', 'n3', 'Return', 'RETURN', 'A graded plan')]
for i, (w, ins, tab, ghost, kick) in enumerate(meth):
    lead, rest = split('method', i)
    parts.append(band(i, w, ins, tab, ghost, kick, '%s: how it runs' % tab if False else sec('method', i)['heading'] + ' stage', lead))
    parts.append(rest_only(rest))
parts.append(prose(sec('method', 3)['heading'], S('method', 3), True))
pages['method'] = parts

# ---- Team
CUR = 'team'
people = [('Dr Ingrid Solheim', 'Lead sports physician, founder'), ('Dr Tomasz Wrona', 'Sports physician'), ('Amara Nwosu', 'Lead physiotherapist'),
          ('Rafael Montoya', 'Physiotherapist, running gait'), ('Leilani Kealoha', 'Physiotherapist, shoulders and throwing athletes'),
          ('Priya Raman', 'Strength and conditioning coach'), ('Hana Lindgren', 'Clinic coordinator')]
lead, rest0 = split('team', 0)
rows = ''
for i, (name, role) in enumerate(people):
    s = rest0 if i == 0 else S('team', i)
    r = group('sj-trow sp-reveal sp-reveal--up', group('sj-trow__who', para(E(name), 'sj-row__name') + '\n\n' + para(E(role), 'sj-row__role')) + '\n\n' + group('sj-trow__text', para(E(' '.join(s)), 'sj-row__text')))
    rows += r + '\n\n'
parts = [mini_head('Team', "WHO'S IN THE ROOM", 'd1', 'i5'), intro(PAGES['team']['intro']),
         band(0, 'h3', 'i3', 'Lead clinician', 'FOUNDER', 'Lead sports physician, founder', people[0][0], lead),
         section(group('sj-wrap sj-trows sp-stagger', rows.strip()))]
pages['team'] = parts

# ---- Stories
CUR = 'stories'
parts = [mini_head('Stories', 'RETURNS', 'p1', 'h4'), intro(PAGES['stories']['intro']), prose(sec('stories', 0)['heading'], S('stories', 0))]
for i, (tab, ghost, w, ins) in enumerate([('Achilles tendon', 'MARIT', 'i1', 'n1'), ('Ankle sprain', 'DANIEL', 'i2', 'n2'), ('Knee pain', 'YUKI', 'i3', 'n3')]):
    lead, rest = split('stories', i + 1, 3)
    parts.append(band(i, w, ins, tab, ghost, 'Anonymised composite', sec('stories', i + 1)['heading'], lead))
    parts.append(rest_only(rest))
pages['stories'] = parts

# ---- Fees
CUR = 'fees'
FEES = [('First assessment', '60 min', '$95'), ('Follow-up session', '40 min', '$65'), ('Gait and running analysis', '50 min', '$120'),
        ('Taping and strapping visit', '20 min', '$35'), ('Return-to-run test', '45 min', '$80'), ('Club screening morning, up to 12 athletes', '3 hours', '$480')]
lead, rest = split('fees', 0, 3)
fs = S('fees', 1)
keep_top = [x for x in fs if not re.search(r'(min|hours), \$\d', x)]
top, bottom = keep_top[:2], keep_top[2:]
parts = [mini_head('Fees', 'PRICES', 'i6', 'h2'), intro(PAGES['fees']['intro']),
         band(0, 'm1', 'i1', 'First visit', 'ASSESS', '60 minutes, $95', sec('fees', 0)['heading'], lead), rest_only(rest),
         section(group('sj-wrap sj-feeblock', heading(sec('fees', 1)['heading']) + '\n\n' + para(E(' '.join(top))) + '\n\n' + fees_table(FEES)
                       + '\n\n' + para(E(' '.join(bottom)), 'sj-feeblock__note')), True),
         prose(sec('fees', 2)['heading'], S('fees', 2)), prose(sec('fees', 3)['heading'], S('fees', 3), True)]
pages['fees'] = parts

# ---- Clubs
CUR = 'clubs'
lead, rest = split('clubs', 0, 2)
cards = [card('i4', 'Screening morning', 'UP TO 12 ATHLETES', 'Three hours at the clinic, $480, booked by the club.', '/fees/'),
         card('i5', 'Reports and consent', 'WITH THE ATHLETE’S CONSENT', 'A coach receives a report only when that athlete has agreed.', '/visit/'),
         card('p1', 'Ordinary visits', 'INDIVIDUAL CARE', 'Athletes can also book single visits at the published fees.', '/fees/')]
parts = [mini_head('Athletes & Clubs', 'ATHLETES & CLUBS', 'h3', 'm2'), intro(PAGES['clubs']['intro']),
         band(0, 'm3', 'n2', 'Club arrangements', 'CLUBS', 'For club athletes', sec('clubs', 0)['heading'], lead), rest_only(rest),
         prose(sec('clubs', 1)['heading'], S('clubs', 1)), prose(sec('clubs', 2)['heading'], S('clubs', 2), True),
         section(group('sj-wrap sj-head', para('<span class="sj-giant__first">W</span>AYS TO WORK', 'sj-giant') + '\n\n' + para('How clubs and athletes book', 'sj-sublabel')) + '\n\n' + grid(cards), True)]
pages['clubs'] = parts

# ---- Visit
CUR = 'visit'
info = group('sj-wrap sj-infostrip',
             group('sj-infostrip__c', para('Hours', 'sj-sublabel') + '\n\n' + para('Mon, Wed, Fri 9:00–19:00<br>Tue, Thu 7:30–19:00<br>Sat 9:00–13:00<br>Closed Sunday', 'sj-visit__t'))
             + '\n\n' + group('sj-infostrip__c', para('Find us', 'sj-sublabel') + '\n\n' + para('48 Millrace Road<br>Easthaven', 'sj-visit__t'))
             + '\n\n' + group('sj-infostrip__c', para('Telephone and email', 'sj-sublabel') + '\n\n' + para('+00 555 0148<br>hello@sujiclinic.example', 'sj-visit__t')))
lead, rest = split('visit', 1, 2)
parts = [mini_head('Visit', 'FIND US', 'h4', 'i2'), intro(PAGES['visit']['intro']), prose(sec('visit', 0)['heading'], S('visit', 0)), section(info, True),
         band(0, 'p1', 'i1', 'Finding us', 'FIND US', 'Easthaven', sec('visit', 1)['heading'], lead), rest_only(rest),
         prose(sec('visit', 2)['heading'], S('visit', 2), True), prose(sec('visit', 3)['heading'], S('visit', 3))]
pages['visit'] = parts

# ---- About
CUR = 'about'
lead, rest = split('about', 1, 2)
used.setdefault(CUR, []).append('m3')
rooms = sec('about', 2)
proof = group('sj-proof sj-proof--about sp-parallax',
              img_block('m3', 'sj-proof__bg') + '\n\n' + group('sj-proof__panel',
                  para('The rooms', 'sj-sublabel') + '\n\n' + heading(rooms['heading'], 'sj-h2 sj-h2--s') + '\n\n'
                  + '\n\n'.join(para(E(x), 'sj-proof__p') for x in paras(sentences(rooms['body']), 3))), tag='section', align=True)
used[CUR].remove('m3')
parts = [mini_head('About', 'ABOUT THE CLINIC', 'd1', 'p1'), intro(PAGES['about']['intro']), prose(sec('about', 0)['heading'], S('about', 0)),
         band(0, 'h1', 'i5', 'Why this clinic', 'WHY', 'Founded in 2014', sec('about', 1)['heading'], lead), rest_only(rest), proof]
pages['about'] = parts

# ---- Journal
CUR = 'journal'
parts = [mini_head('Journal', 'NOTES FROM THE ROOM', 'i5', 'm3'), intro('The journal is a place for notes on assessment and rebuild. The first note, on the three return checks, is published below.'),
         prose(sec('journal', 0)['heading'], S('journal', 0)),
         section('<!-- wp:pattern {"slug":"suji-clinic/post-cards"} /-->', True)]
pages['journal'] = parts

# ---- FAQ
CUR = 'faq'
det = ''
for s in PAGES['faq']['sections']:
    det += ('<!-- wp:details {"className":"sj-faq"} -->\n<details class="wp-block-details sj-faq"><summary>%s</summary>\n%s</details>\n<!-- /wp:details -->\n\n'
            % (E(s['heading']), para(E(s['body']))))
parts = [mini_head('FAQ', 'QUESTIONS', 'm2', 'i1'), intro(PAGES['faq']['intro']), section(group('sj-wrap sj-faqs', det.strip()))]
pages['faq'] = parts

# duplicate-photo check per page
for k, v in used.items():
    assert len(v) == len(set(v)), (k, v)

demo = json.load(open(THEME + '/demo-content.json', encoding='utf-8'))
for pg in demo['pages']:
    if pg['slug'] in pages:
        pg['content'] = '\n\n'.join(pages[pg['slug']])
        pg['template'] = 'page-inner'
demo['_comment'] = 'Sample content for the demo import (inc/demo-import.php). Inner pages are generated by brand/build-inner.py from the clinic copy.'

a = copy['article']
body = '\n\n'.join(para(E(x.strip())) for x in a['body'].split('\n\n') if x.strip())
demo['posts'] = [{'slug': 'calf-raises-a-hop-and-easy-minutes', 'title': a['title'], 'date': '2026-10-20', 'excerpt': a['excerpt'], 'image': 'journal-return-checks.webp', 'categories': [], 'tags': [], 'content': body}]
json.dump(demo, open(THEME + '/demo-content.json', 'w', encoding='utf-8'), ensure_ascii=False, indent=1)
print({k: len(v) for k, v in used.items()})
