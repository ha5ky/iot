<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"D:\PHPTutorial\WWW\iot\public/../application/index\view\intelde\add.html";i:1529990142;s:57:"D:\PHPTutorial\WWW\iot\application\index\view\layout.html";i:1529741253;s:64:"D:\PHPTutorial\WWW\iot\application\index\view\public\header.html";i:1553651351;s:64:"D:\PHPTutorial\WWW\iot\application\index\view\public\footer.html";i:1529746569;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minium-scale=1.0,user-scalable=0">
  <title>iot云平台</title> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/static/assets/materialize/css/materialize.min.css" media="screen,projection" />
  <!-- Bootstrap Styles-->
  <link href="/static/assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FontAwesome Styles-->
  <link href="/static/assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Morris Chart Styles-->
  <link href="/static/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- Custom Styles-->
  <link href="/static/assets/css/custom-styles.css" rel="stylesheet" />
  <!-- Google Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="/static/assets/js/Lightweight-Chart/cssCharts.css"> 
  <!-- <script type="text/javascript" src="/static/assets/js/jquery-3.3.1.min.js"></script> -->
  <style type="text/css">
    .table tbody tr td{
            vertical-align: middle;
        }
  </style>
</head>

<body>
  <div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons">settings_input_antenna</i> <strong>iot云平台</strong></a>

        <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
      </div>

      <ul class="nav navbar-top-links navbar-right"> 
               <!--  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>				
               <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown3"><i class="fa fa-tasks fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li> -->
               <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i class="fa fa-bell fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
               <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b><?php echo session('username'); ?></b> <i class="material-icons right">arrow_drop_down</i></a></li>
             </ul>
           </nav>
           <!-- Dropdown Structure -->
           <ul id="dropdown1" class="dropdown-content">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> 个人中心</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
            </li> 
            <li><a href="<?php echo url('index/Login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
            </li>
          </ul>
          <ul id="dropdown2" class="dropdown-content w250">
            <li>
              <div>
                <i class="fa fa-comment fa-fw"></i> New Comment
                <span class="pull-right text-muted small">4 min</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <div>
              <i class="fa fa-twitter fa-fw"></i> 3 New Followers
              <span class="pull-right text-muted small">12 min</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <div>
            <i class="fa fa-envelope fa-fw"></i> Message Sent
            <span class="pull-right text-muted small">4 min</span>
          </div>
        </a>
      </li>
      <li class="divider"></li>
      <li>
        <div>
          <i class="fa fa-tasks fa-fw"></i> New Task
          <span class="pull-right text-muted small">4 min</span>
        </div>
      </a>
    </li>
    <li class="divider"></li>
    <li>
      <div>
        <i class="fa fa-upload fa-fw"></i> Server Rebooted
        <span class="pull-right text-muted small">4 min</span>
      </div>
    </a>
  </li>
  <li class="divider"></li>
  <li>
    <a class="text-center" href="#">
      <strong>See All Alerts</strong>
      <i class="fa fa-angle-right"></i>
    </a>
  </li>
</ul>
<ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
  <li>
    <a href="#">
     <div>
      <p>
       <strong>Task 1</strong>
       <span class="pull-right text-muted">60% Complete</span>
     </p>
     <div class="progress progress-striped active">
       <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
        <span class="sr-only">60% Complete (success)</span>
      </div>
    </div>
  </div>
</a>
</li>
<li class="divider"></li>
<li>
  <a href="#">
   <div>
    <p>
     <strong>Task 2</strong>
     <span class="pull-right text-muted">28% Complete</span>
   </p>
   <div class="progress progress-striped active">
     <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
      <span class="sr-only">28% Complete</span>
    </div>
  </div>
</div>
</a>
</li>
<li class="divider"></li>
<li>
  <a href="#">
   <div>
    <p>
     <strong>Task 3</strong>
     <span class="pull-right text-muted">60% Complete</span>
   </p>
   <div class="progress progress-striped active">
     <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
      <span class="sr-only">60% Complete (warning)</span>
    </div>
  </div>
</div>
</a>
</li>
<li class="divider"></li>
<li>
  <a href="#">
   <div>
    <p>
     <strong>Task 4</strong>
     <span class="pull-right text-muted">85% Complete</span>
   </p>
   <div class="progress progress-striped active">
     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
      <span class="sr-only">85% Complete (danger)</span>
    </div>
  </div>
</div>
</a>
</li>
<li class="divider"></li>
<li>
</ul>   
<ul id="dropdown4" class="dropdown-content dropdown-tasks w250 taskList">
  <li>
    <div>
      <strong>John Doe</strong>
      <span class="pull-right text-muted">
        <em>Today</em>
      </span>
    </div>
    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
  </a>
</li>
<li class="divider"></li>
<li>
  <div>
    <strong>John Smith</strong>
    <span class="pull-right text-muted">
      <em>Yesterday</em>
    </span>
  </div>
  <p>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</p>
</a>
</li>
<li class="divider"></li>
<li>
  <a href="#">
    <div>
      <strong>John Smith</strong>
      <span class="pull-right text-muted">
        <em>Yesterday</em>
      </span>
    </div>
    <p>Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
  </a>
</li>
<li class="divider"></li>
<li>
  <a class="text-center" href="#">
    <strong>Read All Messages</strong>
    <i class="fa fa-angle-right"></i>
  </a>
