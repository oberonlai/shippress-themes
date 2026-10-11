=== Oto Radio ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A retro theme for podcasts, radio shows and audio series: deep violet, cream and one amber on-air light, Darker Grotesque over Work Sans. A programme-guide masthead with a giant wordmark, a home page that lists the latest episodes as stops on a vertical timeline with waveforms, and a footer led by the newsletter. With a numbered Episodes index, Hosts, About, show notes, a newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download oto-radio.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/oto-radio.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Oto Radio.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images (Episodes, Hosts, About, Newsletter, Contact), eight sample episodes (posts) with show notes, categories and tags, the menu, and sets the front page and the posts page (Show notes). Then you only change the text and the pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Episodes are posts. Each one opens with a "listen bar" (the pattern "Listen bar", also in the inserter): a Listen link to the episode in your feed, a line such as "Episode 48" and a running time such as "52 min". The home page timeline and the Episodes index read the number and the running time from there (a block binding registered in inc/episodes.php), so you write them once, in the episode. An episode without a listen bar is numbered by date. The theme does not host audio: point the Listen link at your podcast host or feed.

The on-air time and the station details are each kept in one place, as synced patterns (Appearance > Editor > Patterns): "Oto Radio: on-air time" (shown in the masthead of every page and on the Contact page) and "Oto Radio: subscribe links, email and social links" (shown in the footer of every page and on the Contact page). inc/station-info.php creates them the first time the theme is activated, and never twice. No other page repeats them. The social icons link to "#" and the feed links to example.com addresses until you add your own.

The waveforms, the on-air lamp, the tuning dial and the record sleeves are CSS. The theme loads no JavaScript of its own, and all motion stops for visitors who prefer reduced motion.

The sample show, its hosts, crew, guests, listeners, places, records, prizes and feed addresses are fictional. The newsletter and contact forms are plain HTML: connect their action to your own form or email service.

== Copyright ==

Oto Radio WordPress Theme, Copyright 2026 ShipPress contributors.
Oto Radio is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Darker Grotesque
Files: assets/fonts/darker-grotesque-variable-latin.woff2
Copyright 2019 The Darker Grotesque Project Authors (https://github.com/bettergui/DarkerGrotesque)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-DarkerGrotesque.txt, https://openfontlicense.org)
The official variable DarkerGrotesque[wght].ttf from https://github.com/google/fonts/tree/main/ofl/darkergrotesque, subset to Latin (Basic Latin, Latin-1, general punctuation, arrows) with the weight axis kept and repackaged as WOFF2, bundled so the theme makes no third-party requests.

Work Sans
Files: assets/fonts/work-sans-variable-latin.woff2, assets/fonts/work-sans-italic-variable-latin.woff2
Copyright 2019 The Work Sans Project Authors (https://github.com/weiweihuanghuang/Work-Sans)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-WorkSans.txt, https://openfontlicense.org)
The official variable WorkSans[wght].ttf and WorkSans-Italic[wght].ttf from https://github.com/google/fonts/tree/main/ofl/worksans, subset to Latin with the weight axis kept and repackaged as WOFF2, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, places, brands or organisations; the people shown are AI-generated and do not depict real persons, and every show, host, guest and place the theme names is fictional).
- assets/images/city.jpg
- assets/images/headphones.jpg
- assets/images/host1.jpg
- assets/images/host2.jpg
- assets/images/studio.jpg
- assets/images/vinyl.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/city.jpg
- assets/images/demo/headphones.jpg
- assets/images/demo/host1.jpg
- assets/images/demo/host2.jpg
- assets/images/demo/studio.jpg
- assets/images/demo/vinyl.jpg

The waveform (a small SVG of bars inside style.css), the tuning dial, the on-air lamp and the record sleeves drawn in style.css are original work written for this theme (same copyright and license).
