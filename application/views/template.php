<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd"> 
 
<html lang="en"> 
  <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <title><?= $title ?></title> 
 
    <!-- Framework CSS --> 
    <link rel="stylesheet" href="/volunteer/gui/css/blueprint/screen.css" type="text/css" media="screen, projection"> 
    <link rel="stylesheet" href="/volunteer/gui/css/print.css" type="text/css" media="print"> 
    <!--[if lt IE 8]><link rel="stylesheet" href="../../blueprint/ie.css" type="text/css" media="screen, projection"><![endif]--> 
 
    <!-- Import fancy-type plugin for the sample page. --> 
    <link rel="stylesheet" href="/volunteer/gui/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection"> 
  </head> 
  <body> 
    <div class="container"> 

	<h1><?= $title ?></h1>
	
	<?= $contents ?>
	
	<!-- Start footer -->
	<div id="footer">Copyright <?php echo date("Y");  ?> <?= $title ?></div>
	</div> 
  </body> 
</html> 