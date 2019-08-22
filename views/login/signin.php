<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/22/2019
 * Time: 1:53 AM
 */


/**
 * @var $this \yii\web\View
 * @var $model \app\models\Users
 */


?>

<div class="row">
    <div class="col-md-6">
        <?php $form=\yii\bootstrap\ActiveForm::begin()?>
        <?= $form->field($model, 'email')?>
        <?= $form->field($model, 'password')?>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
        <?php \yii\bootstrap\ActiveForm::end() ?>
    </div>
</div>
