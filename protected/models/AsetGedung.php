<?php

/**
 * This is the model class for table "aset_gedung".
 *
 * The followings are the available columns in table 'aset_gedung':
 * @property integer $idGedung
 * @property string $namaGedung
 * @property string $luas
 * @property string $lokasi
 * @property string $tglPengadaan
 * @property double $nilaiAset
 * @property string $keterangan
 */
class AsetGedung extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aset_gedung';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
        public function afterFind() {
            $this->nilaiAset = Yii::app()->format->number($this->nilaiAset);
            return parent::afterFind();
        }
        
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('namaGedung, luas, lokasi', 'required'),
			array('nilaiAset', 'numerical'),
			array('namaGedung, luas', 'length', 'max'=>200),
			array('tglPengadaan, keterangan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idGedung, namaGedung, luas, lokasi, tglPengadaan, nilaiAset, keterangan', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idGedung' => 'Id Gedung',
			'namaGedung' => 'Nama Gedung',
			'luas' => 'Luas',
			'lokasi' => 'Lokasi',
			'tglPengadaan' => 'Tgl Pengadaan',
			'nilaiAset' => 'Nilai Aset',
			'keterangan' => 'Keterangan',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idGedung',$this->idGedung);
		$criteria->compare('namaGedung',$this->namaGedung,true);
		$criteria->compare('luas',$this->luas,true);
		$criteria->compare('lokasi',$this->lokasi,true);
		$criteria->compare('tglPengadaan',$this->tglPengadaan,true);
		$criteria->compare('nilaiAset',$this->nilaiAset);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AsetGedung the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getTotals($ids) {
            $ids = implode("','", $ids);
            $connection = Yii::app()->db;
            $command = $connection->createCommand("SELECT SUM(nilaiAset)FROM aset_gedung where idGedung in ('$ids')");
            return  Yii::app()->format->number($amount = $command->queryScalar());
        }

}
