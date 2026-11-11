// Source contracts for the premium hero; visual QA additionally uses real WordPress at 1440/390/360px.
import test from 'node:test';
import assert from 'node:assert/strict';
import { readFileSync } from 'node:fs';
import { createHash } from 'node:crypto';
const base = new URL('../themes/senbatsu-partners/', import.meta.url);
const read = p => readFileSync(new URL(p, base), 'utf8');
const css = read('style.css'), hero = read('patterns/front-hero.php');
test('hero never renders the floating role brief', () => {
 assert.ok(!hero.includes('sb-brief-card')); assert.ok(!css.includes('sb-brief-card'));
});
test('pattern remains literal block markup', () => assert.match(hero, /\*\/\s*\?>\s*<!-- wp:group/));
test('hero actions have no grey holder', () => {
 assert.ok(hero.includes('sb-hero__actions')); assert.ok(!hero.includes('"className":"sb-holder"'));
});
test('navy is opaque and photograph has no wash', () => {
 const block=css.match(/\.sb-hero \{([^}]+)/)[1];
 assert.ok(block.includes('background: var(--sb-navy-deep)')); assert.ok(!block.includes('gradient'));
 assert.ok(!css.includes('.sb-hero__photo::after'));
});
test('hero height grows with localized content instead of clipping it', () => {
 const block=css.match(/\.sb-hero \{([^}]+)/)[1];
 assert.doesNotMatch(block, /(?<!-)height:\s*\d/); assert.ok(!block.includes('overflow: clip'));
});
test('inner heroes share navy and the 80px brick rule', () => {
 assert.ok(css.includes('.sb-seam { background: var(--sb-navy-deep)'));
 assert.ok(css.includes('.sb-hero__kicker::before')); assert.ok(css.includes('.sb-seam__h::before'));
});
test('long mobile labels wrap and buttons grow vertically', () => {
 assert.ok(css.includes('overflow-wrap: anywhere')); assert.ok(css.includes('min-height: 56px; height: auto'));
});
test('patch version is coherent', () => {
 assert.ok(css.includes('Version: 1.0.2')); assert.equal(JSON.parse(read('theme-meta.json')).version,'1.0.2');
 const idx=JSON.parse(readFileSync(new URL('../index.json', import.meta.url),'utf8'));
 assert.equal((idx.themes||idx).find(t=>t.slug==='senbatsu-partners').version,'1.0.2');
 assert.ok(read('README.md').includes('1.0.2')); assert.ok(read('readme.txt').includes('= 1.0.2 ='));
});
const rule=(sel,src=css)=>{ const e=sel.replace(/[.*+?^${}()|[\]\\]/g,'\\$&'); const m=src.match(new RegExp('(?:^|,)[ \\t]*'+e+'(?:,[^{]*)? \\{([^}]*)\\}','m')); assert.ok(m, sel+' rule'); return m[1]; };
const DIAG='clip-path: polygon(20% 0, 100% 0, 100% 100%, 0 100%)';
test('1.0.0 diagonal edge is restored on the desktop hero photo, still opaque and unwashed', () => {
 const photo=rule('.sb-hero__photo'); assert.ok(photo.includes(DIAG)); assert.ok(photo.includes('left: 55%'));
 assert.doesNotMatch(css, /\.sb-hero__photo[^{]*\{[^}]*(opacity|filter|mix-blend)/); assert.ok(!/rgba\([^)]*\)\s*,\s*rgba/.test(rule('.sb-hero')));
 assert.ok(rule('.sb-hero').includes('background: var(--sb-navy-deep)')); assert.ok(css.includes('--sb-navy-deep: var(--wp--preset--color--navy-deep)') || css.includes('--sb-navy-deep'));
});
test('copy column stays clear of the diagonal edge at every width', () => {
 // photo starts at 55%; the slanted edge only moves right of that, so copy must end left of 55%
 const m=rule('.sb-hero__copy'); assert.match(m,/width:\s*48%/); assert.match(m,/max-width:\s*560px/);
 assert.match(css,/\.sb-hero__inner \{[^}]*width: min\(1280px, 100% - 96px\)/);
});
test('inner photo heroes use the same diagonal; mobile stays straight and stacked', () => {
 assert.ok(rule('.sb-seam__photo').includes(DIAG)); assert.ok(!rule('.sb-seam__photo').includes('clip-path: none'));
 const mobile=css.slice(css.lastIndexOf('@media (max-width: 781px)'));
 assert.match(mobile,/\.sb-seam__photo \{[^}]*clip-path: none/); assert.match(css.slice(css.indexOf('@media (max-width: 781px)')),/\.sb-hero__photo \{[^}]*clip-path: none/);
 assert.ok(rule('.sb-seam__in .sb-seam__h').includes('max-width: 52%'));
});
const KEYS={exec:['k3aab6f2f','k5b87d606','kec1f90d7','kbb001568','k1dec78f3'],board:['k59184f9e','kb4a946a1','k201f8ab7'],ops:['k9d6ee09b','k7cdd6cbe','k0c663861','k5003c57c']};
const proof=hero.slice(hero.indexOf('sb-proof"'));
test('credibility band is a structured three-column section with every role and the privacy note preserved', () => {
 assert.equal((proof.match(/class="wp-block-group sb-proof__col"/g)||[]).length,3);
 assert.ok(proof.includes('sb-proof__cols')); assert.equal((proof.match(/sb-proof__cat/g)||[]).length>=3,true);
 for(const k of [...KEYS.exec,...KEYS.board,...KEYS.ops,'kd2c42982','kbac6b1e3']) assert.ok(proof.includes("'"+k+"'"),k);
 assert.equal((proof.match(/class="sb-proof__seat"/g)||[]).length,12);
 assert.ok(!/foreach|sprintf|str_repeat|implode/.test(hero), 'block markup stays literal');
 assert.equal((hero.match(/<!-- wp:/g)||[]).length,(hero.match(/<!-- \/wp:|\/-->/g)||[]).length);
});
test('credibility band styling: restrained F3F3F3 band, 80x2 rule, left-aligned columns, legible note, stacked on mobile', () => {
 const band=rule('.sb-proof'); assert.match(band,/background: #F3F3F3/i); assert.doesNotMatch(band,/text-align: center/);
 assert.ok(css.includes('.sb-proof__t::before')); assert.match(rule('.sb-proof__t::before'),/width: 80px; height: 2px/);
 assert.match(rule('.sb-proof__cols'),/grid-template-columns: repeat\(3, minmax\(0, 1fr\)\)/);
 assert.match(rule('.sb-proof__cat'),/border-top: 2px solid var\(--sb-accent\)/);
 assert.match(rule('.sb-proof__note'),/font-size: \.875rem/); assert.doesNotMatch(rule('.sb-proof__note'),/\.75rem/);
 assert.match(css.slice(css.indexOf('@media (max-width: 781px)')),/\.sb-proof__cols \{[^}]*grid-template-columns: 1fr/);
 assert.match(rule('.sb-proof__seat'),/overflow-wrap: anywhere/);
});
test('new credibility labels exist in all five languages and are really translated', () => {
 const keys=['sb_seats_exec','sb_seats_board','sb_seats_ops']; const tab={};
 for(const l of ['en','zh-TW','ja','fr','de']){ tab[l]=read('inc/i18n/'+l+'.php'); for(const k of keys) assert.match(tab[l],new RegExp("'"+k+"' => '[^']+'"),l+' '+k); }
 for(const k of keys){ assert.ok(proof.includes("'"+k+"'")); const en=tab.en.match(new RegExp("'"+k+"' => '([^']+)'"))[1];
  for(const l of ['zh-TW','ja','fr','de']) assert.notEqual(tab[l].match(new RegExp("'"+k+"' => '([^']+)'"))[1],en,l+' '+k); }
});
test('contact/newsletter form contracts are byte-for-byte unchanged', () => {
 const files={"inc/shippress-forms.php": "31100d894ea8ca3b568ddd4c581b074913217b4045dceaec37ee135dac28d3fc", "patterns/page-contact.php": "90874f7609a0e02fa97abb20642212387d1554570d1869f4d1340cbb7e27431d", "patterns/page-newsletter.php": "831278e44bff1cf1e33a7503a256c5e1fd58cf11eff8e10cfdf5822967e53ee9"};
 for(const [file,digest] of Object.entries(files)) assert.equal(createHash('sha256').update(readFileSync(new URL(file,base))).digest('hex'),digest,file);
});
// 1.0.2 alignment: heading+rule, card grid and note share one container; cards share one top edge (WP flow-layout sibling margins).
const decl=(block,prop)=>{ const m=[...block.matchAll(new RegExp('(?:^|[;\\s])'+prop+':\\s*([^;]+)','g'))]; return m.length?m[m.length-1][1].trim():null; };
test('credibility heading, cards and note share one content container', () => {
 for(const sel of ['.sb-proof > .sb-proof__t','.sb-proof > .sb-proof__cols','.sb-proof > .sb-proof__note']){
  const b=rule(sel); assert.equal(decl(b,'width'),'min(1080px, 100%)',sel); assert.equal(decl(b,'margin-left'),'auto',sel);
  assert.equal(decl(b,'margin-right'),'auto',sel); assert.equal(decl(b,'box-sizing'),'border-box',sel+' padded/bordered note must not widen the container');
 }
 // a later single-class shorthand must not reset the auto margins of the container rule above
 for(const sel of ['.sb-proof__t','.sb-proof__note']) assert.ok(!/(^|[;\s])margin:/.test(rule(sel)),sel+' must not use a margin shorthand');
});
test('credibility cards have identical top edges and no sibling offsets', () => {
 const b=rule('.sb-proof .sb-proof__cols > .sb-proof__col'); assert.equal(decl(b,'margin'),'0');
 assert.match(rule('.sb-proof__cols'),/align-items: stretch/);
 assert.doesNotMatch(rule('.sb-proof__cols'),/(?<![-\w])(height|margin-top):/);
});
test('category heading areas align across cards without fixed heights', () => {
 const desk=css.slice(css.indexOf('@media (min-width: 782px)'));
 assert.match(desk,/\.sb-proof__cat \{[^}]*min-height: 3\.75rem/);
 assert.doesNotMatch(css.match(/\.sb-proof__cat \{([^}]*)\}/)[1],/(?<![-\w])height:/);
 assert.doesNotMatch(css.slice(css.indexOf('@media (max-width: 781px)')).match(/\.sb-proof__cols \{[^}]*\}/)[0],/min-height/);
});
