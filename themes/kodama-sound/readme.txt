=== Kodama Sound ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Kodama Sound is a calm, photo-led WordPress portfolio theme crafted for sound designers, composers, and audio post houses. Built on quiet typography and documentary imagery, it features ruled credit sheets, tactile audio schedules, and structured project showcases for pitching to film directors and game studios. It provides an unhurried, exact aesthetic.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See brand.md for the design notes.

== Installation ==

1. Download kodama-sound.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kodama-sound.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kodama Sound.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

The studio, its people, projects, address, telephone number and prices are fictional.

== Forms ==

The Room Tone letter on the home page and the Room Tone page, the Contact page and the Send a cut page use the shared form slot (inc/shippress-forms.php). Contact and Send a cut show a Contact Form 7 or WPForms form when one is available and otherwise keep a plain email button. Without a form plugin it shows a real email field and a submit button that opens the visitor's email app with the address; the page says plainly that the visitor is not subscribed until that message is sent. MailPoet or Mailchimp for WP are used when active.

== Copyright ==

Kodama Sound is distributed under the terms of the GNU GPL v2 or later.
Fonts: Instrument Sans (OFL-1.1), Latin variable; Figtree (OFL-1.1), Latin variable; Noto Sans TC (OFL-1.1) and Noto Sans JP (OFL-1.1), subset to the sample-text characters for zh-TW and ja; all WOFF2, see assets/fonts/.
Scripts: assets/sp-scroll.js and assets/sp-scroll.css (small scroll-reveal helper by ShipPress, GPL-2.0-or-later); assets/shippress-forms.css and assets/shippress-forms-editor.js (optional form styling, GPL-2.0-or-later).

= Images =

Images: AI-generated for this theme with Grok Build image_gen as low-key documentary photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the studio is fictional). No transparent cut-outs are used. All files are in assets/images/.
- assets/images/band-mix-stage.webp
- assets/images/composer-piano.webp
- assets/images/demo/foley-pit-props.webp
- assets/images/demo/post-seashore-dusk.webp
- assets/images/demo/post-spotting.webp
- assets/images/field-pine-rain.webp
- assets/images/foley-gravel-steps.webp
- assets/images/hydrophone-jetty.webp
- assets/images/kv-boom-puddle.webp
- assets/images/mix-headphones.webp
- assets/images/project-frozen-reservoir.webp
- assets/images/project-orchard-hives.webp
- assets/images/project-platform.webp
- assets/images/project-tidal-flats.webp
- assets/images/send-a-cut-drive.webp
- assets/images/sliver-cable-reel.webp
- assets/images/studio-room.webp

== Changelog ==
= 1.0.1 =
* Fix the footer "+ Index" link: it now jumps to the footer site index (#site-index), which exists on every page, instead of #projects, which only exists on the home page.

= 1.0.0 =
* First release.
