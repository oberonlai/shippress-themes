# Reference tokens: Key Coffee corporate top (https://www.keycoffee.co.jp/)
Method note: headless Chrome hangs in this sandbox (even on a data: URL), so **no screenshots and no getComputedStyle**. Every value below is the *declared* value read from the site's own top.css / header_footer.css / top.js (fetched with curl, 2026-10-30). Pixel-measured area shares are not available; shares are estimates from the CSS and are marked "est.". Values only; no assets, text or logos copied.
IMAGERY: photo (banners and card images are photographs of coffee, cups, farms, shops).

## (a) Colour
| Role | Hex | Where | Share (est.) |
|---|---|---|---|
| Base | #FFFFFF page; #F8F7F3 header | wrapper, header | ~62% |
| Warm grey panel | #F0EFE7 (also #FCFBF9, #EBE9E2 border) | utility tab, arrows, pill tabs, chips | ~8% |
| Hairline | #D3D0C8 | row rules, inactive dash dots | <1% |
| Text | #333333; meta #736D6D | body, dates | ~4% |
| Main brown | #5D2F0C (labels), #795134 (links) | tile labels, link text | ~2% |
| Accent blue | #005BAC | active tab fill, current-page underline 2px, outline pill | ~1% |
| Alert tint | rgba(230,50,38,.05) with #E63226 text | notice strip | ~1% |
| Photography | banner/cards | first screen | ~20–25% |
Relationship: white + warm grey ground, near-black text, one brown, one small blue accent. Saturated colour is only the blue pill and photography.

## (b) Type
Barlow (Latin) + Noto Sans JP body (weights 100–900); Roboto Slab 700/900 for tile labels, dates, section words. Body 16px; nav 14px; tile label 24px / 900 / ls 3px / lh 1 / caps; tile sub 12px; section h2 `main-title` ~30px slab with 14px JP sub; page h2 24px bold centred; date 12px slab ls 1px #736D6D; chip 10px; notice 18px. Line-height normal-ish (reset.css), no heavy tracking on body.

## (c) Spacing
Header 100px (fixed, shadow 0 6px 8px rgba(0,0,0,.2)); main offset 124px; banner margin-top 24px, bottom 40px; blocks separated by 100px (tiles/info) and 150–200px (coffee band, daily). Container max 1400px, inner 1200px; pane padding 0 20px; tiles padding 0 100px, gap 16px, 2 per row; info rows padding-bottom 24px + margin 24px.

## (d) Radius, borders, shadow
Radius 8px everywhere (banner image, notice, tiles, pill tabs, utility tab bottom corners); chips 4px; round buttons 50% (40px); outline pill radius 100px, 1px #005CAC. Shadow only on header. Rules 1px #D3D0C8.

## (e) Imagery
Banner: wide photo, width 100%, radius 8, ratio roughly 2.2:1 (est.), Swiper `centeredSlides`, `slidesPerView 1.5`, gap 80px (≤768: 1.1, gap 5), neighbours visible. Card rail ("know coffee" band): card image 360×240 (3:2), active card 480×320 lifted 44px above the rail with a white caption plate (radius 0 0 8 8, 24px centred caption, 16px sub-line above); sits on a curved organic pale background image with a round emblem breaking its top edge (top −87px).

## (f) Decoration
Dash pagination: 10×14 bars #D3D0C8, gap 20px, centred 24px under banner, active one a small bean-shaped mark 11×14. Round arrows 40px #F0EFE7 placed 60px outside the banner edges. Utility tab: #F0EFE7, 40px high, hangs from the top edge, radius 0 0 8 8. Current nav item 2px blue underline. Tile: left icon at 24px, 66px left padding, min-height 120px.

## (g) Motion
Swiper loop, autoplay 9000ms, speed 300ms (Swiper default ease), no scroll-linked animation, hover opacity .8 on links/tiles (no transition declared). No parallax, no reveal.
