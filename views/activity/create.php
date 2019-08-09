<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/8/2019
 * Time: 10:12 PM
 */

/**
 * @var $model /app/models/Activity
 */

?>

<div class="row">

    <div class="md-col-12">
        <h3>Activity created</h3>
        <strong><?=$name?></strong>

        <?php $form=\yii\bootstrap\ActiveForm::begin(); ?>
        <?=$form->field($model, 'title');?>
        <?=$form->field($model, 'description')->textarea(); ?>
        <?=$form->field($model, 'dateStart')->input('date');?>
        <?=$form->field($model, 'isBlocked')->checkbox()?>
        <div class="form-group">
            <button class="btn btn-default" type="submit">Submit</button>
        </div>

        <?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>
