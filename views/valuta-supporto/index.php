<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Valute;
use app\models\Supporti;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ValutaSupportoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Valuta Supportos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valuta-supporto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Valuta Supporto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

          [
                    'attribute'=>'Nome',
                    'format'=>'raw',
                     'value' => function ($model, $key, $index){

                      if ($model->Nome==null)
                          return "-";


                      $idNome=$model->Nome;


                     $nomeValuta=Valute::find()
                        ->where(['idValuta'=>$idNome])->one();



                        if($nomeValuta)


                        return Html::a($nomeValuta->nomeValuta, '/valute/view?id=' .$idNome);
                    else
                      return "Documento inesistente";

                       },
                  'contentOptions' => ['class' => 'centered text-center']

            ],
            [
                'attribute'=>'Supporto',
                'format'=>'raw',

                'value' => function ($model, $key, $index){
                if ($model->Supporto==null)
                    return "-";


                    $idSupporto=$model->Supporto;

                $nomeSupporto=Supporti::find()
                    ->where(['idSupporto'=>$idSupporto])->one()->nomeSupporto;

                    return Html::a($nomeSupporto, '/supporti/view?id=' .$idSupporto);
                },
                'contentOptions' => ['class' => 'centered text-center']

                ],



                [
                  'attribute'=>'CommissioneDefault',
                  'format'=>'raw',

                  'value' => function ($model, $key, $index){
                  if ($model->CommisioneDefault==null)
                      return "-";

                      $idSupporto=$model->CommisioneDefault;

                  $commissione=Supporti::find()
                      ->where(['idSupporto'=>$idSupporto])->one()->commissioneDefault;

                      return Html::a($commissione, '/supporti/view?id=' .$idSupporto);

                    },
                    'contentOptions' => ['class' => 'centered text-center']
                ],




            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
