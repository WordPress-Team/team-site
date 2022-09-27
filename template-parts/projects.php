<div class="slider" id="projects">
	
	<!-- ////////////////////////////// -->
	<!-- Section designed &  developed by Grace B.  -->
	<!-- ///////////////////////////// -->

	<h2 class="project-title"><?php the_field('project_title') ?></h2>
	<h3 class="project-sub"><?php the_field('project_subtitle') ?></h3>
	<hr>
		<input type="radio" name="testimonial" id="t-1">
		<input type="radio" name="testimonial" id="t-2" checked>
		<input type="radio" name="testimonial" id="t-3">
		<!-- <input type="radio" name="testimonial" id="t-4">
		<input type="radio" name="testimonial" id="t-5"> -->
		<div class="website">

			<label class="item" for="t-1">
				<img src="<?php the_field('site_image_1') ?>" alt="picture">
			<h2 class="site-name"><a href="<?php the_field('site_link_1') ?>" target="_blank"><?php the_field('site_name_1') ?></a></h2>
				<p><?php the_field('site_desc_1') ?></p>
				<h3><?php the_field('site_lead_1') ?></h3>
				<h4><?php the_field('site_devs_1') ?></h4>
				<button class="project-view">
					<a href="<?php the_field('site_link_1') ?>">
					View
					</a>
				</button>
			</label>

			<label class="item" for="t-2">
			<img src="<?php the_field('site_image_2') ?>" alt="picture">
			<h2 class="site-name"><a href="<?php the_field('site_link_2') ?>" target="_blank"><?php the_field('site_name_2') ?></a></h2>
				<p><?php the_field('site_desc_2') ?></p>
				<h3><?php the_field('site_lead_2') ?></h3>
				<h4><?php the_field('site_devs_2') ?></h4>
				<button class="project-view">
					<a href="<?php the_field('site_link_2') ?>">
					View
					</a>
				</button>
			</label>

			<label class="item" for="t-3">
			<img src="<?php the_field('site_image_3') ?>" alt="picture">
			<h2 class="site-name"><a href="<?php the_field('site_link_3') ?>" target="_blank"><?php the_field('site_name_3') ?></a></h2>
				<p><?php the_field('site_desc_3') ?></p>
				<h3><?php the_field('site_lead_3') ?></h3>
				<h4><?php the_field('site_devs_3') ?></h4>
				<button class="project-view">
					<a href="<?php the_field('site_link_3') ?>">
					View
					</a>
				</button>
			</label>

			<!-- <label class="item" for="t-4">
			<img src="<?php the_field('site_image_4') ?>" alt="picture">
			<h2 class="site-name"><a href="<?php the_field('site_link_4') ?>" target="_blank"><?php the_field('site_name_4') ?></a></h2>
				<p><?php the_field('site_desc_4') ?></p>
				<h3><?php the_field('site_lead_4') ?></h3>
				<h4><?php the_field('site_devs_4') ?></h4>
			</label>

			<label class="item" for="t-5">
			<img src="<?php the_field('site_image_5') ?>" alt="picture">
			<h2 class="site-name"><a href="<?php the_field('site_link_5') ?>" target="_blank"><?php the_field('site_name_5') ?></a></h2>
				<p><?php the_field('site_desc_5') ?></p>
				<h3><?php the_field('site_lead_5') ?></h3>
				<h4><?php the_field('site_devs_5') ?></h4>
			</label> -->
		</div>
		<div class="dots">
			<label for="t-1"></label>
			<label for="t-2"></label>
			<label for="t-3"></label>
			<!-- <label for="t-4"></label>
			<label for="t-5"></label> -->
		</div>
	</div>