<?PHP // -*- mode:php -*-

namespace Ramoose\HoldMyPlace;

class Base64pixel
{
    public static $image;

    public static function init()
    {
        self::$image = new \Imagick();
    }

    public static function create(string $color = 'red')
    {
        $image = self::$image;

        $image->newImage(1, 1, new \ImagickPixel($color));
        $image->setImageFormat('png');
        $blob = $image->getImageBlob();
        $image->clear();
        $img = base64_encode($blob);
        return "data:image/png;base64,$img";
    }
}
