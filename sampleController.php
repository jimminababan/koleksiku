  public function actionChangePassword()
	{
		
		$model = new ChangePassword;
		
		if(isset($_POST['ChangePassword']))
		{
			$model->attributes=$_POST['ChangePassword'];
			// validate user input and redirect to the previous page if valid
			if($model->validate())
			{
				$user = User::model()->findByPk(Yii::app()->user->userpk);
				$user->password = $model->newPassword;
				if($user->save())
					$this->redirect('?r=user/passwordChanged');
			}
		}
		
		$this->render('changePassword',array('model'=>$model));
	}
