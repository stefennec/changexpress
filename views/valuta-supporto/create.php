<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ValutaSupporto */

$this->title = 'Create Valuta Supporto';
$this->params['breadcrumbs'][] = ['label' => 'Valuta Supportos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valuta-supporto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
