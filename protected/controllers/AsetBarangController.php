<?php

class AsetBarangController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    private static $_isInitialized = false;
    private static $libPathPHPExcel = 'ext.heart.vendors.phpexcel.Classes.PHPExcel'; //the path to the PHP excel lib
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
                'actions' => array('index', 'view','laporan','export'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array(
                    'suggestBarang', 'legacySuggestCountry', 'fillTree', 'treePath', 'loadContent', 'suggestAuPlaces',
                    'suggestAuHierarchy', 'suggestLastname', 'fillAuTree', 'viewUnitPath', 'viewUnitLabel', 'initPerson',
                    'suggestPerson', 'suggestPersonGroupCountry', 'listPersonsWithSameFirstname',
                    'addTabularInputs', 'addTabularInputsAsTable', 'uploadFile'
                ),
                'expression' => '$user->getLevel()<=1',
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
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
        $model = new AsetBarang;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['AsetBarang'])) {
            $model->attributes = $_POST['AsetBarang'];
            $model->subNilaiAset = $model->jumlah * $model->nilaiAset;
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->kodeBarang));
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
        $this->performAjaxValidation($model);

        if (isset($_POST['AsetBarang'])) {
            $model->attributes = $_POST['AsetBarang'];
            $model->subNilaiAset = $model->jumlah * $model->nilaiAset;
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->kodeBarang));
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
        $dataProvider = new CActiveDataProvider('AsetBarang');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new AsetBarang('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['AsetBarang']))
            $model->attributes = $_GET['AsetBarang'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return AsetBarang the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = AsetBarang::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param AsetBarang $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'aset-barang-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actions() {
        return array(
            'suggestBarang' => array(
                'class' => 'ext.actions.XSuggestAction',
                'modelName' => 'AsetBarang',
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

    public function actionLap() {
        if (!self::$_isInitialized) {
            $lib = Yii::getPathOfAlias(self::$libPathPHPExcel) . '.php';
            if (!file_exists($lib)) {
                Yii::log("PHP Excel lib not found($lib). Export disabled !", CLogger::LEVEL_WARNING, 'EHeartExcel');
            } else {
                spl_autoload_unregister(array('YiiBase', 'autoload'));
                Yii::import(self::$libPathPHPExcel, true);
                spl_autoload_register(array('YiiBase', 'autoload'));
                self::$_isInitialized = true;
            }
        }

        $objPHPExcel = new PHPExcel();

// Set document properties
        $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
                ->setLastModifiedBy("Maarten Balliauw")
                ->setTitle("Office 2007 XLSX Test Document")
                ->setSubject("Office 2007 XLSX Test Document")
                ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                ->setKeywords("office 2007 openxml php")
                ->setCategory("Test result file");


// Add some data
        $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'Hello')
                ->setCellValue('B2', 'world!')
                ->setCellValue('C1', 'Hello')
                ->setCellValue('D2', 'world!');

// Miscellaneous glyphs, UTF-8
        $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A4', 'Miscellaneous glyphs')
                ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');

// Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Simple');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="01simple.xls"');
        header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;

        Yii::app()->end();
        spl_autoload_register(array('YiiBase', 'autoload'));
    }
    
    public function actionLaporan() {
        $model = new AsetBarang;
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['AsetBarang']))
            $model->attributes = $_POST['AsetBarang'];

        $exportType = 'Excel5';
        $this->widget('ext.heart.export.EHeartExport', array(
            'title' => 'List Aset Barang',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'grid_mode' => 'export',
            'exportType' => $exportType,
            'columns' => array(
                'kodeBarang',
                'namaBarang',
                'jumlah',
                'nilaiAset',
            ),
        ));
    }

}
