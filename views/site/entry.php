<?php
/**
 * Created by PhpStorm.
 * User: Hoang
 * Date: 12/29/2015
 * Time: 3:50 PM
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'name'); ?>
<?= $form->field($model,'email'); ?>
<div class="form-group">
    <?= Html::submitButton('Submit',['class'=>'btn btn-primary']); ?>
</div>
<?php ActiveForm::end(); ?>