<?php
/**
* PETAK-IT - Web template
* Main template entry point.
* Autor: Jiri Petak
* E-mail: petakjiri89@gmail.com
*/

// Restrict access (only from joomla) - no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Import JQuery Framework
JHtml::_('jquery.framework');

?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/layout.css" type="text/css" />
</head>
<body>
	<img id="body_bg" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/bg_page.jpg" />
	<header>
		<div class="wrap">
			<div class="web_title">
				<a href="index.php"><img class="logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png"></a>
				<div class="text">
					Peták Informační Technologie
				</div>
			</div>
		</div>
	</header>
	<div class="breadcrumbs">
		<jdoc:include type="modules" name="breadcrumbs" />
	</div>
	<div class="content">
		<div class="left">
			<div class="main-menu">
				<jdoc:include type="modules" name="main-menu" />
			</div>
			<div class="login-form">
				<jdoc:include type="modules" name="login-form" />
			</div>
		</div>
		<div class="right">
			<jdoc:include type="component" />
		</div>
	</div>
	<footer>
	</footer>
</body>
</html>