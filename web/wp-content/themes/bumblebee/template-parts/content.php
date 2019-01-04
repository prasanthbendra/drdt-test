<?php
/** Content template

 * @package bumblebee
 */

?>
<div class="pure-g opening-content">
	<div class="pure-u-md-3-24 pure-u-lg-3-24 pure-u-xl-3-24 hide-on-mobile">
		<div class="social-share">
			<ul class="pure-menu-list social-menu">
				<li class="pure-menu-item"><a href="#" class="pure-menu-link"><img class="social-icons" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/envelope-regular.svg" /></a></li>
				<li class="pure-menu-item"><a href="#" class="pure-menu-link"><img class="social-icons" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/facebook-f-brands.svg" /></a></li>
				<li class="pure-menu-item"><a href="#" class="pure-menu-link"><img class="social-icons" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/pinterest-p-brands.svg" /></a></li>
			</ul>
		</div>
	</div>
	<div class="pure-u-sm-1 pure-u-md-14-24 pure-u-lg-14-24 pure-u-xl-14-24">
		<div class="post-content">
			<h1 class="post-title"> <?php echo get_the_title(); ?> </h1>
			<div class="pure-g social-share-mobile hide-on-desktop">
				<div class="pure-u-sm-1 social-share-wrapper">
					<div class="pure-menu pure-menu-horizontal">
						<ul class="pure-menu-list social-menu-mobile">
							<li class="pure-menu-item"><a href="#" class="pure-menu-link"><img class="social-icons" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/envelope-regular.svg" /></a></li>
							<li class="pure-menu-item"><a href="#" class="pure-menu-link"><img class="social-icons" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/facebook-f-brands.svg" /></a></li>
							<li class="pure-menu-item"><a href="#" class="pure-menu-link"><img class="social-icons" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/pinterest-p-brands.svg" /></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="post-body">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
