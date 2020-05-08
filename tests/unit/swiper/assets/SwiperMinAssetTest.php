<?php
namespace speedplli\yii2\swiper\tests\unit\swiper\assets;


use speedplli\yii2\swiper\assets\SwiperMinAsset;
use speedplli\yii2\swiper\tests\unit\BaseTestCase;

class SwiperMinAssetBaseTest extends BaseTestCase
{

    public function testMain()
    {
        SwiperMinAsset::register( \Yii::$app->getView() );
    }

}
