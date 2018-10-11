<?php
namespace lantongxue\yii2\swiper\tests\unit\swiper\assets;


use lantongxue\yii2\swiper\assets\SwiperAsset;
use lantongxue\yii2\swiper\tests\unit\BaseTestCase;

class SwiperAssetBaseTest extends BaseTestCase
{
    public function testMain()
    {
        SwiperAsset::register( \Yii::$app->getView() );
    }
}
