<?php /* Template Name: calendar test */ ?>

<?php get_header(); ?>
<div class="kd-calendars-wrapper">
	
<?php for($i=13; $i<30; $i++){ ?>
	<div class="kd-single-calendar-div">
		<div>
			<?php echo do_shortcode('[ameliastepbooking trigger="amelia-popup-'.$i.'" service="'.$i.'"]'); ?>
		</div>
		<div>
			<button id="amelia-popup-<?php echo $i; ?>">
				Click Here
			</button>
		</div>
	</div>
<?php } ?>
</div>

<?php get_footer(); ?>