<?php /* Template Name: Page_service_boking-test */ ?>
<?php get_header(); ?>

<!-- fuction to get custom image sizes -->

<?php echo '<script type="text/javascript">let kdSingeSession = true; </script>'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background: white;
    }

    div#primary {
        background: white;
        padding-top: 1px;
    }
</style>
<?php
$serviceid = $_GET['sid'];

$homepageurl = "https://tolqs.com/expert-home/?id=" . $serviceid;

$service = $wpdb->get_results("SELECT * FROM `wp_821991_amelia_services` where id='$serviceid'");

$preTalkId = $service[0]->preTalkSessionId;
$catgoryid = $service[0]->categoryId;

// echo $catgoryid;

$employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$serviceid'");
$empid = $employee[0]->id;

$externalid = $employee[0]->externalId;

$worduser = 'user_' . $externalid;
if (get_field('inactive', $worduser)) {
?>
    <h1 class="disableuser">This user is Inactive</h1>
<?php } else {


?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container-fluid">
                <h1 class="pge-title">

                </h1>
                <?php
                $videourl = "https://www.youtube.com/embed/" . $service[0]->video . "?controls=1&showinfo=0&rel=0&loop=1&start=8&autoplay=1&mute=1";
                ?>
                <div class="data-component-video" style="width:100%;margin:0 auto; border: 1px solid #5d395a;">

                    <iframe width="100%" height="600px" src=<?php echo $videourl; ?>>
                    </iframe>

                </div>
                <div class="row secondtext">
                    <div class="row">

                        <div class="col-md-6 bookwidgetfirtcol">
                            <div class="innerrow">
                                <div class="row">
                                    <?php

                                    $wordpressuserid = $employee[0]->externalId;
                                    $worduser = 'user_' . $wordpressuserid;
                                    ?>

                                    <h2><?php echo $service[0]->name; ?></h2>
                                    <h6 class="field">Tags : <?php if ($service[0]->tag1 != null) { ?> <span><?php echo $service[0]->tag1 ?></span><?php } ?><?php if ($service[0]->tag2 != null) { ?> <span> / <?php echo $service[0]->tag2 ?></span><?php } ?><?php if ($service[0]->tag3 != null) { ?> <span> / <?php echo $service[0]->tag3 ?></span><?php } ?><?php if ($service[0]->tag4 != null) { ?> <span> / <?php echo $service[0]->tag4 ?></span><?php } ?><?php if ($service[0]->tag5 != null) { ?> <span> / <?php echo $service[0]->tag5 ?></span><?php } ?>
                                    </h6>
                                    <br>
                                    <h6 class="field">Languages : <?php if ($service[0]->language1 != null) { ?> <span><?php echo $service[0]->language1 ?></span><?php } ?><?php if ($service[0]->language2 != null) { ?> <span> / <?php echo $service[0]->language2 ?></span><?php } ?><?php if ($service[0]->language3 != null) { ?> <span> / <?php echo $service[0]->language3 ?></span><?php } ?>
                                    </h6>



                                    <h2><?php echo do_shortcode('[woo_multi_currency_exchange price="' . $service[0]->price . '" currency="' . $curr . '"]'); ?></h2>

                                    <h3 class="empname"><?php echo $employee[0]->firstName . " " . $employee[0]->lastName; ?></h3>

                                    <?php if (get_field('verifed', $worduser)) : ?>
                                        <span><img src="https://tolqs.com/wp-content/uploads/2022/10/checked.png"></span>
                                        <p class="verified"><?php the_field('verifed', $worduser); ?></p>
                                    <?php endif; ?>




                                </div>
                                <div class="row">
                                    <div class="rate">
                                        <?php
                                        $average = 0;
                                        $reviewresult = $wpdb->get_results("SELECT * FROM `review_details` where service_id='$serviceid'");
                                        foreach ($reviewresult as $row) {
                                            $count = count($reviewresult);
                                            $review = $row->starreview;

                                            $rate += $review;
                                            $average = $rate / $count;
                                        }
                                        $rating = round($average);
                                        if ($rating == "1") {
                                        ?>
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">


                                        <?php
                                        } else if ($rating == "2") {
                                        ?>
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <?php
                                        } else if ($rating == "3") {
                                        ?>
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <?php
                                        } else if ($rating == "4") {
                                        ?>
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <?php
                                        } else if ($rating == "5") {
                                        ?>
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">

                                        <?php
                                        }
                                        ?>

                                    </div>
                                    <div class="sessiondiscription"><?php echo $service[0]->description; ?></div></br></br>

                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">

                            <a class="w3-bar-item w3-button bookingbtn booktypebtn">Booking</a>

                            <?php
                            if ($preTalkId != "") {
                            ?>
                                <a id= "amelia-button" class="w3-bar-item w3-button pretalkbtn booktypebtn">Pre Talk</a>

                            <?php

                            }
                            ?>




                            <div id="bookingdiv" class="w3-container">

                               <?php
                                echo do_shortcode('[ameliastepbooking service="' . $serviceid . '"]');
                                ?> 
                            </div>

                            <div id="pretalkdiv" class="w3-container">
                                <?php
								echo ('[ameliastepbooking trigger="amelia-button" service="' . $preTalkId . '"]');
                                //echo do_shortcode('[ameliastepbooking trigger="amelia-button" service="' . $preTalkId . '"]');
                                ?>
                            </div>
                            <!-- 
                        <div class="w3-bar w3-black">
                            <button class="w3-bar-item w3-button" onclick="openCity('London')">Booking</button>
                            <?php
                            //  if ($preTalkId != "") {

                            ?>
                                <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Pre-Talk</button>
                            <?php
                            //   }
                            ?>
                        </div>

                        <div id="London" class="w3-container city">
                            <?php
                            //  echo do_shortcode('[ameliastepbooking service="' . $serviceid . '"]');
                            ?>
                        </div>

                        <div id="Paris" class="w3-container city" style="display:none">
                            <?php
                            //   echo do_shortcode('[ameliastepbooking service="' . $preTalkId . '"]');
                            ?>
                        </div> -->



                            <script>
                                function openCity(cityName) {
                                    var i;
                                    var x = document.getElementsByClassName("city");
                                    for (i = 0; i < x.length; i++) {
                                        x[i].style.display = "none";
                                    }
                                    document.getElementById(cityName).style.display = "block";
                                }
                            </script>

                        </div>
                    </div>

                </div>
                <div class="mainbody bookthissec">
                    <div class="subrow">
                        <div class="row">
                            <div class="ab-title" style="margin:0 auto;">Book this session</div>
                        </div>
                        <div class="row">
                            <div class="amiliyabooking">
                                <?php
                             //   echo do_shortcode('[ameliastepbooking service="' . $serviceid . '"]');

                                ?>
                            </div>
                        </div>
                        </br>
                    </div>
                </div>
                <div class="row testisec ">
                    <div class="fulltestirow">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                    <!-- Carousel Slides / Quotes -->
                                    <div class="carousel-inner text-center">
                                        <!-- Quote 1 -->
                                        <div class="item active">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <p>Great content, Excellent service, Unique proposition. After having done 150 sessions with them I can easily recommend the Leqture speakers and their service.”</p>
                                                        <small>Tré Sweeney</small>
                                                        <h6 class="authorname">Head of Learning and Development<br>Adyen</h6>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- Quote 2 -->
                                        <div class="item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <p>We have teamed up for over two years with Leqture and their inspiration sessions have always been a big success.</p>
                                                        <small>Lena Olivier</small>
                                                        <h6 class="authorname">Regional Vice President<br>Salesforce </h6>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- Quote 3 -->
                                        <div class="item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <p>Leqture is a very professional partner and their unique sessions have inspired many of us here at L’Oréal, including myself.</p>
                                                        <small>Amos Susskind</small>
                                                        <h6 class="authorname">Managing Director UK & Ireland.<br>L Oréal</h6>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- Quote 4 -->
                                        <div class="item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <p>Leqture helps us develop and inspire our international management with a broad range of inspirational sessions.</p>
                                                        <small>Jean-Paul Christy</small>
                                                        <h6 class="authorname">President Central Europe <br>Kärcher</h6>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <!-- Bottom Carousel Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="3"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                        </li>
                                    </ol>

                                    <!-- Carousel Buttons Next/Prev -->
                                    <!--<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>  -->
                                    <!--<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mainbody abtexprt">
                    <div class="subrow">
                        <div class="row">
                            <div class="ab-title" style="margin:0 auto;">About the Expert</div>
                        </div>
                        <div class="row author-box">
                            <!-- <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4" style="background-image: url('https://tolqs.com/wp-content/uploads/2022/09/download-1-1.png')"> -->

                            <!-- </div> -->


                            <div class="author-boxcol">
                                <h3><?php echo $employee[0]->firstName . " " . $employee[0]->lastName; ?></h3>



                                <h5> <?php echo $employee[0]->position; ?></h5>
                                <div class="rate">
                                    <?php
                                    $average1 = 0;
                                    $reviewresult1 = $wpdb->get_results("SELECT * FROM `review_details` where service_id='$serviceid'");
                                    foreach ($reviewresult1 as $row) {
                                        $count = count($reviewresult1);
                                        $review1 = $row->starreview;

                                        $rate1 += $review1;
                                        $average1 = $rate1 / $count;
                                    }
                                    $rating1 = round($average1);
                                    if ($rating1 == "1") {
                                    ?>
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">


                                    <?php
                                    } else if ($rating1 == "2") {
                                    ?>
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                    <?php
                                    } else if ($rating1 == "3") {
                                    ?>
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                    <?php
                                    } else if ($rating1 == "4") {
                                    ?>
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                    <?php
                                    } else if ($rating1 == "5") {
                                    ?>
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/09/star-3-1.png">

                                    <?php
                                    }
                                    ?>

                                </div>
                                <div class="description">
                                    <?php echo $employee[0]->bio; ?>
                                </div>

                                <button type="button" class="btn btn-dark hidebtn">Get in contact</button>


                            </div>
                            <div class="imgdiv">
                                <img class="abexpt" src=<?php echo $employee[0]->pictureFullPath ?>>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mainbody reviewsecl" style="display:none;">
                    <div class="subrow">
                        <div class="review row">
                            <div class="ab-title" style="margin:0 auto;">Reviews</div>
                            <div class="ab-sub_title" style="margin:0 auto;">Lorem ipsum dolor sit amet, quando inimicus patrioque quo ex, est ut putent ceteros vulputate, phaedrum liberavisse ut vis. Mei delenit forensibus reformidans eu, te sumo ipsum dissentiet quo. Per ei enim nullam audiam, sea laboramus.</div>
                        </div>
                        <div class="row newrow">
                            <div class="col-lg-3 col-sm-12">
                                <div class="revew">
                                    <div class="absec-title">Stewart Gilbert</div>
                                    <div class="revew-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum
                                            posuere tristique. Curabitur ac consequat lectus. Proin id odio sapien. Aenean
                                            eros urna, egestas sit amet rhoncus</p>
                                    </div>
                                    <div class="date">
                                        23 Aug 2022
                                    </div>
                                    <div class="rate testirate">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="revew">
                                    <div class="absec-title">Clement Burgess</div>
                                    <div class="revew-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum
                                            posuere tristique. Curabitur ac consequat lectus. Proin id odio sapien. Aenean
                                            eros urna, egestas sit amet rhoncus</p>
                                    </div>
                                    <div class="date">
                                        23 Aug 2022
                                    </div>
                                    <div class="rate testirate">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="revew">
                                    <div class="absec-title">Emma Hill</div>
                                    <div class="revew-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum
                                            posuere tristique. Curabitur ac consequat lectus. Proin id odio sapien. Aenean
                                            eros urna, egestas sit amet rhoncus</p>
                                    </div>
                                    <div class="date">
                                        23 Aug 2022
                                    </div>
                                    <div class="rate testirate">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="revew">
                                    <div class="absec-title">Tony DDD</div>
                                    <div class="revew-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum
                                            posuere tristique. Curabitur ac consequat lectus. Proin id odio sapien. Aenean
                                            eros urna, egestas sit amet rhoncus</p>
                                    </div>
                                    <div class="date">

                                        23 Aug 2022
                                    </div>
                                    <div class="rate testirate">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                        <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/08/star-3.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mainbody logosec">
                    <div class="subrow">
                        <div class="row">
                            <div class="ab-title tb">Trusted Brands</div>
                        </div>

                        <div class="row brands">
                            <div class="owl-carousel owl-theme">
                                <?php
                                if ($employee[0]->trustedbrand1 != null) {
                                ?>
                                    <div class="item">
                                        <img src=<?php echo $employee[0]->trustedbrand1 ?> style="">
                                    </div>
                                <?php
                                }
                                ?>

                                <?php
                                if ($employee[0]->trustedbrand2 != null) {
                                ?>
                                    <div class="item">
                                        <img src=<?php echo $employee[0]->trustedbrand2 ?> style="">
                                    </div>
                                <?php
                                }
                                ?>

                                <?php
                                if ($employee[0]->trustedbrand3 != null) {
                                ?>
                                    <div class="item">
                                        <img src=<?php echo $employee[0]->trustedbrand3 ?> style="">
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($employee[0]->trustedbrand4 != null) {
                                ?>
                                    <div class="item">
                                        <img src=<?php echo $employee[0]->trustedbrand4 ?> style="">
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($employee[0]->trustedbrand5 != null) {
                                ?>
                                    <div class="item">
                                        <img src=<?php echo $employee[0]->trustedbrand5 ?> style="">
                                    </div>
                                <?php
                                }
                                ?>



                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluidx MoreSessions">

                    <div class="home-demo">
                        <h3 id="myList" class="hometitle">More Sessions From This Expert</h3>

                        <div class="owl-carousel owl-theme">

                            <?php

                            $result5 =  $wpdb->get_results("SELECT wp_821991_amelia_users.firstName, wp_821991_amelia_users.lastName, wp_821991_amelia_services.* FROM wp_821991_amelia_providers_to_services INNER JOIN wp_821991_amelia_services INNER JOIN wp_821991_amelia_users on wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id and wp_821991_amelia_providers_to_services.serviceId=wp_821991_amelia_services.id where wp_821991_amelia_users.id='" . $empid . "'");

                            $count = 1;
                            // echo $count;
                            foreach ($result5 as $employeedetails) {
                                $sid =  $employeedetails->id;
                                $url = "https://tolqs.com/single-service/?sid=" . $sid;

                            ?>
                                <div class="item">
                                    <div class="gallery-video-thumb">
                                         <a href="">
                                                    <?php
                                                    if ($employeedetails->pictureFullPath != "") {
                                                    ?>
                                                        <img src=<?php echo $employeedetails->pictureFullPath; ?> alt="">
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <img src="http://tolqs.com/wp-content/uploads/2022/10/defaultimg.png" alt="">
                                                    <?php
                                                    }
                                                    ?>
                                                </a>
                                        <div class="thumb-info">
                                            <h4 class="sessionttile-thumb new1"><b><?php echo $employeedetails->name; ?></b></h4>

                                            <p class="pricesession-thumb"><?php echo do_shortcode('[woo_multi_currency_exchange price="' . $employeedetails->price . '" currency="' . $curr . '"]'); ?></p>

                                            <!-- <p class="pricesession-thumb"> -->
                                            <?php

                                            //  $oFormatter = new \NumberFormatter('de_DE', \NumberFormatter::CURRENCY);
                                            // $formattedPrice = $oFormatter->formatCurrency($employeedetails->price, 'EUR');

                                            // echo $formattedPrice; 
                                            ?>

                                            <!-- </p> -->
                                            <p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png" /> <?php echo $row->videoViews; ?></p>

                                        </div>
                                        <a href=<?php echo $url; ?>></a>
                                    </div>
                                    <a href=<?php echo $url; ?>>
                                        <div class="card">
                                            <?php
                                            $videourl1 =  "https://www.youtube.com/embed/" . $employeedetails->video;
                                            $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&autoplay=1";
                                            $finalurl1 = $videourl1 . $parameters1;
                                            // $video_id1 = explode("https://www.youtube.com/embed/", $videourl1)[1];                                                    
                                            ?>

                                            <!-- <img data-finalurl="<?php //echo $finalurl1; 
                                                                        ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php //echo $video_id1;  
                                                                                                                                    ?>/1.jpg"/> -->
                                            <img data-videoid="<?php echo $employeedetails->video; ?>" data-finalurl="<?php echo $finalurl1; ?>" class="kd-yt-video-img" src=<?php echo $employeedetails->pictureFullPath; ?> />
                                            <!-- <iframe class="carouselvideo" src=<?php //echo $finalurl1; 
                                                                                    ?>></iframe> -->


                                            <div class="container">
                                                <?php
                                                $wordpressuserid = $employeedetails->externalId;
                                                $worduser = 'user_' . $wordpressuserid;

                                                ?>
                                                <p class="cardauthor"><?php echo $employeedetails->firstName . " " . $employeedetails->lastName  ?>
                                                    <?php if (get_field('verifed', $worduser)) : ?>
                                                        <span class="verifiedtext"><img class="verifyimg" src="https://tolqs.com/wp-content/uploads/2022/10/checked.png"></span>
                                                    <?php endif; ?>
                                                </p>
                                                <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                <p class="pricesession">60 minutes/<?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></p>


                                                <p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png" /> <?php echo $row->videoViews; ?></p>
                                                <p class="paratext"><?php echo $row->short_excerpt; ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            <?php
                                $count++;
                            }

                            ?>
                        </div>
                    </div>

                </div>

                <!-- add relevent sessions here -->
                <div class="container-fluidx MoreSessions mobile-hide">
                    <div class="home-demo">
                        <h3 id="myList" class="hometitle">More Relevant Sessions</h3>

                        <div class="owl-carousel owl-theme">


                            <?php

                            $results = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services where status='visible' and categoryId='$catgoryid'");
                            if (!empty($results)) {

                                foreach ($results as $row) {
                                    $servicesingleid = $row->id;

                                    $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$servicesingleid'");




                                    foreach ($employee as $employeedetails) {

                                        $url = "https://tolqs.com/single-service/?sid=" . $servicesingleid;
                            ?>
                                        <div class="item">
                                            <div class="gallery-video-thumb">
                                                <a href="">
                                                    <?php
                                                    if ($row->pictureFullPath != "") {
                                                    ?>
                                                        <img src=<?php echo $row->pictureFullPath; ?> alt="">
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <img src="http://tolqs.com/wp-content/uploads/2022/10/defaultimg.png" alt="">
                                                    <?php
                                                    }
                                                    ?>
                                                </a>
                                                <div class="thumb-info">
                                                    <h4 class="sessionttile-thumb"><b><?php echo $row->name; ?></b></h4>

                                                    <p class="pricesession-thumb newprice">

                                                        <span class="session-price">60 minutes / <?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></span>

                                                        <?php

                                                        $oFormatter = new \NumberFormatter('de_DE', \NumberFormatter::CURRENCY);
                                                        $formattedPrice = $oFormatter->formatCurrency($row->price, 'EUR');

                                                        //echo $formattedPrice; 

                                                        ?>
                                                    </p>
                                                    <p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png" /> <?php echo $row->videoViews; ?></p>

                                                </div>
                                                <a href=<?php echo $url; ?>></a>
                                            </div>
                                            <a href=<?php echo $url; ?>>
                                                <div class="card">
                                                    <?php
                                                    $videourl1 =  "https://www.youtube.com/embed/" . $row->video;
                                                    $parameters1 = "?controls=1&showinfo=0&start=" . $row->videoStartTime . "&rel=0&loop=1&autoplay=1";
                                                    $finalurl1 = $videourl1 . $parameters1;
                                                    // $video_id1 = explode("https://www.youtube.com/embed/", $videourl1)[1];  

                                                    // print_r($row);
                                                    ?>

                                                    <!-- <img data-finalurl="<?php //echo $finalurl1; 
                                                                                ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php //echo $video_id1;  
                                                                                                                                            ?>/1.jpg"/> -->
                                                    <img data-videoid="<?php echo $row->video; ?>" data-starttime="<?php echo $row->videoStartTime; ?>" data-finalurl="<?php echo $finalurl1; ?>" class="kd-yt-video-img" src=<?php echo $row->pictureFullPath; ?> />
                                                    <!-- <iframe class="carouselvideo" src=<?php //echo $finalurl1; 
                                                                                            ?>></iframe> -->


                                                    <div class="container">
                                                        <?php
                                                        $wordpressuserid = $employeedetails->externalId;
                                                        $worduser = 'user_' . $wordpressuserid;

                                                        ?>
                                                        <p class="cardauthor"><?php echo $employeedetails->firstName . " " . $employeedetails->lastName  ?>
                                                            <?php if (get_field('verifed', $worduser)) : ?>
                                                                <span class="verifiedtext"><img class="verifyimg" src="https://tolqs.com/wp-content/uploads/2022/10/checked.png"></span>
                                                            <?php endif; ?>
                                                        </p>
                                                        <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                        <p class="pricesession">60 minutes / <?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></p>


                                                        <p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png" /> <?php echo number_format($row->videoViews, 0, '.', ',');  ?></p>
                                                        <p class="paratext"><?php echo $row->short_excerpt; ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                            <?php

                                    }
                                }
                            }
                            ?>


                        </div>


                    </div>
                </div>

                <!-- relevent sessions mobile -->
                <div class="mobile-desplay">
                    <div class="home-demo">
                        <h3 id="myList" class="hometitle">More Relevant Sessions</h3>

                        <div class="mobile-display">

                            <?php

                            $results = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services where status='visible' and categoryId='$catgoryid'");
                            if (!empty($results)) {

                                foreach ($results as $row) {
                                    $servicesingleid = $row->id;

                                    $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$servicesingleid'");




                                    foreach ($employee as $employeedetails) {

                                        $url = "https://tolqs.com/single-service/?sid=" . $servicesingleid;
                            ?>
                                        <div class="item">
                                            <div class="gallery-video-thumb">
                                                <a href="">
                                                    <?php
                                                    if ($row->pictureFullPath != "") {
                                                    ?>
                                                        <img src=<?php echo $row->pictureFullPath; ?> alt="">
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <img src="http://tolqs.com/wp-content/uploads/2022/10/defaultimg.png" alt="">
                                                    <?php
                                                    }
                                                    ?>
                                                </a>

                                                <div class="thumb-info">
                                                    <h4 class="sessionttile-thumb"><b><?php echo $row->name; ?></b></h4>

                                                    <p class="pricesession-thumb newprice">

                                                        <span class="session-price">60 minutes / <?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></span>

                                                        <?php

                                                        $oFormatter = new \NumberFormatter('de_DE', \NumberFormatter::CURRENCY);
                                                        $formattedPrice = $oFormatter->formatCurrency($row->price, 'EUR');

                                                        //echo $formattedPrice; 

                                                        ?>
                                                    </p>
                                                    <p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png" /> <?php echo $row->videoViews; ?></p>

                                                </div>
                                                <a href=<?php echo $url; ?>></a>
                                            </div>
                                            <a href=<?php echo $url; ?>>
                                                <div class="card">
                                                    <?php
                                                    $videourl1 =  "https://www.youtube.com/embed/" . $row->video;
                                                    $parameters1 = "?controls=1&showinfo=0&start=" . $row->videoStartTime . "&rel=0&loop=1&autoplay=1";
                                                    $finalurl1 = $videourl1 . $parameters1;
                                                    // $video_id1 = explode("https://www.youtube.com/embed/", $videourl1)[1];  

                                                    // print_r($row);
                                                    ?>

                                                    <!-- <img data-finalurl="<?php //echo $finalurl1; 
                                                                                ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php //echo $video_id1;  
                                                                                                                ?>/1.jpg"/> -->
                                                    <img data-videoid="<?php echo $row->video; ?>" data-starttime="<?php echo $row->videoStartTime; ?>" data-finalurl="<?php echo $finalurl1; ?>" class="kd-yt-video-img" src=<?php echo $row->pictureFullPath; ?> />
                                                    <!-- <iframe class="carouselvideo" src=<?php //echo $finalurl1; 
                                                                                            ?>></iframe> -->


                                                    <div class="container">
                                                        <?php
                                                        $wordpressuserid = $employeedetails->externalId;
                                                        $worduser = 'user_' . $wordpressuserid;

                                                        ?>
                                                        <p class="cardauthor"><?php echo $employeedetails->firstName . " " . $employeedetails->lastName  ?>
                                                            <?php if (get_field('verifed', $worduser)) : ?>
                                                                <span class="verifiedtext"><img class="verifyimg" src="https://tolqs.com/wp-content/uploads/2022/10/checked.png"></span>
                                                            <?php endif; ?>
                                                        </p>
                                                        <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                        <p class="pricesession">60 minutes / <?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></p>


                                                        <p class="views"><img class="views-icon" src="http://tolqs.com/wp-content/uploads/2022/10/eyeball.png" /> <?php echo number_format($row->videoViews, 0, '.', ',');  ?></p>
                                                        <p class="paratext"><?php echo $row->short_excerpt; ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                            <?php

                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>


                <!-- add relevent sessions here -->

            </div>
    </div><!-- containerend -->
<?php
}
?>
</main>

<script>
    $(document).ready(function() {
        $("#pretalkdiv").css("visibility", "hidden");
        $("#pretalkdiv").css("height", "0");
        $('.bookingbtn').addClass("activebtn");
        $(".pretalkbtn").click(function() {
            $(this).addClass("activebtn");
            $(".bookingbtn").removeClass("activebtn");
            $("#bookingdiv").css("visibility", "hidden");
            $("#bookingdiv").css("height", "0");
            $("#pretalkdiv").css("visibility", "visible");
            $("#pretalkdiv").css("height", "auto");

            // $("#pretalkdiv").show();
            // $("#bookingdiv").hide();
        });
        $(".bookingbtn").click(function() {
            $(".pretalkbtn").removeClass("activebtn");
            $(this).addClass("activebtn");
            $("#pretalkdiv").css("visibility", "hidden");
            $("#pretalkdiv").css("height", "0");
            $("#bookingdiv").css("visibility", "visible");
            $("#bookingdiv").css("height", "auto");
        });

        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("bookType");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
        }

        var owl = $('.logosec .owl-carousel');
        owl.owlCarousel({

            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 3
                },

                1024: {
                    items: 4
                },

                1366: {
                    items: 4
                }
            }
        });

    });

    $(document).ready(function() {
        var owl = $('.MoreSessions .owl-carousel');
        owl.owlCarousel({
            margin: 10,
            loop: false,
            nav: true,
            mouseDrag: true,
            responsiveClass: true,
            responsiveRefreshRate: 200,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1024: {
                    items: 4
                },
                1366: {
                    items: 6
                },
                2080: {
                    items: 7
                }
            }
        });

    });
</script>
<?php get_sidebar('content-bottom'); ?>
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>