<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Prometheus &#9679; Афіша</title>

	<meta name="description" content="..." />
	<meta name="keywords" content="..." />

	<style type="text/css" media="all">
		@import url("/css/style1.css");
		@import url("/css/nivo-slider.css");
		@import url("/css/custom-nivo-slider.css");
		@import url("/css/jquery.fancybox.css");
    </style>
</head>
<body>
	<div id="bgc">					
		<div class="wrapper">	
			<div id="header">
				<h1><a href="#"><span>Prometheus</span></a></h1>
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
				<p class="right">Prometheus &copy; 2016. Неперевершенні та якісні вільми саме у нас.</p>
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