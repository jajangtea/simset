<?php

class HomeController extends Controller
{
	public function actionIndex()
	{
        $model = new AsetBarang('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['AsetBarang']))
            $model->attributes = $_GET['AsetBarang'];

        $modelAsetTanah = new AsetTanah('search');
        $modelAsetTanah->unsetAttributes();  // clear any default values
        if (isset($_GET['AsetTanah']))
            $modelAsetTanah->attributes = $_GET['AsetTanah'];
        
        $modelInventaris = new Inventarisasi('search');
        $modelInventaris->unsetAttributes();  // clear any default values
        if (isset($_GET['Inventarisasi']))
            $modelInventaris->attributes = $_GET['AsetTanah'];
        
        $modelAsetGedung = new AsetGedung('search');
        $modelAsetGedung->unsetAttributes();  // clear any default values
        if (isset($_GET['AsetGedung']))
            $modelAsetGedung->attributes = $_GET['AsetGedung'];



        $this->render('index',array(
                    'model'=>$model,
                    'modelAsetTanah'=>$modelAsetTanah,
                    'modelInventaris'=>$modelInventaris,
                    'modelAsetGedung'=>$modelAsetGedung,
            ));
	}
		
	

	// Uncomment the following methods and override them if needed
	
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	
}