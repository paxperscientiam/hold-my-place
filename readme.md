# ramoose/hold-my-place

## usage (with composer)

### initalize
```PHP
require __DIR__."/app/vendor/autoload.php";

use Ramoose\HoldMyPlace\Base64pixel as B64;

B64::init();
```

### HTML examples

Create your pixel. See `php` documentation on `ImagickPixel::__construct` for color code options. [link](http://php.net/manual/en/imagickpixel.construct.php)

```html
<img class="placeholder" src="<?=B64::create("red")?>"/>
<img class="placeholder" src="<?=B64::create("green")?>"/>
<img class="placeholder" src="<?=B64::create('rgb(0, 0, 0)')?>"/>
```
