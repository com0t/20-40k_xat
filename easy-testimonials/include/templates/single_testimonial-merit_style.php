<?php
	//strip 'style-' from the front of the output class so our css selectors work
	$output_theme = str_replace("style-","",$output_theme);
?>
<div class="easy_testimonial">
	<div class="<?php echo $output_theme; ?>">
		<?php
			//output json-ld review markup, if option is set
			if($output_schema_markup){
				echo $this->output_jsonld_markup($display_testimonial);
			}
		?>
		<div class="user-area">
			<?php if ($show_thumbs) {
				?><div class="easy_testimonial_image_wrapper"><?php
				echo $display_testimonial['image'];
				?></div><?php
			} ?>
			<!-- <img src="img/test-2-user.png" alt=""> -->
			<div class="user-text">
				<?php if($show_the_client): ?>
					<div class="testimonial-client"><?php echo $this->easy_t_clean_html($display_testimonial['client']);?></div>
				<?php endif; ?>
				<?php if($show_the_position): ?>
					<div class="testimonial-position"><?php echo $this->easy_t_clean_html($display_testimonial['position']);?></div>
				<?php endif; ?>
				<!-- <h2>Firstname  Lastname</h2>
				<p>Position with Company</p> -->
			</div>
		</div>

		<div class="main-content-2">
			<div class="title-area-2">
				<?php if ($show_title): ?>
				<div class="easy_testimonial_title"><?php echo $this->easy_t_clean_html($display_testimonial['title']) ?></div>
				<?php endif; ?>
				<?php if($show_the_other && !empty($display_testimonial['other'])): ?>
					<div class="testimonial-other"><?php echo $this->easy_t_clean_html($display_testimonial['other']);?></div>
				<?php endif; ?>
				<?php if($show_the_date): ?>
					<div class="date"><span class="date-2"><?php echo $this->easy_t_clean_html($display_testimonial['date']);?></span></div>
				<?php endif; ?>
				<!--<p class="date-2">Jan 1, 2015</p>-->
			</div>
			<?php if($show_the_rating): ?>
				<div class="rate-area-2">
					<i class="ion-star"></i>
					<div class="easy_testimonial_star_wrapper"><?php echo $display_testimonial['num_stars']; ?></div>
				</div>
			<?php endif; ?>
			<!--<div class="rate-area-2">
				<i class="ion-star"></i>
				<p>4.5</p>
			</div>-->
			<div class="<?php echo $body_class; ?> times-text">
				<?php echo $display_testimonial['content']; ?>
			</div>	
		</div>
		<div class="float-clear"></div>

	</div>
</div>