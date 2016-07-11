<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Users;
use app\modules\employee\models\Employees;
use yii\db\Query;

class SiteController extends Controller {
	public function behaviors() {
		Yii::$app->params ['userName'] = Users::findIdentity ( Yii::$app->user->id );
		return [ 
				'access' => [ 
						'class' => AccessControl::className (),
						'only' => [ 
								'index',
								'about',
								'contact',
								'logout' 
						],
						'rules' => [ 
								[
										// 'actions' => ['logout'],
										'allow' => true,
										'roles' => [ 
												'@' 
										] 
								] 
						] 
				],
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								'logout' => [ 
										'post' 
								] 
						] 
				] 
		];
	}
	public function actions() {
		return [ 
				'error' => [ 
						'class' => 'yii\web\ErrorAction' 
				],
				'captcha' => [ 
						'class' => 'yii\captcha\CaptchaAction',
						'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null 
				] 
		];
	}
	public function actionIndex() {
		// if(\Yii::$app->user->isGuest){
		// return $this->redirect(['site/login']);
		// }
		// else{
		return $this->render ( 'index' );
		// }
	}
	
	public function actionView($id){
// 		$this->
	}
	
	public function actionLogin() {
		if (! Yii::$app->user->isGuest) {
			return $this->goHome ();
		}
		
		$users=new Users();
        
        $model = new LoginForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            
//            $find_user=$users->findByUsername($model->username);
//                echo $find_user->user_type;
//                die();
            
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

//        return $this->redirect(['site/login']);
        return $this->goHome();
    }
    

	public function actionProfile($id){
		
		$users=new Users();
		if($users->findOne($id)->user_type==='student'){
			$findModel=(new Query())
				->select(['*'])
				->from('students')
				->where(['user_id'=>$id])
				->one();
			return $this->render('[student/students/view]',['model'=>$findModel]);
			
		}
		
		if($users->findOne($id)->user_type==='employee'){
			$k=5;
			$findModel=(new Query())
				->select(['*'])
				->from('employees')
				->where(['user_id'=>$id])
				->one();
			return $this->render('[employee/employees/view]',['model'=>$findModel]);
				
		}
	
	}
    
}
