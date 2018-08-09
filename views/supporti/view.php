<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supporti */

$this->title = $model->idSupporto;
$this->params['breadcrumbs'][] = ['label' => 'Supportis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supporti-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idSupporto], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idSupporto], [
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
            'idSupporto',
            'nomeSupporto:ntext',
            'commissioneDefault',
        ],
    ]) ?>

</div>
