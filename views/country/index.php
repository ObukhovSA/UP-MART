<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

    <h1>Countries</h1>

    <ul>

        <?php foreach ($countries as $country): ?>

            <li>

                <?= Html::encode("{$country->name} ({$country->code})") ?>:

                <?= $country->population ?>

            </li>

        <?php endforeach; ?>

    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>



<!--http://localhost:8080/basic/web/index.php?r=country%2Findex&filter=300000000&colum=population&page=1-->
