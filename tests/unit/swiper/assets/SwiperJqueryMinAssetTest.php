<?php
namespace speedplli\yii2\swiper\tests\unit\swiper\assets;


use speedplli\yii2\swiper\assets\SwiperJqueryMinAsset;
use speedplli\yii2\swiper\tests\unit\BaseTestCase;

class SwiperJqueryMinAssetBaseTest extends BaseTestCase
{

    public function testMain()
    {
        SwiperJqueryMinAsset::register( \Yii::$app->getView() );
    }

}
