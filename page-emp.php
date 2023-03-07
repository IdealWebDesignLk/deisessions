<?php /* Template Name: Page_Employee */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$url_components = parse_url($actual_link);
		parse_str($url_components['query'], $params);
		//echo $params['eid'];

		global $wpdb;

		$table_name = "wp_821991_amelia_users";

		//   $user = $wpdb->get_results( "SELECT * FROM wp_821991_amelia_users JOIN wp_821991_amelia_providers_to_services ON wp_821991_amelia_users.id = wp_821991_amelia_providers_to_services.userId JOIN wp_821991_amelia_services ON wp_821991_amelia_services.id = wp_821991_amelia_providers_to_services.serviceId WHERE wp_821991_amelia_users.id =".$params['eid']);
		//   
		$user = $wpdb->get_results("SELECT * FROM wp_821991_amelia_users WHERE wp_821991_amelia_users.id =" . $params['eid']);



		foreach ($user as $row) {
			// 							echo "First Name:".$row->firstName."<br>";
			// 							echo "Last Name:".$row->lastName."<br>";
			// 							echo "Email:".$row->email."<br>";
			// 							echo "Phone:".$row->phone."<br>";
			// 							echo "profile pic:".$row->pictureThumbPath."<br>";
										echo "description".$row->externalId;
		?>
			<div id="profile-upper container-fluid">
				<div id="profile-banner-image" class="row">
					<img src="https://imagizer.imageshack.com/img921/9628/VIaL8H.jpg" alt="Banner image">
				</div>
				
			</div>
			<div class="content-exp">
				<div id="profile-d" class="row">
					<div id="profile-pic" class="col-2">
						<img src="<?php echo $row->pictureFullPath ?>">
					</div>
					<div class="col-10">
						<div id="u-name"><?php echo $row->firstName . " " . $row->lastName ?><span><img class=verified src="https://demoleqture.royboy.eu/wp-content/uploads/2022/08/verified-1.png" alt="Banner image"></span></div>
						<div class="profesion">Front End DEveloper</div>
						<div class=profile-details>
							<div class="profile-stat-count">Email: <?php echo $row->email ?></div>
							<div class="profile-stat-count">Phone: <?php echo $row->phone ?></div>
						</div>
					</div>
				</div>
				<div class="about row">
					<div class="ab-title">About me</div>
				</div>
				<div class="about-description row">
					Liana is the founder of Forma Pilates LA and creator of the Forma Method<br>

					Liana’s Pilates studio is a celebrity favorite of the likes of Kendall Jenner, Hailey Bieber, Kaia Gerber, and more.<br>

					Her Forma Method is created to hit certain muscle groups with low impact, slow controlled movements. Since her monumental growth in the last year, she recently launched Forma Online which allows her virtual community to her reformer and mat-based workouts from home. <br>

					I love helping people on their fitness journey and I can’t wait to meet you!<br>
				</div>

				<div class="two-col-sec row">
					<div class="ab-title">What to expect</div>
				</div>
				<div class="row">


					<div class="col colf">
						<div class="absec-title">15 minute session</div>
						<ul>
							<li>- ask three or more questions</li>
							<li>- advice on how to a healthier lifestyle</li>
							<li>- tips and tricks</li>
							<li>- how to eat well</li>
						</ul>
					</div>
					<div class="col colfx">
						<div class="language sepsec">
							<div class="ab-title">Languages</div>
							<p>
								English | English | English
							</p>
						</div>
						<div class="timrzone sepsec">
							<div class="ab-title">Timezone</div>
							<p>
								Sample Time zone
							</p>
						</div>
					</div>
				</div>

				<div class="reviews row">
					<div class="ab-title">Reviews</div>
				</div>
				<div class="row newrow">
					<div class="col-lg-3 col-sm-12">
					<div class="revew">
						<div class="absec-title">Tony DDD</div>
						<div class="revew-description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum posuere tristique. Curabitur ac consequat lectus. Proin id odio sapien. Aenean eros urna, egestas sit amet rhoncus</p>
						</div>
						<div class="date">
							23 Aug 2022
						</div>
					</div>
					</div>
					<div class="col-lg-3 col-sm-12">
					<div class="revew">
						<div class="absec-title">Tony DDD</div>
						<div class="revew-description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum posuere tristique. Curabitur ac consequat lectus. Proin id odio sapien. Aenean eros urna, egestas sit amet rhoncus</p>
						</div>
						<div class="date">
							23 Aug 2022
						</div>
					</div>
					</div>
					<div class="col-lg-3 col-sm-12">
					<div class="revew">
						<div class="absec-title">Tony DDD</div>
						<div class="revew-description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum posuere tristique. Curabitur ac consequat lectus. Proin id odio sapien. Aenean eros urna, egestas sit amet rhoncus</p>
						</div>
						<div class="date">
							23 Aug 2022
						</div>
					</div>
					</div>
					<div class="col-lg-3 col-sm-12">
					<div class="revew">
						<div class="absec-title">Tony DDD</div>
						<div class="revew-description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum posuere tristique. Curabitur ac consequat lectus. Proin id odio sapien. Aenean eros urna, egestas sit amet rhoncus</p>
						</div>
						<div class="date">

							23 Aug 2022
						</div>
					</div>
</div>
				</div>
				<div class="servicers row">
					<div class="ab-title">Relevant Sessions</div>

				</div>
				<div class="service-row row">
					<?php



			$services = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services JOIN wp_821991_amelia_providers_to_services ON wp_821991_amelia_services.id = wp_821991_amelia_providers_to_services.serviceId WHERE wp_821991_amelia_providers_to_services.userId =" . $params['eid']);

			foreach ($services as $service) {


// 				echo "Service Name:" . $service->name . "<br>";
// 				echo "Service image:" . $service->pictureFullPath . "<br>";

// 				echo "Price:" . $service->price . "<br><br>";
				
				?> 
					<div class="col-lg-3 col-sm-12">
					<div class="card">
						<figure class="card__thumb">
							<img src="<?php echo $service->pictureFullPath ?>" alt="Picture by Kyle Cottrell" class="card__image">
							<figcaption class="card__caption">
								<h2 class="card__title"><?php echo $service->name ?></h2>
								<h4 class="card-price"><?php echo $service->price ?></h4>
							</figcaption>
						</figure>
					</div>
					</div>
					<?php
			}

		?>

					
<!-- 					<div class="col-lg-3 col-sm-12">
					<div class="card">
						<figure class="card__thumb">
							<img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/08/necklace-1-scaled-1.jpg" alt="Picture by Kyle Cottrell" class="card__image">
							<figcaption class="card__caption">
								<h2 class="card__title">Sample Subject Topic </h2>
								<h4 class="card-price">USD 50</h4>
							</figcaption>
						</figure>
					</div>
					</div>
					<div class="col-lg-3 col-sm-12">
					<div class="card">
						<figure class="card__thumb">
							<img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/08/necklace-1-scaled-1.jpg" alt="Picture by Kyle Cottrell" class="card__image">
							<figcaption class="card__caption">
								<h2 class="card__title">Sample Subject Topic </h2>
								<h4 class="card-price">USD 50</h4>
							</figcaption>
						</figure>
					</div>
					</div>
					<div class="col-lg-3 col-sm-12">
					<div class="card">
						<figure class="card__thumb">
							<img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/08/necklace-1-scaled-1.jpg" alt="Picture by Kyle Cottrell" class="card__image">
							<figcaption class="card__caption">
								<h2 class="card__title">Sample Subject Topic </h2>
								<h4 class="card-price">USD 50</h4>
							</figcaption>
						</figure>
					</div>
						</div> -->
				</div>
			</div>
		
<?php
			
		}

		?>
		<main>

			<div class="container">




			</div>
			<!-- End of container -->

		</main>
	</main><!-- .site-main -->
	<?php get_sidebar('content-bottom'); ?>
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>