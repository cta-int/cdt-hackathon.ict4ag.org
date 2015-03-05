</div>
</div>
<!-- Wrapper / End -->


<!-- Footer Start -->
<div id="footer">

	<!-- 960 Container -->
	<div class="container">

		<div class="four columns">
			 <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1st Column')) : endif; ?>
		</div>

		<div class="four columns">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2nd Column')) : endif; ?>
		</div>


		<div class="four columns">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3rd Column')) : endif; ?>
		</div>

		<div class="four columns">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 4th Column')) : endif; ?>
		</div>

		<div class="sixteen columns">
			<div id="footer-bottom">
				<?php $copyrights = ot_get_option('copyrights' );  echo $copyrights?>
				<div id="scroll-top-top"><a href="#"></a></div>
			</div>
		</div>

	</div>
	<!-- 960 Container End -->

</div>
<!-- Footer End -->


<?php wp_footer();

?>

</body>
</html>