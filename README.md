Combinations
============
My very old class for generating combinations of characters.


Usage:
```php
$cmb = new Combinations;
$cmb->setChars(['a', 'b']);
echo implode("<br>\n", $cmb->getCombinations(3));
```
