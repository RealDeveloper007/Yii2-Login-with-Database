<?php

namespace app\controllers;

define('GUEST', 0);
define('Customer', 1);




use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class AppController extends Controller
{

    public $userData; // Holds an activeRecord with current user. NULL if guest

    public $baseUrl = null;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'login', 'request-password-reset'],
                'rules' => [
                    [
                        'actions' => ['login', 'request-password-reset'],
                        'allow' => true,
                        'rolls' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'rolls' => ['@'],
                    ],
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
            ],
        ];
    }

    public function init()
    {
        // Load the user
        if (!Yii::$app->user->isGuest) {
            $this->userData = Yii::$app->user->identity;
            $_SESSION['userData'] = $this->userData;
        }
        if (Yii::$app->request->BaseUrl == "/new_yii/web") {
            $this->baseUrl = Yii::$app->request->BaseUrl;
        } else {
            $this->baseUrl = Yii::$app->request->BaseUrl . "/web";
        }

        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '1024M');

        Yii::$app->name = "New Yii";
    }


    /*  @param $min_level */

    public function allowUser($min_level)
    {

        $current_level = -1;
        if ($this->userData !== null)
            $current_level = $this->userData->usertype_id;
        else
            $current_level = 0;
        if ($min_level > $current_level) {
            $this->redirect(array("/site/not-found"));
            }
    }
    /* @param $site_access */
    public function allowPublished($site_access){
		error_reporting(0);
        $published = $this->userData->is_published;
        if($site_access != $published){
            $this->redirect(array("/dashboard/register"));
        }
    }

    /**
     * @param $roll_level
     */
    public function allowOnly($roll_level)
    {
        $current_level = -1;
        if ($this->userData !== null)
            $current_level = $this->userData->usertype_id;
        if ($roll_level != $current_level) {
            $this->redirect(array("/site/not-found"));
        }
    }
}


