# Reference research (stage 1; "our counterpart" column completed with design-spec.md)

IMAGERY: photo (low-key).

Primary reference: https://ginza.o-ki.co.jp/ (listed on S5-Style; category: B2C corporate, restaurant). Screens in `ref/`.
Why: same business (sukiyaki / shabu-shabu with a pot at the table, private rooms, one booking path) and the same layout idea as our row: dark photo on the left, pale text column on the right.

## Signature candidates (we use 3, plus one supporting)
| # | Reference technique | Shape / composition / position | Our counterpart (design-spec.md §1) |
|---|---|---|---|
| T1 | Sticky half-screen photo stage | Left 50vw x 100vh, stays while the right paper column scrolls; 5 photos cross-fade on a timer; 5 dots lower-left; two vertical phrases on the photo's right edge || Home + every inner page: `ks-split` stage, left 50vw x 100vh sticky low-key photos P01-P05 (split clear/red pot set on a burner, beef slices, ladle pour, vegetables, private room); CSS timer cross-fade 3.5 s / 1 s; 5 white 6px dots lower-left; two vertical white phrases "BROTH AT DAWN" / "ONE POT, ONE TABLE" at the right edge. 390px: stage in flow ~52svh, horizontal dots, no phrases, no vertical text. |
| T2 | Four-line draw-in booking frame | Booking box: centred heading with 1px underline, solid red button, four 3px lines drawing around the box one after another || `ks-frame`: "Reservations" heading + 1px underline, one solid azuki #96514D "Book a table" button 530x88, four 3px azuki lines drawing in one after another (static = fully drawn). Home §2 and §11, end of Broths / Courses / Private rooms / Visit / About; frames the form on Book a table. |
| T3 | Vertical section header | Vertical heading + vertical Latin label with a 1px rule growing between them, centred in the paper column || `ks-vhead`: vertical Latin label (DM Sans .875rem ls .4em) + 1px full-height rule (sp-reveal--wipe) + vertical heading (Bricolage Grotesque 25px ls .3em), centred in the 590px column; every home section from §3 and every inner section; horizontal below 782px. |
| T4 (supporting) | Sage-bordered link box with long arrow | White box, 2px #DBDABE border, long thin arrow bottom-right || White link box, 2px #DBDABE border, long thin arrow bottom-right (home §5, §6 x3; Courses, Private rooms, Book, Contact) + corner-bracket "more" buttons 313x63. |

## Colour relationship
Paper #FAFAFA dominates, near-black photograph beside it, one saturated red only on the booking button and seal; a pink-grey wash (#E8D8D8) at the foot of the page, sage line colour (#DBDABE). Ours: same hexes (#FAFAFA paper, #0B0908/#3B2D2A photo ground, #E8D8D8 wash, #DBDABE line, #E7E7E7 footer, ink #1B1412); accent azuki #96514D (row colour) replaces the red #D61423, only on the seal, booking button and frame lines. First-screen saturated share target <=10%.

## Scroll effects (see stage-a.md for the table)
Heading characters + growing line, fade-up with stagger, rule scaleX, frame draw-in, timer cross-fade.
