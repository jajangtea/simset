<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
    array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,4,4,7,5,9,10</span>'),
	array('id'=>4, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id'=>5, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
));
?>



<div class="row-fluid">

    
	<div class="span9">
            <span class="badge badge-important">1</span>
            <span class="label label-important">Aset Tanah</span>  
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'aset-tanah-grid',
                'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
                'dataProvider' => $modelAsetTanah->search(),
                'filter' => $modelAsetTanah,
                'columns' => array(
                    array(
                        'header' => "No",
                        'value' => '($this->grid->dataProvider->pagination->currentPage*
                                               $this->grid->dataProvider->pagination->pageSize
                                              )+
                                              array_search($data,$this->grid->dataProvider->getData())+1',
                        'htmlOptions' => array(
                            'style' => 'width: 2%; text-align: center;',
                        ),
                    ),
                    array(
                        'header' => "Surat Tanah",
                        'name' => 'suratTanah',
                        'value' => $modelAsetTanah->suratTanah,
                        'htmlOptions' => array(
                            'style' => 'width: 2%; text-align: center;',
                        ),
                    ),
                    array(
                        'header' => 'Lokasi',
                        'name' => 'lokasi',
                        'headerHtmlOptions' => array('style' => 'text-align:center'),
                        'type' => 'raw',
                        'value' => $modelAsetTanah->lokasi,
                        'htmlOptions' => array(
                            'style' => 'width: 50%; text-align: left;',
                        ),
                    ),
                    array(
                        'header' => 'Nilai',
                        'name' => 'nilaiAset',
                        'value' => $modelAsetTanah->nilaiAset,
                        'headerHtmlOptions' => array('style' => 'text-align:center'),
                        'type' => 'raw',
                        'footer' => '<span class="label label-important">'.AsetTanah::model()->getTotals($modelAsetTanah->search()->getKeys()).'</span>',
                        'htmlOptions' => array(
                            'style' => 'width: 20%; text-align: right;',
                        ),
                    ),
                ),
            ));
            ?>  
            <br/>
            <span class="badge badge-warning">2</span>
            <span class="label label-warning">Aset Gedung</span>  
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'aset-gedung-grid',
                'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
                'dataProvider' => $modelAsetGedung->search(),
                'filter' => $modelAsetGedung,
                'columns' => array(
                    array(
                        'header' => "No",
                        'value' => '($this->grid->dataProvider->pagination->currentPage*
                                               $this->grid->dataProvider->pagination->pageSize
                                              )+
                                              array_search($data,$this->grid->dataProvider->getData())+1',
                        'htmlOptions' => array(
                            'style' => 'width: 2%; text-align: center;',
                        ),
                    ),
                    array(
                        'header' => "Nama Gedung",
                        'name' => 'namaGedung',
                        'value' => '$data->namaGedung',
                        'htmlOptions' => array(
                            'style' => 'width: 30%; text-align: left;',
                        ),
                    ),
                    array(
                        'header' => 'Lokasi',
                        'name' => 'lokasi',
                        'headerHtmlOptions' => array('style' => 'text-align:center'),
                        'type' => 'raw',
                        'value' => '$data->lokasi',
                        'htmlOptions' => array(
                            'style' => 'width: 50%; text-align: left;',
                        ),
                    ),
                    array(
                        'header' => 'Luas',
                        'name' => 'luas',
                        'headerHtmlOptions' => array('style' => 'text-align:center'),
                        'type' => 'raw',
                        'value' => '$data->luas',
                        'htmlOptions' => array(
                            'style' => 'width: 20%; text-align: left;',
                        ),
                    ),
                    array(
                        'header' => 'Nilai',
                        'name' => 'nilaiAset',
                        'value' => '$data->nilaiAset',
                        'headerHtmlOptions' => array('style' => 'text-align:center'),
                        'type' => 'raw',
                        'footer' => '<span class="label label-important">'.AsetGedung::model()->getTotals($modelAsetGedung->search()->getKeys()).'</span>',
                        'htmlOptions' => array(
                            'style' => 'width: 20%; text-align: right;',
                        ),
                    ),
                ),
            ));
            ?>  
            <br/>
            <span class="badge badge-success">3</span>
            <span class="label label-success">Aset Barang</span>
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'aset-barang-grid',
                'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
                'dataProvider' => $model->search(),
                //'rowCssClassExpression'=>'($data->warna==0)?even:odd',
                'filter' => $model,
                'columns' => array(
                    array(
                        'header' => "No",
                        'value' => '($this->grid->dataProvider->pagination->currentPage*
                                               $this->grid->dataProvider->pagination->pageSize
                                              )+
                                              array_search($data,$this->grid->dataProvider->getData())+1',
                        'htmlOptions' => array(
                            'style' => 'width: 2%; text-align: center;',
                        ),
                    ),
                    array(
                        'header' => "Kode Barang",
                        'name' => 'kodeBarang',
                        'value' => '$data["kodeBarang"]',
                        'htmlOptions' => array(
                            'style' => 'width: 2%; text-align: center;',
                        ),
                    ),
                    array(
                        'header' => 'Nama Barang',
                        'name' => 'namaBarang',
                        'headerHtmlOptions' => array('style' => 'text-align:center'),
                        'type' => 'raw',
                        'value' => 'Chtml::link(AsetBarang::model()->findByPk($data->kodeBarang)->namaBarang,
                            array("asetBarang/view","id"=>$data["kodeBarang"]))',
                        'htmlOptions' => array(
                            'style' => 'width: 50%; text-align: left;',
                        ),
                    ),
                    array(
                        'header' => 'Jumlah',
                        'name' => 'jumlah',
                        'type' => 'text',
                        'value' => '$data["jumlah"]',
                        'htmlOptions' => array(
                            'style' => 'width:5%; text-align: center;',
                        ),
                    ),
                    array(
                        'header' => 'Nilai',
                        'name' => 'nilaiAset',
                        'headerHtmlOptions' => array('style' => 'text-align:center'),
                        'type' => 'raw',
                        'value' => '$data->nilaiAset',
                        'htmlOptions' => array(
                            'style' => 'width: 20%; text-align: right;',
                        ),
                    ),
                    array(
                        'header' => 'Sub Nilai',
                        'value' => '$data->subNilaiAset',
                        'headerHtmlOptions' => array('style' => 'text-align:center'),
                        'type' => 'raw',
                        'footer' => '<span class="label label-important">'.AsetBarang::model()->getTotals($model->search()->getKeys()).'</span>',
                        'htmlOptions' => array(
                            'style' => 'width: 20%; text-align: right;',
                        ),
                    ),
                ),
            ));
            
            ?>  
            <br/>
            <span class="badge badge-info">4</span>
            <span class="label label-info">Data Inventaris</span>
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'aset-inventaris-grid',
                'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
                'dataProvider' => $modelInventaris->search(),
                'filter' => $modelInventaris,
                'columns' => array(
                    array(
                        'header' => "No",
                        'value' => '($this->grid->dataProvider->pagination->currentPage*
                                       $this->grid->dataProvider->pagination->pageSize
                                      )+
                                      array_search($data,$this->grid->dataProvider->getData())+1',
                        'htmlOptions' => array('style' => 'width: 3%; text-align: center;',
                        ),
                    ),
                    array
                        (
                        'name' => 'noInventaris',
                        'value' => '$data->noInventaris',
                        'htmlOptions' => array(
                            'style' => 'width: 10%; text-align: center;',
                        ),
                    ),
                    array
                        (
                        'name' => 'noRuangan',
                        'filter' => CHtml::activeDropDownList($modelInventaris, 'noRuangan', Inventarisasi::model()->getRuangan(), array('prompt' => 'Pilih', 'class' => 'span6')),
                        'value' => '$data->noRuangan',
                        'htmlOptions' => array(
                            'style' => 'width: 10%; text-align: center;',
                        ),
                    ),
                    array
                        (
                        'name' => 'kodeBarang',
                        'value' => '$data->kodeBarang',
                        'htmlOptions' => array(
                            'style' => 'width: 7%; text-align: center;',
                        ),
                    ),
                    'kodeBarang0.namaBarang',
                    array(
                        'name' => 'tanggal',
                        'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'model' => $modelInventaris,
                            'attribute' => 'tanggal',
                            'language' => 'id',
                            'i18nScriptFile' => 'jquery.ui.datepicker-ja.js',
                            'htmlOptions' => array(
                                'id' => 'tanggal',
                                'dateFormat' => 'yy-mm-dd',
                            ),
                            'options' => array(// (#3)
                                'showOn' => 'focus',
                                'dateFormat' => 'yy-mm-dd',
                                'showOtherMonths' => true,
                                'selectOtherMonths' => true,
                                'changeMonth' => true,
                                'changeYear' => true,
                                'showButtonPanel' => true,
                            )
                                ), true),
                        'htmlOptions' => array(
                            'style' => 'width: 8%; text-align: center;',
                        ),
                    ),
                    array(
                        'name' => 'kondisi',
                        'filter' => CHtml::activeDropDownList($modelInventaris, 'kondisi', array('Baik' => 'Baik', 'Layak' => 'Layak', 'Rusak' => 'Rusak'), array('prompt' => 'Pilih', 'class' => 'form-control')),
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
                            'style' => 'width: 8%; text-align: right;',
                        ),
                    ),
                    array(
                        'name' => 'subNilai',
                        'type' => 'text',
                        'footer' =>'<span class="label label-important">'.Inventarisasi::model()->getTotals($modelInventaris->search()->getKeys()).'</span>',
                        'htmlOptions' => array(
                            'style' => 'width: 20%; text-align: right;',
                        ),
                    ),
                ),
            ));
            ?>  
            <br/>
	</div>
	<div class="span3">
		<div class="summary">
          <ul>
          	<li>
          		<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/credit.png" width="36" height="36" alt="Monthly Income">
                </span>
                    <span class="summary-number"><?=AsetTanah::model()->getTotals($modelAsetTanah->search()->getKeys()) ?></span>
                <span class="summary-title"> Aset Tanah</span>
            </li>
            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/page_white_edit.png" width="36" height="36" alt="Open Invoices">
                </span>
                <span class="summary-number"><?= AsetGedung::model()->getTotals($modelAsetGedung->search()->getKeys()) ?></span>
                <span class="summary-title">Aset Gedung</span>
            </li>
            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/page_white_excel.png" width="36" height="36" alt="Open Quotes<">
                </span>
                <span class="summary-number"><?= AsetBarang::model()->getTotals($model->search()->getKeys()) ?></span>
                <span class="summary-title">Aset Barang</span>
            </li>
