<?php

/**
 * This is the model class for table "aset_barang".
 *
 * The followings are the available columns in table 'aset_barang':
 * @property string $kodeBarang
 * @property string $namaBarang
 * @property integer $idJenis
 * @property string $manufaktur
 * @property string $merk
 * @property string $model
 * @property integer $tahun
 * @property integer $jumlah
 * @property integer $subNilaiAset
 * @property string $warna
 * @property string $tglPengadaan
 * @property double $nilaiAset
 * @property string $keterangan
 *
 * The followings are the available model relations:
 * @property Jenis $idJenis0
 * @property Inventarisasi[] $inventarisasis
 */
class AsetBarang extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    const MIN_RANGE = 2010;
    public function tableName() {
        return 'aset_barang';
    }

    /**
     * @return array validation rules for model attributes.
     */
    
    public function afterFind() {
        $this->nilaiAset = Yii::app()->format->number($this->nilaiAset);
        $this->subNilaiAset = Yii::app()->format->number($this->subNilaiAset);
        return parent::afterFind();
    }

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('kodeBarang, namaBarang, idJenis', 'required'),
            array('idJenis, tahun, jumlah', 'numerical', 'integerOnly' => true),
            array('nilaiAset,subNilaiAset', 'numerical'),
            array('kodeBarang, warna', 'length', 'max' => 15),
            array('namaBarang', 'length', 'max' => 200),
            array('manufaktur, merk, model', 'length', 'max' => 100),
            array('tglPengadaan, keterangan', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('kodeBarang, namaBarang, idJenis, subNilaiAset, manufaktur, merk, model, tahun, jumlah, warna, tglPengadaan, nilaiAset, keterangan', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idJenis0' => array(self::BELONGS_TO, 'Jenis', 'idJenis'),
            'inventarisasis' => array(self::HAS_MANY, 'Inventarisasi', 'kodeBarang'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'kodeBarang' => 'Kode Barang',
            'namaBarang' => 'Nama Barang',
            'idJenis' => 'Id Jenis',
            'manufaktur' => 'Manufaktur',
            'merk' => 'Merk',
            'model' => 'Model',
            'tahun' => 'Tahun',
            'jumlah' => 'Jumlah',
            'warna' => 'Warna',
            'tglPengadaan' => 'Tgl Pengadaan',
            'nilaiAset' => 'Nilai Aset',
            'keterangan' => 'Keterangan',
            'subNilaiAset' => 'Sub Nilai',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('kodeBarang', $this->kodeBarang, true);
        $criteria->compare('namaBarang', $this->namaBarang, true);
        $criteria->compare('idJenis', $this->idJenis);
        $criteria->compare('manufaktur', $this->manufaktur, true);
        $criteria->compare('merk', $this->merk, true);
        $criteria->compare('model', $this->model, true);
        $criteria->compare('tahun', $this->tahun);
        $criteria->compare('jumlah', $this->jumlah);
        $criteria->compare('warna', $this->warna, true);
        $criteria->compare('tglPengadaan', $this->tglPengadaan, true);
        $criteria->compare('nilaiAset', $this->nilaiAset);
        $criteria->compare('subNilaiAset', $this->subNilaiAset);
        $criteria->compare('keterangan', $this->keterangan, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return AsetBarang the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function suggest($keyword, $limit = 20) {
        $models = $this->findAll(array(
            'condition' => 'namaBarang LIKE :keyword or kodeBarang LIKE :kode',
            'order' => 'namaBarang',
            'limit' => $limit,
            'params' => array(':keyword' => "%$keyword%",':kode'=>"%$keyword%")
        ));
        $suggest = array();
        foreach ($models as $model) {
            $suggest[] = array(
                'label' => $model->kodeBarang . ' - ' . $model->namaBarang . ' - ' . $model->jumlah, // label for dropdown list
                'value' => $model->kodeBarang, // value for input field
                'id' => $model->kodeBarang, // return values from autocomplete
                'namaBarang'=>$model->namaBarang,
                'jumlah'=>$model->jumlah,
            );
        }
        return $suggest;
    }
    
    public function generateKode() {
        $_d = date("ym");
        $_i = "BR";
        $_left = $_i . $_d;
        $_first = "000001";
        $_len = strlen($_left);
        $no = $_left . $_first;

        $last_po = $this->find(
                array(
                    "select" => "kodeBarang",
                    "condition" => "left(kodeBarang, " . $_len . ") = :_left",
                    "params" => array(":_left" => $_left),
                    "order" => "kodeBarang DESC"
        ));

        if ($last_po != null) {
            $_no = substr($last_po->kodeBarang, $_len);
            $_no++;
            $_no = substr("000000", strlen($_no)) . $_no;
            $no = $_left . $_no;
        }

        return $no;
    }
    
    public function getJenis()
    {
        return CHtml::listData(Jenis::model()->findAll(), 'idJenis', 'namaJenis');
    }
    
    public function getTotals($ids) {
        $ids = implode("','", $ids);
        $connection = Yii::app()->db;
        $command = $connection->createCommand("SELECT SUM(subNilaiAset)FROM aset_barang where kodeBarang in ('$ids')");
        return Yii::app()->format->number($amount = $command->queryScalar());
       // $formatted_number1 = Yii::app()->format->number($numerical_value); 
    }
    
//    public function asetAll()
//    {
//        $sqlAll='SELECT * FROM aset_barang order by namaBarang asc';
//        $dataProvider2=new CSqlDataProvider($sqlAll,array(
//                'keyField' => 'kodeBarang',
//                'pagination'=>array(
//                        'pageSize'=>5,
//                ),
//        ));
//
//        return $dataProvider2;
//    }
}
