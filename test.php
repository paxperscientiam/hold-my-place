<?PHP
  require __DIR__."/app/vendor/autoload.php";

  use Ramoose\HoldMyPlace\Base64pixel as Image;

  Image::init();

  $x = Image::create('blue');
  $y = Image::create('green');
  echo $x.PHP_EOL;
  echo $y.PHP_EOL;


  exit;
