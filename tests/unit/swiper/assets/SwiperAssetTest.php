<?php
namespace speedplli\yii2\swiper\tests\unit\swiper\assets;


use speedplli\yii2\swiper\assets\SwiperAsset;
use speedplli\yii2\swiper\tests\unit\BaseTestCase;

class SwiperAssetBaseTest extends BaseTestCase
{
    public function testMain()
    {
        SwiperAsset::register( \Yii::$app->getView() );
    }
}
