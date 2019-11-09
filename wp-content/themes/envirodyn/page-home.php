<?php
/*
	Template Name: Home Page
*/ 

// Advanced Custom Fields (Product Categories)
$water_treatment_title	=	get_field('water_treatment_category_title');
$water_treatment_img	=	get_field('water_treatment_thumbnail_img');
$water_treatment_desc	=	get_field('water_treatment_description');

$petrochemicals_title	=	get_field('petrochemicals_category_title');
$petrochemicals_img		=	get_field('petrochemicals_thumbnail_img');
$petrochemicals_desc	=	get_field('petrochemicals_description');

$agriculture_title		=	get_field('agriculture_category_title');
$agriculture_img		=	get_field('agriculture_thumbnail_img');
$agriculature_desc		=	get_field('agriculture_description');

$home_plubming_title	=	get_field('home_plumbing_category_title');
$home_plumbing_img		=	get_field('home_plumbing_thumbnail_img');
$home_plumbing_desc		=	get_field('home_plumbing_description');

// Advanced Custom Fields (Our Product Section Excerpt)
$category_section_desc	=	get_field('our_product_description');

get_header();

?>

<section id="our-company">
	<div class="container p-3">
		
		<h1 class="p-3">Our Company</h1>
		<div class="row p-3">
			<!-- <div class="col-12 col-sm-8 col-md-8"> -->
				<?php 
					while(have_posts()) : the_post();
						echo the_content();
					endwhile;
				?>
			<!-- </div> -->
			<div class="col-12 col-sm-4 col-md-4">
				<figure class="company-logo">
					<?php 
						$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
					?>
					<img src="<?php echo $image[0]; ?>" alt="" class="img-responsive">
				</figure>
			</div>
		</div>
	</div>
