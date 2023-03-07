<?php /* Template Name: Page_test_temp */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<main>

			<div class="container">
<h1>
	rerr
				</h1>

<?php
				
				
if (!function_exists('createProviders')) {
	

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
					'locationId'  => $locations && $locations->length() && $locations->getItem(0) ? $locations->getItem(0)->getId()->getValue() : '',
					'bio' => $userMetaData['description']
				];
print_r($userArr);
			$providerAS->createProvider($userArr, true);
		}
	}
}
add_action('init', 'createProviders');
				?>

			</div>
			<!-- End of container -->

		</main>
	</main><!-- .site-main -->
	<?php get_sidebar('content-bottom'); ?>
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>