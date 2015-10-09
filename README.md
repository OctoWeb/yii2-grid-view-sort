Sortable GridView Widget for Yii2
========================
Sortable modification of standard Yii2 GridView widget.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

* Either run

```
php composer.phar require --prefer-dist "octoweb/yii2-grid-view-sort" "*"
```

or add

```json
"octoweb/yii2-grid-view-sort" : "*"
```

to the `require` section of your application's `composer.json` file.

* Add to your database new `unsigned int` attribute, such `sortOrder`.

* Add new behavior in the AR model, for example:

```php
use octoweb\gridsort\SortableGridBehavior;

public function behaviors()
{
    return [
        'sort' => [
            'class' => SortableGridBehavior::className(),
            'sortableAttribute' => 'sortOrder'
        ],
    ];
}
```

* Add action in the controller, for example:

```php
use octoweb\gridsort\SortableGridAction;

public function actions()
{
    return [
        'sort' => [
            'class' => SortableGridAction::className(),
            'modelName' => Model::className(),
        ],
    ];
}
```

Usage
-----
* Use SortableGridView as standard GridView with `sortableAction` option.
You can also subscribe to the JS event 'sortableSuccess' generated widget after a successful sorting.
