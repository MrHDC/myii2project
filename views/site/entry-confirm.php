<?php
/**
 * Created by PhpStorm.
 * User: Hoang
 * Date: 12/29/2015
 * Time: 3:50 PM
 */

use yii\helpers\Html;
?>

<p>You are enterd the following infomation: </p>
<ul>
    <li><label>Name :</label><?= Html::encode($model->name) ?></li>
    <li><label>Email: </label><?= Html::encode($model->email) ?></li>
</ul>
