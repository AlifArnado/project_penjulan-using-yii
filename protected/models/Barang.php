<?php

/**
 * This is the model class for table "barang".
 *
 * The followings are the available columns in table 'barang':
 * @property integer $id
 * @property integer $jenis_barang
 * @property string $nama_barang
 * @property string $satuan
 * @property integer $harga
 * @property integer $stok
 *
 * The followings are the available model relations:
 * @property Penjualan[] $penjualans
 */
class Barang extends CActiveRecord
{

	private $_existed;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenis_barang','validasiNama'),
			array('jenis_barang, harga,stok','required'),
			array('jenis_barang, harga, stok', 'numerical', 'integerOnly'=>true),
			array('nama_barang', 'length', 'max'=>40),
			array('satuan', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, jenis_barang, nama_barang, satuan, harga, stok', 'safe', 'on'=>'search'),
		);
	}

	public function validasiNama($attribute, $params)
	{
		$this->_existed = self::model()->exists('nama_barang=:nm_brg', array(
			':nm_brg'=>$this->nama_barang, ));
		if ($this->_existed) {
			$this->addError('nama_barang','Nama yang sama sudah ada..!');
		}
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'penjualans' => array(self::HAS_MANY, 'Penjualan', 'barang_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'jenis_barang' => 'Jenis Barang',
			'nama_barang' => 'Nama Barang',
			'satuan' => 'Satuan',
			'harga' => 'Harga',
			'stok' => 'Stok',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('jenis_barang',$this->jenis_barang);
		$criteria->compare('nama_barang',$this->nama_barang,true);
		$criteria->compare('satuan',$this->satuan,true);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('stok',$this->stok);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Barang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
