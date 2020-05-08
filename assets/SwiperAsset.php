<?php
namespace speedplli\yii2\swiper\assets;

use yii\web\AssetBundle;

/**
 * Class SwiperAsset
 *
 * @package speedplli\yii2\swiper\assets
 */
class SwiperAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/swiper/package';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/swiper.js'
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/swiper.css',
    ];

}
