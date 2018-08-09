<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\TipologiaDocumenti;
use app\models\EntiDocumenti;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AutoritaDocumentiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Autorita Documentis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autorita-documenti-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Autorita Documenti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//             ['class' => 'yii\grid\SerialColumn'],

//             'id',
//             'menu',
//             'piatto',


//  far diventare una colonna come vogliamo noi portando dentro la griglia
//  info che non sono nella tabella originale->trasforma valori
//  nella tabella con quello che voglio io
//  attributo il valore menu
//  in php al posto del valore dell'array una funzione
//  ti passo come variabili model chiave e index
//  attribute menu sarebbe una tabella
    [
              'attribute'=>'documento',
              'format'=>'raw',
               'value' => function ($model, $key, $index){
// valore corrente chiave indice, sarebbe valore es. menu, chiave,  indice(array)
// la f. prende tutti i modelli quindi le chiavi e gli indici, la chiave se è un intero è un indice
// vai a prendere il modello che sta per menu, quindi la tabella, e poi restituiscimi dove l'id è uguale a sotto
//       creare funzione passato model key index standard presi in controller menu controller per far incrociare la riga e la colonna dataProvider e filterModel
                if ($model->documento==null)
                    return "-";

//se nella tabella non ce nulla metti un trattino

                $idDocumento=$model->documento;

//   vai a prenderlo dove all' id di quell'array (chiave array) è associato quel valore

               $nomeDocumento=TipologiaDocumenti::find()
                  ->where(['idTipologiaDocumenti'=>$idDocumento])->one();

//     quindi se quello che ho trovato non è vuoto dammi l'a

                  if($nomeDocumento)

//    non posso cercare subito il file
//    funzione statica che mi da un link
                  return Html::a($nomeDocumento->nomeDocumento, '/tipologia-documenti/view?id=' .$idDocumento);
              else
                return "Documento inesistente";

                 },
            'contentOptions' => ['class' => 'centered text-center']

      ],
      [
          'attribute'=>'autorita',
          'format'=>'raw',
//model, key, index sono le tre colonne
          'value' => function ($model, $key, $index){
          if ($model->autorita==null)
              return "-";
//se nella tabella non ce nulla metti un trattino

              $idAutorita=$model->autorita;

          $nomeAutorita=EntiDocumenti::find()
              ->where(['idEnteDocumento'=>$idAutorita])->one()->nomeEnte;
// funzione statica che mi da un link
              return Html::a($nomeAutorita, '/enti-documenti/view?id=' .$idAutorita);
          },
          'contentOptions' => ['class' => 'centered text-center']

          ],


            ['class' => 'yii\grid\ActionColumn'],


        ],
    ]); ?>


    <?php Pjax::end(); ?>
</div>
