# Hisagi Neurology

A block theme for an outpatient neurology clinic that explains a symptom before it orders a scan. One repeated call to action: "Book a consultation".

## Signature moves
- **Stadium window + capsule row:** one huge stadium-shaped window (radius 9999px, soft glow) holds the consultation photograph on its left half and the headline on the pale wash; a row of 16 vertical pastel capsules in aqua, mint, mist and lemon crosses its lower third and runs off both viewport edges, like the bars of a nerve-conduction trace. The row returns as the title band of the principles section and the edge of the footer.
- **Pinned symptom disc:** a 512px photograph disc with a pale ring stays sticky while three symptom blocks pass in a narrow 400px column; three hairline elbow callouts with dots lead to small labels.
- **Ghost word + white strips + booking card:** "Listen · Examine · Explain ·" drifts behind the symptoms at 12vw and 6% opacity; labels and headline lines sit on white strips with wide tracking; a fixed 260x80 booking card with a photo thumbnail stays bottom right on desktop.

## Notes
- Fonts: Manrope and Figtree, loaded through theme.json `fontFace`.
- Scroll effects: `assets/sp-scroll.css|js` (reveal, stagger, parallax, marquee). `?sp-static` shows the final state.
- Forms: `inc/shippress-forms.php` (dynamic `shippress/form` block with a mailto fallback).
- Palette: ground `#F3F5F7`, window white, wash `#EAF0F4`, ink `#3A4654`, text `#5F6670`, capsule tints `#97EFF6` `#B3FCCB` `#FFF45C` `#A9BFD3`, point `#5E8C9A`.
- Pages: home, About, Symptoms, The Examination, Tests, Cases, Clinicians, Visit, Fees, Book a consultation (contact form slot), The Case Letter (newsletter form slot), Privacy and the Journal with three posts. The five language files are added in the next stage.
- Reference notes: `brand/design-spec.md`, `brand/reference.md`, `brand/reference-tokens.md`.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/hisagi-neurology/home-desktop.webp" width="640" alt="Hisagi Neurology home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/hisagi-neurology/home-mobile.webp" width="200" alt="Hisagi Neurology home page on mobile"></td>
</tr>
</table>

- About: [desktop](https://shots.codotx.com/hisagi-neurology/about-desktop.webp) · [mobile](https://shots.codotx.com/hisagi-neurology/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/hisagi-neurology/news-desktop.webp) · [mobile](https://shots.codotx.com/hisagi-neurology/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/hisagi-neurology/article-desktop.webp) · [mobile](https://shots.codotx.com/hisagi-neurology/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/hisagi-neurology/category-desktop.webp) · [mobile](https://shots.codotx.com/hisagi-neurology/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/hisagi-neurology/tag-desktop.webp) · [mobile](https://shots.codotx.com/hisagi-neurology/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/hisagi-neurology/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/hisagi-neurology/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/hisagi-neurology/contact-desktop.webp) · [mobile](https://shots.codotx.com/hisagi-neurology/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/hisagi-neurology/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/hisagi-neurology/ja/home-desktop.webp) · [fr](https://shots.codotx.com/hisagi-neurology/fr/home-desktop.webp) · [de](https://shots.codotx.com/hisagi-neurology/de/home-desktop.webp)
<!-- screenshots:end -->
