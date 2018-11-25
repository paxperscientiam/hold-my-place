<?PHP // -*- mode:php -*-

namespace Ramoose\HoldMyPlace;

class Base64pixel
{
    private static $init = false;
    private static $image;

    public static function init()
    {
        if (!self::$init) {
            self::$image = new \Imagick();
            self::$init = true;
        }
    }

    public static function create(string $color = 'red', string $format = 'png')
    {
        $image = self::$image;

        $image->newImage(1, 1, new \ImagickPixel($color));
        $image->setImageFormat($format);
        $blob = $image->getImageBlob();
        $image->clear();
        $img = base64_encode($blob);
        return "data:image/{$format};base64,$img";
    }

    public static function random(string $format = 'png')
    {
        $image = self::$image;

        $color = '#'.substr(md5(rand()), 0, 6);

        $image->newImage(1, 1, new \ImagickPixel($color));
        $image->setImageFormat($format);
        $blob = $image->getImageBlob();
        $image->clear();
        $img = base64_encode($blob);
        return "data:image/{$format};base64,$img";
    }
}
Base64pixel::init();
