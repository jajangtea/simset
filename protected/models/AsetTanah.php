<?php

/**
 * This is the model class for table "aset_tanah".
 *
 * The followings are the available columns in table 'aset_tanah':
 * @property integer $idTanah
 * @property string $lokasi
 * @property string $suratTanah
 * @property string $tglPengadaan
 * @property double $nilaiAset
 * @property string $katerangan
 */
class AsetTanah extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aset_tanah';
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
			array('lokasi, suratTanah, tglPengadaan, katerangan', 'required'),
			array('nilaiAset', 'numerical'),
			array('suratTanah', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idTanah, lokasi, suratTanah, tglPengadaan, nilaiAset, katerangan', 'safe', 'on'=>'search'),
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
			'idTanah' => 'Id Tanah',
			'lokasi' => 'Lokasi',
			'suratTanah' => 'Surat Tanah',
			'tglPengadaan' => 'Tgl Pengadaan',
			'nilaiAset' => 'Nilai Aset',
			'katerangan' => 'Katerangan',
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

		$criteria->compare('idTanah',$this->idTanah);
		$criteria->compare('lokasi',$this->lokasi,true);
		$criteria->compare('suratTanah',$this->suratTanah,true);
		$criteria->compare('tglPengadaan',$this->tglPengadaan,true);
		$criteria->compare('nilaiAset',$this->nilaiAset);
		$criteria->compare('katerangan',$this->katerangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AsetTanah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getTotals($ids) {
        $ids = implode("','", $ids);
        $connection = Yii::app()->db;
        $command = $connection->createCommand("SELECT SUM(nilaiAset)FROM aset_tanah where idTanah in ('$ids')");
        return Yii::app()->format->number($amount = $command->queryScalar());
       // $formatted_number1 = Yii::app()->format->number($numerical_value); 
    }
}
