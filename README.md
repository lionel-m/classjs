## Add the class "no-js" or "js" if JavaScript is enabled or not ([Contao CMS](https://contao.org/en))

[![Latest Stable Version](https://poser.pugx.org/lionel/classjs/v/stable)](https://packagist.org/packages/lionel/classjs)
[![License](https://poser.pugx.org/lionel/classjs/license)](https://packagist.org/packages/lionel/classjs)

This extension adds the default `no-js` class. It replaces the class `no-js` with `js` if JavaScript is enabled.

```html
<html class="no-js">
...
</html>
```

### Installation

Add `"lionel/classjs": "~3.0"` in  the `composer.json` file.

Add `new LionelM\ClassJsBundle\LionelMClassJsBundle(),` in the `app/AppKernel.php` file.

Run the command `php composer.phar update classjs`.
