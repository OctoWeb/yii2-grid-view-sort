<?php
namespace octoweb\gridsort;

use yii\helpers\Url;
use kartik\grid\GridView;

class SortableGridView extends GridView{
	
    public $sortableAction = ['sort'];

    public function init(){
        parent::init();
        $this->sortableAction = Url::to($this->sortableAction);
    }

    public function run(){
        $this->registerWidget();
        parent::run();
    }

    protected function registerWidget(){
        $view = $this->getView();
        $view->registerJs("jQuery('#{$this->id}').SortableGridView('{$this->sortableAction}');");
        SortableGridAsset::register($view);
    }
}