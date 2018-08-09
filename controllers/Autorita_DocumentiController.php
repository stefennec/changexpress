<?php

namespace app\controllers;

use Yii;
use app\models\AutoritaDocumenti;
use app\models\Autorita_DocumentiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
//use app\models\EntiDocumenti;
//use app\models\TipologiaDocumenti;

/**
 * Autorita_DocumentiController implements the CRUD actions for AutoritaDocumenti model.
 */
class Autorita_DocumentiController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AutoritaDocumenti models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Autorita_DocumentiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AutoritaDocumenti model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AutoritaDocumenti model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AutoritaDocumenti();

        if ($model->load(Yii::$app->request->post())) {


        $riga = AutoritaDocumenti::find()
          ->andWhere(['documento'=> $model->documento])
          ->andWhere(['autorita'=> $model->autorita])
          ->one();

        if($riga){
          Yii::$app->session->setFlash('error', "Associazione già esistente");
        }
        else {
          Yii::$app->session->setFlash('success', "Associazione Salvata");
          $model->save();

        }

            return $this->redirect(['index']);
        }



        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AutoritaDocumenti model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

          $riga = AutoritaDocumenti::find()
            ->andWhere(['documento'=> $model->documento])
            ->andWhere(['autorita'=> $model->autorita])
            ->one();

            if ($riga) {
              Yii::$app->session->setFlash('error', "Associazione già esistente");
            }

            else {
              Yii::$app->session->setFlash('success', "Associazione Salvata");
              $model->save();
            }

            return $this->redirect(['index', 'id' => $model->id]);
          }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AutoritaDocumenti model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AutoritaDocumenti model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AutoritaDocumenti the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AutoritaDocumenti::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
