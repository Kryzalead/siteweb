<?php
session_start();
$token = md5(uniqid(rand(), true));
$_SESSION['contact']['token'] = $token;
require('fonctions/config.php');
?>
<!DOCTYPE html>
<html lang="fr"> 
 
<head> 
    <?php include('includes/head.php');?>
	
	  <style type="text/css" media="all">
		#agence {margin:140px 0 40px}
		#agence h1 a {font:normal 2em 'oO';padding-bottom:10px;display:block;cursor:default;}
		#agence p {color:#777;text-align:justify;width:700px;}
	</style>
</head>
 
<body>

	<?php include('includes/message-ie.html');?>
	<!--[if lte IE 6]><style type="text/css">img, div { behavior: url(scripts/iepngfix.htc) }</style><![endif]--> 

	<div id="wrapper"> <!-- DEBUT WRAPPER -->		
		<header role="banner">
			<?php include('includes/header.php');?>
		</header>
		
		<div id="content"><!-- Debut content -->
		
			<section id="agence">
				<h1 class="animer"><a>Qui sommes-nous?</a></h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat ante ut velit ultricies consequat. Suspendisse ultricies, quam id cursus elementum, arcu eros blandit lorem, vitae rhoncus risus ligula sit amet nisl. Cras a nisl neque, sit amet pretium dui. Quisque euismod ultricies imperdiet. Ut velit mauris, viverra sit amet tempus malesuada, ultrices ac libero. Vestibulum eu ante eros, nec aliquet felis. Fusce eu neque risus. Fusce orci tortor, adipiscing nec egestas vel, pellentesque in neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis pellentesque, tellus nec faucibus tristique, nisl odio fermentum augue, vel porttitor leo lorem vitae ipsum.
					</p>
			</section>

		</div><!-- Fin content -->

		<section class="actu">
			<?php include('includes/actu.php');?>
		</section>
		
	<footer role="contentinfo">
		<?php include('includes/footer.php');?>
	</footer>
	
	</div> <!-- FIN WRAPPER -->
	
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo ROOT;?>scripts/formContact.js"></script>
	
	<!--<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-21805318-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
	</script>-->
	</body>
</html>