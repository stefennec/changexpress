<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nazioni */

$this->title = 'Aggiungi nuova Nazione';
$this->params['breadcrumbs'][] = ['label' => 'Aggiungi nuova Nazione', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nazioni-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
