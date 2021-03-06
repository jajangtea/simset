<?php

class InventarisasiController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'laporan'),
                'expression' => '$user->getLevel()<=1',
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Inventarisasi;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);
//                if(isset($_POST['ajax']) && $_POST['ajax']==='inventarisasi-form')
//		{
//			echo CActiveForm::validate($model);
//			Yii::app()->end();
//		}

        if (isset($_POST['Inventarisasi'])) {
            $model->attributes = $_POST['Inventarisasi'];
            $model->subNilai = $model->jumlah * $model->kodeBarang0->nilaiAset;
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->noInventaris));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Inventarisasi'])) {
            $model->attributes = $_POST['Inventarisasi'];
            $model->subNilai = $model->jumlah * $model->kodeBarang0->nilaiAset;
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->noInventaris));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Inventarisasi');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Inventarisasi('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Inventarisasi']))
            $model->attributes = $_GET['Inventarisasi'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Inventarisasi the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Inventarisasi::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Inventarisasi $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'inventarisasi-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actions() {
        return array(
            'suggestCountry' => array(
                'class' => 'ext.actions.XSuggestAction',
                'modelName' => 'Country',
                'methodName' => 'suggest',
            ),
            'legacySuggestCountry' => array(
                'class' => 'ext.actions.XLegacySuggestAction',
                'modelName' => 'Country',
                'methodName' => 'legacySuggest',
            ),
            'fillTree' => array(
                'class' => 'ext.actions.XFillTreeAction',
                'modelName' => 'Menu',
                'showRoot' => false
            ),
            'treePath' => array(
                'class' => 'ext.actions.XAjaxEchoAction',
                'modelName' => 'Menu',
                'attributeName' => 'pathText',
            ),
            'uploadFile' => array(
                'class' => 'ext.actions.XHEditorUpload',
            ),
            'suggestAuPlaces' => array(
                'class' => 'ext.actions.XSuggestAction',
                'modelName' => 'AdminUnit',
                'methodName' => 'suggestPlaces',
                'limit' => 30
            ),
            'suggestAuHierarchy' => array(
                'class' => 'ext.actions.XSuggestAction',
                'modelName' => 'AdminUnit',
                'methodName' => 'suggestHierarchy',
                'limit' => 30
            ),
            'suggestLastname' => array(
                'class' => 'ext.actions.XSuggestAction',
                'modelName' => 'Person',
                'methodName' => 'suggestLastname',
                'limit' => 30
            ),
            'fillAuTree' => array(
                'class' => 'ext.actions.XFillTreeAction',
                'modelName' => 'AdminUnit',
                'showRoot' => false,
            ),
            'viewUnitPath' => array(
                'class' => 'ext.actions.XAjaxEchoAction',
                'modelName' => 'AdminUnit',
                'attributeName' => 'rootlessPath',
            ),
            'viewUnitLabel' => array(
                'class' => 'ext.actions.XAjaxEchoAction',
                'modelName' => 'AdminUnit',
                'attributeName' => 'label',
            ),
            'initPerson' => array(
                'class' => 'ext.actions.XSelect2InitAction',
                'modelName' => 'Person',
                'textField' => 'fullname',
            ),
            'suggestPerson' => array(
                'class' => 'ext.actions.XSelect2SuggestAction',
                'modelName' => 'Person',
                'methodName' => 'suggestPerson',
                'limit' => 30
            ),
            'suggestPersonGroupCountry' => array(
                'class' => 'ext.actions.XSelect2SuggestAction',
                'modelName' => 'Person',
                'methodName' => 'suggestPersonGroupCountry',
                'limit' => 30
            ),
            'addTabularInputs' => array(
                'class' => 'ext.actions.XTabularInputAction',
                'modelName' => 'Person',
                'viewName' => '/site/extensions/_tabularInput',
            ),
            'addTabularInputsAsTable' => array(
                'class' => 'ext.actions.XTabularInputAction',
                'modelName' => 'Person',
                'viewName' => '/site/extensions/_tabularInputAsTable',
            ),
        );
    }

    public function actionLaporan() {
        $model = new Inventarisasi;
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['Inventarisasi']))
            $model->attributes = $_POST['Inventarisasi'];

        $exportType = 'Excel5';
        $this->widget('ext.heart.export.EHeartExport', array(
            'title' => 'List Aset Inventaris',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'grid_mode' => 'export',
            'exportType' => $exportType,
            'columns' => array(
                
                array
                    (
                    'name' => 'noRuangan',
                    'value' => '$data->noRuangan',
                    'htmlOptions' => array(
                        'style' => 'width: 7%; text-align: center;',
                    ),
                ),
                'kodeBarang',
                'kodeBarang0.namaBarang',
                array
                    (
                    'name' => 'noInventaris',
                    'value' => '$data->noInventaris',
                    'htmlOptions' => array(
                        'style' => 'width: 10%; text-align: center;',
                    ),
                ),
                'tanggal',
                array(
                    'name' => 'kondisi',
                    'value' => '$data->kondisi',
                    'htmlOptions' => array(
                        'style' => 'width: 7%; text-align: center;',
                    ),
                ),
                array
                    (
                    'name' => 'jumlah',
                    'value' => '$data->jumlah',
                    'htmlOptions' => array(
                        'style' => 'width: 5%; text-align: center;',
                    ),
                ),
                array(
                    'header' => 'Nilai',
                    'value' => '$data->kodeBarang0->nilaiAset',
                    'htmlOptions' => array(
                        'style' => 'width: 7%; text-align: center;',
                    ),
                ),
                array(
                    'name' => 'subNilai',
                    'type' => 'text',
                    'footer' => $model->getTotals($model->search()->getKeys()),
                    'htmlOptions' => array(
                        'style' => 'width: 20%; text-align: left;',
                    ),
                ),
            ),
        ));
    }

}
