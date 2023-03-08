<?php /* Template Name: Page_service_boking */ ?>

<?php
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


//$servicetitle = $_GET['sname'];;

//$servicetitle = $wpdb->get_results("SELECT * FROM $tbprefix"."amelia_services where name='$servicetitle'");
//$serviceid = $servicetitle[0]->id;

//$serviceid = $_GET['sid'];

$serviceid = get_query_var('sid');


$homepageurl = $server_name . "/expert-home/?id=" . $serviceid;
$service = $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services where id='$serviceid'");

$preTalkId = $service[0]->preTalkSessionId;
$catgoryid = $service[0]->categoryId;
global $servicename;
$servicename = $service[0]->name;
$servicedes = $service[0]->description;

$words = explode(" ", $servicedes); // Split the string into an array of words
$limited_words = array_slice($words, 0, 35); // Extract the first 35 words from the array
$limited_string = implode(" ", $limited_words);

function custom_meta_tags($limited_string)
{
    echo '<meta name="description" content="' . $limited_string . '">';
}

add_action('wp_head', 'custom_meta_tags');
do_action('wp_head', $limited_string);


function custom_meta_tags1($servicename)
{
    echo '<title>' . $servicename . '</title>';

    echo '<meta name="title" content="' . $servicename . '">';
    echo '<meta name="og:title" content="' . $servicename . '">';
}

add_action('wp_head', 'custom_meta_tags1');

do_action('wp_head', $servicename);
get_header();


?>



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





// echo $catgoryid;

