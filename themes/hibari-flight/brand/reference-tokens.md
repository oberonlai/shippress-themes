# Reference tokens (measured with getComputedStyle at 1440x900; values only, no assets copied)
Main reference: https://kids-ns.goldwin.co.jp/ (outdoor nature school for children; documentary photography, hand-drawn animal line art, organic pale shapes). Secondary: https://www.honda-jobs.com/ (pale ground, route-arc motif, tall photo strip). Text, images and logos are not reused.

## (a) Colour
- Base white `#FFFFFF` ~62% of first screen; pale organic shape `#F8F8EC` (warm, we swap for cool cloud grey `#E9EEF0`).
- Ink / title navy `#001650` (headings, button disc); black body text `#000000`.
- Photo content ~35% of first screen (blue-grey sky/mountain `#88A8C8`–`#98B8D8`).
- Deep band (EVENT section) navy `#081858` ~44% of that screen; first-screen saturated share measured 14.6%.
- Accent: small autumn-leaf orange stickers (<1%).
- Honda (secondary): ground `#F8F8F8`/`#E8E8E8`, one red `#D81818` on CTA (~7% saturated).
- Ours: white 60%, cloud grey `#E9EEF0` 8%, slate band `#4E6874` ~20% below the fold only, ink `#14232B` text, windsock orange `#D9632B` <2%.

## (b) Type
- Latin: neue-haas-grotesk-display 700, CJK noto-sans-cjk-jp 400/700. Body 14.4px/25.3px (lh 1.76), ls .05em (0.72px at 14.4px), 16.6px/29.2px for lead.
- H1 (small header wordmark) 18.8px 700 ls .72px, navy. Section H2 80.9px/101px 700 navy (white on band), WHAT'S NEW H2 41px/50px. H3 33.2px/49.8px 700. Links 15.5px 700. Dates 14.4px.
- Uppercase Latin section words; CJK sentences for H3.

## (c) Spacing
- Section padding-top 142px (news), 202px (concept), 498px (event, section word sits inside the top of the band), 266px (movie), 449px (report); padding-bottom 0 with next section overlapping.
- Cover window: 1174px wide inset from a 1440 viewport (about 133px left / 133px right once header 72px is removed), 752px high.
- Concept photos: 665x856 (0.78) at x775; 399x554 (0.72); 676x598 (1.13) bleeding to x0. Event slider slides 1263x720 (1.75) gap 111px, neighbours peek both sides.

## (d) Radius, borders, shadow
- Hero window: ONE very large corner on the top right (~15% of width, ~200px), others square; photos in concept block square (0 radius).
- Round menu button 40px circle navy; pills `border-radius:100%`.
- No shadows, no borders; pale shapes provide depth.

## (e) Imagery
- IMAGERY = photo. Documentary, natural light, children outdoors in motion, wide landscapes. Hand-drawn animal illustrations (ink outline, flat ochre/orange fill, slightly wobbly line) overlap photo edges as stickers - decoration, less than half of image positions.
- Ratios: hero window ~1.56:1, concept portrait 0.78, small portrait 0.72, landscape 1.13, event 1.75:1.
- Overlap: animal stickers straddle photo edges; pale organic blob sits behind photos.

## (f) Decoration
- Pale organic blobs (circle arcs bleeding off the page) behind headlines, 600-900px.
- Navy band with a large circular arc cut at the left; white 81px section word at its top.
- Round navy menu button top right, centred small wordmark header over the photo, school crest left.
- Autumn-leaf / squirrel / deer / bear stickers 80-160px.

## (g) Motion
- Reveal: opacity + translate on `.-inview`, `transition: opacity 3s, transform 3s`, easing `cubic-bezier(0.16,1,0.3,1)` (also `0.22,1,0.36,1`), delay 0.25-0.5s steps.
- Stickers: `obj_shake` 5s ease infinite (idle sway).
- Event slider: horizontal track, neighbours peeking, JS (jQuery, requestAnimationFrame) driven; menu transitions 0.25s.
- Overshoot easing `cubic-bezier(0.34,1.56,0.64,1)` 0.5s on small buttons.
