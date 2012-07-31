<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <?php $liga = $this->session->userdata('liga')?>
        <title><?php echo $liga['nombre']?></title>
        <link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>less/bootstrap.less">
        <script src="<?php echo base_url(); ?>less.js" type="text/javascript"></script>
        <!--<link href="<?php echo base_url(); ?>css/layout.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/<?php echo clean_url($this->session->userdata('url'))?>.css" rel="stylesheet" type="text/css" />
        -->
        <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery-1.4.2.min.js"></script>
        <?php if(strpos(clean_url($this->session->userdata('url')),'ligamania.cl')!==FALSE):?>
        <script type="text/javascript" src="<?php echo base_url()?>scripts/swfobject/swfobject.js"></script>
        <script type="text/javascript">
        var flashvars = {};
        var attributes = {};
        var params = {
        		  bgcolor: "#000000",
        		  		  
        		};
        swfobject.embedSWF("<?php echo base_url()?>imagenes/ligamania2.swf", "myFlash", "680", "150", "9.0.0", false,false, params);
            </script>
        <?php endif ?>
        <?= $league_settings->google_analytics_script ?>
    </head>

    <body>

        <div class="container">
            
            <div id="header">
                <?php include('layout/header.php'); ?>
            </div>
            
            <div class="row">
                <div class="span2" id="menu">
                    <?php include('layout/menu.php'); ?>
                </div>

                <div class="span8" id="wrapper">
                    <div id="content">
                        <?php include('layout/mensajes.php') ?>
                        <?php echo $content_for_layout?>
                    </div>
                </div>
                
                <div class="span2" id="extra">
                    <?php include('layout/right.php'); ?>
                </div>
            </div>
           
            
            <div id="footer"><?php include('layout/footer.php'); ?></div>
            
        </div>

    </body>
</html>