$employee =  $wpdb->get_results("SELECT $tbprefix" . "amelia_users.* FROM " . $tbprefix . "amelia_services inner join " . $tbprefix . "amelia_providers_to_services inner join " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$serviceid'");
$empid = $employee[0]->id;

$externalid = $employee[0]->externalId;

$worduser = 'user_' . $externalid;
?>
<main>
    <?php
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

                    <?php
                    $video = $service[0]->video;
                    if ($video != "") {
                    ?>
                        <div class="data-component-video" style="width:100%;margin:0 auto; border: 1px solid #5d395a;">

                            <iframe width="100%" height="600px" src=<?php echo $videourl; ?>>
                            </iframe>

                        </div>

                    <?php
                    } else {
                    ?>
                        <div class="expertimg desktop">
                            <img class="" src=<?php echo $employee[0]->pictureFullPath ?>>
                        </div>
                    <?php
                    }
                    ?>

                    <?php
                    if ($employee[0]->trustedbrand1 != null) {
                    ?>
                        <div class="mainbody logosec">
                            <div class="subrow">
                                <div class="row">
                                    <div class="ab-title tb">Trusted by</div>

                                </div>

                                <div class="row brands">
                                    <div class="row">
                                        <?php
                                        if ($employee[0]->trustedbrand1 != null) {
                                        ?>
                                            <div class="col-md-2">
                                                <img src=<?php echo $employee[0]->trustedbrand1 ?> style="">
                                            </div>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if ($employee[0]->trustedbrand2 != null) {
                                        ?>
                                            <div class="col-md-2">
                                                <img src=<?php echo $employee[0]->trustedbrand2 ?> style="">
                                            </div>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if ($employee[0]->trustedbrand3 != null) {
                                        ?>
                                            <div class="col-md-2">
                                                <img src=<?php echo $employee[0]->trustedbrand3 ?> style="">
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if ($employee[0]->trustedbrand4 != null) {
                                        ?>
                                            <div class="col-md-2">
                                                <img src=<?php echo $employee[0]->trustedbrand4 ?> style="">
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if ($employee[0]->trustedbrand5 != null) {
                                        ?>
                                            <div class="col-md-2">
                                                <img src=<?php echo $employee[0]->trustedbrand5 ?> style="">
                                            </div>
                                        <?php
                                        }
                                        ?>



                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

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
                                        <h3 class="empname"><?php echo $employee[0]->firstName . " " . $employee[0]->lastName; ?>
                                        </h3>

                                        <?php if (get_field('verifed', $worduser)) :

                                        ?>


                                            <span><img src="<?php echo $server_name . "/wp-content/uploads/2023/01/Vector-Stroke.png" ?>"></span>
                                            <p class="verified"><?php the_field('verifed', $worduser); ?></p>
                                        <?php endif; ?>

                                        <div class="row">
                                            <div class="rate">
                                                <?php
                                                $empfullname = $employee[0]->full_name;
                                                $average = 0;
                                                $reviewresult = $wpdb->get_results("SELECT * FROM `review_details` where user='$empfullname'");
                                                foreach ($reviewresult as $row) {
                                                    $count = count($reviewresult);
                                                    $review = $row->starreview;

                                                    $rate += $review;
                                                    $average = $rate / $count;
                                                }
                                                $rating = round($average);
                                                if ($rating == "1") {
                                                ?>
                                                    <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/09/star-3-1.png" ?>">
                                                    <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                                    <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                                    <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                                    <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">


                                                <?php
                                                } else if ($rating == "2") {
                                                ?>
                                                    <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/09/star-3-1.png" ?>">
                                                    <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/09/star-3-1.png" ?>">
                                                    <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                                    <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                                    <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                                <?php
                                                } else if ($rating == "3") {
                                                ?>
                                                    <a href="<?php echo $server_name . "/how-it-works-iwd-sessions-explained/#curators" ?>" target="_blank"><img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2023/01/starseke.png" ?>"></a>
                                                <?php
                                                } else if ($rating == "4") {
                                                ?>
                                                    <a href="<?php echo $server_name . "/how-it-works-iwd-sessions-explained/#curators" ?>" target="_blank"><img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2023/01/starsyanti.png" ?>"></a>
                                                <?php
                                                } else if ($rating == "5") {
                                                ?>
                                                    <a href="<?php echo $server_name . "/how-it-works-iwd-sessions-explained/#curators" ?>" target="_blank"><img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2023/01/starsdanielle.png" ?>"></a>

                                                <?php
                                                }
                                                ?>

                                            </div>
                                            <p style="color: #FF8250;" class="paratext shortdes"><?php echo do_shortcode($service[0]->short_excerpt); ?></p>
                                            <h2><?php echo do_shortcode('[woo_multi_currency_exchange price="' . $service[0]->price . '" currency="' . $curr . '"]'); ?></h2>


                                            <p>60 minutes including Q&A</p>

                                            <?php if (!empty($service[0]->videoViews) && intval($service[0]->videoViews) > 0) { ?>
                                                <p class="viewscountsingle"> <?php echo number_format($service[0]->videoViews, 0, '.', ','); ?> views</p>
                                            <?php } ?>

                                            <div class="tagsdiv">
                                                <h6 class="field">Talks about :
                                                    <p><?php if ($service[0]->tag1 != null) { ?> <span><?php echo $service[0]->tag1 ?></span><?php } ?><?php if ($service[0]->tag2 != null) { ?> <span> | <?php echo $service[0]->tag2 ?></span><?php } ?><?php if ($service[0]->tag3 != null) { ?> <span> | <?php echo $service[0]->tag3 ?></span><?php } ?><?php if ($service[0]->tag4 != null) { ?> <span> | <?php echo $service[0]->tag4 ?></span><?php } ?><?php if ($service[0]->tag5 != null) { ?> <span> | <?php echo $service[0]->tag5 ?></span><?php } ?></p>
                                                </h6>
                                            </div>
                                            <!-- <br><br>
                                        <h6 class="field">Languages : <?php if ($service[0]->language1 != null) { ?> <span><?php echo $service[0]->language1 ?></span><?php } ?><?php if ($service[0]->language2 != null) { ?> <span> / <?php echo $service[0]->language2 ?></span><?php } ?><?php if ($service[0]->language3 != null) { ?> <span> / <?php echo $service[0]->language3 ?></span><?php } ?>
                                        </h6> -->

                                            <div class="sessiondiscription">

                                                <?php echo do_shortcode($service[0]->description); ?>
                                            </div>

                                            <div class="askquediv">

                                                <h4>Got a question about the speaker?</h4>
                                                <?php
                                                echo do_shortcode('[quform id="4" name="single page form"]');

                                                ?>
                                            </div>
                                            </br></br>

                                        </div>









                                    </div>

                                </div>

                            </div>


                            <div class="col-md-6" id="calenderbooking">

                                <a class="w3-bar-item w3-button bookingbtn booktypebtn">Booking</a>

                                <?php
                                if ($preTalkId != "") {
                                ?>
                                    <a class="w3-bar-item w3-button pretalkbtn booktypebtn">Pre Talk</a>

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
                                    echo do_shortcode('[ameliastepbooking service="' . $preTalkId . '"]');
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
                    <div class="mainbody abtexprt">
                        <div class="subrow">
                            <div class="row">
                                <div class="ab-title" style="margin:0 auto;">About the Expert</div>
                            </div>
                            <div class="row author-box">


                                <div class="imgdiv desktop">
                                    <img class="abexpt" src=<?php echo $employee[0]->pictureFullPath ?>>
                                </div>
                                <div class="author-boxcol">
                                    <h3><?php echo $employee[0]->firstName . " " . $employee[0]->lastName; ?></h3>



                                    <h5> <?php echo $employee[0]->position; ?></h5>
                                    <div class="rate">
                                        <?php
                                        $empfullname2 = $employee[0]->full_name;
                                        $average1 = 0;
                                        $reviewresult1 = $wpdb->get_results("SELECT * FROM `review_details` where user='$empfullname2'");
                                        foreach ($reviewresult1 as $row) {
                                            $count = count($reviewresult1);
                                            $review1 = $row->starreview;

                                            $rate1 += $review1;
                                            $average1 = $rate1 / $count;
                                        }
                                        $rating1 = round($average1);
                                        if ($rating1 == "1") {
                                        ?>
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/09/star-3-1.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">


                                        <?php
                                        } else if ($rating1 == "2") {
                                        ?>
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/09/star-3-1.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/09/star-3-1.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/10/emptystar.png" ?>">
                                        <?php
                                        } else if ($rating == "3") {
                                        ?>
                                            <a href="<?php echo $server_name . "/how-it-works-iwd-sessions-explained/#curators" ?>" target="_blank"><img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2023/01/starseke.png" ?>"></a>
                                        <?php
                                        } else if ($rating == "4") {
                                        ?>
                                            <a href="<?php echo $server_name . "/how-it-works-iwd-sessions-explained/#curators" ?>" target="_blank"><img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2023/01/starsyanti.png" ?>"></a>
                                        <?php
                                        } else if ($rating == "5") {
                                        ?>
                                            <a href="<?php echo $server_name . "/how-it-works-iwd-sessions-explained/#curators" ?>" target="_blank"><img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2023/01/starsdanielle.png" ?>"></a>

                                        <?php
                                        }
                                        ?>


                                    </div>
                                    <div class="imgdiv mobile">
                                        <img class="abexpt" src=<?php echo $employee[0]->pictureFullPath ?>>
                                    </div>
                                    <div class="description">
                                        <?php echo do_shortcode(str_replace('\\', '', $employee[0]->bio)); ?>
                                    </div>

                                    <button type="button" class="btn btn-dark hidebtn">Get in contact</button>


                                </div>

                            </div>
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
                                                            <p>We’ve had over 25 of these virtual expert sessions at L’Oréal UK. The team keeps surprising us with amazing content!</p>
                                                            <small>Amos Susskind</small>
                                                            <h6 class="authorname">Managing Director UK & Ireland<br>L'Oréal</h6>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 2 -->
                                            <div class="item">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-11">
                                                            <p>A great team that helps us develop and inspire our international management with a broad range of inspirational sessions</p>
                                                            <small>Jean-Paul Christy</small>
                                                            <h6 class="authorname">President Central Europe<br>Kärcher</h6>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 3 -->
                                            <div class="item">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-11">
                                                            <p>Great content and excellent service. Having done 150 sessions with them, I can easily recommend their speaker curation and their service.</p>
                                                            <small>Tré Sweeney</small>
                                                            <h6 class="authorname">Head of Learning and Development<br>Adyen</h6>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 4 -->
                                            <div class="item">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-11">
                                                            <p>We have been teaming up for over two years with Leqture, the team behind IWD Sessions, and their expert sessions have always been a big success</p>
                                                            <small>Lena Olivier</small>
                                                            <h6 class="authorname">Regional Vice President<br>Salesforce</h6>
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

                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
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
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
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
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
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
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                            <img class="star-rating" src="<?php echo $server_name . "/wp-content/uploads/2022/08/star-3.png" ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container-fluidx MoreSessions">

                        <div class="home-demo">
                            <h3 id="myList" class="hometitle">More Sessions From This Expert</h3>

                            <div class="owl-carousel owl-theme">

                                <?php

                                $result5 =  $wpdb->get_results("SELECT $tbprefix" . "amelia_users.firstName, " . $tbprefix . "amelia_users.lastName, " . $tbprefix . "amelia_services.* FROM " . $tbprefix . "amelia_providers_to_services INNER JOIN " . $tbprefix . "amelia_services INNER JOIN " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id and " . $tbprefix . "amelia_providers_to_services.serviceId=" . $tbprefix . "amelia_services.id where " . $tbprefix . "amelia_users.id='" . $empid . "'");

                                $count = 1;
                                // echo $count;
                                foreach ($result5 as $employeedetails) {
                                    $sid =  $employeedetails->id;
                                    $url = $server_name . "/single-service/?sid=" . $sid;

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
                                                    <img src="<?php echo $server_name . "/wp-content/uploads/2022/10/defaultimg.png" ?>" alt="">
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
                                                <p class="views"><img class="views-icon" src="<?php echo $server_name . "/wp-content/uploads/2022/10/eyeball.png" ?>" /> <?php echo $row->videoViews; ?></p>

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
                                                            <span class="verifiedtext"><img class="verifyimg" src="<?php echo $server_name . "/wp-content/uploads/2023/01/Vector-Stroke.png" ?>"></span>
                                                        <?php endif; ?>
                                                    </p>
                                                    <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                    <p class="pricesession">60 minutes/<?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></p>


                                                    <p class="views"><img class="views-icon" src="<?php echo $server_name . "/wp-content/uploads/2022/10/eyeball.png" ?>" /> <?php echo $row->videoViews; ?></p>
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

                                $results = $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services where status='visible' and categoryId='$catgoryid'");
                                if (!empty($results)) {

                                    foreach ($results as $row) {
                                        $servicesingleid = $row->id;

                                        $employee =  $wpdb->get_results("SELECT " . $tbprefix . "amelia_users.* FROM " . $tbprefix . "amelia_services inner join " . $tbprefix . "amelia_providers_to_services inner join " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$servicesingleid'");




                                        foreach ($employee as $employeedetails) {

                                            $url = $server_name . "/single-service/?sid=" . $servicesingleid;
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
                                                            <img src="<?php echo $server_name . "/wp-content/uploads/2022/10/defaultimg.png" ?>" alt="">
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
                                                        <p class="views"><img class="views-icon" src="<?php echo $server_name . "/wp-content/uploads/2022/10/eyeball.png" ?>" /> <?php echo $row->videoViews; ?></p>

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
                                                                    <span class="verifiedtext"><img class="verifyimg" src="<?php echo $server_name . "/wp-content/uploads/2022/10/checked.png" ?>"></span>
                                                                <?php endif; ?>
                                                            </p>
                                                            <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                            <p class="pricesession">60 minutes / <?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></p>


                                                            <p class="views"><img class="views-icon" src="<?php echo $server_name . "/wp-content/uploads/2022/10/eyeball.png" ?>" /> <?php echo number_format($row->videoViews, 0, '.', ',');  ?></p>
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
                    <div class="mobile-desplay MoreSessions">
                        <div class="home-demo">
                            <h3 id="myList" class="hometitle">More Relevant Sessions</h3>

                            <div class="mobile-display">

                                <?php

                                $results = $wpdb->get_results("SELECT * FROM $tbprefix" . "amelia_services where status='visible' and categoryId='$catgoryid'");
                                if (!empty($results)) {

                                    foreach ($results as $row) {
                                        $servicesingleid = $row->id;

                                        $employee =  $wpdb->get_results("SELECT $tbprefix" . "amelia_users.* FROM " . $tbprefix . "amelia_services inner join " . $tbprefix . "amelia_providers_to_services inner join " . $tbprefix . "amelia_users on " . $tbprefix . "amelia_services.id=" . $tbprefix . "amelia_providers_to_services.serviceId and " . $tbprefix . "amelia_providers_to_services.userId=" . $tbprefix . "amelia_users.id where " . $tbprefix . "amelia_services.id='$servicesingleid'");




                                        foreach ($employee as $employeedetails) {

                                            $url = $server_name . "/single-service/?sid=" . $servicesingleid;
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
                                                            <img src="<?php echo $server_name . "/wp-content/uploads/2022/10/defaultimg.png" ?>" alt="">
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
                                                        <p class="views"><img class="views-icon" src="<?php echo $server_name . "/wp-content/uploads/2022/10/eyeball.png" ?>" /> <?php echo $row->videoViews; ?></p>

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
                                                                    <span class="verifiedtext"><img class="verifyimg" src="<?php echo $server_name . "/wp-content/uploads/2022/10/checked.png" ?>"></span>
                                                                <?php endif; ?>
                                                            </p>
                                                            <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                            <p class="pricesession">60 minutes / <?php echo do_shortcode('[woo_multi_currency_exchange price="' . $row->price . '" currency="' . $curr . '"]'); ?></p>


                                                            <p class="views"><img class="views-icon" src="<?php echo $server_name . "/wp-content/uploads/2022/10/eyeball.png" ?>" /> <?php echo number_format($row->videoViews, 0, '.', ',');  ?></p>
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