</section>
<section id="our-products">
	<div class="container-fluid bg-success py-5">
		<div class="container text-white">

			<!-- Products Section Block -->
			<div class="title-block text-center">
				<h1 class="my-0">Our Products</h1>
				<?php if( !empty($category_section_desc) ) : ?>
					<p class="lead text-center"><?php echo $category_section_desc; ?></p>
				<?php endif; ?>
			</div>
			<!-- End of Products Section Block -->

			<!-- Product Categories Menu Block -->
			<ul id="tabs" class="nav nav-tabs row" role="tablist">

				<!-- Water Treatment Category Menu -->
				<!-- // $loop = new WP_Query( array('post_type' => 'product_categories', 'orderby' => 'post_id', 'order' => 'ASC')); ?> -->
				<!-- // while( $loop->have_posts() ) : $loop->the_post(); ?> -->

				<li class="nav-item col-12 col-sm-3 col-md-3 card">
					<a id="tab-water-treatment" href="#pane-water-treatment" class="nav-link active" data-toggle="tab" role="tab">
						<div class="product-cat-details">
							<div class="card">
								<figure class="m-0">
									<img src="<?php echo $water_treatment_img['url']; ?>" alt="<?php echo $water_treatment_img['alt']; ?>" class="img-responsive">
								</figure>
								<div class="product-cat-details p-3">
									<p class="font-weight-bold"><?php echo $water_treatment_title; ?></p>
									<p class="py-3"><?php echo $water_treatment_desc; ?></p>
								</div>
							</div>
						</div>
					</a>
				</li>
				<!-- // endwhile; ?> -->

				<!-- Petrochemicals Category Menu -->
				<li class="nav-item col-12 col-sm-3 col-md-3 card">
					<a id="tab-petrochemicals" href="#pane-petrochemicals" class="nav-link" data-toggle="tab" role="tab">
						<div class="card">
							<figure class="m-0">
								<img src="<?php echo $petrochemicals_img['url']; ?>" alt="<?php echo $petrochemicals_img['alt']; ?>" class="img-responsive">
							</figure>
							<div class="product-cat-details p-3">
								<p class="font-weight-bold"><?php echo $petrochemicals_title; ?></p>
								<p class="py-3"><?php echo $petrochemicals_desc; ?></p>
							</div>
						</div>
					</a>
				</li>
				
				<!-- Agriculture Category Menu -->
				<li class="nav-item col-12 col-sm-3 col-md-3 card">
					<a id="tab-agriculture" href="#pane-agriculture" class="nav-link" data-toggle="tab" role="tab">
						<div class="card">
							<figure class="m-0">
								<img src="<?php echo $agriculture_img['url']; ?>" alt="<?php echo $agriculture_img['alt']; ?>" class="img-responsive">
							</figure>
							<div class="product-cat-details p-3">
								<p class="font-weight-bold"><?php echo $agriculture_title; ?></p>
								<p class="py-3"><?php echo $agriculature_desc; ?></p>
							</div>
						</div>
					</a>
				</li>

				<!-- Home Plumbing Category Menu -->
				<li class="nav-item col-12 col-sm-3 col-md-3 card">
					<a id="tab-home-plumbing" href="#pane-home-plumbing" class="nav-link" data-toggle="tab" role="tab">
						<div class="card">
							<figure class="m-0">
								<img src="<?php echo $home_plumbing_img['url']; ?>" alt="<?php echo $home_plumbing_img['alt']; ?>" class="img-responsive">
							</figure>
							<div class="product-cat-details p-3">
								<p class="font-weight-bold"><?php echo $home_plubming_title; ?></p>
								<p class="py-3"><?php echo $home_plumbing_desc; ?></p>
							</div>
						</div>
					</a>
				</li>
			</ul>
			<!-- End of Product Categories Menu Block -->
			
		</div>
	</div>
	
	<div class="container my-5 py-5">
		<!-- Tabbed Products with Accordion -->
		<div id="content" class="tab-content" role="tablist">

		<!-- Water Treatment Tab Content -->
		<div id="pane-water-treatment" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-water-treatment">
			<!-- Accordion Heading Here -->
			<div class="card-header" role="tab" id="heading-water-treatment">
				<h5 class="mb-0">
					<!-- Note: `data-parent` removed from here -->
					<a data-toggle="collapse" href="#collapse-water-treatment" aria-expanded="true" aria-controls="collapse-water-treatment">
						Municipal & Industrial Wastewater Treatment
					</a>
				</h5>
			</div>

			<!-- Accordion Content Here -->
			<div id="collapse-water-treatment" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-water-treatment">
				<div class="card-body">
					<!-- Product Loop Here -->
					<div class="row">
						<?php 
							$category = "Industrial Water Treatment";
							$loop = new WP_Query( array('post_type' => 'products', 'orderby' => 'post_id', 'order' => 'ASC', 'category_name' => $category));
						?>
						<?php if(!$loop->have_posts()) { ?>
							<div class="alert alert-warning col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 text-center my-5">No Products under this category found!</div>
						<?php } else { ?>
						
						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="col-12 col-sm-3 col-md-3 px-3 mb-5">
								<div class="product-box border p-3">
									<h3><?php the_title(); ?></h3>
									<?php 
										$external_link_1	=	get_field('external_resource_1');
										$external_link_2	=	get_field('external_resource_2');
										$external_link_3	=	get_field('external_resource_3');
									?>
									<p class="small"><?php the_field('brief_description'); ?></p>
									<?php if( !empty(esc_attr($external_link_1)) ) : ?>
										<a href="<?php the_field('external_resource_1'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 1</a>
									<?php endif; ?>
									<?php if( !empty(esc_attr($external_link_2)) ) : ?>
										<a href="<?php the_field('external_resource_2'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 2</a>
									<?php endif; ?>
									<?php if( !empty(esc_attr($external_link_3)) ) : ?>
										<a href="<?php the_field('external_resource_3'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 3</a>
									<?php endif; ?>

									<?php
										$uploaded_resource_1	=	get_field('uploaded_resource_1');
										$uploaded_resource_2	=	get_field('uploaded_resource_2');
										$uploaded_resource_3	=	get_field('uploaded_resource_3');
									?>
									<?php if(!empty($uploaded_resource_1['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_1['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 1</a>
									<?php endif; ?>
									<?php if(!empty($uploaded_resource_2['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_2['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 2</a>
									<?php endif; ?>
									<?php if(!empty($uploaded_resource_3['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_3['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 3</a>
									<?php endif; ?>

									<a href="" class="btn btn-success btn-block">More Info</a>
								</div>
							</div>
						<?php endwhile; ?>

						<?php } ?>
					</div>
					<!-- End of Product Loop Here -->

					<!-- Pagination Here -->
					<nav aria-label="Page navigation example" class="">
						<ul class="pagination justify-content-center">
							<li class="page-item"><a class="page-link" href="#">Previous</a></li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">Next</a></li>
						</ul>
					</nav>   
					<!-- End of Pagination Here -->
				</div>
			</div>
		</div>

		<!-- Petrochemicals Tab Content -->
		<div id="pane-petrochemicals" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-petrochemicals">
			<!-- Accordion Heading Here -->
			<div class="card-header" role="tab" id="heading-petrochemicals">
				<h5 class="mb-0">
					<a class="collapsed" data-toggle="collapse" href="#collapse-petrochemicals" aria-expanded="false" aria-controls="collapse-petrochemicals">
						Petrochemicals
					</a>
				</h5>
			</div>
			<!-- End of Accordion Heading Here -->

			<!-- Accordion Content Here -->
			<div id="collapse-petrochemicals" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-petrochemicals">
				<div class="card-body">
					<!-- Product Loop Here -->
					<div class="row">
						<?php 
							$category = "Petrochemicals";
							$loop = new WP_Query( array('post_type' => 'products', 'orderby' => 'post_id', 'order' => 'ASC', 'category_name' => $category));
						?>
						<?php if(!$loop->have_posts()) { ?>
							<div class="alert alert-warning col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 text-center my-5">No Products under this category found!</div>
						<?php } else { ?>
						
						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="col-12 col-sm-3 col-md-3 px-3 mb-5">
								<div class="product-box border p-3">
									<h3><?php the_title(); ?></h3>
									<?php 
										$external_link_1	=	get_field('external_resource_1');
										$external_link_2	=	get_field('external_resource_2');
										$external_link_3	=	get_field('external_resource_3');
									?>
									<p class="small"><?php the_field('brief_description'); ?></p>
									<?php if( !empty(esc_attr($external_link_1)) ) : ?>
										<a href="<?php the_field('external_resource_1'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 1</a>
									<?php endif; ?>
									<?php if( !empty(esc_attr($external_link_2)) ) : ?>
										<a href="<?php the_field('external_resource_2'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 2</a>
									<?php endif; ?>
									<?php if( !empty(esc_attr($external_link_3)) ) : ?>
										<a href="<?php the_field('external_resource_3'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 3</a>
									<?php endif; ?>

									<?php
										$uploaded_resource_1	=	get_field('uploaded_resource_1');
										$uploaded_resource_2	=	get_field('uploaded_resource_2');
										$uploaded_resource_3	=	get_field('uploaded_resource_3');
									?>
									<?php if(!empty($uploaded_resource_1['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_1['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 1</a>
									<?php endif; ?>
									<?php if(!empty($uploaded_resource_2['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_2['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 2</a>
									<?php endif; ?>
									<?php if(!empty($uploaded_resource_3['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_3['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 3</a>
									<?php endif; ?>

									<a href="" class="btn btn-success btn-block">More Info</a>
								</div>
							</div>
						<?php endwhile; ?>

						<?php } ?>
					</div>
					<!-- End of Product Loop Here -->

					<!-- Pagination Here -->
					<nav aria-label="Page navigation example" class="">
						<ul class="pagination justify-content-center">
							<li class="page-item"><a class="page-link" href="#">Previous</a></li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">Next</a></li>
						</ul>
					</nav> 
					<!-- End of Pagination Here -->
				</div>
			</div>
			<!-- End of Accordion Content Here -->
		</div>

		<!-- Agriculture Tab Content -->
		<div id="pane-agriculture" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-agriculture">
			<!-- Accordion Heading Here -->
			<div class="card-header" role="tab" id="heading-agriculture">
				<h5 class="mb-0">
					<a class="collapsed" data-toggle="collapse" href="#collapse-agriculture" aria-expanded="false" aria-controls="collapse-agriculture">
						Agriculture
					</a>
				</h5>
			</div>
			<!-- End of Accordion Here -->

			<!-- Accordion Content Here -->
			<div id="collapse-agriculture" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-agriculture">
				<div class="card-body">
					<!-- Product Loop Here -->
					<div class="row">
						<?php 
							$category = "Agriculture";
							$loop = new WP_Query( array('post_type' => 'products', 'orderby' => 'post_id', 'order' => 'ASC', 'category_name' => $category));
						?>
						<?php if(!$loop->have_posts()) { ?>
							<div class="alert alert-warning col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 text-center my-5">No Products under this category found!</div>
						<?php } else { ?>
						
						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="col-12 col-sm-3 col-md-3 px-3 mb-5">
								<div class="product-box border p-3">
									<h3><?php the_title(); ?></h3>
									<?php 
										$external_link_1	=	get_field('external_resource_1');
										$external_link_2	=	get_field('external_resource_2');
										$external_link_3	=	get_field('external_resource_3');
									?>
									<p class="small"><?php the_field('brief_description'); ?></p>
									<?php if( !empty(esc_attr($external_link_1)) ) : ?>
										<a href="<?php the_field('external_resource_1'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 1</a>
									<?php endif; ?>
									<?php if( !empty(esc_attr($external_link_2)) ) : ?>
										<a href="<?php the_field('external_resource_2'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 2</a>
									<?php endif; ?>
									<?php if( !empty(esc_attr($external_link_3)) ) : ?>
										<a href="<?php the_field('external_resource_3'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 3</a>
									<?php endif; ?>

									<?php
										$uploaded_resource_1	=	get_field('uploaded_resource_1');
										$uploaded_resource_2	=	get_field('uploaded_resource_2');
										$uploaded_resource_3	=	get_field('uploaded_resource_3');
									?>
									<?php if(!empty($uploaded_resource_1['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_1['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 1</a>
									<?php endif; ?>
									<?php if(!empty($uploaded_resource_2['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_2['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 2</a>
									<?php endif; ?>
									<?php if(!empty($uploaded_resource_3['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_3['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 3</a>
									<?php endif; ?>

									<a href="" class="btn btn-success btn-block">More Info</a>
								</div>
							</div>
						<?php endwhile; ?>

						<?php } ?>
					</div>
					<!-- End of Product Loop Here -->

					<!-- Pagination Here-->
					<nav aria-label="Page navigation example" class="">
						<ul class="pagination justify-content-center">
							<li class="page-item"><a class="page-link" href="#">Previous</a></li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">Next</a></li>
						</ul>
					</nav>   
					<!-- End of Pagination Here -->
				</div>
			</div>
			<!-- End of Accordion Content Here -->
		</div>

		<!-- Home Plumbing Tab Content -->
		<div id="pane-home-plumbing" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-home-plumbing">
			<!-- Accordion Heading -->
			<div class="card-header" role="tab" id="heading-home-plumbing">
				<h5 class="mb-0">
					<a class="collapsed" data-toggle="collapse" href="#collapse-home-plumbing" aria-expanded="false" aria-controls="collapse-home-plumbing">
						Commercial & Home Plumbing
					</a>
				</h5>
			</div>
			<!-- End of Accordion Heading -->
			<!-- Accordion Content -->
			<div id="collapse-home-plumbing" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-home-plumbing">
				<div class="card-body">
					<!-- Product Loop Here -->
					<div class="row">
						<?php 
							$category = "Home Plumbing";
							$loop = new WP_Query( array('post_type' => 'products', 'orderby' => 'post_id', 'order' => 'ASC', 'category_name' => $category));
						?>
						<?php if(!$loop->have_posts()) { ?>
							<div class="alert alert-warning col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 text-center my-5">No Products under this category found!</div>
						<?php } else { ?>
						
						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="col-12 col-sm-3 col-md-3 px-3 mb-5">
								<div class="product-box border p-3">
									<h3><?php the_title(); ?></h3>
									<?php 
										$external_link_1	=	get_field('external_resource_1');
										$external_link_2	=	get_field('external_resource_2');
										$external_link_3	=	get_field('external_resource_3');
									?>
									<p class="small"><?php the_field('brief_description'); ?></p>
									<?php if( !empty(esc_attr($external_link_1)) ) : ?>
										<a href="<?php the_field('external_resource_1'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 1</a>
									<?php endif; ?>
									<?php if( !empty(esc_attr($external_link_2)) ) : ?>
										<a href="<?php the_field('external_resource_2'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 2</a>
									<?php endif; ?>
									<?php if( !empty(esc_attr($external_link_3)) ) : ?>
										<a href="<?php the_field('external_resource_3'); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Link 3</a>
									<?php endif; ?>

									<?php
										$uploaded_resource_1	=	get_field('uploaded_resource_1');
										$uploaded_resource_2	=	get_field('uploaded_resource_2');
										$uploaded_resource_3	=	get_field('uploaded_resource_3');
									?>
									<?php if(!empty($uploaded_resource_1['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_1['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 1</a>
									<?php endif; ?>
									<?php if(!empty($uploaded_resource_2['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_2['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 2</a>
									<?php endif; ?>
									<?php if(!empty($uploaded_resource_3['url']) ) : ?>
										<a href="<?php echo esc_attr($uploaded_resource_3['url']); ?>" class="btn btn-info btn-block btn-sm" target="_blank">Resource 3</a>
									<?php endif; ?>

									<a href="" class="btn btn-success btn-block">More Info</a>
								</div>
							</div>
						<?php endwhile; ?>
						<?php } ?>
					</div>
					<!-- End of Product Loop Here -->

					<!-- Pagination Block -->
					<nav aria-label="Page navigation example" class="">
						<ul class="pagination justify-content-center">
							<li class="page-item"><a class="page-link" href="#">Previous</a></li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">Next</a></li>
						</ul>
					</nav>  
					<!-- End of Pagination Block -->
				</div>
			</div>
			<!-- End of Accordion Content -->

		</div>

		</div>
		<!-- End of Tabbed Products with Accordion -->
	</div>
</section>




<div id="testimonials">
	<div class="container-fluid bg-success">
		<div class="container pt-3 pb-5 text-white">
			<h2 class="text-center my-5">What our Customers Say</h2>
			<div id="testimonial-slider" class="mb-5">
				<?php echo do_shortcode('[sp_testimonial id="22"]'); ?>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="container p-3">
		<div class="row">
			<div class="col-12 col-sm-8 col-md-8">
				<p>Physical Address: Invisible Street, Unknown City, INV, Country 12345</p>
			</div>
			<div class="col-12 col-sm-4 col-md-4 d-flex justify-content-center">
				<p class="justify-content-end">Copywright 2019</p>
			</div>
		</div>
	</div>
</footer>
<?php get_footer(); ?>
