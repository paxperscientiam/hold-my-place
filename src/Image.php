<?PHP // -*- mode:php -*-

namespace Ramoose\HoldMyPlace;

class Image
{
    public function __construct()
    {
    }

    public static function create(string $color = 'red')
    {
        $image = new \Imagick();
        $image->newImage(1, 1, new \ImagickPixel($color));
        $image->setImageFormat('png');
        $blob = $image->getImageBlob();
        $image->clear();
        $img = base64_encode($blob);
        return "data:image/png;base64,$img";
    }
}
