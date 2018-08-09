<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AutoritaDocumenti */

$this->title = 'Create Autorita Documenti';
$this->params['breadcrumbs'][] = ['label' => 'Autorita Documentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autorita-documenti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
