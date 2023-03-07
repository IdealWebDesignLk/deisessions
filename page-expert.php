<?php /* Template Name: Page_Experts */ ?>
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

  $user = $wpdb->get_results( "SELECT * FROM wp_821991_amelia_users");
					
							?>
					<div class="container">
    <div class="row">
					<?php
					
						foreach ( $user as $row ){ 
						if($row->type == "provider"){
// 							echo "First Name:".$row->firstName."<br>";
// 							echo "Last Name:".$row->lastName."<br>";
// 							echo "Email:".$row->email."<br><br>";
// 						echo $row->pictureFullPath
							?>
	
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card shadow">
                <img src="<?php 
							if($row->pictureFullPath == ""){
								echo "https://demoleqture.royboy.eu/wp-content/uploads/2022/08/sc8.jpg";
							}else{
								echo $row->pictureFullPath;
							}
							 ?>" class="card-img-top" alt="web">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $row->firstName . " " . $row->lastName ?></h2>
                    <p class="card-text"><?php echo $row->email ?></p>
                </div>
                <div class="card-body card-p">
                    <div class="row">
						<?php
                        $services = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services JOIN wp_821991_amelia_providers_to_services ON wp_821991_amelia_services.id = wp_821991_amelia_providers_to_services.serviceId WHERE wp_821991_amelia_providers_to_services.userId =" . $row->id);

			foreach ($services as $service) {
				?> 
				<h2 class="card__title"><?php echo $service->name ?></h2>
								<h4 class="card-price"><?php echo $service->price ?></h4>
						<?php
						}
							?>
                    </div>
                </div>
            </div>
        </div>
 
							<?php
								}
						}
					?>
		  </div>
</div>
                </main><!-- .site-main -->
                <?php get_sidebar( 'content-bottom' ); ?>
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>