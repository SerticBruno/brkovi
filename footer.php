</div>
		<?php
			$footer = get_field('footer', 'option');
			//myErr($footer);
		?>
		<footer class="footer pb-3" role="contentinfo">
			<div class="footer-rip">
				<img src="<?php echo THEME_URL ?>/assets/img/png/footer-rip.png"/>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-2">
							<?php  wp_nav_menu(
							[
								'theme_location'  => 'footer',
								'menu_class'      => 'navbar-nav d-flex flex-wrap',
								'container_class' => 'menu-footer',
								'container_id'    => 'menu-footer',
							]
						); ?>
					</div>
					<div class="col-8">
						<ul class="footer-socials d-flex justify-content-around">
							<li class="d-inline">
								<a class="d-inline-block" href="#">
									<img src="<?php echo THEME_URL ?>/assets/img/logos/amazon-pay.png"/>
								</a>
							</li>
							<li class="d-inline">
								<a class="d-inline-block" href="#">
									<img src="<?php echo THEME_URL ?>/assets/img/logos/apple-pay.png"/>
								</a>
							</li>
							<li class="d-inline">
								<a class="d-inline-block" href="#">
									<img src="<?php echo THEME_URL ?>/assets/img/logos/deezer.png"/>
								</a>
							</li>
							<li class="d-inline">
								<a class="d-inline-block" href="#">
									<img src="<?php echo THEME_URL ?>/assets/img/logos/facebook.png"/>
								</a>
							</li>
							<li class="d-inline">
								<a class="d-inline-block" href="#">
									<img src="<?php echo THEME_URL ?>/assets/img/logos/spotify.png"/>
								</a>
							</li>
						</ul>						
					</div>
					<div class="col-2 info-text">
						<p>
							10 000, Zagreb<br>
							Croatia, republic of
						</p>
						<!-- <a href="mailto: dovedibrkove@gmail.com">dovedibrkove@gmail.com</a> -->
					</div>
				</div>
			</div>
			<div id="copyright" class="text-center">
				&copy; <?php echo esc_html( date_i18n( __( 'Y', 'brkovi' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			</div>
		</footer>
		</div>
		<?php wp_footer(); ?>
		<script type="text/javascript">
			var homeUrl = '<?php echo get_template_directory_uri(); ?>';
			var curr_post_id = '<?php echo $post->ID; ?>';
			var adminAjax = '<?php echo admin_url('admin-ajax.php'); ?>';
			// console.log(curPageID);
		</script>
	</body>
</html>