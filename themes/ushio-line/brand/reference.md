# Reference (draft) — Ushio Line (harbour passenger ferry, b21-3)
Reference: https://cruise-kobe.com/
Secondary: https://www.asukacruise.co.jp/brand/
Source: S5-Style travel, tourism, aviation, shipping and transport category. Screenshots: ref/ck-first.png, ref/scroll-ck-*.png, ref/asuka-first.png, ref/scroll-asuka-split.png. Tokens: reference-tokens.md.

## Candidates borrowed
1. Triple-panel photo strip inside one huge-radius frame, logo on the seam, wave ticks around it (main first screen).
2. Sine-wave underline links with arrow (all CTAs).
3. Giant radius-240 band inset from the viewport sides on a pale ground, holding a title and a link (gallery band). We use it for the day schedule.
4. Secondary: serif split row, half-width photo flush to the edge, copy right, one small photo floating lower right.

## Colour mapping
Slate #3E4C55 plays the blue; mist #DCE6EA the pale ground; white base; text #1A1A1A; one tiny accent (rope rust) #A8573F under 1%.

## Product mapping
| Reference element | Ours |
|---|---|
| Three vertical panels in one r165 frame (gulls, quay, wheel and water) | T1: K1 gangway ticket, K2 gull over flat water, K3 far pier and moored ferry; 418/546/416, same frame |
| White wordmark at the centre of the frame | H1 "Ushio Line" with tagline, over the middle panel |
| Scattered sine ticks | Eight ticks on the first screen, more on section grounds; `sp-marquee` tick row on Home |
| Dashed ellipse around "today's operation" | Dashed ellipse around "Today's sailings ↓", links to the day band |
| Header with wave icon | Overlay header; wave icon under 960px |
| Panel and tick drift | CSS sideways drift and `sp-parallax` per panel; `front-water` parallax |
| Sine underline links with arrow | T2 on every CTA, every page |
| r240 band with title and link (gallery) | T3 `front-day`: six stops of a sailing day, ghost word at the foot; also Piers, Timetable, Boats, About |
| Ghost word at the band foot | "Pier to pier, daily" |
| Asuka serif split, flush photo with floating sea photo | T4 `front-line`, mirrored `front-crew`; also Boats, Crew, On Board, About |
| Bounce-in (back.out) | `sp-reveal--zoom` on pier photos, `--sp-ease` back approximation |
| Blue #303EC8 / pale #DAE8FF / white / #1A1A1A | Slate #3E4C55 / mist #DCE6EA / white / #1A1A1A (reason: design-spec section 5) |
| Cut-out gull and lighthouse, vertical booking tab, load screen, Lenis | Not used |
