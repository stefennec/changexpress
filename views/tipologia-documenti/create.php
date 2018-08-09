<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipologiaDocumenti */

$this->title = 'Create Tipologia Documenti';
$this->params['breadcrumbs'][] = ['label' => 'Tipologia Documentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipologia-documenti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
