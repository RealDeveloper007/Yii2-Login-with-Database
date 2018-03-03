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
$this->title='Yii';
?>
                <!-- Sidebar -->
                <div class="sidebar-back"></div>
                <div id="sidebar-wrapper" class="stretch-full-height">
                    <ul class="sidebar-nav">
                        <li id="dashboard">
                            <a href="<?php echo Yii::$app->request->getBaseUrl(true);?>/dashboard" class="active-title">
                                <span class="nav-icon"><i class="icon-dashboard icon-2x"></i></span>
                                <span class="sidebar-menu-item-text">Dashboard</span></a>            
                        </li>
						 <li>
							 <form action="<?php echo Yii::$app->request->getBaseUrl(true);?>/site/logout" method="post">
                                 <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                                 <button type="submit" class="btn btn-link logout"><i class="icon-power-off icon-2x"></i>  Logout</button>
                             </form>
                        </li>                        
                    </ul>
                </div><!-- /sidebar -->
