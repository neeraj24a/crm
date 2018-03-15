<div class="abs-center wd-xl">
    <!-- START panel-->
    <div class="text-center mb-xl">
        <div class="text-lg mb-lg">404</div>
        <p class="lead m0">We couldn't find this page.</p>
        <p><?php echo CHtml::encode($message); ?></p>
    </div>

    <ul class="list-inline text-center text-sm mb-xl">
        <li><a class="text-muted" href="<?php echo Yii::app()->createUrl("admin/dashboard"); ?>">Go to Dashboard</a>
        </li>
    </ul>
</div>