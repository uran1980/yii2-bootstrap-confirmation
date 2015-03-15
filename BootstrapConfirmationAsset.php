<?php

namespace uran1980\yii\bootstrapConfirmation;

use Yii;

class BootstrapConfirmationAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/bootstrap-confirmation2';
    public $js = [
        'bootstrap-confirmation.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * Initializes the bundle.
     * If you override this method, make sure you call the parent implementation in the last.
     */
    public function init()
    {
        $this
            ->registerJs()
            ->registerCss()
        ;

        parent::init();
    }

    /**
     * @return BootstrapConfirmationAsset
     */
    protected function registerJs()
    {
        $js = <<<SCRIPT
jQuery('[data-toggle="confirmation"]').confirmation();
SCRIPT;
        Yii::$app->view->registerJs($js, \yii\web\View::POS_READY);

        return $this;
    }

    /**
     * @return BootstrapConfirmationAsset
     */
    protected function registerCss()
    {
        $css = <<<STYLE
.popover.confirmation {
    white-space: nowrap;
}
STYLE;
        Yii::$app->view->registerCss($css);

        return $this;
    }
}
