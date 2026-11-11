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
 assert.ok(css.includes('Version: 1.0.1')); assert.equal(JSON.parse(read('theme-meta.json')).version,'1.0.1');
});
test('contact/newsletter form contracts are byte-for-byte unchanged', () => {
 const files={"inc/shippress-forms.php": "31100d894ea8ca3b568ddd4c581b074913217b4045dceaec37ee135dac28d3fc", "patterns/page-contact.php": "90874f7609a0e02fa97abb20642212387d1554570d1869f4d1340cbb7e27431d", "patterns/page-newsletter.php": "831278e44bff1cf1e33a7503a256c5e1fd58cf11eff8e10cfdf5822967e53ee9"};
 for(const [file,digest] of Object.entries(files)) assert.equal(createHash('sha256').update(readFileSync(new URL(file,base))).digest('hex'),digest,file);
});
