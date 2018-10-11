<?php
namespace lantongxue\yii2\swiper\tests\unit\swiper\assets;


use lantongxue\yii2\swiper\assets\SwiperMinAsset;
use lantongxue\yii2\swiper\tests\unit\BaseTestCase;

class SwiperMinAssetBaseTest extends BaseTestCase
{

    public function testMain()
    {
        SwiperMinAsset::register( \Yii::$app->getView() );
    }

}
