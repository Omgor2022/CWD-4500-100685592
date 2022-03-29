<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Herbal_Beauty
 */

?>
</div>
	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter-text">
						<h4>Newsletter</h4>
						<p>Subscribe our newsletter and  keep update fo new product & Promotion</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter-form">
							<input id="newsletter-email" class="input-control has-white-background-color" type="email" placeholder="Your Email Address" required="required" >
							<button id="newsletter-submit" type="submit" class="primary-btn has-primary-background-color has-grayish-black-color" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<footer>
	<div id="footer-1">

	<?php
	if(is_active_sidebar('footer-1')){
	dynamic_sidebar('footer-1');
	}
	?>
	</div>

	<div id="footer-2">

	<?php
	if(is_active_sidebar('footer-2')){
	dynamic_sidebar('footer-2');
	}
	?>
	</div>

	<div id="footer-3">

	<?php
	if(is_active_sidebar('footer-3')){
	dynamic_sidebar('footer-3');
	}
	?>

	</div>

	<div id="footer-4">

	<?php
	if(is_active_sidebar('footer-4')){
	dynamic_sidebar('footer-4');
	}
	?>


	</div>
         
</footer>
