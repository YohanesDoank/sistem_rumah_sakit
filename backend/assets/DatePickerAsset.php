<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DatePickerAsset extends AssetBundle
{
    
    public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $css = [
        'plugins\datepicker\datepicker3.css',
    ];
    public $js = [
        'plugins\datepicker\bootstrap-datepicker.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

}
   
