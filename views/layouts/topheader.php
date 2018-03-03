<?php

use Yii;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\BackendAsset;

//use backend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

BackendAsset::register($this);
if(isset(Yii::$app->user->identity->username)){
    $username = Yii::$app->user->identity->username;
} else{
    $username = "";
}
$this->title='Yii';
?>

            <!-- Top Navbar  -->
            <div class="navbar navbar-static-top navbar-inverse " role="navigation">
                <div class="navbar-header navbar-inverse text-center">
                    <button type="button" class="navbar-toggle border-left-med no-radius" id="menu-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <button type="button" class="navbar-toggle border-left-med no-radius" id="user-menu" data-toggle="collapse" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="avatar text-inverse">Welcome <?= ucfirst($username);?>!</span>
                    </button>
                <!-- logo -->
                <div class="navbar-brand"><a href="#"> <img src="img/logo.png" alt="logo"></a></div>
                <!-- / logo -->
                </div>
                <!-- user -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li class="avatar dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <?= ucfirst($username);?>!<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                                <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
                                <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon-power-off"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- / nav-collapse -->
            </div>
            <!-- / top Navbar -->
