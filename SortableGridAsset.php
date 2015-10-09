<?php
namespace octoweb\gridsort;

use yii\web\AssetBundle;

class SortableGridAsset extends AssetBundle{
	
    public $sourcePath = '@vendor/octoweb/yii2-sortable-grid-view-widget/assets';

    public $js = [
        'js/jquery.sortable.gridview.js',
    ];

    public $depends = [
        'yii\jui\JuiAsset',
    ];
}