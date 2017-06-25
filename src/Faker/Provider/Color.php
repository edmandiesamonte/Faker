<?php

namespace Faker\Provider;

/**
 * @author lsv
 */
class Color extends Base
{

    protected static $safeColorNames = array(
        'black',
        'maroon',
        'green',
        'navy',
        'olive',
        'purple',
        'teal',
        'lime',
        'blue',
        'silver',
        'gray',
        'yellow',
        'fuchsia',
        'aqua',
        'white',
    );

    protected static $allColorNames = array(
        'Alice Blue',
        'Antique White',
        'Aqua',
        'Aquamarine',
        'Azure',
        'Beige',
        'Bisque',
        'Black',
        'Blanched Almond',
        'Blue',
        'Blue Violet',
        'Brown',
        'Burly Wood',
        'Cadet Blue',
        'Chartreuse',
        'Chocolate',
        'Coral',
        'Cornflower Blue',
        'Cornsilk',
        'Crimson',
        'Cyan',
        'Dark Blue',
        'Dark Cyan',
        'Dark Gray',
        'Dark Green',
        'Dark Khaki',
        'Dark Magenta',
        'Dark Orange',
        'Dark Orchid',
        'Dark Red',
        'Dark Salmon',
        'Dark Turquoise',
        'Dark Violet',
        'Deep Pink',
        'Deep Sky Blue',
        'Dim Gray',
        'Dim Grey',
        'Dodger Blue',
        'Fire Brick',
        'Floral White',
        'Forest Green',
        'Fuchsia',
        'Gainsboro',
        'Ghost White',
        'Gold',
        'Golden Rod',
        'Gray',
        'Green',
        'Green Yellow',
        'Honey Dew',
        'Hot Pink',
        'Indian Red',
        'Indigo',
        'Ivory',
        'Khaki',
        'Lavender',
        'Lavender Blush',
        'Lawn Green',
        'Lemon Chiffon',
        'Light Blue',
        'Light Coral',
        'Light Cyan',
        'Light Gray',
        'Light Green',
        'Light Pink',
        'Light Salmon',
        'Light Yellow',
        'Lime',
        'Lime Green',
        'Linen',
        'Magenta',
        'Maroon',
        'Medium Aquamarine',
        'Medium Blue',
        'Medium Orchid',
        'Medium Purple',
        'Medium Turquoise',
        'Midnight Blue',
        'Mint Cream',
        'Misty Rose',
        'Moccasin',
        'Navajo White',
        'Navy',
        'Old Lace',
        'Olive',
        'Olive Drab',
        'Orange',
        'Orange Red',
        'Orchid',
        'Pale Green',
        'Pale Turquoise',
        'Papaya Whip',
        'Peach Puff',
        'Peru',
        'Pink',
        'Plum',
        'Powder Blue',
        'Purple',
        'Red',
        'Rosy Brown',
        'Royal Blue',
        'Saddle Brown',
        'Salmon',
        'Sandy Brown',
        'Sea Green',
        'Sea Shell',
        'Sienna',
        'Silver',
        'Sky Blue',
        'Slate Blue',
        'Slate Gray',
        'Snow',
        'Spring Green',
        'Steel Blue',
        'Tan',
        'Teal',
        'Thistle',
        'Tomato',
        'Turquoise',
        'Violet',
        'Wheat',
        'White',
        'White Smoke',
        'Yellow',
        'Yellow Green',
    );

    /**
     * @example '#fa3cc2'
     */
    public static function hexColor()
    {
        return '#' . str_pad(dechex(mt_rand(1, 16777215)), 6, '0', STR_PAD_LEFT);
    }

    /**
     * @example '#ff0044'
     */
    public static function safeHexColor()
    {
        $color = str_pad(dechex(mt_rand(0, 255)), 3, '0', STR_PAD_LEFT);

        return '#' . $color[0] . $color[0] . $color[1] . $color[1] . $color[2] . $color[2];
    }

    /**
     * @example 'array(0,255,122)'
     */
    public static function rgbColorAsArray()
    {
        $color = static::hexColor();

        return array(
            hexdec(substr($color, 1, 2)),
            hexdec(substr($color, 3, 2)),
            hexdec(substr($color, 5, 2)),
        );
    }

    /**
     * @example '0,255,122'
     */
    public static function rgbColor()
    {
        return implode(',', static::rgbColorAsArray());
    }

    /**
     * @example 'rgb(0,255,122)'
     */
    public static function rgbCssColor()
    {
        return 'rgb(' . static::rgbColor() . ')';
    }

    /**
     * @example 'rgba(0,255,122,0.8)'
     */
    public static function rgbaCssColor()
    {
        return 'rgba(' . static::rgbColor() . ',' . static::randomFloat(1, 0, 1) . ')';
    }

    /**
     * @example 'blue'
     */
    public static function safeColorName()
    {
        return static::randomElement(static::$safeColorNames);
    }

    /**
     * @example 'NavajoWhite'
     */
    public static function colorName()
    {
        return static::randomElement(static::$allColorNames);
    }
}
