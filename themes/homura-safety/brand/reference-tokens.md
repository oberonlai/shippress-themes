# Reference tokens: hochiki.co.jp (main). Measured from first-screen capture + served CSS (values, no assets copied)
IMAGERY: photo (people and equipment in real rooms; hero is a full-bleed portrait, product macro in a flat red tile, support-desk portrait). Natural-light documentary, shallow depth, saturated brand red as backdrop in hero only.
## (a) Colour
- Ground white #FFFFFF (about 62% of page), pale band #F6F6F6 (about 22%), ink #000000 text, brand red #ED1C23 (hero backdrop about 55% of first screen, buttons, tiny labels), amber #F08C00 (rare), hairline #EBEBEB, black search cell.
- Ours: red is replaced by chestnut #5C4A3E and a near-black low-key photograph; the saturated share stays under 10%.
## (b) Type
- Heavy grotesque (Japanese gothic bold) headings; 2.0rem section titles (root 10px base = 20px), 1.3-1.6rem body/links, 1.1-1.2rem labels; tiny red uppercase Latin sub-label under each title with a short red underline rule (about 20x2 px).
- Hero tagline: thin white line 275x26 svg bottom-right over the photo.
## (c) Spacing
- Container max 1170px (1280 outer); hero height 810px; header white slab 85px tall, inset 128px from the left edge, flush to top; section padding about 90px; card gap about 40px.
## (d) Shape
- Radius 0 everywhere except tiny pills (news tags r999, black); 1px #EBEBEB hairlines; soft drop shadow on the docked link strip and white cards (0 0 12px rgba(0,0,0,.12)).
## (e) Imagery presentation
- Hero: full-bleed, subject centred, giant slanted white bars-lettering crossing behind and in front of the face; docked white 4-cell link strip (50px thumb + bold label, vertical hairline dividers) overlapping the photo bottom, 1170px wide, 68px tall.
- Two-up cards: red product tile with notch arrow pointing at white text panel / photo 1.95:1 beside text panel; three equal 1.3:1 photo tiles with dark scrim and centred title.
## (f) Decoration
- Red short rule under title, red dot before "more" links, square "global" red cell + black search cell hanging at header right, notch (triangle) on the red tile edge.
## (g) Motion
- Hero: slick crossfade slideshow, autoplay 8s, progress width transition 8.5s/13.8s linear, is-active class on thumbs; all page transitions 0.2-0.8s cubic-bezier(.455,.03,.515,.955), 2s for hero fade; jQuery fadeIn 400ms for tabs. No scroll-reveal.
