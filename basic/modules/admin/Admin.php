<?php
namespace app\modules\admin;
use yii\base\Module;

class Admin extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        //$this->params['foo'] = 'bar';
        // ...  其他初始化代码 ...
        \Yii::configure($this, require(__DIR__ . '/config/config.php'));
    }
}