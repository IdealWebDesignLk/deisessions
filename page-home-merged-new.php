<?php /* Template Name: Page_home_merged_new */ ?>

<?php
get_header();

?>
<?php echo '<script type="text/javascript">let kdHomepage = true; </script>'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


<?php

$finalHeroVidUrl = "";
$server_name = "";
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $server_name = "https://";
else
    $server_name = "http://";

// Append the host(server name) to the URL.   
$server_name .= $_SERVER['SERVER_NAME'];

// Output the final server name   

$tbprefix = "";
$tbprefix = $wpdb->prefix;
$tbprefix  = trim($tbprefix);
$serviceid = "7";
$service = $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services where id='$serviceid'");

$employee =  $wpdb->get_results("SELECT $tbprefix" . "amelia_users.* FROM " . $tbprefix . "amelia_services inner join " . $tbprefix . "amelia_providers_to_services inner join " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$serviceid'");

?>

<!-- video to test autoplay -->
<?php
$videosrc =  $server_name . '/wp-content/uploads/2022/09/pexels-artem-podrez-5752724.mp4';
?>
<video src="<?php echo $videosrc; ?>" autoplay class="hidden" id="kd-test-autoplay"></video>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="containerx">
            <div class="bg-video-wrap">


                <!-- taken from rajika -->

                <?php

                $paramid = $_GET['idx'];
                if ($paramid != "") {


                    $service = $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services` where status='visible' and id='$paramid'");



                    $employee =  $wpdb->get_results("SELECT $tbprefix" . "amelia_users.* FROM " . $tbprefix . "amelia_services inner join " . $tbprefix . "amelia_providers_to_services inner join " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$paramid'");


                    if ($service[0]->video != "" || $service[0]->video != null) {
                        $videourlhero = "https://www.youtube.com/embed/" . $service[0]->video;
                        $parametershero = "?enablejsapi=1&rel=0&start=" . $service[0]->videoStartTime . "&mute=1&autoplay=1&modestbranding=1";
                        $finalurlhero = $videourlhero . $parametershero;
                    } else {
                        $imgurl =  ot_get_option('top_section_background_image');
                ?>
                        <div class="bg-video-wrap videobackimg" style="background: url(<?php echo $imgurl; ?>)">

                        <?php
                    }


                        ?>

                        <?php
                        if ($finalurlhero != "" || $finalurlhero != null) {
                        ?>
                            <div class="video-background">

                                <div class="video-foreground">
                                    <iframe class="youtube-video" id="youtube-video" width="278" height="154" src=<?php echo  $finalurlhero; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                            </div>




                            <?php

                        }
                    } else if (function_exists('ot_get_option')) {
                        if (ot_get_option('featured_video_id')) {
                            $serviceid = ot_get_option('featured_video_id');

                            $service = $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services where status='visible' and id='$serviceid'");


                            $employee =  $wpdb->get_results("SELECT $tbprefix" . "amelia_users.* FROM " . $tbprefix . "amelia_services inner join " . $tbprefix . "amelia_providers_to_services inner join " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$serviceid'");



                            if ($service[0]->video != "" || $service[0]->video != null) {
                                $videourlhero = "https://www.youtube.com/embed/" . $service[0]->video;
                                $parametershero = "?enablejsapi=1&rel=0&start=" . $service[0]->videoStartTime . "&mute=1&autoplay=1&modestbranding=1";
                                $finalurlhero = $videourlhero . $parametershero;
                                $finalHeroVidUrl = $videourlhero . "?enablejsapi=1&rel=0&start=" . $service[0]->videoStartTime . "";
                            } else {
                                $imgurl =  ot_get_option('top_section_background_image');
                            ?>
                                <div class="bg-video-wrap videobackimg" style="background: url(<?php echo $imgurl; ?>)">

                                <?php
                            }


                                ?>
                            <?php
                        }


                            ?>

                            <?php
                            if ($finalurlhero != "" || $finalurlhero != null) {
                            ?>
                                <div class="video-background">
                                    <?php

                                    ?>
                                    <div class="video-foreground">
                                        <iframe class="youtube-video" id="youtube-video" width="278" height="154" src=<?php echo  $finalurlhero; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>

                                </div>

                            <?php
                            }
                            ?>


                        <?php

                    }

                        ?>



                        <!-- taken from rajikaa -->


                        <div class="overlay mobioverlay" id="kd-video-overlay1" style="background-image:url('<?php echo $service[0]->pictureFullPath ?>')"></div>
                        <div class="overlay deskoverlay" id="kd-video-overlay" style="background-image:url('<?php echo $service[0]->pictureFullPath ?>')"></div>



                        <div class="vsec">
                            <div class="col-12 col-md">
                                <div class="text-wrapper">
                                    <h2 class="mbr-section-title mb-3 mbr-fonts-style display-2">

                                        <strong><?php echo $service[0]->name; ?></strong>

                                    </h2>
                                    <h3 class="headeremployeename">

                                        <?php
                                        $wordpressuserid = $employee[0]->externalId;
                                        $worduser = 'user_' . $wordpressuserid;
                                        ?>
                                        <?php echo $employee[0]->firstName . " " . $employee[0]->lastName; ?>
                                        <?php if (get_field('verifed', $worduser)) : ?>
                                            <span class="verifiedtext"><img class="verifyimg" src="<?php echo $server_name . '/wp-content/uploads/2023/01/Vector-Stroke.png' ?>"></span>
                                        <?php endif; ?>


                                    </h3>
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
                                            <img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2022/09/star-3-1.png' ?>">
                                            <img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2022/10/emptystar.png' ?>">
                                            <img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2022/10/emptystar.png' ?>">
                                            <img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2022/10/emptystar.png' ?>">
                                            <img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2022/10/emptystar.png' ?>">


                                        <?php
                                        } else if ($rating == "2") {
                                        ?>
                                            <img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2022/09/star-3-1.png' ?>">
                                            <img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2022/09/star-3-1.png' ?>">
                                            <img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2022/10/emptystar.png' ?>">
                                            <img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2022/10/emptystar.png' ?>">
                                            <img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2022/10/emptystar.png' ?>">
                                        <?php
                                        } else if ($rating == "3") {
                                        ?>

                                            <a href="<?php $server_name . '/how-it-works-iwd-sessions-explained/#curators' ?>"><img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2023/01/starseke.png' ?>"></a>
                                        <?php
                                        } else if ($rating == "4") {
                                        ?>

                                            <a href="<?php $server_name . '/how-it-works-iwd-sessions-explained/#curators' ?>"><img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2023/01/starsyanti.png' ?>"></a>
                                        <?php
                                        } else if ($rating == "5") {
                                        ?>

                                            <a href="<?php $server_name . '/how-it-works-iwd-sessions-explained/#curators' ?>"><img class="star-rating" src="<?php echo $server_name . '/wp-content/uploads/2023/01/starsdanielle.png' ?>"></a>

                                        <?php
                                        }
                                        ?>

                                    </div>
                                    <div class="sessiondiscription">
                                        <p class="mbr-text mb-3 mbr-fonts-style display-7">
                                            <?php echo do_shortcode($service[0]->description); ?>
                                        </p>
                                    </div>
                                    <div class="price">

                                        <?php

                                        // generate currency format

                                        $oFormatter = new \NumberFormatter('de_DE', \NumberFormatter::CURRENCY);
                                        $formattedPrice = $oFormatter->formatCurrency($service[0]->price, 'EUR');


                                        ?>
                                        <h3 class="session-price"><?php echo do_shortcode('[woo_multi_currency_exchange price="' . $service[0]->price . '" currency="' . $curr . '"]'); ?></h3>
                                    </div>
                                    <p class="staticlabeltop">60 minutes including Q&A</p>
                                    <div class="views">
                                        <?php if (intval($service[0]->videoViews) > 0) { ?>
                                            <h3 class="viewscount"> <?php echo number_format($service[0]->videoViews, 0, '.', ','); ?> Youtube views</h3>
                                        <?php } ?>
                                    </div>
                                    <?php



                                    $slug1 = sanitize_title($service[0]->name) . '-' . $serviceid;
                                    $topvideosingle =  $server_name . "/single-service/" . $slug1;
                                    ?>
                                    <a href=<?php echo $topvideosingle; ?>><button type="button" class="btn btn-dark sessionbtn">Instant Booking</button></a>
                                    <?php

                                    ?>
                                </div>

                            </div>

                        </div>

                        <!-- 	mute unmute			 -->
                        <p id="unmute"><img class="change-src-on-hover" data-hoverimg="<?php echo $server_name . '/wp-content/uploads/2023/01/Property-1SoundOff_Hover.png' ?>" src="<?php echo $server_name . '/wp-content/uploads/2023/01/SoundButton.png' ?>"></p>
                        <p id="mute"><img class="change-src-on-hover" data-hoverimg="<?php echo $server_name . '/wp-content/uploads/2023/01/Property-1SoundOn_Hover.png' ?>" src="<?php echo $server_name . '/wp-content/uploads/2023/01/Property-1SoundOff.png' ?>"></p>

                        <!--   Play Pause		 -->

                        <p id="kd-play-video" style="width: auto; " class=""><img class="change-src-on-hover" data-hoverimg="<?php echo $server_name . '/wp-content/uploads/2023/01/Property-1PauseOn_Hover.png' ?>" src="<?php echo $server_name . '/wp-content/uploads/2023/01/Property-1PlayOn.png' ?>"></p>
                        <p id="kd-pause-video" style="width: auto; " class=""><img class="change-src-on-hover" data-hoverimg="<?php echo $server_name . '/wp-content/uploads/2023/01/Property-1PlayOn_Hover.png' ?>" src="<?php echo $server_name . '/wp-content/uploads/2023/01/Property-1PauseOn.png' ?>"></p>


                        <!-- full screen  -->
                        <p id="kd-full-screen-video" onclick="openFullscreenVideo()" style="width: auto; " class=""><img class="change-src-on-hover" data-hoverimg="<?php echo $server_name . '/wp-content/uploads/2023/03/Property-full-screen-hover.png' ?>" src="<?php echo $server_name . '/wp-content/uploads/2023/03/Property-full-screen.png' ?>"></p>

                        <!-- 
                         <p id="unmute"><img src="https://iwdsessions.com/wp-content/uploads/2023/01/SoundButton.png"></p>
                        <p id="mute"><img src="https://iwdsessions.com/wp-content/uploads/2023/01/SoundButton-Copy.png"></p>

                       			 

                        <p id="kd-play-video" class=""><img src="https://iwdsessions.com/wp-content/uploads/2023/01/PlayButton-1.png"></p>
                        <p id="kd-pause-video" class=""><img src="https://iwdsessions.com/wp-content/uploads/2023/01/PlayButton.png"></p> -->


                                </div>
                                <div class="container homebodysec">
                                    <div class="innerhomesecondrow">
                                        <div class="secondsec">
                                            <h2>Book a Virtual Live Speaker for International Women's Week!</h2>

                                            <div class="row textrowdiv">
                                                <div class="col-md-4">
                                                    <img class="threeblurbimg" src="<?php echo $server_name . "/wp-content/uploads/2023/01/Group-10.png" ?>">
                                                    <h4>1. Find your virtual speaker</h4>
                                                    Our curators have handpicked global experts who speak about equity, bias & diversity.
                                                    Discover them by hovering over their talks.
                                                </div>

                                                <div class="col-md-4">
                                                    <img class="threeblurbimg" src="<?php echo $server_name . "/wp-content/uploads/2023/01/Group-11.png" ?>">
                                                    <h4>2. Check availability</h4>
                                                    All IWD speakers have connected their calendar to our site. Check their availability throughout the IWD week.
                                                </div>
                                                <div class="col-md-4">
                                                    <img class="threeblurbimg" src="<?php echo $server_name . "/wp-content/uploads/2023/01/Group-12.png" ?>">
                                                    <h4>3. Hold Time Slot / Book Instantly</h4>
                                                    Pick a day/time slot for your virtual talk. We will hold that time slot for 48 hours for you and contact you to answer your questions.
                                                </div>
                                                <p class="bottomtext">Sessions will be held in your company’s own Microsoft Teams, Google Meet, Zoom or Webex environment.</p>
                                            </div>
                                        </div>


                                    </div>
                                    <form method="POST" class="searchform">

                                        <div class="row">
                                            <div class="col colsm6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Search" class="form-control" id="usr" name="searchtext">
                                                </div>
                                            </div>
                                            <div class="col colsm6">
                                                <div class="form-group">
                                                    <select id="topick" name="topic">
                                                        <option disabled selected>All Topic</option>
                                                        <?php

                                                        $servicecate = $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_categories");
                                                        foreach ($servicecate as $row) {
                                                            $servicecateid = $row->id;
                                                            $servicecatename = $row->name;
                                                            $excludecat = "Biases";
                                                            if (strpos($servicecatename, $excludecat) !== false) {
                                                                echo "<option value=" . $servicecateid . ">" . $servicecatename . "</option>";
                                                            }
                                                        }
                                                        ?>


                                                    </select>
                                                    <input type="text" hidden placeholder="" class="form-control" id="usrcatname" name="catname">
                                                </div>
                                            </div>

                                            <div class="col colsm6">
                                                <div class="form-group">
                                                    <input type="number" placeholder="Budget min" class="form-control" id="usr" name="budget">
                                                </div>
                                            </div>
                                            <div class="col colsm6">
                                                <div class="form-group">
                                                    <input type="number" placeholder="Budget max" class="form-control" id="usr" name="budgetx">
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <button type="submit" name="submit" class="btn btn-primary">Search</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                        </div>
            </div>

            <?php

            if (isset($_POST['submit'])) {
                echo "";
            ?>
                <div class="searchandfilter">
                    <p class="closeicon">X</p>
                    <div class="searchresult">
                        <?php


                        $topic = $_POST["topic"];
                        $budget = $_POST["budget"];
                        $budgetx = $_POST["budgetx"];
                        $timex = $_POST["timex"];
                        $searchtext = $_POST["searchtext"];
                        $topicz = $_POST["catname"];

                        $topics = "";
                        $budgets = "";
                        $budgetxs = "";
                        $timexs = "";
                        $searchtexts = "";


                        $query = "";

                        if ($topic != "") {
                            if ($query != "") {
                                $query .= "categoryId LIKE '%$topic%'";
                            } else {
                                $query = "categoryId LIKE '%$topic%'";
                            }
                            $topics = $topicz;
                        }
                        if ($budget != "" || $budgetx != "") {
                            if ($budget == "") {
                                $budget = 0;
                            }
                            if ($budgetx == "") {
                                $budgetx = 1000000;
                            }
                            if ($query != "") {
                                $query .= " AND price BETWEEN '$budget' AND '$budgetx' ";
                            } else {
                                $query = "price BETWEEN '$budget' AND '$budgetx'";
                            }
                            if ($budget == 0) {
                                $budget = "";
                            }
                            if ($budgetx == 1000000) {
                                $budgetx = "";
                            }
                            $budgets = $budget;
                            $budgetxs = $budgetx;
                        }
                        // if ($budgetx != "") {
                        //     if ($query != "") {
                        //         $query .= " or name LIKE ";
                        //     } else {
                        //         $query = "name LIKE '%$budgetx%'";
                        //     }
                        //     $budgetxs = $budgetx;
                        // }
                        if ($timex != "") {
                            if ($query != "") {
                                $query .= " AND duration LIKE '%$timex%'";
                            } else {
                                $query = "duration LIKE '%$timex%'";
                            }
                            $timexs = $timex;
                        }
                        if ($searchtext != "") {
                            if ($query != "") {
                                $query .= " AND name LIKE '%$searchtext%' or description LIKE '%$searchtext%'";
                            } else {
                                $query = "name LIKE '%$searchtext%' or description LIKE '%$searchtext%'";
                            }
                            $searchtexts = $searchtext;
                        }


                        // echo "SELECT * FROM $tbprefix"."amelia_services WHERE " . $query . ";";


                        $db_item =  $wpdb->get_results($wpdb->prepare("SELECT * FROM $tbprefix" . "amelia_services WHERE " . $query . ";"));
                        $fnameandlastnam = "";

                        //                 echo $db_item->num_rows . "qqqqqqqqqq";
                        if (!empty($db_item)) {
                        ?>
                            <form method="POST" class="filterform">
                                <div class="row filter">
                                    <input type="hidden" name="topicid" value="<?php echo $topic ?>">
                                    <input type="hidden" name="fsearchtxt" value="<?php echo $searchtext ?>">
                                    <input type="hidden" name="fcatname" value="<?php echo $topicz ?>">
                                    <input type="hidden" name="fbudgetmin" value="<?php echo $budget ?>">
                                    <input type="hidden" name="fbudgetmax" value="<?php echo $budgetx ?>">

                                    <div class="col dds hidecol">
                                        <div class="form-group">
                                            <label class="filter-lab">Date</label>
                                            <input type="Date" placeholder="Date" class="form-control" id="Date" name="Date">
                                        </div>
                                    </div>
                                    <div class="col colsm6 hidecol">
                                        <div class="form-group">
                                            <label class="filter-lab">Time from</label>
                                            <input type="time" placeholder="Time from" class="form-control" id="Timefrom" name="Timefrom">

                                        </div>
                                    </div>
                                    <div class="col colsm6 hidecol">
                                        <div class="form-group">
                                            <label class="filter-lab">Time to</label>
                                            <input type="time" placeholder="Time to" class="form-control" id="Timeto" name="Timeto">
                                        </div>
                                    </div>
                                    <div class="col colsm6">
                                        <div class="form-group">
                                            <label class="filter-lab">Sort by price</label>
                                            <select id="Prize" name="Prize">
                                                <option disabled selected>Price</option>
                                                <option value="Accending">Ascending</option>
                                                <option value="Decending">Descending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col colsm6">
                                        <div class="form-group">
                                            <label class="filter-lab">Sort by rating</label>
                                            <select id="Rating" name="Rating">
                                                <option disabled selected>Rating</option>
                                                <option value="Accending">Ascending</option>
                                                <option value="Decending">Descending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="filter-lab"></label>
                                            <button type="submit" name="filterbtn" class="btn btn-primary filter">Filter</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <?php echo "<div class='serchs'> <h2>Search Terms: <strong>" . $topics . "</strong> <strong>" . $budgets . "</strong> <strong>" . $budgetxs . "</strong> <strong>" . $timexs . "</strong> <strong>" . $searchtext . "</strong></h2></div>"; ?>
                            <div class="cardmain">

                                <?php
                                foreach ($db_item as $row) {

                                ?>

                                    <div class="card">
                                        <?php
                                        $videourl1 =  $row->video;
                                        $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1&modestbranding=1";
                                        $finalurl1 =  "https://www.youtube.com/embed/" . $videourl1 . $parameters1;
                                        $sid =  $row->id;

                                        $slug2 = sanitize_title($row->name) . '-' . $sid;
                                        $url =  $server_name . '/single-service/' . $slug2;
                                        ?>
                                        <a href="<?php echo $url; ?>">
                                            <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


                                            <div class="container">
                                                <?php

                                                $employee =  $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services inner join  " . $tbprefix . "amelia_providers_to_services inner join  " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$sid'");
                                                foreach ($employee as $employeedetails) {
                                                    $fnameandlastname =  $employeedetails->firstName . " " . $employeedetails->lastName;
                                                }
                                                ?>
                                                <p class="cardauthor"><?php echo $fnameandlastname ?></p>
                                                <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                <p class="pricesession">60 minutes / <?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></p>
                                                <p class="views">362.440 Views</p>
                                                <p class="paratext"><?php echo do_shortcode($row->description); ?></p>
                                            </div>
                                        </a>
                                    </div>
                            <?php

                                }
                            } else {
                                echo "<div class='nores'> <h3>No result found </h3></div>";
                            }
                            ?>
                            </div>
                    </div>
                </div>
                <?php

            } else {

                if (isset($_POST['filterbtn'])) {

                    $ftopic = $_POST["topicid"];
                    $searchtext = $_POST["fsearchtxt"];
                    $topicz = $_POST["fcatname"];
                    $budget = $_POST["fbudgetmin"];
                    $budgetx = $_POST["fbudgetmax"];

                ?>

                    <div class="searchandfilter">
                        <p class="closeicon">X</p>
                        <div class="searchresult">
                            <form method="POST" class="filterform">
                                <div class="row filter">
                                    <input type="hidden" name="topicid" value="<?php echo $ftopic ?>">
                                    <input type="hidden" name="fsearchtxt" value="<?php echo $searchtext ?>">
                                    <input type="hidden" name="fcatname" value="<?php echo $topicz ?>">
                                    <input type="hidden" name="fbudgetmin" value="<?php echo $budget ?>">
                                    <input type="hidden" name="fbudgetmax" value="<?php echo $budgetx ?>">

                                    <div class="col dds hidecol">
                                        <div class="form-group">
                                            <input type="Date" placeholder="Date" class="form-control" id="Date" name="Date" value="<?php echo $_POST["Date"]; ?>">
                                        </div>
                                    </div>
                                    <div class="col colsm6 hidecol">
                                        <div class="form-group">
                                            <input type="time" placeholder="Time from" class="form-control" id="Timefrom" name="Timefrom" value="<?php echo $_POST["Timefrom"]; ?>">
                                        </div>
                                    </div>
                                    <div class="col colsm6 hidecol">
                                        <div class="form-group">
                                            <input type="time" placeholder="Time to" class="form-control" id="Timeto" name="Timeto" value="<?php echo $_POST["Timeto"]; ?>">
                                        </div>
                                    </div>
                                    <div class="col colsm6">
                                        <div class="form-group">
                                            <select id="Prize" name="Prize">
                                                <option disabled selected>Price</option>
                                                <option value="Accending">Ascending</option>
                                                <option value="Decending">Descending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col colsm6">
                                        <div class="form-group">
                                            <select id="Rating" name="Rating">
                                                <option disabled selected>Rating</option>
                                                <option value="Accending">Ascending</option>
                                                <option value="Decending">Descending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <button type="submit" name="filterbtn" class="btn btn-primary filter">Filter</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <?php

                            $zftopic = $_POST["topicid"];
                            $zsearchtext = $_POST["fsearchtxt"];
                            $ztopicz = $_POST["fcatname"];
                            $zbudget = $_POST["fbudgetmin"];
                            $zbudgetx = $_POST["fbudgetmax"];

                            $fdate = $_POST["Date"];
                            $ftimestart = $_POST["Timefrom"];
                            $ftimeend = $_POST["Timeto"];
                            $fprice = $_POST["Prize"];
                            $frating = $_POST["Rating"];

                            $arrdate = explode("-", $fdate);




                            if ($ftimestart != "") {
                                $ftimetrim1  = str_replace(":", "", $ftimestart);
                                $ftimefrom  = $ftimetrim1 . '00';
                            }
                            if ($ftimeend != "") {
                                $ftimetrim2  = str_replace(":", "", $ftimeend);
                                $ftimeto  = $ftimetrim2 . '00';
                            }
                            echo $ftimefrom . "<br>";
                            echo $ftimeto;


                            $timestamp = strtotime($_POST["Date"]);
                            $ffdate = date("l", $timestamp);

                            // $ffdate = "";
                            if ($fdate == "Monday") {
                                $ffdate = "1";
                            } else if ($fdate == "Tuesday") {
                                $ffdate = "2";
                            } else if ($fdate == "Wednesday") {
                                $ffdate = "3";
                            } else if ($fdate == "Thursday") {
                                $ffdate = "4";
                            } else if ($fdate == "Friday") {
                                $ffdate = "5";
                            } else {
                                $ffdate = "";
                            }

                            $topics = "";
                            $budgets = "";
                            $budgetxs = "";
                            $timexs = "";
                            $searchtexts = "";


                            $query = "";
                            $endquery = "";
                            $quaryselector = "";
                            $querydate = "";
                            $querytime = "";


                            if ($zftopic != "") {
                                if ($query != "") {
                                    $query .= "categoryId LIKE '%$zftopic%' ";
                                } else {
                                    $query = "categoryId LIKE '%$zftopic%' ";
                                }
                                $topics = $ztopicz;
                            }
                            if ($zbudget != "" || $zbudgetx != "") {
                                if ($zbudget == "") {
                                    $zbudget = 0;
                                }
                                if ($zbudgetx == "") {
                                    $zbudgetx = 1000000;
                                }
                                if ($query != "") {
                                    $query .= " AND price BETWEEN '$zbudget' AND '$zbudgetx' ";
                                } else {

                                    $query = "price BETWEEN '$zbudget' AND '$zbudgetx'";
                                }
                                if ($zbudget == 0) {
                                    $zbudget = "";
                                }
                                if ($zbudgetx == 1000000) {
                                    $zbudgetx = "";
                                }
                                $budgets = $zbudget;
                                $budgetxs = $zbudgetx;
                            }

                            if ($ztimex != "") {
                                if ($query != "") {
                                    $query .= " AND duration LIKE '%$ztimex%'";
                                } else {
                                    $query = "duration LIKE '%$ztimex%'";
                                }
                                $timexs = $ztimex;
                            }
                            if ($zsearchtext != "") {
                                if ($query != "") {
                                    $query .= " AND name LIKE '%$zsearchtext%' or description LIKE '%$zsearchtext%'";
                                } else {
                                    $query = "name LIKE '%$zsearchtext%' or description LIKE '%$zsearchtext%'";
                                }
                                $searchtexts = $zsearchtext;
                            }
                            if ($fprice == "Decending") {
                                $endquery = " ORDER BY price DESC";
                            } else if ($fprice == "Accending") {
                                $endquery = " ORDER BY price ASC";
                            }
                            if ($frating == "Decending") {
                                $fendquery = " ORDER BY starreview DESC";
                            } else if ($frating == "Accending") {
                                $fendquery = " ORDER BY starreview ASC";
                            }


                            echo "<div class='serchs'> <h2>Search Terms: <strong>" . $topics . "</strong> <strong>" . $budgets . "</strong> <strong>" . $budgetxs . "</strong> <strong>" . $timexs . "</strong> <strong>" . $searchtext . "</strong></h2></div>";

                            if ($frating == "") {
                                // echo "SELECT * FROM $tbprefix"."amelia_services WHERE " . $query . $endquery . ";";
                                $quaryselector = "SELECT * FROM $tbprefix" . "amelia_services WHERE " . $query . $endquery . ";";
                            } else {
                                if ($frating != "" && $fprice != "") {
                                    $fendquery = " , starreview ASC";
                                    // echo "SELECT * FROM $tbprefix"."amelia_services JOIN review_details ON ".$tbprefix."amelia_services.id = review_details.service_id WHERE " . $query . $endquery . $fendquery . ";";
                                    $quaryselector = "SELECT * FROM $tbprefix" . "amelia_services JOIN review_details ON " . $tbprefix . "amelia_services.id = review_details.service_id WHERE " . $query . $endquery . $fendquery . ";";
                                } else {
                                    // echo "SELECT * FROM $tbprefix"."amelia_services JOIN review_details ON ".$tbprefix."amelia_services.id = review_details.service_id WHERE " . $query . $endquery . $fendquery . ";";
                                    $quaryselector = "SELECT * FROM $tbprefix" . "amelia_services JOIN review_details ON " . $tbprefix . "amelia_services.id = review_details.service_id WHERE " . $query . $endquery . $fendquery . ";";
                                }
                            }

                            $db_item =  $wpdb->get_results($wpdb->prepare($quaryselector));
                            $fnameandlastnam = "";

                            //echo $db_item->num_rows . "qqqqqqqqqq";
                            if (!empty($db_item)) {

                            ?>
                                <div class="cardmain">
                                    <?php
                                    foreach ($db_item as $row) {

                                        if ($ffdate != "" || $ftimefrom != "" || $ftimeto != "") {

                                            if ($ffdate != "") {
                                                // $querydate = " and ".$tbprefix."amelia_providers_to_weekdays.dayIndex = 3" . $ffdate;
                                                $querydate = " and " . $tbprefix . "amelia_providers_to_weekdays.dayIndex = 3";
                                            }
                                            if ($ftimefrom != "" || $ftimeto != "") {
                                                if ($ftimefrom == "") {
                                                    $ftimefrom = 90000;
                                                }
                                                if ($ftimeto == "") {
                                                    $ftimeto = 180000;
                                                }

                                                $querytime = "AND (CAST(" . $tbprefix . "amelia_providers_to_weekdays.startTime AS int) >= " . $ftimefrom . " or
                                    CAST(" . $tbprefix . "amelia_providers_to_weekdays.endTime AS int) <= " . $ftimeto . ")";
                                            }

                                            $quaryselector2 = "SELECT
                            " . $tbprefix . "amelia_providers_to_services.userId,
                            " . $tbprefix . "amelia_services.id,
                            " . $tbprefix . "amelia_providers_to_weekdays.dayIndex,
                            " . $tbprefix . "amelia_providers_to_weekdays.startTime,
                            " . $tbprefix . "amelia_providers_to_weekdays.endTime
                            FROM
                            " . $tbprefix . "amelia_services inner join
                            " . $tbprefix . "amelia_providers_to_services inner join
                            " . $tbprefix . "amelia_providers_to_weekdays
                            on
                            " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and
                            " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_providers_to_weekdays.userId
                            where " . $tbprefix . "amelia_services.id=" . $row->id . " " . $querydate . " " . $querytime . ";";
                                            $flag = true;
                                            $db_item2 =  $wpdb->get_results($wpdb->prepare($quaryselector2));
                                            if (!empty($db_item2)) {
                                                foreach ($db_item2 as $row2) {
                                                    if ($flag) {
                                    ?>
                                                        <div class="card">
                                                            <?php
                                                            $videourl1 =  $row->video;
                                                            $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1&modestbranding=1";
                                                            $finalurl1 =  "https://www.youtube.com/embed/" . $videourl1 . $parameters1;
                                                            $sid =  $row->id;

                                                            $slug3 = sanitize_title($row->name) . '-' . $sid;
                                                            $url = $server_name . '/single-service/' . $slug3;
                                                            ?>
                                                            <a href="<?php echo $url; ?>">
                                                                <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


                                                                <div class="container">
                                                                    <?php

                                                                    $employee =  $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services inner join " . $tbprefix . "amelia_providers_to_services inner join " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$sid'");
                                                                    foreach ($employee as $employeedetails) {
                                                                        $fnameandlastname =  $employeedetails->firstName . " " . $employeedetails->lastName;
                                                                    }
                                                                    ?>
                                                                    <p class="cardauthor"><?php echo $fnameandlastname ?></p>
                                                                    <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                                    <p class="pricesession">60 minutes / <?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></p>

                                                                    <p class="views">362.440 Views</p>
                                                                    <p class="paratext"><?php echo do_shortcode($row->description); ?></p>
                                                                </div>
                                                            </a>
                                                        </div>
                                            <?php
                                                        $flag = false;
                                                    }
                                                }
                                            }
                                        } else {
                                            // echo "<div class='nores'> <h3>No filter result found </h3></div>";
                                            ?>
                                            <div class="card">
                                                <?php
                                                $videourl1 =  $row->video;
                                                $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1&modestbranding=1";
                                                $finalurl1 =  "https://www.youtube.com/embed/" . $videourl1 . $parameters1;
                                                $sid =  $row->id;

                                                $slug4 = sanitize_title($row->name) . '-' . $sid;
                                                $url = $server_name . '/single-service/' . $slug4;
                                                ?>
                                                <a href="<?php echo $url; ?>">
                                                    <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


                                                    <div class="container">
                                                        <?php

                                                        $employee =  $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services inner join " . $tbprefix . "amelia_providers_to_services inner join " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$sid'");
                                                        foreach ($employee as $employeedetails) {
                                                            $fnameandlastname =  $employeedetails->firstName . " " . $employeedetails->lastName;
                                                        }
                                                        ?>
                                                        <p class="cardauthor"><?php echo $fnameandlastname ?></p>
                                                        <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                        <p class="pricesession">60 minutes / <?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></p>

                                                        <p class="views">362.440 Views</p>
                                                        <p class="paratext"><?php echo do_shortcode($row->description); ?></p>
                                                    </div>
                                                </a>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            <?php
                            } else {
                                echo "<div class='nores'> <h3>No result found using filter fields </h3></div>";
                            }
                            ?>
                        </div>
                    </div>
        </div>

    <?php

                } else {
                }
    ?>

<?php
            }
?>
    </main>

    <div class="container-fluidx background-black">

        <!-- getting video carousels -->
        <?php

        global $wpdb;
        $categoriesSql = "SELECT * FROM $tbprefix" . "amelia_categories GROUP BY `id` ORDER BY `position`;";
        $catResults = $wpdb->get_results($categoriesSql);
        $exclude_cat_id = array(17, 23, 19, 12, 9, 8, 18, 4, 12, 44, 28, 29, 42, 41, 40);
        foreach ($catResults as $catResult) {

            // print_r($catResult->categoryId);

            // 					start if cluse that checks if the category is 12
            //if (intval($catResult->id) != 17 || intval($catResult->id) != 23) {
            if (!in_array(intval($catResult->id), $exclude_cat_id)) {
                // 					start if cluse that checks if the category is 12
        ?>
                <div class="home-demo deskcarousel kd-single-services-section">


                    <h3 id="myList" class="hometitle"><?php echo $catResult->name; ?></h3>

                    <!-- taken from rajika -->
                    <?php
                    $results = $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services where status='visible' and categoryId='" . $catResult->id . "'");
                    if (!empty($results)) { ?>

                        <div class="owl-carousel owl-theme">
                            <?php

                            $results = $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services where status='visible' and categoryId='" . $catResult->id . "' ORDER BY `position`;");
                            if (!empty($results)) {

                                foreach ($results as $row) {
                                    $servicesingleid = $row->id;
                            ?>

                                    <?php
                                    $employee =  $wpdb->get_results("SELECT $tbprefix" . "amelia_users.* FROM " . $tbprefix . "amelia_services inner join " . $tbprefix . "amelia_providers_to_services inner join " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$servicesingleid'");

                                    foreach ($employee as $employeedetails) {

                                        $slug5 = sanitize_title($row->name) . '-' . $servicesingleid;
                                        $url = $server_name . '/single-service/' . $slug5;

                                        $externalid = $employeedetails->externalId;

                                        $worduser = 'user_' . $externalid;
                                    ?>
                                        <?php
                                        // if (get_field('approve', $worduser)) {
                                        if (1 == 1) {
                                            if ($row->pictureFullPath != "") {
                                                $image_url = $row->pictureFullPath;
                                            } else {
                                                $image_url =  $server_name . '/wp-content/uploads/2023/01/default-268x172-1.png';
                                            }
                                        ?>


                                            <div class="item mainitem kd-service-slide">

                                                <div onmouseleave="kdAdddeactivatedThumb(event)" onmouseenter="kdOpenPopupFunc(event)" class="gallery-video-thumbnail kd-thumbnnail" data-id="<?php echo $servicesingleid; ?>">
                                                    <a data-id="<?php echo $servicesingleid; ?>">
                                                        <img class="thumbnailimg" src="<?php echo $image_url; ?>" alt="" style="height : 120px; object-fit: cover;">
                                                    </a>
                                                    <div class="thumb-info">
                                                        <h4 class="sessionttile-thumb"><b><?php echo $row->name; ?></b></h4>

                                                        <!-- <p style="top: -63px !important;" class="pricesession-thumb newprice"> -->


                                                        <!-- </p> -->
                                                        <div class="viewsandpricediv">
                                                            <?php if (!empty($row->videoViews) && intval($row->videoViews) > 0) { ?>
                                                                <span class="views"><?php echo number_format($row->videoViews, 0, '.', ','); ?></span> <span class="viewstext">Youtube Views</span>
                                                            <?php } ?>
                                                            <span class="session-price"><?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></span>
                                                        </div>
                                                        <?php

                                                        $oFormatter = new \NumberFormatter('de_DE', \NumberFormatter::CURRENCY);
                                                        $formattedPrice = $oFormatter->formatCurrency($row->price, 'EUR');

                                                        //echo $formattedPrice;

                                                        ?>

                                                    </div>
                                                    <!-- <a href=<?php //echo $url; 
                                                                    ?>></a> -->
                                                </div>

                                            </div>


                                        <?php } else { ?>


                            <?php
                                        }
                                    }
                                }
                            }
                            ?>

                        </div>

                        <!-- popp content -->
                        <div class="kd-single-popup-wrapper">
                            <div class="kd-single-popup-inner">
                                <?php foreach ($results as $row) {
                                    // print_r($row);
                                    $servicesingleid = $row->id;

                                    $employee =  $wpdb->get_results("SELECT $tbprefix" . "amelia_users.* FROM " . $tbprefix . "amelia_services inner join " . $tbprefix . "amelia_providers_to_services inner join " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$servicesingleid'");
                                    foreach ($employee as $employeedetails) {

                                        $slug6 = sanitize_title($row->name) . '-' . $servicesingleid;
                                        $url = $server_name . '/single-service/' . $slug6;
                                        $externalid = $employeedetails->externalId;
                                        $worduser = 'user_' . $externalid;
                                        if ($row->pictureFullPath != "") {
                                            $image_url = $row->pictureFullPath;
                                        } else {
                                            $image_url =  $server_name . '/wp-content/uploads/2023/01/default-268x172-1.png';
                                        }
                                        $videourl =  "https://www.youtube.com/embed/" . $row->video;
                                        $parameters = "?controls=1&showinfo=0&start=" . $row->videoStartTime . "&modestbranding=1&rel=0&loop=1&autoplay=1&mute=1";
                                        $finalurl = $videourl . $parameters;

                                ?>
                                        <div class="kd-popup-content hidden" id="kd-popup-<?php echo $servicesingleid; ?>">
                                            <div class="kd-popup-content-inner">
                                                <div class="kd-popup-content-left">
                                                    <div class="kd-popp-content-left-inner">
                                                        <!-- video container image -->
                                                        <div class="kd-single-video-container">
                                                            <img class="single-video-paceholder-img" src="<?php echo $image_url; ?>" data-videoid="<?php echo $row->video; ?>" data-starttime="<?php echo $row->videoStartTime; ?>" data-finalurl="<?php echo $finalurl; ?>" alt="">
                                                        </div>
                                                        <br>
                                                        <p class="cardauthor"><?php echo $employeedetails->firstName . " " . $employeedetails->lastName  ?>
                                                            <?php if (get_field('verifed', $worduser)) : ?>
                                                                <span class="verifiedtext"><img class="verifyimg" src="<?php echo $server_name . '/wp-content/uploads/2023/01/Vector-Stroke.png' ?>"></span>
                                                            <?php endif; ?>
                                                        </p>
                                                        <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                        <h4 style="font-size: 16px;"><b><?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]');  ?></b></h4>
                                                        <?php
                                                        if ($row->short_excerpt != null) {
                                                        ?>
                                                            <p class="paratext shortdes"><?php echo do_shortcode($row->short_excerpt); ?></p>

                                                        <?php
                                                        }
                                                        ?>

                                                        <p class="staticlabel">60 minutes including Q&A</p>
                                                        <p class="staticlabel"> Talks about:</p>

                                                        <?php
                                                        $tagone = "";
                                                        $tagtwo = "";
                                                        $tagthree = "";
                                                        $tagfour = "";
                                                        $tagfive = "";
                                                        if ($row->tag1 != null) {
                                                            $tagone = $row->tag1;
                                                        }
                                                        if ($row->tag2 != null) {
                                                            $tagtwo = " - " . $row->tag2;
                                                        }
                                                        if ($row->tag3 != null) {
                                                            $tagthree = " - " . $row->tag3;
                                                        }
                                                        if ($row->tag4 != null) {
                                                            $tagfour = " - " . $row->tag4;
                                                        }
                                                        if ($row->tag5 != null) {
                                                            $tagfive = " - " . $row->tag5;
                                                        }
                                                        ?>

                                                        <p class="tagtext"><?php echo $tagone . $tagtwo . $tagthree . $tagfour . $tagfive; ?></p>
                                                        <!-- <p class="pricesession">60 minutes / <?php //echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); 
                                                                                                    ?></p>


                                                    <p class="views"><img class="views-icon" src="https://iwdsessions.com/wp-content/uploads/2022/10/eyeball.png" /> <?php //echo number_format($row->videoViews, 0, '.', ',');  
                                                                                                                                                                        ?></p> -->
                                                        <p class="paratext"><?php echo do_shortcode($row->description); ?></p>
                                                        <a href="<?php echo $url ?>"><button class="viewmorebtn">Learn More</button></a>

                                                    </div>
                                                </div>
                                                <div class="kd-popup-content-right">
                                                    <div class="booking-widget-wrapper">
                                                        <div class="booking-widget">
                                                            <?php echo do_shortcode('[ameliastepbooking trigger="amelia-popup-' . $servicesingleid . '" service="' . $servicesingleid . '"]'); ?>
                                                            <button class="hidden" id="amelia-popup-<?php echo $servicesingleid; ?>">
                                                                Click Here
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                <?php }
                                } ?>
                            </div>
                        </div>

                </div>


                <div class="home-demo mobicarosel">


                    <h3 id="myList" class="hometitle"><?php echo $catResult->name; ?></h3>

                    <!-- taken from rajika -->


                    <div class="owl-carousel owl-theme">


                        <?php

                        $results = $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services where status='visible' and categoryId='" . $catResult->id . "'");
                        if (!empty($results)) {

                            foreach ($results as $row) {
                                $servicesingleid = $row->id;

                                $employee =  $wpdb->get_results("SELECT $tbprefix" . "amelia_users.* FROM " . $tbprefix . "amelia_services inner join " . $tbprefix . "amelia_providers_to_services inner join " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$servicesingleid'");

                                foreach ($employee as $employeedetails) {

                                    $slug7 = sanitize_title($row->name) . '-' . $servicesingleid;
                                    $url = $server_name . '/single-service/' . $slug7;
                                    $urlcalender =  $server_name . '/single-service/' . $slug7 . "#calenderbooking";

                                    $externalid = $employeedetails->externalId;

                                    $worduser = 'user_' . $externalid;

                        ?>
                                    <?php
                                    //if (get_field('approve', $worduser)) {
                                    if (1 == 1) {
                                    ?>

                                        <div class="item mainitem">
                                            <?php
                                            $videourl1 =  "https://www.youtube.com/embed/" . $row->video;
                                            $parameters1 = "?controls=1&showinfo=0&start=" . $row->videoStartTime . "&modestbranding=1&rel=0&loop=1&autoplay=1";
                                            $finalurl1 = $videourl1 . $parameters1;
                                            // $video_id1 = explode("https://www.youtube.com/embed/", $videourl1)[1];

                                            // print_r($row);
                                            ?>

                                            <!-- <img data-finalurl="<?php //echo $finalurl1;
                                                                        ?>" class="kd-yt-video-img" src="https://img.youtube.com/vi/<?php //echo $video_id1;
                                                                                                                                    ?>/1.jpg"/> -->

                                            <?php
                                            if ($row->pictureFullPath != "") {
                                            ?>
                                                <a href="<?php echo $url; ?>"><img data-videoid="<?php echo $row->video; ?>" data-starttime="<?php echo $row->videoStartTime; ?>" data-finalurl="<?php echo $finalurl1; ?>" class="kd-yt-video-img" src=<?php echo $row->pictureFullPath; ?> /> </a>
                                            <?php
                                            } else {
                                            ?>
                                                <a href="<?php echo $url; ?>"><img data-videoid="<?php echo $row->video; ?>" data-starttime="<?php echo $row->videoStartTime; ?>" data-finalurl="<?php echo $finalurl1; ?>" class="kd-yt-video-img" src="<?php echo $server_name . '/wp-content/uploads/2023/01/default-268x172-1.png' ?>" /> </a>
                                            <?php
                                            }
                                            ?>
                                            <!-- <iframe class="carouselvideo" src=<?php //echo $finalurl1;
                                                                                    ?>></iframe> -->


                                            <div class="container">
                                                <?php
                                                $wordpressuserid = $employeedetails->externalId;
                                                $worduser = 'user_' . $wordpressuserid;

                                                ?>


                                                <div class="contentdiv">
                                                    <div class="firstsecmobi">
                                                        <a href=<?php echo $url; ?>>
                                                            <p class="cardauthor"><?php echo $employeedetails->firstName . " " . $employeedetails->lastName  ?>
                                                                <?php if (get_field('verifed', $worduser)) : ?>
                                                                    <span class="verifiedtext"><img class="verifyimg" src="<?php echo $server_name . '/wp-content/uploads/2023/01/Vector-Stroke.png' ?>"></span>
                                                                <?php endif; ?>
                                                            </p>

                                                            <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>

                                                            <p class="pricesession">60 minutes / <?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></p>

                                                            <?php if (intval($row->videoViews) > 0) { ?>
                                                                <p class="views"><img class="views-icon" src="<?php echo $server_name . '/wp-content/uploads/2022/10/eyeball.png' ?>" /> <?php echo number_format($row->videoViews, 0, '.', ',');  ?></p>
                                                            <?php } ?>
                                                        </a>
                                                    </div>
                                                    <div class="mobiparadiv">
                                                        <p class="paratext mobi"><?php echo $row->short_excerpt; ?></p>
                                                    </div>

                                                </div>
                                                <p class="calender"><a href="<?php echo $urlcalender; ?>"><img class="calender" src="<?php $server_name . '/wp-content/uploads/2022/12/calender1.png' ?>" /></a> </p>


                                            </div>
                                        </div>



                                    <?php } else { ?>
                        <?php
                                        //  }
                                    }
                                }
                            }
                        }
                        ?>

                    </div>

                    <!-- taken from rajika -->

                </div>

    <?php }

                    // 					end if cluse that checks if the category is 12
                }
            }
            // 					end if cluse that checks if the category is 12
    ?>

    </div>
    <div class="mainfaqrow">
        <div class="faqrow ">
            <div class="row">

                <div class="col-md-4 ">
                    <h2>FAQ</h2>
                </div>
                <div class="col-md-8">
                    <div class="container">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <button class="accordion">What is IWD Sessions?</button>
                            <div class="panel">
                                <p>IWD Sessions is a platform where you can find your curated guest expert speakers for International Women's Day and the week in which this day falls (6-10 March). You can take an option on a specific time slot for 48 hrs or instantly book your session of choice.</p>
                            </div>

                            <button class="accordion">Are the IWD sessions recorded?</button>
                            <div class="panel">
                                <p>The IWD sessions cannot be recorded, unless you agree on this specifically with the expert speaker. </p>
                            </div>

                            <button class="accordion">I am not sure yet I am able to make the booking, can I take an option on a specific timeslot?</button>
                            <div class="panel">
                                <p>Yes, in the booking process, you can choose to make a reservation for a specific session and timeslot. We will hold this timeslot for you for 48 hrs and will contact you as soon as possible after you have made the reservation.</p>
                            </div>

                            <button class="accordion">Are IWD sessions online only?</button>
                            <div class="panel">
                                <p>Yes, the IWD sessions are online only, and always live and interactive.</p>
                            </div>

                            <button class="accordion">How do I make sure the expert speaker is informed about any specifics before the session (e.g. size and type of audience, context in which the session takes place)?</button>
                            <div class="panel">
                                <p>In the booking process (on the details page) you have the possibility to leave important information that will be shared with the expert speaker upon booking.</p>
                            </div>

                            <button class="accordion">Is there a limit to the number of people attending a IWD session?</button>
                            <div class="panel">
                                <p>In principle no, this is up to you. Two things to take into account: 1) the technical limitations of the video conferencing tool you use and 2) the level of interaction you desire for your audience. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- full screen top video -->

    <div class="full-screen-main-video hidden">
        <div class="full-screen-video-inner">
            <iframe class="fullscreen-youtube-video" id="fullscreen-youtube-video" width="100%" height="1005" src=<?php echo  $finalHeroVidUrl; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <span class="close-full-screen-video" onclick="closeFullSreenVid()">x</span>
        </div>
    </div>


    <!--<div class="mainbody logosec">
        <div class="subrow">
            <div class="row">
                <div class="ab-title tb">Trusted Brands</div>
            </div>

            <div class="row brands">
                <div class="owl-carousel owl-theme brandcarousel">
                    <div class="item">
                        <img src="https://iwdsessions.com/wp-content/uploads/2023/01/Ebay900x500.png" style="">
                    </div>
                    <div class="item">
                        <img src="https://iwdsessions.com/wp-content/uploads/2023/01/Heineken900x500-2.png" style="">
                    </div>
                    <div class="item">
                        <img src="https://iwdsessions.com/wp-content/uploads/2023/01/kpmg900x500.png" style="">
                    </div>
                    <div class="item">
                        <img src="https://iwdsessions.com/wp-content/uploads/2023/01/loreal900x500.png" style="">
                    </div>
                    <div class="item">
                        <img src="https://iwdsessions.com/wp-content/uploads/2023/01/randstad900x400.png" style="">
                    </div>
                    <div class="item">
                        <img src="https://iwdsessions.com/wp-content/uploads/2023/01/tinywow_salesforce-transparent-logov7.png" style="">
                    </div>
                    <div class="item">
                        <img src="https://iwdsessions.com/wp-content/uploads/2023/01/ubs900x500black.png" style="">
                    </div>


                </div>
            </div>
        </div>
    </div>
			-->





    <script>
        function openFullscreenVideo() {
            let videoSrc = document.getElementById('fullscreen-youtube-video').src
            videoSrc += `${videoSrc}&autoplay=1`
            document.querySelector('.full-screen-main-video').classList.remove('hidden')
            // setTimeout(() => {
                document.getElementById('fullscreen-youtube-video').src = videoSrc
            // }, 100);
        }

        function closeFullSreenVid() {
            let videoSrc = document.getElementById('fullscreen-youtube-video').src
            let vidParts = videoSrc.split('&autoplay=1')
            console.log(vidParts)
            document.getElementById('fullscreen-youtube-video').src = vidParts[0]
            document.querySelector('.full-screen-main-video').classList.add('hidden')
        }
        // store event on variable
        let alreadyClicked = false
        document.addEventListener('click', () => {
            alreadyClicked = true
        })

        let kdTimeout = null
        let videoLoaded = []

        function kdAdddeactivatedThumb(e) {
            thumbnail = e.target
            thumbnail.classList.remove('kd-active-thumb')
        }

        function kdOpenPopupFunc(e) {
            if (window.innerWidth > 1023) {

                thumbnail = e.target
                thumbnail.classList.add('kd-active-thumb')
                kdTimeout = setTimeout(() => {
                    if (thumbnail.classList.contains('kd-active-thumb')) {
                        // console.log('delay works')
                        let thumbnails = Array.from(document.getElementsByClassName('kd-thumbnnail'))
                        let id = thumbnail.dataset.id
                        // 			console.log(id)
                        let poppCont = document.getElementById(`kd-popup-${id}`)
                        let poppBtn = document.getElementById(`amelia-popup-${id}`)
                        let popupContents = Array.from(document.getElementsByClassName('kd-popup-content'))
                        let kdCrWidth = document.querySelector('.kd-service-slide').clientWidth
                        popupContents.forEach(popupContent => {
                            popupContent.classList.add('hidden')
                        })

                        thumbnails.forEach(thmb => {
                            thmb.parentElement.parentElement.classList.remove('kd-active-popup-slide')
                        })

                        // 			console.log(poppCont , poppBtn)
                        poppBtn.click()
                        poppCont.classList.remove('hidden')
                        // thumbnail.parentElement.parentElement.classList.add('kd-active-popup-slide')
                        console.log()
                        // console.log(window.innerWidth, getOffset(thumbnail).left)
                        if ((window.innerWidth - getOffset(thumbnail).left) < 600) {
                            poppCont.style.left = `auto`
                            poppCont.style.right = `30px`
                            // const swiper = thumbnail.parentElement.parentElement.parentElement.parentElement.swiper;
                            // swiper.slideNext();
                        } else if (getOffset(thumbnail).left < 100) {
                            poppCont.style.right = `auto`
                            poppCont.style.left = `30px`
                        } else {
                            poppCont.style.left = `${getOffset(thumbnail).left}px`
                        }

                        // const yOffset = -200;
                        // const y = poppCont.getBoundingClientRect().top + window.pageYOffset + yOffset;

                        // window.scrollTo({
                        //     top: y,
                        //     behavior: 'smooth'
                        // });

                        let formElement = poppCont.querySelector('.el-form')
                        console.log(formElement)
                        console.log('formElement')

                        // let scrollTimeout = setTimeout(() => {
                        //     poppCont.scrollIntoView({ behavior: 'smooth', block: 'start' })
                        //     window.scrollBy(0, -10);
                        //     window.clearTimeout(scrollTimeout)
                        // }, 200);

                        // window.scrollBy(0, -30);

                        window.clearTimeout(kdTimeout)
                        kdTimeout = null
                        hidePopupOnMouseLeave(poppCont, thumbnail)
                        loadYoutubeVideo(poppCont)
                    }
                }, 700);

            }
        }

        function getOffset(el) {
            const rect = el.getBoundingClientRect();
            return {
                left: rect.left + window.scrollX,
                top: rect.top + window.scrollY
            };
        }


        // add mouseout event to popup content
        function hidePopupOnMouseLeave(popup, thumbnail) {
            let hidepopupTimeout = setTimeout(() => {
                popup.addEventListener('mouseleave', (e) => {
                    // console.log(e.target)
                    // var hover_element = $(':hover').last().hasClass('el-select-dropdown__item');
                    // console.log($(':hover').last())
                    // console.log($(':hover').last()[0])
                    // console.log($(':hover').last().hasClass('el-select-dropdown__item'))
                    // console.log($(':hover').last().hasClass('el-select__popper'))
                    let parentEl = null

                    if ($(':hover').last().hasClass('el-select__popper') || $(':hover').last().hasClass('el-select-dropdown__item')) {
                        console.log('inside a  select item')
                        parentEl = $(':hover').last()[0].parentElement
                    } else {
                        popup.classList.add('hidden')
                        thumbnail.parentElement.parentElement.classList.remove('kd-active-popup-slide')
                        if (videoLoaded.includes(popup.id)) {
                            let videoWrapper = popup.querySelector('.kd-single-video-container')
                            let iframe = videoWrapper.querySelector('.kd-iframe-wrapper')
                            iframe.remove()
                            let arrIndex = videoLoaded.indexOf(popup.id);
                            videoLoaded.splice(arrIndex, 1);
                            if (parentEl != null) {
                                parentEl.style.display = 'none'
                            }
                        }
                    }

                    window.clearTimeout(hidepopupTimeout)
                })
            }, 00);

        }

        // load video instead of image

        function loadYoutubeVideo(popup) {
            setTimeout(() => {
                if (popup.classList.contains('hidden')) {
                    console.log('hidden popup')
                } else {
                    let videoWrapper = popup.querySelector('.kd-single-video-container')
                    let videoImg = videoWrapper.querySelector('.single-video-paceholder-img')

                    let vidUrl = `${videoImg.dataset.finalurl}`

                    if (alreadyClicked) {
                        let CroppedUrl = videoImg.dataset.finalurl.split("&mute=1")[0]
                        console.log(CroppedUrl)
                        vidUrl = `${CroppedUrl}`
                    }


                    console.log(vidUrl)

                    if (!videoLoaded.includes(popup.id)) {
                        if (videoImg.dataset.finalurl != '') {
                            let iframeWrapper = document.createElement('div')
                            iframeWrapper.classList.add('kd-iframe-wrapper')
                            let iframe = `<iframe class="carouselvideo" width="310" height="170" src=${vidUrl} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`
                            iframeWrapper.innerHTML = iframe
                            videoWrapper.insertBefore(iframeWrapper, videoImg)
                            videoImg.classList.add('hidden')
                            videoLoaded.push(popup.id)
                        } else {
                            console.log('empty')
                        }
                    }
                }

            }, 700);

        }

        setInterval(() => {
            let popups = Array.from(document.getElementsByClassName('kd-popup-content'))
            popups.forEach(popup => {
                if (popup.classList.contains('hidden')) {
                    // console.log('captured a hidden popup')
                    let videoWrapper = popup.querySelector('.kd-single-video-container')
                    let iframe = videoWrapper.querySelector('.kd-iframe-wrapper')
                    if (iframe != null) {
                        iframe.remove()
                        let arrIndex = videoLoaded.indexOf(popup.id);
                        videoLoaded.splice(arrIndex, 1);
                    }

                }
            })
        }, 1000);

        var owl = $('.brandcarousel');
        owl.owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
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

        $(function() {
            var owl = $(".owl-carousel");

            owl.owlCarousel({
                margin: 10,
                loop: true,
                nav: true,
                mouseDrag: true,
                responsiveClass: true,
                responsiveRefreshRate: 200,
                responsive: {
                    0: {
                        items: 2
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


            var owl = $(".onecro");
            owl.owlCarousel({
                margin: 10,
                loop: true,
                nav: true,
                mouseDrag: true,
                responsiveClass: true,
                responsiveRefreshRate: 200,
                responsive: {
                    0: {
                        items: 2
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

    <!-- adding new cokie popup -->
    <!--     <div class="kd-cookie-popup-wrapper hidden" id="kd-cookie-popup-wrapper">
        <div class="kd-popp-content-inner">
            <span class="kd-cookie-popup-close kd-close-cookie" onclick="closeCookiePopup(event)">X</span>
            <p>We use cookies on our website to give you the most relevant experience by remembering your preferences and repeat visits. By clicking "Allow cookies", you agree to the use of ALL cookies.</p>
            <button class="kd-accept-cookies kd-close-cookie" onclick="closeCookiePopup(event)">Allow cookies</button>
        </div>
    </div> -->
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>