<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Valute */

$this->title = $model->idValuta;
$this->params['breadcrumbs'][] = ['label' => 'Valutes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valute-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idValuta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idValuta], [
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
            'idValuta',
            'nomeValuta:ntext',
            'siglaValuta',
            'rateUfficialeVendita',
            'rateUfficialeAcquisto',
            'differenzialeVendita',
            'differenzialeAcquisto',
        ],
    ]) ?>

</div>
