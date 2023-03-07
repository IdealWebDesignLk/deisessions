<?php /* Template Name: Page_home_new */ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<!--     <script async src="https://www.youtube.com/iframe_api"></script> -->


<style>

</style>
<?php
$serviceid = "7";

$service = $wpdb->get_results("SELECT * FROM `wp_821991_amelia_services` where id='$serviceid'");



$employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$serviceid'");

?>

<!-- 				<br><br><br><br>
				<h1>Mute Youtube Video Using a Button</h1>

<p>
  <button id="mute-video">Mute/UnMute</button>
</p> -->

<!-- <iframe id="youtube-video" src="https://www.youtube.com/embed/VNGFep6rncY?enablejsapi=1&autoplay=1&rel=0&mute=1" frameborder="0" width="600" height="400"></iframe> -->

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="containerx">
			<div class="bg-video-wrap">
				<div class="video-background">
					<div class="video-foreground">


						<iframe id="youtube-video" class="youtube-video" width="278" height="154" src="https://www.youtube.com/embed/VNGFep6rncY?enablejsapi=1&rel=0&start=9&mute=1&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


						<?php
						$videourlhero = "https://www.youtube.com/embed/VNGFep6rncY";
						$parametershero = "?enablejsapi=1&controls=2&showinfo=0&rel=0&loop=0&start=8&autoplay=1&mute=1";
						$finalurlhero = $videourlhero . $parametershero;
						?>
						<!--                                     <iframe id="youtube-video" class="youtube-video" width="278" height="154" src="https://www.youtube.com/embed/VNGFep6rncY?enablejsapi=1&autoplay=1&rel=0&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
					</div>
				</div>

				<div class="overlay" id="kd-video-overlay"></div>


				<div class="vsec">
					<div class="col-12 col-md">
						<div class="text-wrapper">
							<h2 class="mbr-section-title mb-3 mbr-fonts-style display-2">
								<strong><?php echo $service[0]->name; ?></strong>
								High performance

							</h2>
							<h3 class="headeremployeename">
								<?php echo $employee[0]->firstName . " " . $employee[0]->lastName; ?>
								Paul Rulkens
							</h3>
							<div class="rate">
								<img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/08/star-2.png">
								<img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/08/star-2.png">
								<img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/08/star-2.png">
								<img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/08/star-2.png">
								<img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star1.png">
							</div>
							<div class="sessiondiscription">
								<p class="mbr-text mb-3 mbr-fonts-style display-7">
									<?php echo $service[0]->description; ?>
									In this entertaining, fascinating, and confronting lecture, Paul will share with you the best practical and creative ideas to take more, better, and smarter initiatives to significantly raise the bar.
								</p>
							</div>
							<div class="price">
								<h3 class="session-price">60 minutes / <?php echo $service[0]->price; ?> €1.999</h3>
							</div>
							<div class="views">
								<h3 class="viewscount"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 6,349,764</h3>
							</div>

							<a href="https://demoleqture.royboy.eu/contact-us/"><button type="button" class="btn btn-dark sessionbtn">Instant Booking</button></a>
						</div>

					</div>

				</div>

				<!--   <h5 class="viewstext">100 Views</h5>
              <div class="plybutton"><img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/play-button.png"></div>
                <div id="mutebtn" class="pusbutton"><img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/pause-2.png"></div> -->
				
<!-- 	mute unmute			 -->
				<p id="unmute" ><img src="https://tolqs.com/wp-content/uploads/2022/09/volume-3.png"></p>
				<p id="mute" ><img src="https://tolqs.com/wp-content/uploads/2022/09/volume-2.png"></p>
				
