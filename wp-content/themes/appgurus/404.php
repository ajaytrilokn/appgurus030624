<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<style type="text/css">
	
.page-404-main .page-404-wp{text-align:center;min-height: calc(100vh - 88px);padding: 100px 0px;display: flex;align-items: center;justify-content: center;}
.page-404-main .page-404-wp h2{margin-bottom:10px;font-size:40px;font-weight: 600; line-height: 45px;}
.page-404-main .page-404-wp h5{margin-bottom:10px;font-size:20px;line-height: 28px;}
.home-btn{text-align:center;padding-top:40px;}
.page-404-main .page-404-wp p{font-size:16px;}
.home-btn .btn{font-size:16px;text-transform:none;}
.page-404-row .page-404-text {text-align: center; width: 100%; } 
.page-404-row .page-404-img {  width: 100%; max-width: 650px; margin-bottom: 60px;} 

@media (max-width: 1499px) { 

.page-404-row .page-404-img {max-width: 500px; margin-bottom: 45px; }
.page-404-main .page-404-wp {padding: 75px 0px; }
.page-404-main .page-404-wp h2 {font-size: 32px; line-height: 40px; }
.page-404-main .page-404-wp h5 {font-size: 18px; line-height: 26px; }
.home-btn {padding-top: 25px; }

}

@media (max-width: 767px) { 
.page-404-main .page-404-wp h2 {font-size: 26px; }
.page-404-main .page-404-wp h5 {font-size: 16px; }
.page-404-main .page-404-wp {padding: 70px 15px; }
}

</style>

<main id="site-content" role="main">

	<div class="page-404-main">
		<div class="container">
			<div class="page-404-wp">
				<div class="page-404-inner">
					<div class="page-404-row">
						<div class="page-404-img">
							<img class="page-404" src="<?php bloginfo('template_directory'); ?>/images/page404-img01.png" alt="#">
						</div>
						<div class="page-404-text">
							<h2>Page Not Found</h2>
							<h5>The page You’re looking for does not seem to exist</h5>

							<div class="home-btn">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">Go to Home</a>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>

</main>


<?php
get_footer();
