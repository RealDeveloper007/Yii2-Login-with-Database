<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Real Developer
 * @since 2.0
 */
class BackendAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        './themes/backend/dist/css/bootstrap.css',
        './themes/backend/css/theme-base.css',
        './themes/backend/css/boostrap-overrides.css',
        './themes/backend/css/theme.css',
        './themes/backend/assets/css/sidebar.css',
        './themes/backend/assets/css/font-awesome.css',
        './themes/backend/assets/css/ezmark.css',
        './themes/backend/assets/plugins/morris.js-0.4.3/morris.css',
        './themes/backend/assets/css/animate-custom.css',
        './themes/backend/assets/plugins/calendar/zabuto_calendar.css',
        './themes/backend/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css',
        './themes/backend/assets/css/pushy.css',
        './themes/backend/assets/css/panel.css',
        './themes/backend/assets/css/jquery.Jcrop.css',
        './themes/backend/assets/select/select2.css',
        './themes/backend/assets/css/custom.css',
        './themes/backend/colorPicker/colpick/css/colpick.css',
        './themes/backend/dist/css/bootstrap-datepicker.css',
        './themes/backend/dist/css/css.css',
        './themes/backend/dist/css/css2.css',
    ];
    public $js = [

        './themes/backend/assets/js/modernizr-2.6.2.min.js',
        './themes/backend/dist/js/bootstrap.js',
        './themes/backend/assets/js/jquery-ui-1.10.4.custom.min.js',
      //  '../../themes/backend/assets/js/pushy.js',
        './themes/backend/assets/plugins/calendar/zabuto_calendar.js',
        './themes/backend/assets/js/jquery.sparkline.js',
        './themes/backend/assets/js/jquery.ezmark.js',
        './themes/backend/assets/select/select2.js',
        './themes/backend/assets/plugins/canvas/canvasjs.min.js',
        './themes/backend/colorPicker/colpick/js/colpick.js',
        './themes/backend/colorPicker/colpick/js/colpick-implem.js',
        './themes/backend/assets/js/sidebar-navbar.js',
        './themes/backend/assets/js/script.js',
        //'http://maps.googleapis.com/maps/api/js?sensor=false',
        './themes/backend/assets/js/gmap3.js',
        './themes/backend/assets/js/gmap.custom-index-map.js',
        './themes/backend/assets/plugins/fontawesome-markers-master/fontawesome-markers.js',
        './themes/backend/assets/plugins/jquery-easy-pie-chart/examples/excanvas.js',
        './themes/backend/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js',
        './themes/backend/assets/plugins/flot/jquery.flot.js',
        './themes/backend/assets/plugins/flot/jquery.flot.resize.js',
        './themes/backend/assets/js/custom_backend.js',
        './themes/backend/assets/js/jquery.Jcrop.js',
        './themes/backend/assets/js/moment-c.js',
        './themes/backend/dist/js/bootstrap-datetimepicker.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
