<?php 
	/**
	 * summary
	 */
	class LoginKasir extends CFormModel
	{
	    public $username;
	    public $no_nota;
	    public $tanggal;

	 	public function rules()
	 	{
	 		return array(array('username, noNota', 'required'),);
	 	}

	 	public function attributeLabels()
	 	{
	 		return array(
                     'username'=>'Nama User',
                     'no_nota'=>'No Nota',
                     'tanggal'=>'Tanggal',
	 			);
	 	}
	}
 ?>