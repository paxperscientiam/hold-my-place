<?PHP
  require __DIR__."/app/vendor/autoload.php";

  use Ramoose\HoldMyPlace\Image;
  $x = Image::create('blue');
  echo $x;

  exit;
