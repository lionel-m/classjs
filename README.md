## Add the class "no-js" or "js" if JavaScript is enabled or not (Contao CMS)

This extension adds the default `no-js` class. It replaces the class `no-js` with `js` if JavaScript is enabled.

```html
<html class="no-js">
...
</html>
```

### Installation

Add `"lionel/classjs": "~3.0"` in  the `composer.json` file.

Add `new LionelM\ClassJsBundle\LionelMClassJsBundle(),` in the `app/AppKernel.php` file.
