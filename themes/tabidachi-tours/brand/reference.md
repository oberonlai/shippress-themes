# Reference (draft; "Our version" column filled by the build step)

IMAGERY: photo (documentary, high-key bright for our build).

| | Site | Role |
|---|---|---|
| Main | https://trippin.world/ | Editorial first screen: large photo left with headline on it, five-entry story rail right, outlined tag chips, 4-up tall photo cards |
| Secondary | https://studyinshizuoka.jp/ | Audience gateway cards ("For ...") with tinted fills and arrow discs, speech-bubble callout and docked "live" card on the hero window |

## Signature techniques (candidates)
1. Editorial lead + story rail (trippin first screen, ref/trippin-first.png): photo 72% left, five stacked timed entries right with portrait thumbs and tag chips.
2. Tinted audience gateway cards with greeting line and arrow disc (shizuoka "For China / Myanmar / Vietnam", ref/scroll-shizuoka-900.png).
3. Headcount callout bubble on the photo + docked "live" mini card (shizuoka hero, ref/shizuoka-first.png).
4. Supporting: tall 0.75 photo cards with overlaid chip pair (trippin "Explore the World", ref/scroll-trippin-1800.png).

## Palette relationship
Ground white, ink near-black, accent mulberry gold #B79B5B used only for thin rules, chips and the arrow disc; audience tints pale gold / pale celadon / pale rose-grey (borrowed from the three tinted gateway cards).

| Element | Reference | Our version |
|---|---|---|
| Hero | trippin: 1045×669 documentary photo (1.56:1, r8) at x20 with white headline + standfirst on its lower-left over a dark gradient | P01 (tour leader counting students onto a coach, teacher with clipboard) at x20–1065 y80–749, r8; H1 "Every pupil on. / Every pupil back." Source Serif 4 4.5rem white + 21/30 standfirst, 40px inset; `sp-parallax` 8% / 5% (design-spec KV #1–2) |
| Rail | trippin: 335px rail, five rows of 90×117 portrait thumbs (r2) + outlined place box / topic pill + two-line title, 20px gap | "Today on the road": five timed entries of one trip day (07:30 → 17:40), thumbs P02–P06 90×117 r2, chip pairs, times; plus a 1px day-line 06:00 → 22:00 with five ticks and a gold "Now" dot (row first_screen timeline-line) (KV #3, #4, #8) |
| Gateway cards | shizuoka: three 372px "For …" cards in yellow / green / pink tints, 1px #4C4948 border, r8, greeting line, picture foot, 40px yellow arrow disc + long arrow, 2-dot pager | home §2: "For schools / For teachers / For parents" 443×520 in #F3EBD2 / #E3EDE7 / #F3E5E3, 1px #4C4948, r8, Latin-script greeting line, ticket-notched photo foot P07 / P08 / P09, 40px gold #B79B5B disc + 44px arrow; snap row + pager on mobile; repeated on all three audience pages and as trip-type cards on Trips |
| Callout | shizuoka: speech bubble (1px ink, r24, tail) anchored on the hero photo + docked "LIVE" mini card with an outlined tab at the photo corner | bubble "42 on. 42 counted." with its tail at the leader's hand; docked card "● On the road · Day 3 · Coach 2" (#E3EDE7, 1px ink, square, outlined tab) overlapping P01's lower-right corner; repeated on Safety, For parents, For teachers, How we plan, Request a plan, home §7 |
| Tall cards | trippin "Trippin With": 335×449 (0.75) r8 cards, chips bottom-left 12px inset, 24/35 title under | home §5 "Trips this year": four 0.75 r8 cards P10–P13 with overlaid chips, 24/35 serif titles, black "See all trips" pill; Trips page and For teachers workshops |
| Bands | trippin: inset r8 duotone "Travel Quote" band with an underline email line; inset r8 black "Where do you want to go?" band | home §6 inset r8 gold-duotone P14 quote band (parallax 10% / 6%) carrying The Register newsletter slot; home §9 inset r8 black "Request a plan" band with 4.25rem H2 and a white pill |
| Header | trippin: slim bar, links with outlined count box, outlined scrolling ticker pill, black "Nearby" pill | 60px white top bar, 6 links with "Trips [4]" count box, outlined ticker pill (`sp-marquee`), black pill "Request a plan" |
| Motion | trippin image fade .25s ease-in-out, hover .15s, CSS ticker; shizuoka 1000ms cubic-bezier(.25,1,.5,1) fades, Splide slider | hero photo fade .25s, rail rise 1s cubic-bezier(.25,1,.5,1) staggered (CSS), `sp-reveal--up` 1s same easing, `sp-marquee`, `sp-count`, `sp-parallax` (hero + quote band + inner leads); CSS snap rows instead of a slider |
