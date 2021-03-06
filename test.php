<?PHP // -*- mode:web -*-
require __DIR__."/app/vendor/autoload.php";

use Ramoose\HoldMyPlace\Base64pixel as B64;
Kint\Renderer\RichRenderer::$folder = false;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Document</title>

        <style type="text/css" media="screen">
          img.placeholder {
           width: 100px;
          }
        </style>
    </head>
    <body>
        <div><img class="placeholder" src="<?=B64::create("red",'gif')?>"/></div>
        <div><img class="placeholder" src="<?=B64::random()?>"/></div>
        <div><img class="placeholder" src="<?=B64::create('rgb(0, 0, 0)')?>"/></div>
    </body>
    <?PHP !d(\Imagick::queryFormats())?>
</html>
