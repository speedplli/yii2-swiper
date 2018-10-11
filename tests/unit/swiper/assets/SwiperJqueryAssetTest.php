<?php
namespace lantongxue\yii2\swiper\tests\unit\swiper\assets;


use lantongxue\yii2\swiper\assets\SwiperJqueryAsset;
use lantongxue\yii2\swiper\tests\unit\BaseTestCase;

class SwiperJqueryAssetBaseTest extends BaseTestCase
{

    public function testMain()
    {
        SwiperJqueryAsset::register( \Yii::$app->getView() );
    }

}