<!--            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/group.png" width="36" height="36" alt="Active Members">
                </span>
                <span class="summary-number"><?php //Inventarisasi::model()->getTotals($modelInventaris->search()->getKeys()) ?></span>
                <span class="summary-title">Data Inventaris</span>
            </li>-->
            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/folder_page.png" width="36" height="36" alt="Recent Conversions">
                </span>
                <span class="summary-number">
                <?php
                    $asetTanah=Yii::app()->format->unformatNumber(AsetTanah::model()->getTotals($modelAsetTanah->search()->getKeys()));
                    $asetGedung=Yii::app()->format->unformatNumber(AsetGedung::model()->getTotals($modelAsetGedung->search()->getKeys()));
                    $asetBarang=Yii::app()->format->unformatNumber(AsetBarang::model()->getTotals($model->search()->getKeys()));
                    $total=$asetTanah+$asetGedung+$asetBarang;
                    echo Yii::app()->format->formatNumber($total);
                ?>
                </span>
                <span class="summary-title">Total Aset</span></li>
        
          </ul>
        </div>

	</div>
</div>
<script>
            $(function() {

                $(".knob").knob({
                    /*change : function (value) {
                        //console.log("change : " + value);
                    },
                    release : function (value) {
                        console.log("release : " + value);
                    },
                    cancel : function () {
                        console.log("cancel : " + this.value);
                    },*/
                    draw : function () {

                        // "tron" case
                        if(this.$.data('skin') == 'tron') {

                            var a = this.angle(this.cv)  // Angle
                                , sa = this.startAngle          // Previous start angle
                                , sat = this.startAngle         // Start angle
                                , ea                            // Previous end angle
                                , eat = sat + a                 // End angle
                                , r = 1;

                            this.g.lineWidth = this.lineWidth;

                            this.o.cursor
                                && (sat = eat - 0.3)
                                && (eat = eat + 0.3);

                            if (this.o.displayPrevious) {
                                ea = this.startAngle + this.angle(this.v);
                                this.o.cursor
                                    && (sa = ea - 0.3)
                                    && (ea = ea + 0.3);
                                this.g.beginPath();
                                this.g.strokeStyle = this.pColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                                this.g.stroke();
                            }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                    }
                });

                // Example of infinite knob, iPod click wheel
                var v, up=0,down=0,i=0
                    ,$idir = $("div.idir")
                    ,$ival = $("div.ival")
                    ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
                    ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
                $("input.infinite").knob(
                                    {
                                    min : 0
                                    , max : 20
                                    , stopper : false
                                    , change : function () {
                                                    if(v > this.cv){
                                                        if(up){
                                                            decr();
                                                            up=0;
                                                        }else{up=1;down=0;}
                                                    } else {
                                                        if(v < this.cv){
                                                            if(down){
                                                                incr();
                                                                down=0;
                                                            }else{down=1;up=0;}
                                                        }
                                                    }
                                                    v = this.cv;
                                                }
                                    });
            });
        </script>