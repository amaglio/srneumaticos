<!DOCTYPE HTML>
<?php
$controller=$this->router->fetch_class(); // CAMBIAR EL CONTROLADOR POR LA FUNCION
?>
<html>
<head>
    <meta charset="utf-8">
    <title>S•R: neumaticos + mecanica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->

    <link href="<?=base_url()?>assets/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="<?=base_url()?>assets/js/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="<?=base_url()?>assets/js/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="<?=base_url()?>assets/js/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/js/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="<?=base_url()?>assets/js/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="<?=base_url()?>assets/js/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="<?=base_url()?>assets/js/carousel/style.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/js/camera/css/camera.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet" type="text/css" />
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left" style=" margin-top:10px ">
                         <img src="<?=base_url()?>assets/imagenes/logo.png">
                    </div>
                    <div id="divLogo" class="pull-left" style=" float:right; font-weight:bold; font-size:12px; margin-top:10px  ">
                         <div  style="  padding-right:11px; font-size:13px;  padding-left:10px;">    <i class="general foundicon-home icon" style="color:#C3211F; padding-right:10px;"></i> Av. San Juan 1463. Capital Federal</div>   
                         <div  style="  padding-right:11px; font-size:13px;  padding-left:10px;">  <i class="general foundicon-phone icon" style="color:#C3211F; padding-right:10px; "></i> 4305-4205 </div>  
                         <div  style="  padding-right:11px; font-size:13px;  padding-left:10px;">  <i class="general foundicon-mail icon"  style="color:#C3211F; padding-right:10px;"></i>   srneumaticos@yahoo.com.ar </div>     
                    </div>

                    <div id="divMenuRight" class="pull-right" style="  padding:0px; ">
                        <div class="navbar" >
                            <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                                MENU <span class="icon-chevron-down icon-white"></span>
                            </button>
                            <div class="nav-collapse collapse" >
                                <ul class="nav nav-pills ddmenu" style="margin-top:10px;  ">
                                    <li style="width:129px; text-align:center;" <?php if($controller=='index') echo "class='active'"; ?> > <a style=" font-size:13px;  font-family:arial; " href="<?=base_url()?>index.php/index"> Home</a></li>
                                    <li <?php if($controller=='neumaticos_autos') echo "class='active'"; ?> style="  text-align:center;"><a style="font-size:13px; font-family:arial; "  href="<?=base_url()?>index.php/neumaticos/neumaticos_autos">Neumaticos autos</a></li>
                                    <li <?php if($controller=='neumaticos_autos') echo "class='active'"; ?> style="  text-align:center;"><a style="font-size:13px; font-family:arial; "  href="<?=base_url()?>index.php/neumaticos/neumaticos_autos">Neumaticos camionetas</a></li>
                                    <li <?php if($controller=='servicios') echo "class='active'"; ?> style="  text-align:center;"><a style="font-size:13px; font-family:arial; "  href="<?=base_url()?>index.php/servicios">Servicioss</a></li>
                                    <li <?php if($controller=='ofertas') echo "class='active'"; ?> style="  text-align:center;"><a style="font-size:13px; font-family:arial; "  href="<?=base_url()?>index.php/ofertas">Ofertas</a></li>
                                    <li <?php if($controller=='datos_tecnicos') echo "class='active'"; ?>style=" text-align:center;"><a style="font-size:13px; font-family:arial; "  href="<?=base_url()?>index.php/contacto">Datos tecnicos</a></li>
                                    <li <?php if($controller=='contacto') echo "class='active'"; ?>style="width:142px;   text-align:center;"><a style="font-size:13px; font-family:arial; "  href="<?=base_url()?>index.php/bio">Contacto</a></li>
                                </ul>
                             </div>
                        </div>
                    </div>

                </div>
            </div> 

   