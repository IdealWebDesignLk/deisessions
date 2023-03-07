<?php

/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */



if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

define('HELLO_ELEMENTOR_VERSION', '2.6.1');

if (!isset($content_width)) {
	$content_width = 800; // Pixels.
}

if (!function_exists('hello_elementor_setup')) {
	/**
	 * Set up theme support.
	 *
	 * @return void
	 */
	function hello_elementor_setup()
	{
		if (is_admin()) {
			hello_maybe_update_theme_version_in_db();
		}

		$hook_result = apply_filters_deprecated('elementor_hello_theme_load_textdomain', [true], '2.0', 'hello_elementor_load_textdomain');
		if (apply_filters('hello_elementor_load_textdomain', $hook_result)) {
			load_theme_textdomain('hello-elementor', get_template_directory() . '/languages');
		}

		$hook_result = apply_filters_deprecated('elementor_hello_theme_register_menus', [true], '2.0', 'hello_elementor_register_menus');
		if (apply_filters('hello_elementor_register_menus', $hook_result)) {
			register_nav_menus(['menu-1' => __('Header', 'hello-elementor')]);
			register_nav_menus(['menu-2' => __('Footer', 'hello-elementor')]);
		}

		$hook_result = apply_filters_deprecated('elementor_hello_theme_add_theme_support', [true], '2.0', 'hello_elementor_add_theme_support');
		if (apply_filters('hello_elementor_add_theme_support', $hook_result)) {
			add_theme_support('post-thumbnails');
			add_theme_support('automatic-feed-links');
			add_theme_support('title-tag');
			add_theme_support(
				'html5',
				[
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
					'script',
					'style',
				]
			);
			add_theme_support(
				'custom-logo',
				[
					'height'      => 100,
					'width'       => 350,
					'flex-height' => true,
					'flex-width'  => true,
				]
			);

			/*
			 * Editor Style.
			 */
			add_editor_style('classic-editor.css');

			/*
			 * Gutenberg wide images.
			 */
			add_theme_support('align-wide');

			/*
			 * WooCommerce.
			 */
			$hook_result = apply_filters_deprecated('elementor_hello_theme_add_woocommerce_support', [true], '2.0', 'hello_elementor_add_woocommerce_support');
			if (apply_filters('hello_elementor_add_woocommerce_support', $hook_result)) {
				// WooCommerce in general.
				add_theme_support('woocommerce');
				// Enabling WooCommerce product gallery features (are off by default since WC 3.0.0).
				// zoom.
				add_theme_support('wc-product-gallery-zoom');
				// lightbox.
				add_theme_support('wc-product-gallery-lightbox');
				// swipe.
				add_theme_support('wc-product-gallery-slider');
			}
		}
	}
}
add_action('after_setup_theme', 'hello_elementor_setup');

function hello_maybe_update_theme_version_in_db()
{
	$theme_version_option_name = 'hello_theme_version';
	// The theme version saved in the database.
	$hello_theme_db_version = get_option($theme_version_option_name);

	// If the 'hello_theme_version' option does not exist in the DB, or the version needs to be updated, do the update.
	if (!$hello_theme_db_version || version_compare($hello_theme_db_version, HELLO_ELEMENTOR_VERSION, '<')) {
		update_option($theme_version_option_name, HELLO_ELEMENTOR_VERSION);
	}
}

