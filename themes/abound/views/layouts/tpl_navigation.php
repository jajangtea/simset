<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">SIMSET <small>STT Indonesia</small></a>
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
                    'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    //'$user->getLevel()<=1',
                    'items'=>array(
                        array('label'=>'<i class="fa fa-institution"></i> Dashboard', 'url'=>array('/site/index')),
                        array('label'=>'<i class="fa fa-home"></i> Home', 'url'=>array('/homeAdmin/index'),'visible'=>Yii::app()->user->getLevel()<=1),
                        array('label'=>'<i class="fa fa-home"></i> Home', 'url'=>array('/homePegawai/index'),'visible'=>Yii::app()->user->getLevel()==3),
                        array('label'=>'<i class="fa fa-cube"></i> Master Data <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'<i class="fa fa-cube"></i> Ruangan', 'url'=>array('/ruangan')),
                            array('label'=>'<i class="fa fa-cube"></i> Aset Barang', 'url'=>array('/asetBarang')),
                            array('label'=>'<i class="fa fa-cube"></i> Jenis Aset', 'url'=>array('/jenis')),
                            array('label'=>'<i class="fa fa-cube"></i> Penanggung Jawab', 'url'=>array('/pegawai')),
                            
                        ),'visible'=>Yii::app()->user->getLevel()<=1),
                        array('label'=>'<i class="fa fa-signal"></i> Inventarisasi', 'url'=>array('/inventarisasi'), 'visible'=>Yii::app()->user->getLevel()<=1),
                        array('label'=>'<i class="fa fa-user"></i> Account', 'url'=>array('/user'),'visible'=>Yii::app()->user->getLevel()<=1),
                        array('label'=>'<i class="fa fa-user"></i> Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'<i class="fa fa-share"></i> Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav">
	<br/>
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/banner.jpg">
</div><!-- subnav -->