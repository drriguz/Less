# Less
A responsible Mediawiki skin based on Zurb Foundation framework

Live example: [Riguz Wiki](https://wiki.riguz.com/)

# Install

Clone skin into your wiki skin folder:
```bash
cd <your wiki root>/skins
git clone https://github.com/drriguz/Less.git
```

Then update LocalSettings.php:
```php
$wgDefaultSkin = "Less";
wfLoadSkin( 'Less' );
```
