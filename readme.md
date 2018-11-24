# ramoose/hold-my-place

## usage (with composer)

### initalize
```PHP
require __DIR__."/app/vendor/autoload.php";

use Ramoose\HoldMyPlace\Base64pixel as B64;

B64::init();

// B64::create(string $color, string $format);
```

### HTML examples

Create your pixel. See `php` documentation on `ImagickPixel::__construct` for color code options. [link](http://php.net/manual/en/imagickpixel.construct.php)

```html
<img class="placeholder" src="<?=B64::create("red")?>"/>
<img class="placeholder" src="<?=B64::create("green")?>"/>
<img class="placeholder" src="<?=B64::create('rgb(0, 0, 0)')?>"/>
```

## Demo

`composer test` will execute the following: `php -S localhost:8000 ./test.php`

You can then see the demo in your browser by navigating to `http://localhost:8000`.

The demo page will also give you a list of image formats you build of `Imagick` supports.
