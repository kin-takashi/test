<link rel="stylesheet" href="wordpress/wp-content/themes/julie-two/style.css" />
<?php
/**
 * The template for displaying archive pages 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julie-two
 */

get_header();
?>
<style>
	.pro {
		position: relative;
		background-color: aqua;
		display: flex;
		justify-content: center;
		align-items: center;
		text-align: center;
	}
</style>
<link rel="stylesheet" href="_product.scss">


<section class="container py-3">
	<span class="display-4">SẢN PHẨM</span>
	<br />
</section>
<div class="container">
	<div class="row ">
		<!--thanh tim kiem -->
		<div class="col-3">
			<section class="container py-3 ">

				<!-- Sidebar -->
				<div class="card">
					<div class="card-body">
						<div class="page-product-list--sidebar">
							<?php get_template_part('template-parts/sidebar', 'product'); ?>

						</div>
						Sidebar content here
					</div>

				</div>
			</section>
		</div>

		<div class=" col">
			<section class="container py-3">
				<!-- Search form -->
				<div class="row justify-content">
					<div class="col">
						<form class="form-inline">
							<div class="input-group">
								<input class="form-control" type="search" placeholder="Search" aria-label="Search">
								<div class="input-group-append">
									<button class="btn btn-outline-primary" type="submit">Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>


			<section class="container py-3">
				<!-- Product list -->
				<div class="col	">
					<!-- Product items -->
					<div class="row">
						<!-- Product item -->
						<?php while (have_posts()): ?>
							<?php the_post();
							$productMeta = get_post_meta(get_the_ID());
							$product_price = get_post_meta(get_the_ID(), '_product_price', true);
							
							?>
							<div class="col-md-4 mb-4">
								<div class="card">
									<img src="<?php the_post_thumbnail_url('Thumbnails'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
									<div class="card-body">
										<h5 class="card-title"><?php the_title(); ?></h5>
										<p class="card-text"><?php echo $productMeta["code"][0]; ?> - <?php echo $productMeta["size"][0]; ?>
										+++++</p>
										<p class="card-text">Giá:<?php echo $product_price; ?>VNĐ</p>
										<a href= "<?php the_permalink(); ?>"class="btn btn-primary">Details</a>
										<p> <?php echo $post_id ?></p>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>

			</section>
		</div>
	</div>
</div>