<!-- 		Play Pause		 -->
				
					<p id="kd-play-video" class=""><img src="https://tolqs.com/wp-content/uploads/2022/10/play-icon.png"></p>
				<p id="kd-pause-video" class=""><img src="https://tolqs.com/wp-content/uploads/2022/10/pause-icon.png"></p>
				
				
			</div>
			<div class="container homebodysec">
				<div class="innerhomesecondrow">
					<div class="secondsec">
						<h2>Find your virtual speaker. Schedule and book. Get inspired.</h2>

					</div>
					<form action="/action_page.php">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<select>
										<option value="" disabled selected>Topic</option>

										<option>Diversity</option>
										<option>Inspiration</option>
										<option>Soft Skills</option>
										<option>Genetics</option>
									</select>

								</div>
							</div>

							<div class="col">
								<div class="form-group">
									<input type="text" placeholder="Budget Range" class="form-control" id="usr" name="username">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<input type="date" placeholder="Date" class="form-control" id="usr" name="username">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<input id="timepicker" width="150" placeholder="Time" />
									<script>
										$('#timepicker').timepicker({
											uiLibrary: 'bootstrap4'
										});
									</script>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<input type="text" placeholder="Search" class="form-control" id="usr" name="username">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="container-fluidx background-black">
			<div class="home-demo">


				<h3 id="myList" class="hometitle">Diversity, Equity and Inclusion</h3>

				<div class="owl-carousel owl-theme">
					<?php

					$serviceall = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services where categoryId='2'");



					if (!empty($serviceall)) {

						foreach ($serviceall as $row) {


							$singleserviceid =  $row->id;

							$employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$singleserviceid'");


							foreach ($employee as $emplyeedetails) {
					?>

								<div class="item">
									<a href=""><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Rosan-Chen-288x163-1.jpg" alt=""></a>
									<div class="card">
										<?php
										$videourl1 =  $row->video;
										$parameters1 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=40";
										$finalurl1 = $videourl1 . $parameters1;

										?>

										<iframe class="carouselvideo" width="278" height="154" src=<?php echo  $finalurl1; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

										<div class="container">
											<p class="cardauthor"><?php echo  $emplyeedetails->firstName; ?>Rosan Auyeung-Chen</p>
											<h4 class="sessionttile"><b><?php echo  $row->name; ?></b></h4>
											<p class="pricesession">60 minutes/<?php echo  $row->price; ?>€</p>
											<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 362.440</p>
											<p class="paratext"><?php echo  $row->description; ?></p>
										</div>
									</div>
								</div>
					<?php
							}
						}
					}

					?>
					<div class="item">
                        <div class="gallery-video-thumb">
						<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Lesa-Bradshaw288x163.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>Disability vs the Workplace</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 46.700</p>
							<p class="pricesession-thumb"> / €2.500</p>
						</div>
                     </div>

						<div class="card kd-card">
							<?php
							$videourl2 = "https://www.youtube.com/embed/W3_RjJtd6Eo";
							$parameters2 = "?controls=2&showinfo=0&rel=0&loop=0&mute=01&start=99";
							$finalurl2 = $videourl2 . $parameters2;
							$video_id2 = explode("https://www.youtube.com/embed/", $videourl2)[1];

							?>

							<img data-finalurl="<?php echo $finalurl2; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id2;  ?>/1.jpg" />
							<!--                                     <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl2; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->


							<div class="container">
								<p class="cardauthor">Lesa Bradshaw</p>
								<h4 class="sessionttile"><b>Disability vs the Workplace</b></h4>
								<p class="pricesession">60 minutes/€2.500</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 46.700</p>
								<p class="paratext">A local entrepreneur and HR consultant, Lesa Bradshaw, a partner at Bradshaw Le Roux Consulting, recruitment and assessment specialists and disability integration consultants, who was born with Spinal Muscular Atrophy, a condition that causes muscular weakness in all the voluntary muscles in the body. Technically, Lesa should not be able to lead an independent life, but she has done so. She is a psychology honours graduate, a registered psychometrist, and an MBA Graduate, having completed her dissertation on strategies for integrating people with disabilities into the workplace.</p>
							</div>
						</div>
					</div>
					<div class="item">
                    <div class="gallery-video-thumb">
						<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Ronesh-Sinha.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>A diabetes cure designed...</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 27.456</p>
							<p class="pricesession-thumb"> / €2.100</p>
						</div>
                    </div>
						<div class="card">

							<?php
							$videourl3 = "https://www.youtube.com/embed/UCc1o206GSs";
							$parameters3 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=38";
							$finalurl3 = $videourl3 . $parameters3;
							$video_id3 = explode("https://www.youtube.com/embed/", $videourl3)[1];
							?>
							<img data-finalurl="<?php echo $finalurl3; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id3;  ?>/1.jpg" />

							<!-- <iframe  class="carouselvideo" width="278" height="154" src=<?php echo $finalurl3; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->


							<div class="container">
								<p class="cardauthor">Ronesh Sinha</p>
								<h4 class="sessionttile"><b>A diabetes cure designed for diverse cultures</b></h4>
								<p class="pricesession">60 minutes/€2.100</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 27.456</p>
								<p class="paratext">Dr. Ronesh Sinha to discusses his innovative and evidence-based approach of tailoring medicine to different ethnic backgrounds to save lives. In his practice, he has had tremendous success in reversing chronic health conditions like diabetes and cholesterol disorders through targeted lifestyle changes. In this talk, he dives into topics such as: - Why are certain ethnicities, like Asian Americans and Pacific Islanders more predisposed to conditions like metabolic syndrome, diabetes and heart disease? - Which traditions and dietary habits reverse disease and which ones increase risk - How to personalize exercise, diet and lifestyle based on your individual risk - How to blend culture, ancestral wisdom and technology so you can thrive in our modern world. - How to improve the emotional and physical health of families, including children. </p>
							</div>
						</div>
					</div>
					<div class="item">
                    <div class="gallery-video-thumb">
						<a href=""><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/pellegrino-riccardi.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>Cross cultural communication</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.461.270</p>
							<p class="pricesession-thumb"> / €1.400</p>
						</div>
                </div>
						<div class="card">
							<?php
							$videourl4 = "https://www.youtube.com/embed/YMyofREc5Jk";
							$parameters4 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=50";
							$finalurl4 = $videourl4 . $parameters4;
							$video_id4 = explode("https://www.youtube.com/embed/", $videourl4)[1];
							?>
							<img data-finalurl="<?php echo $finalurl4; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id4;  ?>/1.jpg" />

							<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl4; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->



							<div class="container">
								<p class="cardauthor">Pellegrino Riccardi</p>
								<h4 class="sessionttile"><b>Cross cultural communication</b></h4>
								<p class="pricesession">60 minutes/€1.400</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.461.270</p>
								<p class="paratext">This talk was given at a local TEDx event, produced independently of the TED Conferences. </p>
							</div>
						</div>
					</div>
					<div class="item">
                    <div class="gallery-video-thumb">
						<a href=""><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/julien-bourelle.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>How Culture Drives Behaviours</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.116.254</p>
							<p class="pricesession-thumb"> / €1.700</p>
						</div>
                    </div>
						<div class="card">

							<?php
							$videourl5 = "https://www.youtube.com/embed/l-Yy6poJ2zs";
							$parameters5 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=35";
							$finalurl5 = $videourl5 . $parameters5;
							$video_id5 = explode("https://www.youtube.com/embed/", $videourl5)[1];
							?>
							<img data-finalurl="<?php echo $finalurl5; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id5;  ?>/1.jpg" />
							<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl5; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

							<div class="container">
								<p class="cardauthor">Julien S. Bourrelle</p>
								<h4 class="sessionttile"><b>How Culture Drives Behaviours</b></h4>
								<p class="pricesession">60 minutes/€1.700</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.116.254</p>
								<p class="paratext">Julien argues how we see the World through cultural glasses. By changing the glasses you can change the way you interpret the World.</p>
							</div>
						</div>
					</div>
					<div class="item">
                    <div class="gallery-video-thumb">
						<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Valerie-Hoek.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>Cultural difference in business</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 647.084</p>
							<p class="pricesession-thumb"> / €2.200</p>
						</div>
                    </div>
						<div class="card">
							<?php
							$videourl6 = "https://www.youtube.com/embed/VMwjscSCcf0";
							$parameters6 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=111";
							$finalurl6 = $videourl6 . $parameters6;
							$video_id6 = explode("https://www.youtube.com/embed/", $videourl6)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl6; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id6;  ?>/1.jpg"/>
							<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl6; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
							<div class="container">
								<p class="cardauthor">Valerie Hoeks</p>
								<h4 class="sessionttile"><b>Cultural difference in business</b></h4>
								<p class="pricesession">60 minutes/€2.200</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 647.084</p>
								<p class="paratext">This talk was given at a local TEDx event, produced independently of the TED Conferences. One of the elements of the cultural difference between Europe and China is the importance that is given to relationships. In the West you would assume the importance to be the same, but there is a significant distinction. In China connections with the right people help you to get things done, to survive and to succeed. </p>
							</div>
						</div>
					</div>
					<div class="item">
                    <div class="gallery-video-thumb">
						<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Antonia-Forster.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>LGBTQ; It's natural</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
							<p class="pricesession-thumb"> / €6.000</p>
						</div>
                    </div>
						<div class="card">
							<?php
							$videourl8 = "https://www.youtube.com/embed/bK6EwIoQl34";
							$parameters8 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=200";
							$video_id8 = explode("https://www.youtube.com/embed/", $videourl8)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl8; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id8;  ?>/1.jpg"/>
							<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl8; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
							<div class="container">
								<p class="cardauthor">Antonia Forster</p>
								<h4 class="sessionttile"><b>LGBTQ; It's natural</b></h4>
								<p class="pricesession">60 minutes/€6.000</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
								<p class="paratext">"When I came out of the closet I was blackmailed, threatened, even bribed. But of all the shocking words that were said to me, three stood out in particular - 'It's not natural'." The idea that certain behaviour is "unnatural" is often used to justify bigotry, especially against people who are LGBT, polyamorous, or in any way non-traditional. But is it true? Antonia Forster is a bisexual, non-monogamous biologist that wants to set the record straight. What does "natural" mean? ... </p>
							</div>
						</div>
					</div>

					<div class="item">
                    <div class="gallery-video-thumb">
						<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Antonia-Forster.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>LGBTQ; It's natural</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
							<p class="pricesession-thumb"> / €6.000</p>
						</div>
                    </div>
						<div class="card">
							<?php
							$videourl8 = "https://www.youtube.com/embed/bK6EwIoQl34";
							$parameters8 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=200";
							$video_id8 = explode("https://www.youtube.com/embed/", $videourl8)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl8; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id8;  ?>/1.jpg"/>
							<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl8; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
							<div class="container">
								<p class="cardauthor">Antonia Forster</p>
								<h4 class="sessionttile"><b>LGBTQ; It's natural</b></h4>
								<p class="pricesession">60 minutes/€6.000</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
								<p class="paratext">"When I came out of the closet I was blackmailed, threatened, even bribed. But of all the shocking words that were said to me, three stood out in particular - 'It's not natural'." The idea that certain behaviour is "unnatural" is often used to justify bigotry, especially against people who are LGBT, polyamorous, or in any way non-traditional. But is it true? Antonia Forster is a bisexual, non-monogamous biologist that wants to set the record straight. What does "natural" mean? ... </p>
							</div>
						</div>
					</div>

					<div class="item">
                    <div class="gallery-video-thumb">
						<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Antonia-Forster.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>LGBTQ; It's natural</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
							<p class="pricesession-thumb"> / €6.000</p>
						</div>
                    </div>

						<div class="card">
							<?php
							$videourl8 = "https://www.youtube.com/embed/bK6EwIoQl34";
							$parameters8 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=200";
							$finalurl8 = $videourl8 . $parameters8;
							$video_id8 = explode("https://www.youtube.com/embed/", $videourl8)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl8; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id8;  ?>/1.jpg"/>
							<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl8; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
							<div class="container">
								<p class="cardauthor">Antonia Forster</p>
								<h4 class="sessionttile"><b>LGBTQ; It's natural</b></h4>
								<p class="pricesession">60 minutes/€6.000</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
								<p class="paratext">"When I came out of the closet I was blackmailed, threatened, even bribed. But of all the shocking words that were said to me, three stood out in particular - 'It's not natural'." The idea that certain behaviour is "unnatural" is often used to justify bigotry, especially against people who are LGBT, polyamorous, or in any way non-traditional. But is it true? Antonia Forster is a bisexual, non-monogamous biologist that wants to set the record straight. What does "natural" mean? ... </p>
							</div>
						</div>
					</div>

					<div class="item">
                    <div class="gallery-video-thumb">
						<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Antonia-Forster.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>LGBTQ; It's natural</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
							<p class="pricesession-thumb"> / €6.000</p>
						</div>
                    </div>
						<div class="card">
							<?php
							$videourl8 = "https://www.youtube.com/embed/bK6EwIoQl34";
							$parameters8 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=200";
							$finalurl8 = $videourl8 . $parameters8;
							$video_id8 = explode("https://www.youtube.com/embed/", $videourl8)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl8; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id8;  ?>/1.jpg"/>
							<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl8; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
							<div class="container">
								<p class="cardauthor">Antonia Forster</p>
								<h4 class="sessionttile"><b>LGBTQ; It's natural</b></h4>
								<p class="pricesession">60 minutes/€6.000</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
								<p class="paratext">"When I came out of the closet I was blackmailed, threatened, even bribed. But of all the shocking words that were said to me, three stood out in particular - 'It's not natural'." The idea that certain behaviour is "unnatural" is often used to justify bigotry, especially against people who are LGBT, polyamorous, or in any way non-traditional. But is it true? Antonia Forster is a bisexual, non-monogamous biologist that wants to set the record straight. What does "natural" mean? ... </p>
							</div>
						</div>
					</div>

					<div class="item">
                    <div class="gallery-video-thumb">
						<a href=""><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Antonia-Forster.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>LGBTQ; It's natural</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
							<p class="pricesession-thumb"> / €6.000</p>
						</div>
                    </div>
						<div class="card">
							<?php
							$videourl8 = "https://www.youtube.com/embed/bK6EwIoQl34";
							$parameters8 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=200";
							$finalurl8 = $videourl8 . $parameters8;
							$video_id8 = explode("https://www.youtube.com/embed/", $videourl8)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl8; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id8;  ?>/1.jpg"/>
							<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl8; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
							<div class="container">
								<p class="cardauthor">Antonia Forster</p>
								<h4 class="sessionttile"><b>LGBTQ; It's natural</b></h4>
								<p class="pricesession">60 minutes/€6.000</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
								<p class="paratext">"When I came out of the closet I was blackmailed, threatened, even bribed. But of all the shocking words that were said to me, three stood out in particular - 'It's not natural'." The idea that certain behaviour is "unnatural" is often used to justify bigotry, especially against people who are LGBT, polyamorous, or in any way non-traditional. But is it true? Antonia Forster is a bisexual, non-monogamous biologist that wants to set the record straight. What does "natural" mean? ... </p>
							</div>
						</div>
					</div>

					<div class="item">
                    <div class="gallery-video-thumb">
						<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Antonia-Forster.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>LGBTQ; It's natural</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
							<p class="pricesession-thumb"> / €6.000</p>
						</div>
                    </div>
						<div class="card">
							<?php
							$videourl8 = "https://www.youtube.com/embed/bK6EwIoQl34";
							$parameters8 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=200";
							$finalurl8 = $videourl8 . $parameters8;
							$video_id8 = explode("https://www.youtube.com/embed/", $videourl8)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl8; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id8;  ?>/1.jpg"/>
							<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl8; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
							<div class="container">
								<p class="cardauthor">Antonia Forster</p>
								<h4 class="sessionttile"><b>LGBTQ; It's natural</b></h4>
								<p class="pricesession">60 minutes/€6.000</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
								<p class="paratext">"When I came out of the closet I was blackmailed, threatened, even bribed. But of all the shocking words that were said to me, three stood out in particular - 'It's not natural'." The idea that certain behaviour is "unnatural" is often used to justify bigotry, especially against people who are LGBT, polyamorous, or in any way non-traditional. But is it true? Antonia Forster is a bisexual, non-monogamous biologist that wants to set the record straight. What does "natural" mean? ... </p>
							</div>
						</div>
					</div>

					<div class="item">
                    <div class="gallery-video-thumb">
						<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Antonia-Forster.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>LGBTQ; It's natural</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
							<p class="pricesession-thumb"> / €6.000</p>
						</div>
                    </div>
						<div class="card">
							<?php
							$videourl8 = "https://www.youtube.com/embed/bK6EwIoQl34";
							$parameters8 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=200";
							$finalurl8 = $videourl8 . $parameters8;
							$video_id8 = explode("https://www.youtube.com/embed/", $videourl8)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl8; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id8;  ?>/1.jpg"/>
							<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl8; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
							<div class="container">
								<p class="cardauthor">Antonia Forster</p>
								<h4 class="sessionttile"><b>LGBTQ; It's natural</b></h4>
								<p class="pricesession">60 minutes/€6.000</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
								<p class="paratext">"When I came out of the closet I was blackmailed, threatened, even bribed. But of all the shocking words that were said to me, three stood out in particular - 'It's not natural'." The idea that certain behaviour is "unnatural" is often used to justify bigotry, especially against people who are LGBT, polyamorous, or in any way non-traditional. But is it true? Antonia Forster is a bisexual, non-monogamous biologist that wants to set the record straight. What does "natural" mean? ... </p>
							</div>
						</div>
					</div>

					<div class="item">
                    <div class="gallery-video-thumb">
						<a href=""><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Antonia-Forster.png" alt=""></a>
						<div clas="thumb-info">
							<h4 class="sessionttile-thumb"><b>LGBTQ; It's natural</b></h4>
							<p class="views-thumb"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
							<p class="pricesession-thumb"> / €6.000</p>
						</div>
                    </div>
						<div class="card">
							<?php
							$videourl8 = "https://www.youtube.com/embed/bK6EwIoQl34";
							$parameters8 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=200";
							$finalurl8 = $videourl8 . $parameters8;
							$video_id8 = explode("https://www.youtube.com/embed/", $videourl8)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl8; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id8;  ?>/1.jpg"/>
							<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl8; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
							<div class="container">
								<p class="cardauthor">Antonia Forster</p>
								<h4 class="sessionttile"><b>LGBTQ; It's natural</b></h4>
								<p class="pricesession">60 minutes/€6.000</p>
								<p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png"/> 1.640.000</p>
								<p class="paratext">"When I came out of the closet I was blackmailed, threatened, even bribed. But of all the shocking words that were said to me, three stood out in particular - 'It's not natural'." The idea that certain behaviour is "unnatural" is often used to justify bigotry, especially against people who are LGBT, polyamorous, or in any way non-traditional. But is it true? Antonia Forster is a bisexual, non-monogamous biologist that wants to set the record straight. What does "natural" mean? ... </p>
							</div>
						</div>
					</div>









				</div>
				<div class="home-demo">
					<h3 id="myList" class="hometitle">Inspiration</h3>

					<div class="owl-carousel owl-theme">
						<div class="item">
                        <div class="gallery-video-thumb">
							<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Andrew-Tarvin.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>The skill of humor</b></h4>
								<p class="views-thumb">12.559.829 Views</p>
								<p class="pricesession-thumb"> / €1.700</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/MdZAMSyn_As";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=6";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Andrew Tarvin</p>
									<h4 class="sessionttile"><b>The skill of humor</b></h4>
									<p class="pricesession">60 minutes/€1.700</p>
									<p class="views">12.559.829 Views</p>
									<p class="paratext">"Humor is something that transcends most barriers. It is a common unification; a concept understood by all. Despite this, there exists a large portion of the population that does not think they can utilize humor. Andrew Tarvin will show you that everyone can use humor. Andrew Tarvin is the world’s first Humor Engineer teaching people how to get better results while having more fun. He has worked with thousands of people at 200+ organizations, including P&G, GE, and Microsoft. Combining his background as a project manager at Procter & Gamble with his experience as an international comedian, Andrew’s program are engaging, entertaining, and most important, effective. He is a best-selling author, has been featured in The Wall Street Journal, Forbes, and TEDx, and has delivered programs in 50 states, 18 countries, and 3 continents. He loves the color orange and is obsessed with chocolate. </p>
								</div>
							</div>
						</div>
						<div class="item">
                        <div class="gallery-video-thumb">
							<a href=""><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/call-newport.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>Quit Social media</b></h4>
								<p class="views-thumb">8.970.033 Views</p>
								<p class="pricesession-thumb"> / €950</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/3E7hkPZ-HTk";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=30";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Dr. Cal Newport</p>
									<h4 class="sessionttile"><b>Quit Social media</b></h4>
									<p class="pricesession">60 minutes/€950</p>
									<p class="views">8.970.033 Views</p>
									<p class="paratext">"Deep work' will make you better at what you do. You will achieve more in less time. And feel the sense of true fulfillment that comes from the mastery of a skill. Cal Newport is an Assistant Professor of Computer Science at Georgetown University. In addition to studying the theoretical foundations of our digital age, Newport also writes about the impact of these technologies on the world of work. His most recent book, Deep Work, argues that focus is the new I.Q. in the modern workplace and that the ability to concentrate without distraction is becoming increasingly valuable. He previously wrote So Good They Can’t Ignore You, a book which debunks the long-held belief that “follow your passion” is good advice, and three popular books of unconventional advice for students.</p>
								</div>
							</div>
						</div>
						<div class="item">
                        <div class="gallery-video-thumb">
							<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Jane-Smith.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>The science of flirting</b></h4>
								<p class="views-thumb">8.191.786 Views</p>
								<p class="pricesession-thumb"> / €750</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/5cQoGNEcc5Q";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=80";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Jean Smith</p>
									<h4 class="sessionttile"><b>The science of flirting</b></h4>
									<p class="pricesession">60 minutes/€750</p>
									<p class="views">8.191.786 Views</p>
									<p class="paratext">Is this person flirting with me? This question has plagued us from nearly the beginning of time. Social anthropologist Jean Smith, or ‘flirtologist’ if you will, demonstrates her 6 simple steps known as “H.O.T. A.P.E.” to help answer that very question. And it will forever change your perception of flirting from being a stranger’s evaluation of your worth into what it should be: a fun game!</p>
								</div>
							</div>
						</div>
						<div class="item">
                        <div class="gallery-video-thumb">
							<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Michael-Shellenberger.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>Why renewables can’t save the planet</b></h4>
								<p class="views-thumb">4.951.414 Views</p>
								<p class="pricesession-thumb"> / €1.890</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/N-yALPEpV4w";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=62";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Michael Shellenberger</p>
									<h4 class="sessionttile"><b>Why renewables can’t save the planet</b></h4>
									<p class="pricesession">60 minutes/€1.890</p>
									<p class="views">4.951.414 Views</p>
									<p class="paratext">Environmentalists have long promoted renewable energy sources like solar panels and wind farms to save the climate. But what about when those technologies destroy the environment? In this provocative talk, Time Magazine “Hero of the Environment” and energy expert, Michael Shellenberger explains why solar and wind farms require so much land for mining and energy production, and an alternative path to saving both the climate and the natural environment. Michael Shellenberger is a Time Magazine Hero of the Environment and President of Environmental Progress, a research and policy organization. A lifelong environmentalist, Michael changed his mind about nuclear energy and has helped save enough nuclear reactors to prevent an increase in carbon emissions equivalent to adding more than 10 million cars to the road. He lives in Berkeley, California. This talk was given at a TEDx event using the TED conference format but independently organized by a local community</p>
								</div>
							</div>
						</div>
						<div class="item">
                        <div class="gallery-video-thumb">
							<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Rory-vaden.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>How to multiply your time</b></h4>
								<p class="views-thumb">4.558.759 Views</p>
								<p class="pricesession-thumb"> / €2.400</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/y2X7c9TUQJ8";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=16";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Rory Vaden</p>
									<h4 class="sessionttile"><b>How to multiply your time</b></h4>
									<p class="pricesession">60 minutes/€2.400</p>
									<p class="views">4.558.759 Views</p>
									<p class="paratext">Everything you know about time-management is wrong. In this challenging and counter-intuitive video, Self-Discipline Strategist and New York Times bestselling author of Rory Vaden, shows you why you can't solve today's time-management challenges with yesterday's time-management strategies. More importantly he explains why procrastinating on purpose is the key to being able to Multiply your time.</p>
								</div>
							</div>
						</div>
						<div class="item">
                        <div class="gallery-video-thumb">
							<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/julian-treasure.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>5 ways to listen better</b></h4>
								<p class="views-thumb">3.987.570 Views</p>
								<p class="pricesession-thumb"> / €2.500</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/cSohjlYQI2A";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=16";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Julian Treasure</p>
									<h4 class="sessionttile"><b>5 ways to listen better</b></h4>
									<p class="pricesession">60 minutes/€2.500</p>
									<p class="views">3.987.570 Views</p>
									<p class="paratext">In our louder and louder world, says sound expert Julian Treasure, "We are losing our listening." In this short, fascinating talk, Treasure shares five ways to re-tune your ears for conscious listening -- to other people and the world around you.</p>
								</div>
							</div>
						</div>

						<div class="item">
                        <div class="gallery-video-thumb">
							<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Andrew-Tarvin.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>The skill of humor</b></h4>
								<p class="views-thumb">12.559.829 Views</p>
								<p class="pricesession-thumb"> / €1.700</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/MdZAMSyn_As";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=6";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Andrew Tarvin</p>
									<h4 class="sessionttile"><b>The skill of humor</b></h4>
									<p class="pricesession">60 minutes/€1.700</p>
									<p class="views">12.559.829 Views</p>
									<p class="paratext">"Humor is something that transcends most barriers. It is a common unification; a concept understood by all. Despite this, there exists a large portion of the population that does not think they can utilize humor. Andrew Tarvin will show you that everyone can use humor. Andrew Tarvin is the world’s first Humor Engineer teaching people how to get better results while having more fun. He has worked with thousands of people at 200+ organizations, including P&G, GE, and Microsoft. Combining his background as a project manager at Procter & Gamble with his experience as an international comedian, Andrew’s program are engaging, entertaining, and most important, effective. He is a best-selling author, has been featured in The Wall Street Journal, Forbes, and TEDx, and has delivered programs in 50 states, 18 countries, and 3 continents. He loves the color orange and is obsessed with chocolate. </p>
								</div>
							</div>
						</div>
						<div class="item">
                        <div class="gallery-video-thumb">
							<a href=""><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/call-newport.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>Quit Social media</b></h4>
								<p class="views-thumb">8.970.033 Views</p>
								<p class="pricesession-thumb"> / €950</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/3E7hkPZ-HTk";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=30";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Dr. Cal Newport</p>
									<h4 class="sessionttile"><b>Quit Social media</b></h4>
									<p class="pricesession">60 minutes/€950</p>
									<p class="views">8.970.033 Views</p>
									<p class="paratext">"Deep work' will make you better at what you do. You will achieve more in less time. And feel the sense of true fulfillment that comes from the mastery of a skill. Cal Newport is an Assistant Professor of Computer Science at Georgetown University. In addition to studying the theoretical foundations of our digital age, Newport also writes about the impact of these technologies on the world of work. His most recent book, Deep Work, argues that focus is the new I.Q. in the modern workplace and that the ability to concentrate without distraction is becoming increasingly valuable. He previously wrote So Good They Can’t Ignore You, a book which debunks the long-held belief that “follow your passion” is good advice, and three popular books of unconventional advice for students.</p>
								</div>
							</div>
						</div>
						<div class="item">
                        <div class="gallery-video-thumb">
							<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Jane-Smith.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>The science of flirting</b></h4>
								<p class="views-thumb">8.191.786 Views</p>
								<p class="pricesession-thumb"> / €750</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/5cQoGNEcc5Q";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=80";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Jean Smith</p>
									<h4 class="sessionttile"><b>The science of flirting</b></h4>
									<p class="pricesession">60 minutes/€750</p>
									<p class="views">8.191.786 Views</p>
									<p class="paratext">Is this person flirting with me? This question has plagued us from nearly the beginning of time. Social anthropologist Jean Smith, or ‘flirtologist’ if you will, demonstrates her 6 simple steps known as “H.O.T. A.P.E.” to help answer that very question. And it will forever change your perception of flirting from being a stranger’s evaluation of your worth into what it should be: a fun game!</p>
								</div>
							</div>
						</div>
						<div class="item">
                        <div class="gallery-video-thumb">
							<a href="" class=""><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Michael-Shellenberger.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>Why renewables can’t save the planet</b></h4>
								<p class="views-thumb">4.951.414 Views</p>
								<p class="pricesession-thumb"> / €1.890</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/N-yALPEpV4w";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=62";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Michael Shellenberger</p>
									<h4 class="sessionttile"><b>Why renewables can’t save the planet</b></h4>
									<p class="pricesession">60 minutes/€1.890</p>
									<p class="views">4.951.414 Views</p>
									<p class="paratext">Environmentalists have long promoted renewable energy sources like solar panels and wind farms to save the climate. But what about when those technologies destroy the environment? In this provocative talk, Time Magazine “Hero of the Environment” and energy expert, Michael Shellenberger explains why solar and wind farms require so much land for mining and energy production, and an alternative path to saving both the climate and the natural environment. Michael Shellenberger is a Time Magazine Hero of the Environment and President of Environmental Progress, a research and policy organization. A lifelong environmentalist, Michael changed his mind about nuclear energy and has helped save enough nuclear reactors to prevent an increase in carbon emissions equivalent to adding more than 10 million cars to the road. He lives in Berkeley, California. This talk was given at a TEDx event using the TED conference format but independently organized by a local community</p>
								</div>
							</div>
						</div>
						<div class="item">
                        <div class="gallery-video-thumb">
							<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Rory-vaden.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>How to multiply your time</b></h4>
								<p class="views-thumb">4.558.759 Views</p>
								<p class="pricesession-thumb"> / €2.400</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/y2X7c9TUQJ8";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=16";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Rory Vaden</p>
									<h4 class="sessionttile"><b>How to multiply your time</b></h4>
									<p class="pricesession">60 minutes/€2.400</p>
									<p class="views">4.558.759 Views</p>
									<p class="paratext">Everything you know about time-management is wrong. In this challenging and counter-intuitive video, Self-Discipline Strategist and New York Times bestselling author of Rory Vaden, shows you why you can't solve today's time-management challenges with yesterday's time-management strategies. More importantly he explains why procrastinating on purpose is the key to being able to Multiply your time.</p>
								</div>
							</div>
						</div>
						<div class="item">
                        <div class="gallery-video-thumb">
							<a href="" ><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/julian-treasure.png" alt=""></a>
							<div clas="thumb-info">
								<h4 class="sessionttile-thumb"><b>5 ways to listen better</b></h4>
								<p class="views-thumb">3.987.570 Views</p>
								<p class="pricesession-thumb"> / €2.500</p>
							</div>
                        </div>
							<div class="card">
								<?php
								$videourl9 = "https://www.youtube.com/embed/cSohjlYQI2A";
								$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=16";
								$finalurl9 = $videourl9 . $parameters9;
								$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
								<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<div class="container">
									<p class="cardauthor">Julian Treasure</p>
									<h4 class="sessionttile"><b>5 ways to listen better</b></h4>
									<p class="pricesession">60 minutes/€2.500</p>
									<p class="views">3.987.570 Views</p>
									<p class="paratext">In our louder and louder world, says sound expert Julian Treasure, "We are losing our listening." In this short, fascinating talk, Treasure shares five ways to re-tune your ears for conscious listening -- to other people and the world around you.</p>
								</div>
							</div>
						</div>


					</div>
					<div class="home-demo">
						<h3 id="myList" class="hometitle">Soft Skills</h3>

						<div class="owl-carousel owl-theme">

							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/David-Allen.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>The Art of Stress-Free Productivity</b></h4>
									<p class="views-thumb">2.828.102 Views</p>
									<p class="pricesession-thumb"> / €1.450</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/CHxhjDPKfbY";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=7";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">David Allen</p>
										<h4 class="sessionttile"><b>The Art of Stress-Free Productivity</b></h4>
										<p class="pricesession">60 minutes/€1.450</p>
										<p class="views">2.828.102 Views</p>
										<p class="paratext">Productivity guru and coach David Allen talks about "Stress Free Productivity" at TEDxClaremontColleges.</p>
									</div>
								</div>
							</div>

							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Brad-Aeon.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>The Philosophy of Time Management</b></h4>
									<p class="views-thumb">5.521.189 Views</p>
									<p class="pricesession-thumb"> / €2.500</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/WXBA4eWskrc";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=97";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">Brad Aeon</p>
										<h4 class="sessionttile"><b>The Philosophy of Time Management</b></h4>
										<p class="pricesession">60 minutes/€2.500</p>
										<p class="views">5.521.189 Views</p>
										<p class="paratext">You are going to die eventually. Will you fill whatever lifetime you have left with so-called time management techniques and shortcuts? Or will you see time management as a way to infuse your life with meaning and purpose? Brad Aeon studies time. Thank you for your time. Aeon is a Ph.D. researcher at the John Molson School of Business focused on time management, temporality, and work-life balance. He focuses on the improvement of our temporal decision-making as a solution to achieving more succe</p>
									</div>
								</div>
							</div>

							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Guilliane-Ku.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>The art of negotiation</b></h4>
									<p class="views-thumb">3.254.618 Views</p>
									<p class="pricesession-thumb"> / €6.000</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/uKbcmlKb81c";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">Professor Gilian Ku</p>
										<h4 class="sessionttile"><b>The art of negotiation</b></h4>
										<p class="pricesession">60 minutes/€6.000</p>
										<p class="views">3.254.618 Views</p>
										<p class="paratext">How do your actions and relationships frame your ability to impact, influence and persuade? Gillian Ku, Professor of Organisational Behaviour, shares six interpersonal principles of how we interact with people that affect one’s ability to influence and persuade others.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Jannell-Mc-Aulay.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>How to achieve high performance...</b></h4>
									<p class="views-thumb">97.851 Views</p>
									<p class="pricesession-thumb"> / €1.250</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/EETDwk0_ErQ";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=14";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">Jannell Mac Aulay</p>
										<h4 class="sessionttile"><b>How to achieve high performance - under stress</b></h4>
										<p class="pricesession">60 minutes/€1.250</p>
										<p class="views">97.851 Views</p>
										<p class="paratext">We all want to perform our best in every facet of our lives. In fact, each of us strives to maintain or even accelerate our professional success without sacrificing ourselves, specifically our health and relationships, along the way. But it is extremely difficult to do in reality! Dr. MacAulay, military leader and pilot, academic, educator, and mother of two, relied on her experience, education, and training to achieve high performance. After an unconventional wake-up call spotlighted her performance vulnerability, she realized how much of her moment-to-moment life she was missing and how it was adversely affecting her health and her ability to thrive at work and at home. How many of us struggle with this same dilemma? Dr. MacAulay shares her solution to high performance under stress, which also allows her to cultivate the skills for personal care and recovery. Dr. Janell MacAulay specializes in performance under stress and creating mindful leaders who thrive in their workspace and life space. She is a USAF Lieutenant Colonel, the director of Human Performance and Leadership for the 58th Special Operations Wing, Kirtland Air Force Base, New Mexico, and an Air Force Profession of Arms Center of E</p>
									</div>
								</div>
							</div>
							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/David-JP-Philips.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>The magical science of storytelling</b></h4>
									<p class="views-thumb">419.320 Views</p>
									<p class="pricesession-thumb"> / €1.400</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/Nj-hdQMa3uA";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=7";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">David JP Philips</p>
										<h4 class="sessionttile"><b>The magical science of storytelling</b></h4>
										<p class="pricesession">60 minutes/€1.400</p>
										<p class="views">419.320 Views</p>
										<p class="paratext">Why is Storytelling so powerful? And how do we use it to our advantage? Presentations expert David JP Phillips shares key neurological findings on storytelling and with the help of his own stories, induces in us the release of four neurotransmitters of his choice. Learn more in this 2nd TEDxStockholm talk of David's.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Jim-Tamm.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>Cultivating Collaboration</b></h4>
									<p class="views-thumb">570.764 Views</p>
									<p class="pricesession-thumb"> / €1.700</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/vjSTNv4gyMM";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=13";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">Jim Tamm</p>
										<h4 class="sessionttile"><b>Cultivating Collaboration</b></h4>
										<p class="pricesession">60 minutes/€1.700</p>
										<p class="views">570.764 Views</p>
										<p class="paratext">Ever see red? It's called being defensive, and turns out, it is the single greatest inhibitor to true collaboration. Jim Tamm shares years of experience in getting out of the red zone and cultivating a "green zone" attitude. Jim Tamm is a former law professor and senior administrative law judge for the state of California. He mediated nearly 2,000 employment disputes and handed down legal decisions that impacted national labor policy. He’s worked for 40 years in the field of alliance building and conflict resolution, and is an expert in building collaborative workplace environments. He’s the author of “Radical Collaboration,” published in 2005.</p>
									</div>
								</div>
							</div>

							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/David-Allen.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>The Art of Stress-Free Productivity</b></h4>
									<p class="views-thumb">2.828.102 Views</p>
									<p class="pricesession-thumb"> / €1.450</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/CHxhjDPKfbY";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=7";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">David Allen</p>
										<h4 class="sessionttile"><b>The Art of Stress-Free Productivity</b></h4>
										<p class="pricesession">60 minutes/€1.450</p>
										<p class="views">2.828.102 Views</p>
										<p class="paratext">Productivity guru and coach David Allen talks about "Stress Free Productivity" at TEDxClaremontColleges.</p>
									</div>
								</div>
							</div>

							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Brad-Aeon.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>The Philosophy of Time Management</b></h4>
									<p class="views-thumb">5.521.189 Views</p>
									<p class="pricesession-thumb"> / €2.500</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/WXBA4eWskrc";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=97";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">Brad Aeon</p>
										<h4 class="sessionttile"><b>The Philosophy of Time Management</b></h4>
										<p class="pricesession">60 minutes/€2.500</p>
										<p class="views">5.521.189 Views</p>
										<p class="paratext">You are going to die eventually. Will you fill whatever lifetime you have left with so-called time management techniques and shortcuts? Or will you see time management as a way to infuse your life with meaning and purpose? Brad Aeon studies time. Thank you for your time. Aeon is a Ph.D. researcher at the John Molson School of Business focused on time management, temporality, and work-life balance. He focuses on the improvement of our temporal decision-making as a solution to achieving more succe</p>
									</div>
								</div>
							</div>

							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Guilliane-Ku.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>The art of negotiation</b></h4>
									<p class="views-thumb">3.254.618 Views</p>
									<p class="pricesession-thumb"> / €6.000</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/uKbcmlKb81c";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">Professor Gilian Ku</p>
										<h4 class="sessionttile"><b>The art of negotiation</b></h4>
										<p class="pricesession">60 minutes/€6.000</p>
										<p class="views">3.254.618 Views</p>
										<p class="paratext">How do your actions and relationships frame your ability to impact, influence and persuade? Gillian Ku, Professor of Organisational Behaviour, shares six interpersonal principles of how we interact with people that affect one’s ability to influence and persuade others.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Jannell-Mc-Aulay.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>How to achieve high performance...</b></h4>
									<p class="views-thumb">97.851 Views</p>
									<p class="pricesession-thumb"> / €1.250</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/EETDwk0_ErQ";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=14";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">Jannell Mac Aulay</p>
										<h4 class="sessionttile"><b>How to achieve high performance - under stress</b></h4>
										<p class="pricesession">60 minutes/€1.250</p>
										<p class="views">97.851 Views</p>
										<p class="paratext">We all want to perform our best in every facet of our lives. In fact, each of us strives to maintain or even accelerate our professional success without sacrificing ourselves, specifically our health and relationships, along the way. But it is extremely difficult to do in reality! Dr. MacAulay, military leader and pilot, academic, educator, and mother of two, relied on her experience, education, and training to achieve high performance. After an unconventional wake-up call spotlighted her performance vulnerability, she realized how much of her moment-to-moment life she was missing and how it was adversely affecting her health and her ability to thrive at work and at home. How many of us struggle with this same dilemma? Dr. MacAulay shares her solution to high performance under stress, which also allows her to cultivate the skills for personal care and recovery. Dr. Janell MacAulay specializes in performance under stress and creating mindful leaders who thrive in their workspace and life space. She is a USAF Lieutenant Colonel, the director of Human Performance and Leadership for the 58th Special Operations Wing, Kirtland Air Force Base, New Mexico, and an Air Force Profession of Arms Center of E</p>
									</div>
								</div>
							</div>
							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/David-JP-Philips.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>The magical science of storytelling</b></h4>
									<p class="views-thumb">419.320 Views</p>
									<p class="pricesession-thumb"> / €1.400</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/Nj-hdQMa3uA";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=7";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">David JP Philips</p>
										<h4 class="sessionttile"><b>The magical science of storytelling</b></h4>
										<p class="pricesession">60 minutes/€1.400</p>
										<p class="views">419.320 Views</p>
										<p class="paratext">Why is Storytelling so powerful? And how do we use it to our advantage? Presentations expert David JP Phillips shares key neurological findings on storytelling and with the help of his own stories, induces in us the release of four neurotransmitters of his choice. Learn more in this 2nd TEDxStockholm talk of David's.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<a href="" class="gallery-video-thumb"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/Jim-Tamm.png" alt=""></a>
								<div clas="thumb-info">
									<h4 class="sessionttile-thumb"><b>Cultivating Collaboration</b></h4>
									<i class="fa-solid fa-eye"></i>
									<p class="views-thumb">570.764 Views</p>
									<p class="pricesession-thumb"> / €1.700</p>
								</div>
								<div class="card">
									<?php
									$videourl9 = "https://www.youtube.com/embed/vjSTNv4gyMM";
									$parameters9 = "?controls=2&showinfo=0&rel=0&loop=0&mute=0&start=13";
									$finalurl9 = $videourl9 . $parameters9;
									$video_id9 = explode("https://www.youtube.com/embed/", $videourl9)[1];
                                    ?>
							<img data-finalurl="<?php echo $finalurl9; ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php echo $video_id9;  ?>/1.jpg"/>
									<!-- <iframe class="carouselvideo" width="278" height="154" src=<?php echo $finalurl9; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<div class="container">
										<p class="cardauthor">Jim Tamm</p>
										<h4 class="sessionttile"><b>Cultivating Collaboration</b></h4>
										<p class="pricesession">60 minutes/€1.700</p>
										<p class="views">570.764 Views</p>
										<p class="paratext">Ever see red? It's called being defensive, and turns out, it is the single greatest inhibitor to true collaboration. Jim Tamm shares years of experience in getting out of the red zone and cultivating a "green zone" attitude. Jim Tamm is a former law professor and senior administrative law judge for the state of California. He mediated nearly 2,000 employment disputes and handed down legal decisions that impacted national labor policy. He’s worked for 40 years in the field of alliance building and conflict resolution, and is an expert in building collaborative workplace environments. He’s the author of “Radical Collaboration,” published in 2005.</p>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
		<!--
		<div class="container-fluid background-black">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
				</ul>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/slider-hm4-3.png" alt="Los Angeles" height="500">
						<div class="carousel-caption">
							<h3>Los Angeles</h3>
							<p>We had such a great time in LA!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/slider-hm4-4.png" alt="Chicago" height="500">
						<div class="carousel-caption">
							<h3>Chicago</h3>
							<p>Thank you, Chicago!</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>-->
	</main>
</div>

<script>
	$(function() {
		// Owl Carousel
		var owl = $(".owl-carousel");
		owl.owlCarousel({
			items: 6,
			margin: 10,
			loop: true,
			nav: true,
			slideBy: 6
		});
	});


	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

</script>
<?php get_sidebar('content-bottom'); ?>
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>