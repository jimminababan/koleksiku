<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class ChangePassword extends CFormModel
{
  public $oldPassword;
	public $newPassword;
	public $confirmPassword;


	public function rules()
	{
		return array(
			// username and password are required
			array('oldPassword, newPassword, confirmPassword', 'required'),
			array('oldPassword', 'checkOldPassword'),
			array('confirmPassword', 'checkPassword'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'oldPassword'=>'Old Password',
			'newPassword'=>'New Password',
			'confirmPassword'=>'Confirm Password',
		);
	}
	
	


	public function checkPassword($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			if($this->newPassword != $this->confirmPassword)
				$this->addError('confirmPassword','Password confirmation not same');
		}
	}
	public function checkOldPassword($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$user = User::model()->findByPk(Yii::app()->user->userpk);
			if($user->password != $this->oldPassword)
				$this->addError('oldPassword', 'Old Password Incorrect');
		}
	}
	
}
