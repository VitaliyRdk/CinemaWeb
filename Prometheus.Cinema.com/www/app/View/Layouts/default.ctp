<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Welcome to Prometheus</title>

	<meta name="description" content="..." />
	<meta name="keywords" content="..." />

		<style type="text/css" media="all">
		@import url("/css/style.css");
		@import url("/css/nivo-slider.css");
		@import url("/css/custom-nivo-slider.css");
		@import url("/css/jquery.fancybox.css");
	</style>
	<!--[if lt IE 8]><style type="text/css" media="all">@import url("css/ie.css");</style><![endif]-->
</head>
<body>
	<div id="bgc">				
		<div class="wrapper">	
			<div id="header">
				<h1><a href="#"><span></span></a></h1>
				<ul>
					<li><a href="/" class="active">Головна сторінка</a></li>
					<li><a href="/index/about">Про нас</a></li>
                    <li><a href="/afisha">Афіша</a></li>
					<li><a href="/Fnews/">Підписка на новини</a></li>
				</ul>
			</div>
			<div id="holder">
				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>
			</div>	
			<div id="footer">
				<p class="right"> Prometheus &copy; 2016. Неперевершенні та якісні вільми саме у нас.</p>
			</div>	
		</div>	
	</div>
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="/js/jquery.easing.pack.js"></script>
	<script type="text/javascript" src="/js/DD_belatedPNG.js"></script>
	<script type="text/javascript" src="/js/filter.js"></script>
	<script type="text/javascript" src="/js/custom.js"></script>

</body>
</html>
<?php echo $this->element('sql_dump'); ?>


	<?php
		/*echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');*/
	?>

