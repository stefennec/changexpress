<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AutoritaDocumenti */

$this->title = $model->idAutorita_Documenti;
$this->params['breadcrumbs'][] = ['label' => 'Autorita Documentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autorita-documenti-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idAutorita_Documenti], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idAutorita_Documenti], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idAutorita_Documenti',
            'documento',
            'autorita',
        ],
    ]) ?>

</div>
