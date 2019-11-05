<?php
/**
 * @copyright Copyright (c) 2019 Xisio GmbH
 */

namespace xisio\bootstrap;
use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@npm-asset/bootstrap/dist';
    public $js = [
        'js/bootstrap.min.js',
    ];
    public $css = [
		'css/bootstrap.min.css',
		'yii\web\JqueryAsset',
    ];
}