</li>
</ul>  
<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
      <li>
        <a class="<?php echo getAction() == 'index' ? 'active-menu' : '' ?> waves-effect waves-dark" href="<?php echo url('index/Main/index'); ?>"><i class="fa fa-dashboard"></i>仪表盘</a>
      </li>
      <li>
        <a href="#" class="waves-effect waves-dark"><i class="fa fa-desktop"></i> 智能设备<span class="fa arrow"></span></a>
        <ul id="play" style="<?php echo displayAways(getAction()); ?>" class="nav nav-second-level">
          <li>
            <a class="<?php echo getAction() == 'delist' ? 'active-menu' : '' ?>" href="<?php echo url('index/Main/delist'); ?>"><i class="fa fa-list"></i>设备列表</a>
          </li>
          <li>
            <a class="<?php echo getAction() == 'dechat' ? 'active-menu' : '' ?>" href="<?php echo url('index/Main/dechat'); ?>"><i class="fa fa-list"></i>设备对话</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-keyboard-o"></i>设备遥控</a>
          </li>
          <li>
            <a class="<?php echo getAction() == 'deadd' ? 'active-menu' : '' ?>" href="<?php echo url('index/Main/deadd'); ?>"><i class="fa fa-list"></i>添加新设备</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-folder"></i>获取已有设备</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" class="waves-effect waves-dark"><i class="fa fa-desktop"></i> 接口<span class="fa arrow"></span></a>
        <ul id="play" style="<?php echo displayAways(getAction()); ?>" class="nav nav-second-level">
          <li>
            <a class="<?php echo getAction() == 'delist' ? 'active-menu' : '' ?>" href="<?php echo url('index/Main/delist'); ?>"><i class="fa fa-list"></i>接口列表</a>
          </li>
          <li>
            <a class="<?php echo getAction() == 'dechat' ? 'active-menu' : '' ?>" href="<?php echo url('index/Main/dechat'); ?>"><i class="fa fa-list"></i>添加接口</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-keyboard-o"></i>历史记录</a>
          </li>          
        </ul>
      </li>
      <li>
        <a href="chart.html" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> Charts</a>
      </li>
      <li>
        <a href="tab-panel.html" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
      </li>
      <li>
        <a href="table.html" class="waves-effect waves-dark"><i class="fa fa-table"></i> Responsive Tables</a>
      </li>
      <li>
        <a href="form.html" class="waves-effect waves-dark"><i class="fa fa-edit"></i> Forms </a>
      </li>
    <li>
      <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
      <ul class="nav nav-second-level">
        <li>
          <a href="#">Second Level Link</a>
        </li>
        <li>
          <a href="#">Second Level Link</a>
        </li>
        <li>
          <a href="#">Second Level Link<span class="fa arrow"></span></a>
          <ul class="nav nav-third-level">
            <li>
              <a href="#">Third Level Link</a>
            </li>
            <li>
              <a href="#">Third Level Link</a>
            </li>
            <li>
              <a href="#">Third Level Link</a>
            </li>

          </ul>

        </li>
      </ul>
    </li>
    <li>
      <a href="empty.html" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> Empty Page</a>
    </li>
  </ul>

</div>

</nav>
        <!-- /. NAV SIDE  -->
	<div id="page-wrapper" >
  <div class="header"> 
    <h1 class="page-header">
      添加设备
    </h1>
    <ol class="breadcrumb">
      <li><a href="#">首页</a></li>
      <li><a href="#">智能设备</a></li>
      <li class="active">添加设备</li>
    </ol> 

  </div>

  <div id="page-inner"> 
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-action">
            智能设备
          </div>
          <div class="card-content">
            <form class="col s12" method="post" action="<?php echo url('index/Main/deadd'); ?>" enctype="multipart/form-data">
              <div class="row">
                <div class="input-field col s12">
                  <input id="name" type="text" name="dename" class="validate">
                  <label for="name">设备名称</label>
                </div>
              </div>
              <div class="row col-md-12">
                <p class="pull-left">
                  <input class="with-gap" name="deopen" type="radio" id="on" value="1" />
                  <label for="on">公开</label>
                </p>
                <p class="pull-right">
                  <input class="with-gap" name="deopen" type="radio" id="off" value="0" />
                  <label for="off">不公开</label>
                </p>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" name="deintro" class="materialize-textarea"></textarea>
                  <label for="textarea1">设备简介</label>
                </div>
              </div>
              <div class="row">
                <p class="col-md-2">选择图片</p>
                <input type="file" placeholder="" name="img" class="col-md-8">
              </div>
              <div class="row col-md-6">
                <input type="submit" name="" class="btn btn-primary">
                <input type="reset" name="" class="btn btn-warning">
              </div>
            </form>
            <div class="clearBoth"></div>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>
<footer>    

</footer>
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="/static/assets/js/jquery-1.10.2.js"></script>

<!-- Bootstrap Js -->
<script src="/static/assets/js/bootstrap.min.js"></script>

<script src="/static/assets/materialize/js/materialize.min.js"></script>

<!-- Metis Menu Js -->
<script src="/static/assets/js/jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="/static/assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="/static/assets/js/morris/morris.js"></script>


<script src="/static/assets/js/easypiechart.js"></script>
<script src="/static/assets/js/easypiechart-data.js"></script>

<script src="/static/assets/js/Lightweight-Chart/jquery.chart.js"></script>

<!-- Custom Js -->
<script src="/static/assets/js/custom-scripts.js"></script> 


</body>

</html>