# Reference tokens — https://fujirockfestival.com/ (measured from its CSS and a 1440x900 render)

## (a) Colour
- Header bar / main accent: #E64219 (22 uses), about 8% of the first screen (saturated share measured 6.7%).
- Ground: #F2EFEB, #F7F6F5; panels: #D9CFC5, #E3DBD4 (taupe news panel).
- Link/heading blue: #005DAB, #14385C; deep navy #011A38; teal #50C4B8 and lime #ADCC3F as tiny pops.
- Text: near-black on pale; white on the orange bar. Roles: bar 8%, photo window 70%, pale ground 22%.

## (b) Type
- Latin: Poppins; Japanese: Ryo Gothic. Headings FEATURED / NEWS: uppercase, bold, about 32px, coloured (blue / orange).
- Body 14–15px, small meta 12–13px; wide letter-spacing on the caps header line (dates, venue).

## (c) Spacing
- Max container calc(1480px + 12vw); header bar 68px high; quick-link strip 72px tall floating under the photo with a 16px gap; section padding about 80–100px.

## (d) Radius, border, shadow
- Radii: 24px (21 uses), 12px, 16px, 8px; strip ends 24px 0 0 24px. Shadow 4px 4px 12px rgba(0,0,0,.15). No hard borders.

## (e) Imagery — IMAGERY = photo
- Documentary crowd/stage photography, a slideshow in a 1440x720 (2:1) window below the header; double-exposure cross-fade between slides. Featured cards 1:1 with r12, news thumbs 3:2 r8.

## (f) Decoration
- Round-dot pager under the photo (20 dots); a fixed vertical "Buy Tickets" tab (blue, r24 on the left corners, ticket icon, rotated italic text) on the right edge about 190px tall; flat colour chip shapes (half-circle row, gradient bar) at section corners; icon + caption tiles in the strip.

## (g) Motion
- Hero: Splide fade, speed 800ms, autoplay 3600ms. Featured: loop 3 per page, 600ms. Header slides in on scroll-up (class is-fixed / is-show on scroll listener). Anchor jump: jQuery animate with easeOutExpo, hover transitions 0.2s. No scroll reveal.
