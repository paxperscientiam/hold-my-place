<?PHP
require __DIR__."/app/vendor/autoload.php";

use Ramoose\HoldMyPlace\Base64pixel as B64;

B64::init();

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
        <div><img class="placeholder" src="<?=B64::create("red")?>"/></div>
        <div><img class="placeholder" src="<?=B64::create("green")?>"/></div>
        <div><img class="placeholder" src="<?=B64::create("blue")?>"/></div>
    </body>
</html>