if (!function_exists('hello_elementor_scripts_styles')) {
	/**
	 * Theme Scripts & Styles.
	 *
	 * @return void
	 */
	function hello_elementor_scripts_styles()
	{

		$enqueue_basic_style = apply_filters_deprecated('elementor_hello_theme_enqueue_style', [true], '2.0', 'hello_elementor_enqueue_style');
		$min_suffix          = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';

		if (apply_filters('hello_elementor_enqueue_style', $enqueue_basic_style)) {
			wp_enqueue_style(
				'hello-elementor',
				get_template_directory_uri() . '/style' . $min_suffix . '.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}

		if (apply_filters('hello_elementor_enqueue_theme_style', true)) {
			wp_enqueue_style(
				'hello-elementor-theme-style',
				get_template_directory_uri() . '/theme' . $min_suffix . '.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}

		// popup scripts and ajax url
		wp_enqueue_script('kd-popup-script', get_stylesheet_directory_uri() . '/assets/js/kd-booking-popup.js');

		// in JavaScript, object properties are accessed as ajax_object.ajax_url
		wp_localize_script('kd-popup-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
	}
}
add_action('wp_enqueue_scripts', 'hello_elementor_scripts_styles');

if (!function_exists('hello_elementor_register_elementor_locations')) {
	/**
	 * Register Elementor Locations.
	 *
	 * @param ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager $elementor_theme_manager theme manager.
	 *
	 * @return void
	 */
	function hello_elementor_register_elementor_locations($elementor_theme_manager)
	{
		$hook_result = apply_filters_deprecated('elementor_hello_theme_register_elementor_locations', [true], '2.0', 'hello_elementor_register_elementor_locations');
		if (apply_filters('hello_elementor_register_elementor_locations', $hook_result)) {
			$elementor_theme_manager->register_all_core_location();
		}
	}
}
add_action('elementor/theme/register_locations', 'hello_elementor_register_elementor_locations');

if (!function_exists('hello_elementor_content_width')) {
	/**
	 * Set default content width.
	 *
	 * @return void
	 */
	function hello_elementor_content_width()
	{
		$GLOBALS['content_width'] = apply_filters('hello_elementor_content_width', 800);
	}
}
add_action('after_setup_theme', 'hello_elementor_content_width', 0);

if (is_admin()) {
	require get_template_directory() . '/includes/admin-functions.php';
}

/**
 * If Elementor is installed and active, we can load the Elementor-specific Settings & Features
 */

// Allow active/inactive via the Experiments
require get_template_directory() . '/includes/elementor-functions.php';

/**
 * Include customizer registration functions
 */
function hello_register_customizer_functions()
{
	if (is_customize_preview()) {
		require get_template_directory() . '/includes/customizer-functions.php';
	}
}
add_action('init', 'hello_register_customizer_functions');

if (!function_exists('hello_elementor_check_hide_title')) {
	/**
	 * Check hide title.
	 *
	 * @param bool $val default value.
	 *
	 * @return bool
	 */
	function hello_elementor_check_hide_title($val)
	{
		if (defined('ELEMENTOR_VERSION')) {
			$current_doc = Elementor\Plugin::instance()->documents->get(get_the_ID());
			if ($current_doc && 'yes' === $current_doc->get_settings('hide_title')) {
				$val = false;
			}
		}
		return $val;
	}
}
add_filter('hello_elementor_page_title', 'hello_elementor_check_hide_title');

/**
 * Wrapper function to deal with backwards compatibility.
 */
if (!function_exists('hello_elementor_body_open')) {
	function hello_elementor_body_open()
	{
		if (function_exists('wp_body_open')) {
			wp_body_open();
		} else {
			do_action('wp_body_open');
		}
	}
}


if (!function_exists('createCustomers')) {
	/**
	 * @throws \AmeliaBooking\Domain\Common\Exceptions\InvalidArgumentException
	 * @throws QueryExecutionException
	 */
	function createCustomers()
	{

		$args  = array(
			'role'    => 'wpamelia-customer',
		);
		$users = get_users($args);

		$container = require AMELIA_PATH . '/src/Infrastructure/ContainerConfig/container.php';
		/** @var CustomerApplicationService $customerAS */
		$customerAS = $container->get('application.user.customer.service');

		foreach ($users as $user) {
			$userMetaData = get_user_meta($user->ID);
			$userArr      =
				[
					'status'     => 'visible',
					'type'       => 'customer',
					'firstName'  => !empty($userMetaData['first_name'][0]) ? $userMetaData['first_name'][0] : $user->data->user_login,
					'lastName'   => !empty($userMetaData['last_name'][0]) ? $userMetaData['last_name'][0] : $user->data->user_login,
					'email'      => $user->data->user_email,
					'externalId' => $user->ID,
				];

			$customerAS->createCustomer($userArr, true);
		}
	}
}
add_action('init', 'createCustomers');


add_action('parse_request', 'my_custom_url_handler');
function my_custom_url_handler()
{

	if ($_SERVER["REQUEST_URI"] == '/update_bio') {

		global $wpdb;
		$tbprefix1 = $wpdb->prefix;

		$bio = $_POST["bio"];
		//$bio = sanitize_text_field($_POST["bio"]);
		$bio = stripslashes($bio);
		$email = $_POST["email"];
		$position = $_POST["position"];
		$trustedbrand1 = $_POST["trustedbrand1"];
		$trustedbrand2 = $_POST["trustedbrand2"];
		$trustedbrand3 = $_POST["trustedbrand3"];
		$trustedbrand4 = $_POST["trustedbrand4"];
		$trustedbrand5 = $_POST["trustedbrand5"];
		$language = $_POST["language"];


		//echo 'position'.$position;
		// 		echo $email;

		$sql = "SELECT * FROM " . $tbprefix1 . "amelia_users WHERE email='$email'";
		$result = $wpdb->get_results($sql);
		echo count($result);
		if (count($result) > 0) {

			$wpdb->query($wpdb->prepare("UPDATE " . $tbprefix1 . "amelia_users SET full_name = CONCAT(firstName, ' ', lastName)  WHERE email='$email'"));

			$wpdb->query($wpdb->prepare("UPDATE " . $tbprefix1 . "amelia_users SET trustedbrand1='" . $trustedbrand1 . "', trustedbrand2='" . $trustedbrand2 . "',  trustedbrand3='" . $trustedbrand3 . "', trustedbrand4='" . $trustedbrand4 . "', trustedbrand5='" . $trustedbrand5 . "', bio='" . $bio . "', position='" . $position . "' , language='" . $language . "' WHERE email='" . $email . "'"));
			//echo $bio;
			//echo $email;
			$wpdb->update(
				$tbprefix1 . 'amelia_users',
				array(
					'bio' => $bio,
					'position' => $position,
				),
				array(
					'email' => $email,
				),
			);
			echo 'saved';
		}

		exit();
	}
}


add_action('parse_request', 'my_services_handler');
function my_services_handler()
{

	if ($_SERVER["REQUEST_URI"] == '/update_videourl') {

		global $wpdb;

		$videourl = $_POST["videourl"];
		$videoStartTime = $_POST["videoStartTime"];
		$videoViews = $_POST["videoViews"];
		$pretalkid = $_POST["pretalkid"];
		//	$serviceid = $_POST["serviceid"];


		$catval = $_POST["catvalue"];
		$servicename = $_POST["servicenameval"];


		$empval = $_POST["empvalue"];
		$fullname = $_POST["empvalue"];
		$lastSpacePos = strrpos($empval, ' ');
		$firstname = substr($empval, 0, $lastSpacePos);
		$lastname = substr($empval, $lastSpacePos + 1);
		echo $firstname . "<br>";
		echo $lastname . "<br>";


		$tag1 = $_POST["tag1"];
		$tag2 = $_POST["tag2"];
		$tag3 = $_POST["tag3"];
		$tag4 = $_POST["tag4"];
		$tag5 = $_POST["tag5"];
		$excerpt = $_POST["short_excerpt"];
		$language1 = $_POST["language1"];
		$language2 = $_POST["language2"];
		$language3 = $_POST["language3"];
		// echo 'tag name = '.$tag1;



		$tbprefix2 = $wpdb->prefix;
		$serchdataservice = "SELECT " . $tbprefix2 . "amelia_services.id FROM " . $tbprefix2 . "amelia_services INNER JOIN " . $tbprefix2 . "amelia_categories INNER JOIN " . $tbprefix2 . "amelia_users INNER JOIN " . $tbprefix2 . "amelia_providers_to_services ON " . $tbprefix2 . "amelia_services.categoryId=" . $tbprefix2 . "amelia_categories.id and " . $tbprefix2 . "amelia_services.id=" . $tbprefix2 . "amelia_providers_to_services.serviceId and " . $tbprefix2 . "amelia_users.id=" . $tbprefix2 . "amelia_providers_to_services.userId where " . $tbprefix2 . "amelia_users.full_name='" . $fullname . "' and " . $tbprefix2 . "amelia_services.name='" . $servicename . "' and " . $tbprefix2 . "amelia_categories.name='" . $catval . "'";

		$serviceid = '';

		$result1 = $wpdb->get_results($serchdataservice);

		if (count($result1) > 0) {

			$services = json_decode(json_encode($result1[0]), true);
			$serviceid = $services[id];
		}

		$sql = "SELECT * FROM " . $tbprefix2 . "amelia_services WHERE id='$serviceid'";
		$result = $wpdb->get_results($sql);
		if (count($result) > 0) {
			//print_r($result);
			$rows_affected =  $wpdb->query($wpdb->prepare("UPDATE " . $tbprefix2 . "amelia_services SET video='" . $videourl . "' ,preTalkSessionId='" . $pretalkid . "' , videoStartTime='" . $videoStartTime . "' , videoViews = '" . $videoViews . "' , tag1='" . $tag1 . "' , tag2='" . $tag2 . "' , tag3='" . $tag3 . "' , tag4='" . $tag4 . "' , tag5='" . $tag5 . "' , short_excerpt='" . $excerpt . "', language1='" . $language1 . "' , language2='" . $language2 . "', language3='" . $language3 . "' WHERE id='" . $serviceid . "'"));



			echo "Saved";
		}

		//echo $servicename;

		exit();
	}
}




add_action('parse_request', 'getBio');
function getBio()
{
	if ($_SERVER["REQUEST_URI"] == '/get_bio') {
		global $wpdb;
		$tbprefix3 = $wpdb->prefix;
		$id = $_POST["id"];

		$sql = "SELECT * FROM " . $tbprefix3 . "amelia_users WHERE id='$id'";
		$result = $wpdb->get_results($sql);
		$user = json_encode($result[0]);

		// 		echo $result[0]['bio'];
		print_r($user);

		// 		echo $user;



		exit();
	}
}


add_action('parse_request', 'getTags');
function getTags()
{
	if ($_SERVER["REQUEST_URI"] == '/get_tags') {
		global $wpdb;
		$tbprefix4 = $wpdb->prefix;

		$id = $_POST["id"];

		$sql = "SELECT * FROM " . $tbprefix4 . "amelia_services WHERE id='$id'";
		$result = $wpdb->get_results($sql);
		$services = json_encode($result[0]);


		print_r($services);

		// 		echo $user;



		exit();
	}
}


add_action('parse_request', 'duplicateService');
function duplicateService()
{
	if ($_SERVER["REQUEST_URI"] == '/duplicate_service') {
		global $wpdb;
		$tbprefix5 = $wpdb->prefix;

		$id = $_POST["id"];
		global $userserviceid;
		global $userserviceprice;
		global $latestserviceid;
		// echo $id;


		$userforservice = $wpdb->get_results(
			$wpdb->prepare("SELECT * from " . $tbprefix5 . "amelia_providers_to_services where serviceId=%d", $id)
		);

		if (count($userforservice) > 0) {
			foreach ($userforservice as $row) {
				$userserviceid = $row->userId;
				$userserviceprice = $row->price;
				// echo $userserviceid."xx".$userserviceprice;
			}
		}



		$selectservice = "INSERT INTO " . $tbprefix5 . "amelia_services (name, description, color, price, status, categoryId, minCapacity, maxCapacity, duration, timeBefore, priority, pictureFullPath, pictureThumbPath, aggregatedPrice, settings, recurringCycle, recurringSub, recurringPayment, translations, depositPayment, depositPerPerson, deposit, fullPayment, mandatoryExtra, minSelectedExtras, video, videoStartTime, videoViews, tag1, tag2, tag3, tag4, tag5, short_excerpt, language1, language2, language3, preTalkSessionId, customPricing, maxExtraPeople, limitPerCustomer) SELECT name, description, color, price, status, categoryId, minCapacity, maxCapacity, duration, timeBefore, priority, pictureFullPath, pictureThumbPath, aggregatedPrice, settings, recurringCycle, recurringSub, recurringPayment, translations, depositPayment, depositPerPerson, deposit, fullPayment, mandatoryExtra, minSelectedExtras, video, videoStartTime, videoViews, tag1, tag2, tag3, tag4, tag5, short_excerpt, language1, language2, language3, preTalkSessionId, customPricing, maxExtraPeople, limitPerCustomer FROM  " . $tbprefix5 . "amelia_services WHERE id='" . $id . "'";
		$resultservice = $wpdb->query($wpdb->prepare($selectservice));

		// echo count($resultservice);
		if (count($resultservice) > 0) {

			$wpdb->query($wpdb->prepare("UPDATE " . $tbprefix5 . "amelia_services SET position = position + 1"));

			$getlastservice = $wpdb->get_var(
				$wpdb->prepare("SELECT id FROM " . $tbprefix5 . "amelia_services ORDER BY id DESC LIMIT 1")
			);

			if ($getlastservice) {
				$latestserviceid = $getlastservice;
			}

			$wpdb->query(
				$wpdb->prepare(
					"INSERT INTO " . $tbprefix5 . "amelia_providers_to_services (userId, serviceId, price) VALUES (%d, %d, %f)",
					$userserviceid,
					$latestserviceid,
					$userserviceprice
				)
			);
			// echo $userserviceid . "+" . $latestserviceid . "+" . $userserviceprice;
			echo "DuplicateSuccess";
		} else {
			echo "Failed";
		}
		exit();
	}
}


add_action('parse_request', 'getservicetags');
function getservicetags()
{
	if ($_SERVER["REQUEST_URI"] == '/get_service_tags') {
		global $wpdb;
		


		$sql = "SELECT * FROM services_tags";
		$result = $wpdb->get_results($sql);
		$servicestags = json_encode($result);


		print_r($servicestags);

		exit();
	}
}


add_action('parse_request', 'updateReview');
function updateReview()
{


	if ($_SERVER["REQUEST_URI"] == '/update_review') {


		global $wpdb;

		$reviewRating = $_POST["review_rating"];
		$reviewText = $_POST["review_text"];
		$reviewId = $_POST["review_id"];
		$expertId = $_POST["user_id"];

		if (isset($_POST['delete'])) {
			$sql = "SELECT * FROM review_details WHERE review_id='$reviewId'";
			$result = $wpdb->get_results($sql);
			if (count($result) > 0) {

				$rows_affected =  $wpdb->query($wpdb->prepare("DELETE FROM review_details WHERE review_id='" . $reviewId . "'"));
			}
			header("Location: /wp-admin/admin.php?page=review-page");
			exit();
		} elseif (isset($_POST['save'])) {
			$sql = "SELECT * FROM review_details WHERE review_id='$reviewId'";
			$result = $wpdb->get_results($sql);
			if (count($result) > 0) {
				echo "count is" . count($result);

				$rows_affected =  $wpdb->query($wpdb->prepare("UPDATE review_details SET starreview='" . $reviewRating . "' , review='" . $reviewText . "'   WHERE review_id='" . $reviewId . "'"));
			} else {

				$wpdb->insert('review_details', array(
					'user' => $expertId,
					'review' => $reviewText,
					'starreview' => $reviewRating,
				));
			}

			header("Location: /wp-admin/admin.php?page=review-page");
			exit();
		}
	}
}


function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



function hs_admin_menu()
{
	add_menu_page(
		__('Page Title', 'https://deisessions.com/'),
		__('Add Service Tags', 'https://deisessions.com/'),
		'manage_options',
		'sample-page',
		'my_admin_page_contents',
		'dashicons-schedule',
		3
	);
}
add_action('admin_menu', 'hs_admin_menu');

// global $wpdb;  
function my_admin_page_contents()
{

	//$service = $wpdb->get_results("SELECT * FROM `services_tags`");

?>
	<div class="py-5 stepr">

		<div class="container">

			<div class="row justify-content-center">
				<div class="p-5 col-md-12 border border-dark">

					<h2 class="text-center pb-3">Add Service Tag</h2>

					<p>Please add your tags comma separated. Example tag1,tag2,tag3</p>
					<div class="form-group"> <textarea class="form-control h-25 tagstext" rows="6" aria-label="With textarea" id="tagstext">
       <?php
		global $wpdb;
		$servictag = $wpdb->get_results("SELECT * FROM services_tags");


		$numItems = count($servictag);
		$i = 0;


		foreach ($servictag as $rowtags) {

			// $servicecateid = $rowtags->id;
			$servicetagename = $rowtags->Tag;
			$trimval = trim($servicetagename);
			$str = $trimval . ",";

			if (++$i === $numItems) {
				$str = $trimval;
			}
			echo $str;
		}




		?>
            </textarea></div>

				</div>

				<div class="row">

					<div class="col-md-12"><button id="tagsubmit" type="submit" class="adminbtn btn btn-primary btn text-center btn-lg btn-dark float-right w-50">Save</button></div>
				</div>
			</div>
		</div>
	</div>

<?php
}



// add review page to admin dashboard
function hs_admin_menu_review()
{
	add_menu_page(
		__('Page Title', 'https://deisessions.com/'),
		__('Edit Reviews', 'https://deisessions.com/'),
		'manage_options',
		'review-page',
		'my_admin_review_page_contents',
		'dashicons-schedule',
		4
	);
}
add_action('admin_menu', 'hs_admin_menu_review');

function my_admin_review_page_contents()
{

?>
	<div class="py-5 stepr">

		<div class="container">

			<div class="row justify-content-center">
				<div class="p-5 col-md-12 border border-dark">

					<h2 class="text-center pb-3">Edit Reviews Tag</h2>


					<table id="reviewtable">

						<tr>

							<th>Expert</th>
							<th>Rating</th>
							<th>Review</th>
							<th>Edit</th>


						</tr>

						<?php
						global $wpdb;
						$reviewtag = $wpdb->get_results("SELECT * FROM review_details");


						$numItems = count($reviewtag);
						$i = 0;


						foreach ($reviewtag as $rowtags) {
						?>

							<tr>
								<input type="hidden" class="review_id" value="<?php echo $rowtags->review_id; ?>">

								<td class="userid"><?php echo $rowtags->user; ?></td>
								<td class="starrating"><?php echo $rowtags->starreview; ?></td>
								<td class="review"><?php echo $rowtags->review; ?></td>
								<td><button class="editreviewbtn">Edit</button></td>
							</tr>

						<?php

						}
						?>


					</table>
					<script>
						jQuery(document).ready(function() {
							jQuery("#reviewtable").on('click', '.editreviewbtn', function() {
								let self = jQuery(this).closest('tr');

								let userid = self.find('.userid').text();
								let startrating = self.find('.starrating').text();
								let review = self.find('.review').text();
								let reviewid = self.find('.review_id').val();


								jQuery('#user_id').val(userid);
								jQuery('#review_rating').val(startrating);
								jQuery('#review_text').val(review);
								jQuery('#review_id').val(reviewid);

							});
						});
					</script>
					<form action="/update_review" method="POST">
						<div class="editreview">
							<div class="row">
								<div class="col-md-4">
								</div>
								<div class="col-md-4">

									<?php
									global $wpdb;
									$tbprefix6 = $wpdb->prefix;
									//$expertname = "SELECT full_name FROM wp_821991_amelia_users";



									$expertname = $wpdb->get_results(
										$wpdb->prepare("SELECT full_name FROM ".$tbprefix6."amelia_users")
									);
							
									if (count($expertname) > 0) {
										echo '<datalist id="expert-list">';
										foreach ($expertname as $row) {
											
											echo '<option value="'.$row->full_name.'">';
										
										}
										echo '</datalist>';
									}
							
									
							

									?>

									<label>Expert</label>
									<input name="user_id" id="user_id" type="text" value="" list="expert-list">
								</div>
								<div class="col-md-4">
									<label>Rating</label>
									<input name="review_rating" id="review_rating" type="text" value="">
								</div>
							</div>
							<div class="row">
								<input type="hidden" name="review_id" id="review_id">
								<textarea name="review_text" id="review_text" class="form-control h-25 reviewtext" rows="6" aria-label="With textarea" id="reviewtext"></textarea>
								<input type="submit" name="save" class="rbtn" id="reviewsavebtn" value="Save">
								<input type="submit" name="delete" class="rbtn" id="reviewsavebtn" value="Delete">
							</div>

						</div>
					</form>
					<?php



					?>
				</div>


			</div>
		</div>
	</div>

<?php
}



function my_plugin_body_class($classes)
{


	if (current_user_can('manage_options')) {
		$classes .= " useradminrole";
	}

	return $classes;
}

add_filter('admin_body_class', 'my_plugin_body_class');

add_action('admin_head', 'customservices');

function customservices()
{
	global $wpdb;
	$tbprefix7 = $wpdb->prefix;
	$userlogid = get_current_user_id();

	$service = $wpdb->get_results("select " . $tbprefix7 . "amelia_providers_to_services.serviceId from " . $tbprefix7 . "amelia_users inner join " . $tbprefix7 . "amelia_providers_to_services on " . $tbprefix7 . "amelia_users.id=" . $tbprefix7 . "amelia_providers_to_services.userId where " . $tbprefix7 . "amelia_users.externalId='" . $userlogid . "'");



	if (current_user_can('manage_options')) {
	} else {
		echo '<style>
  .am-service-card{
	display:none !important;
  }
  </style>';
		foreach ($service as $row) {
			$servicesingleid = $row->serviceId;
			echo $servicesingleid;




			echo '<style>
  .s' . $servicesingleid . '.am-service-card{
	display:block !important;
  }
  </style>';
		}
	}
}




if (!function_exists('createProviders')) {
	/**
	 * @throws \AmeliaBooking\Domain\Common\Exceptions\InvalidArgumentException
	 * @throws QueryExecutionException
	 * @throws ContainerException
	 */
	function createProviders()
	{
		$args  = array(
			'role'    => 'wpamelia-provider',
		);
		$users = get_users($args);

		$container = require AMELIA_PATH . '/src/Infrastructure/ContainerConfig/container.php';
		/** @var SettingsService $settingsService */
		$settingsService = $container->get('domain.settings.service');
		/** @var LocationRepository $locationRepository */
		$locationRepository = $container->get('domain.locations.repository');
		/** @var ProviderApplicationService $providerAS */
		$providerAS = $container->get('application.user.provider.service');

		$schedule    = $settingsService->getCategorySettings('weekSchedule');
		// $weekDayList = getWorkHours($schedule);

		foreach ($users as $user) {
			$userMetaData = get_user_meta($user->ID);
			//echo $user->ID ."<br>";

			$locations = $locationRepository->getFiltered([], 1);

			$userArr =
				[
					'status'      => 'visible',
					'type'        => 'provider',
					'password'    => $user->data->user_pass,
					'firstName'  => !empty($userMetaData['first_name'][0]) ? $userMetaData['first_name'][0] : $user->data->user_login,
					'lastName'   => !empty($userMetaData['last_name'][0]) ? $userMetaData['last_name'][0] : $user->data->user_login,
					'email'       => $user->data->user_email,
					'externalId'  => $user->ID,
					'weekDayList' => $weekDayList,
					'sendEmployeePanelAccessEmail' => true,
					'locationId'  => $locations && $locations->length() && $locations->getItem(0) ? $locations->getItem(0)->getId()->getValue() : ''
				];
			//print_r($userArr);
			$providerAS->createProvider($userArr, true);
		}
	}
}
add_action('user_register', 'createProviders');

function getpagecurrency()
{

	if (class_exists('WOOMULTI_CURRENCY_F_Data')) {
		$currency_data_obj = new WOOMULTI_CURRENCY_F_Data();
		$current_currency = $currency_data_obj->get_current_currency();
		$curr = $current_currency;
	} else {
		$curr = "€";
	}
}
add_action('wp_head', 'getpagecurrency');


// function wpse_update_user_meta_pkg_type( $user_id ) {
//     update_user_meta( $user_id, 'disapprove', 'disapprove' );
// }
// Fire late to try to ensure this is done after any other function hooked to `user_register`.
// add_action( 'user_register','wpse_update_user_meta_pkg_type', PHP_INT_MAX, 1 );


// add linkedin field into profile page


function wpse_230369_quote_of_the_day($user)
{
	$quote = esc_attr(get_option('quote_of_the_day'));
?>

	<div class="visible-only-for-admin">
		<h3>Linkedin Link</h3>
		<table class="form-table">
			<tr>
				<th><label for="quote_of_the_day">Linkedin Link</label></th>
				<td>
					<?php if (current_user_can('administrator')) : ?>


						<?php
						$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


						$url_components = parse_url($url);

						parse_str($url_components['query'], $params);

						// Display result
						global $wpdb;
						$tbprefix8 = $wpdb->prefix;
						$userID = $params['user_id'];




						$linkedin = $wpdb->get_results("select linkedin from " . $tbprefix8 . "amelia_users where externalId='" . $userID . "'");

						foreach ($linkedin as $row) {
							$linkedinlink = $row->linkedin;
						?>
							<input readonly type="text" name="quote_of_the_day" value="<?php echo $linkedinlink ?>" class="regular-text" />
						<?php
							//echo $linkedinlink;
						}
						?>


					<?php else : ?>

						<?php echo $quote ?>

					<?php endif ?>
				</td>
			</tr>
		</table>
	</div>

<?php
}

add_action('show_user_profile', 'wpse_230369_quote_of_the_day', 10);
add_action('edit_user_profile', 'wpse_230369_quote_of_the_day', 10);

function hs_admin_contact()
{
	add_menu_page('Contact Support', 'Contact Support', 'read', 'custompage', 'my_custom_menu_page', 'dashicons-schedule', 6);
}
add_action('admin_menu', 'hs_admin_contact');


function my_custom_menu_page()
{
	echo do_shortcode('[quform id="3" name="Contact Support form"]');
}

// return card content
function kd_return_card_content()
{
	$sid = 29;
	// $verified_user = true;
	// $price = 100;
	// $curr = 'EUR';
	// $name = 'test';
	// $exchange_price_widget = do_shortcode('[woo_multi_currency_exchange price="' . $price . '" currency="' . $curr . '"]');
	// $booking_widget = do_shortcode('[ameliastepbooking service="' . $sid . '"]');
	// $video_views = 25;
	// $short_excerpt = 'test excerpt';
	// $video = 'W3_RjJtd6Eo';
	// $videoStartTime = 1;
	// $finalurl1 = 'https://www.youtube.com/embed/W3_RjJtd6Eo?controls=1&showinfo=0&start=10&rel=0&loop=1&autoplay=1';
	// $pictureFullPath = 'https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Lesa-Bradshaw288x163.png';
	// $url = 'test.com';

	// $return_html = '<div class="popup-content-inner">
	// 	<div class="kd-popup-video-part">
	// 		<div class="container">
	// 			<p class="cardauthor">';

	// if ($verified_user) {
	// 	$return_html .= '<span class="verifiedtext"><img class="verifyimg" src="https://deisessions.com/wp-content/uploads/2022/10/checked.png"></span>';
	// }

	// $return_html .= '</p>
	// 			<h4 class="sessionttile"><b>' . $name . '</b></h4>
	// 			<p class="pricesession">60 minutes / ' . $exchange_price_widget . '</p>
	// 			<p class="views"><img class="views-icon" src="https://deisessions.com/wp-content/uploads/2022/10/eyeball.png" /> 
	// 			' . $video_views . '</p>
	// 			<p class="paratext">' . $short_excerpt . '</p>
	// 		</div>';
	// if (pictureFullPath != "") {
	// 	$return_html .= '<img data-videoid="' . $video . '" data-starttime="' . $videoStartTime . '" data-finalurl="' . $finalurl1 . '" class="kd-yt-video-img" src="' . $pictureFullPath . '" />';
	// } else {
	// 	$return_html .= '<img data-videoid="' . $video . '" data-starttime="' . $videoStartTime . '" data-finalurl="' . $finalurl1 . '" class="kd-yt-video-img" src="https://deisessions.com/wp-content/uploads/2022/10/defaultimg.png" />';
	// }

	// $return_html .= '</div>
	// 	<div class="kd-popup-booking-part">
	// 		<div class="booking-calendar">
	// 	   ' . $booking_widget . '
	// 		</div>
	// 		<div class="service-link">

	// 			<h3>Book Now <br> Or</h3>
	// 			<a class="kd-btn" href="' . $url . '">View Session Page</a>
	// 		</div>
	// 	</div>
	// 	</div>
	// </div>';

	echo do_shortcode('[ameliastepbooking service="' . $sid . '"]');
	wp_die();
}

add_action('wp_ajax_return_card_content', 'kd_return_card_content');
add_action('wp_ajax_noppriv_return_card_content', 'kd_return_card_content');


/**
 * Perform automatic login.
 */
function wpdocs_custom_login()
{
	if (isset($_GET['username']) && isset($_GET['pass'])) {
		$creds = array(
			'user_login'    => $_GET['username'],
			'user_password' => $_GET['pass'],
			'remember'      => true
		);

		$user = wp_signon($creds, true);

		if (is_wp_error($user)) {

			echo $user->get_error_message();
			return false;
		} else {
			wp_redirect('/wp-admin/admin.php?page=wpamelia-employees#/employees', 301);
			exit;
		}
	}
}

// Run before the headers and cookies are sent.
add_action('after_setup_theme', 'wpdocs_custom_login');

function wc_billing_field_strings($translated_text, $text, $domain)
{
	switch ($translated_text) {
		case 'Billing details':
			$translated_text = __('Contact Information', 'woocommerce');
			break;
	}
	return $translated_text;
}
add_filter('gettext', 'wc_billing_field_strings', 20, 3);


function custom_rewrite_rule()
{
	// add_rewrite_rule('^single-service/([^/]*)/?','index.php?page_id=28978&sid=$matches[1]','top');
	add_rewrite_rule('^single-service/([^/]*)-([0-9]+)/?', 'index.php?page_id=28978&sid=$matches[2]', 'top');
}
add_action('init', 'custom_rewrite_rule', 10, 0);
