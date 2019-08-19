<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/9/2019
 * Time: 2:32 AM
 */
?>


<div class="row">
    <div class="md-col-12">
        <h1>Событие: <?=$model->title?></h1>
        <h4>Описание события: <?=$model->description?></h4>
        <p>Дата начала события: <?=$model->dateStart?></p>
        <p>Дата конца события: <?=$model->dateEnd?></p>
        <p>Степень важности: <?=$model->flag?></p>
        <p>Единственное событие на эту дату: <?=$model->isBlocked?></p>
        <p>Может ли повторяться: <?=$model->isRepeatable?></p>
    </div>
</div>
