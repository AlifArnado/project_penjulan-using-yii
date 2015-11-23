<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $full_name
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $active
 */
class User extends CActiveRecord
{

	public $password_repeat;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// validasi yang diberikan tugas pratikum pertemuan 4
			array('password','compare'),
			array('password_repeat','safe'),
			array('email, username', 'unique'),
			array('email','email'),

			array('full_name, username, password, email, password_repeat', 'required'),
			array('active', 'numerical', 'integerOnly'=>true),
			array('full_name', 'length', 'max'=>50),

			// validasi inputan pada password
			array('password','length','min'=>6,'max'=>12),
			
			array('username, email', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, full_name, username, password, email, active', 'safe', 'on'=>'search'),
		);
	}

	// menambahkan fungsi untuk validasi jika semua form password dan password repear diisi
	protected function afterValidate() {
		parent::afterValidate();
		if (!$this->hasErrors()) {
			$this->password = $this->hashPassword($this->password);
		}
	}

	// fungsi untuk pengubahan bentuk sting menjadi enkripsi md5
	public function hashPassword($password) {
		return md5($password);
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
			'id' => 'ID',
			'full_name' => 'Full Name',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'active' => 'Active',
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
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
