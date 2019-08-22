<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/21/2019
 * Time: 4:45 PM
 */

/**
 * @var $users array
 * @var $activityUser array
 * @var $activity array
 * @var $countActivity int
 * @var $reader array
 */

?>

<div class="row">
    <div class="col-md-6">
        <pre>
            <?=print_r($users)?>
        </pre>
    </div>
    <div class="col-md-6">
        <pre>
            <?=print_r($activityUser)?>
        </pre>
    </div>
    <div class="col-md-6">
        <pre>
            <?=print_r($activity)?>
        </pre>
    </div>
    <div class="col-md-6">
        <pre>
            <?=$countActivity?>
        </pre>
    </div>
    <div class="col-md-6">
        <pre>
            <?php foreach ($reader as $value): ?>
                <?= print_r($value) ?>
            <?php endforeach; ?>
        </pre>
    </div>
</div>
