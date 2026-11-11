#!/usr/bin/env python3
"""Source regression contracts; real layout acceptance remains a browser gate."""
import hashlib,json,re,unittest
from pathlib import Path
T=Path(__file__).resolve().parents[2]/'themes/senbatsu-partners'
class HeroContracts(unittest.TestCase):
    @classmethod
    def setUpClass(cls):
        cls.css=(T/'style.css').read_text(); cls.hero=(T/'patterns/front-hero.php').read_text()
    def test_no_floating_brief(self):
        self.assertNotIn('sb-brief-card',self.hero)
        self.assertNotIn('sb-brief-card',self.css)
    def test_literal_pattern(self):
        self.assertRegex(self.hero,r'\*/\s*\?>\s*<!-- wp:group')
    def test_direct_actions(self):
        self.assertIn('sb-hero__actions',self.hero)
        self.assertNotIn('"className":"sb-holder"',self.hero)
    def test_opaque_navy(self):
        block=re.search(r'\.sb-hero \{([^}]+)',self.css).group(1)
        self.assertIn('background: var(--sb-navy-deep)',block)
        self.assertNotIn('gradient',block)
        self.assertNotIn('.sb-hero__photo::after',self.css)
    def test_content_driven_height(self):
        block=re.search(r'\.sb-hero \{([^}]+)',self.css).group(1)
        self.assertNotRegex(block,r'(?<!-)height:\s*\d')
        self.assertNotIn('overflow: clip',block)
    def test_inner_consistency(self):
        self.assertIn('.sb-seam { background: var(--sb-navy-deep)',self.css)
        self.assertIn('.sb-hero__kicker::before',self.css)
        self.assertIn('.sb-seam__h::before',self.css)
    def test_mobile_wraps(self):
        self.assertIn('overflow-wrap: anywhere',self.css)
        self.assertIn('min-height: 56px; height: auto',self.css)
    def test_version(self):
        self.assertIn('Version: 1.0.1',self.css)
        self.assertEqual(json.loads((T/'theme-meta.json').read_text())['version'],'1.0.1')
    def test_forms_unchanged(self):
        for file,digest in FORM_HASHES.items():
            self.assertEqual(hashlib.sha256((T/file).read_bytes()).hexdigest(),digest,file)
FORM_HASHES={'inc/shippress-forms.php': '31100d894ea8ca3b568ddd4c581b074913217b4045dceaec37ee135dac28d3fc', 'patterns/page-contact.php': '90874f7609a0e02fa97abb20642212387d1554570d1869f4d1340cbb7e27431d', 'patterns/page-newsletter.php': '831278e44bff1cf1e33a7503a256c5e1fd58cf11eff8e10cfdf5822967e53ee9'}
if __name__=='__main__':unittest.main()
