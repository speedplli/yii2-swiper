<?php
namespace speedplli\yii2\swiper\assets;


use yii\web\AssetBundle;

/**
 * Class SwiperMinAsset
 *
 * @package speedplli\yii2\swiper\assets
 */
class SwiperMinAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/swiper/package';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/swiper.min.js'
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/swiper.css',
    ];

}
