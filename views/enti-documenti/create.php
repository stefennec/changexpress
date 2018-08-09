<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EntiDocumenti */

$this->title = 'Create Enti Documenti';
$this->params['breadcrumbs'][] = ['label' => 'Enti Documentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enti-documenti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
