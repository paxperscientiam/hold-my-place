<?PHP // -*- mode:php -*-

namespace Ramoose\HoldMyPlace;

class Base64pixel
{
    private static $image;

    public static function init()
    {
        self::$image = new \Imagick();
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
}
