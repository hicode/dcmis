<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js" data-ng-app="MetronicApp"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js" data-ng-app="MetronicApp"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" data-ng-app="MetronicApp">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <title data-ng-bind="'Metronic AngularJS | ' + $state.current.data.pageTitle"></title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/css/gg/gg.css" rel="stylesheet" type="text/css"/>
    <link href="/css/common/ui-grid.min.css" rel="stylesheet" type="text/css"/>

    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN DYMANICLY LOADED CSS FILES(all plugin and page related styles must be loaded between GLOBAL and THEME css files ) -->
    <link id="ng_load_plugins_before"/>
    <!-- END DYMANICLY LOADED CSS FILES -->
    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="../assets/global/css/components-rounded.min.css" id="style_components" rel="stylesheet"
          type="text/css"/>
    <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="../assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css"/>

    <link href="../assets/global/plugins/jquery-notific8/jquery.notific8.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->

<body ng-controller="AppController"
      class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo page-on-load"
      ng-class="{'page-sidebar-closed': settings.layout.pageSidebarClosed}">
<!-- BEGIN PAGE SPINNER -->
<div ng-spinner-bar class="page-spinner-bar">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
</div>
<!-- END PAGE SPINNER -->
<!-- BEGIN HEADER -->
<div data-ng-include="'tpl/header'" data-ng-controller="HeaderController"
     class="page-header navbar navbar-fixed-top"></div>
<!-- END HEADER -->
<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div data-ng-include="'tpl/sidebar'" data-ng-controller="SidebarController" class="page-sidebar-wrapper"></div>
    <!-- END SIDEBAR -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEAD -->
            <div data-ng-include="'tpl/page-head'" data-ng-controller="PageHeadController" class="page-head"></div>
            <!-- END PAGE HEAD -->
            <!-- BEGIN ACTUAL CONTENT -->
            <div ui-view class="fade-in-up"></div>
            <!-- END ACTUAL CONTENT -->
        </div>
    </div>
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>

    <div data-ng-include="'tpl/quick-sidebar'" data-ng-controller="QuickSidebarController"
         class="page-quick-sidebar-wrapper"></div>
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div data-ng-include="'tpl/footer'" data-ng-controller="FooterController" class="page-footer"></div>
<!-- END FOOTER -->
<!-- BEGIN QUICK NAV -->
<nav class="quick-nav">
    <a class="quick-nav-trigger" href="#">
        <span aria-hidden="true"></span>
    </a>
    <ul>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
               target="_blank" class="active">
                <span>Purchase Metronic</span>
                <i class="icon-basket"></i>
            </a>
        </li>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes"
               target="_blank">
                <span>Customer Reviews</span>
                <i class="icon-users"></i>
            </a>
        </li>
        <li>
            <a href="http://keenthemes.com/showcast/" target="_blank">
                <span>Showcase</span>
                <i class="icon-user"></i>
            </a>
        </li>
        <li>
            <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                <span>Changelog</span>
                <i class="icon-graph"></i>
            </a>
        </li>
    </ul>
    <span aria-hidden="true" class="quick-nav-bg"></span>
</nav>
<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE JQUERY PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE JQUERY PLUGINS -->
<!-- BEGIN CORE ANGULARJS PLUGINS -->
{{--<script src="../assets/global/plugins/angularjs/angular.min.js" type="text/javascript"></script>--}}
<script src="/js/common/angular.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/angularjs/angular-sanitize.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/angularjs/angular-touch.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/angularjs/plugins/angular-ui-router.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/angularjs/plugins/ocLazyLoad.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/angularjs/plugins/ui-bootstrap-tpls.min.js" type="text/javascript"></script>

<script src="/js/common/lodash.min.js" type="text/javascript"></script>
<script src="/js/common/restangular.min.js" type="text/javascript"></script>
<script src="/js/common/ui-grid.min.js" type="text/javascript"></script>
<script src="/js/common/angular-animate.min.js" type="text/javascript"></script>
<!-- END CORE ANGULARJS PLUGINS -->
<!-- BEGIN APP LEVEL ANGULARJS SCRIPTS -->


<script src="js/main" type="text/javascript"></script>
<script src="js/directives.js" type="text/javascript"></script>
<!-- END APP LEVEL ANGULARJS SCRIPTS -->
<!-- BEGIN APP LEVEL JQUERY SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>

<script src="../assets/global/plugins/jquery-notific8/jquery.notific8.min.js" type="text/javascript"></script>
<!--
<script src="../assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
-->
<!-- END APP LEVEL JQUERY SCRIPTS -->
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>