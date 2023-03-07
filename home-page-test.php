<?php /* Template Name: homepage_test */ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<script async src="https://www.youtube.com/iframe_api"></script>


<style>
    .item .thumb-info h4 {
        font-size: 14px !important;
    }

    .item {
        height: 122px;
    }

    .owl-carousel .owl-nav.disabled {
        display: block;
    }

    .owl-nav span {
        display: block;

    }

    body {
        overflow-x: hidden !important;
        background: black;
    }

    .page-template-home-page-test .item .thumb-info {
        position: relative;

        color: white;
        font-size: 14px;
        text-align: left;
        margin-left: 5px;
        padding-left: 5px;
        margin: 0;
    }

    .innerhomesecondrow form {
        margin-top: 20px;
    }
</style>
<?php

if (function_exists('ot_get_option')) {
    // $serviceid = ot_get_option('featured_video_id');
}



//$serviceid = ot_get_option( $option_id, $default );

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="containerx">
            <div class="bg-video-wrap">


                <?php

                $paramid = $_GET['id'];
                if ($paramid != "") {



                    $serviceparam = $wpdb->get_results("SELECT * FROM `wp_821991_amelia_services` where status='visible' and id='$paramid'");



                    $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$paramid'");




                    if ($serviceparam[0]->video != "" || $serviceparam[0]->video != null) {
                        $videourlhero = "https://www.youtube.com/embed/" . $serviceparam[0]->video;
                        $parametershero = "?controls=0&showinfo=0&rel=0&loop=1&start=8&autoplay=1&mute=1";
                        $finalurlhero = $videourlhero . $parametershero;
                    } else {
                        $imgurl =  ot_get_option('top_section_background_image');
                ?>
                        <div class="bg-video-wrap videobackimg" style="background: url(<?php echo $imgurl; ?>)">

                        <?php
                    }



                        ?>
                        <!-- <div class="bg-video-wrap" style="background: url(https://designsupply-web.com/samplecontent/vender/codepen/20181014.png) no-repeat center center/cover;"> -->

                        <?php




                        //  echo "<h1>new service id</h1>".$serviceid;

                        ?>

                        <?php
                        if ($finalurlhero != "" || $finalurlhero != null) {
                        ?>
                            <div class="video-background">
                                <?php

                                ?>
                                <div class="video-foreground">
                                    <iframe class="youtube-video" width="278" height="154" src=<?php echo  $finalurlhero; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                            </div>

                        <?php
                        }
                        ?>
                        <?php
                    } else {
                        if (function_exists('ot_get_option')) {
                            if (ot_get_option('featured_video_id')) {
                                $serviceid = ot_get_option('featured_video_id');

                                $service = $wpdb->get_results("SELECT * FROM `wp_821991_amelia_services` where status='visible' and id='$serviceid'");



                                $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$serviceid'");




                                if ($service[0]->video != "" || $service[0]->video != null) {
                                    $videourlhero = "https://www.youtube.com/embed/" . $service[0]->video;
                                    $parametershero = "?controls=0&showinfo=0&rel=0&loop=1&start=8&autoplay=1&mute=1";
                                    $finalurlhero = $videourlhero . $parametershero;
                                } else {
                                    $imgurl =  ot_get_option('top_section_background_image');
                        ?>
                                    <div class="bg-video-wrap videobackimg" style="background: url(<?php echo $imgurl; ?>)">

                                    <?php
                                }



                                    ?>
                                    <!-- <div class="bg-video-wrap" style="background: url(https://designsupply-web.com/samplecontent/vender/codepen/20181014.png) no-repeat center center/cover;"> -->

                                <?php
                            }



                            //  echo "<h1>new service id</h1>".$serviceid;

                                ?>

                                <?php
                                if ($finalurlhero != "" || $finalurlhero != null) {
                                ?>
                                    <div class="video-background">
                                        <?php

                                        ?>
                                        <div class="video-foreground">
                                            <iframe class="youtube-video" width="278" height="154" src=<?php echo  $finalurlhero; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>

                                    </div>

                                <?php
                                }
                                ?>


                        <?php

                        }
                    }

                        ?>


                        <div class="overlay"></div>
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
                                            <span class="verifiedtext"><img class="verifyimg" src="https://tolqs.com/wp-content/uploads/2022/10/checked.png"></span>
                                        <?php endif; ?>
                                        <h1 class="disable"><?php echo get_field('inactive', $worduser) ?></h1>

                                        <?php if (get_field('inactive', $worduser)) : ?>
                                            <span class="disable">Disable user</span>
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
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">


                                        <?php
                                        } else if ($rating == "2") {
                                        ?>
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <?php
                                        } else if ($rating == "3") {
                                        ?>
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <?php
                                        } else if ($rating == "4") {
                                        ?>
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://tolqs.com/wp-content/uploads/2022/10/emptystar.png">
                                        <?php
                                        } else if ($rating == "5") {
                                        ?>
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">
                                            <img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/star-3-1.png">

                                        <?php
                                        }
                                        ?>

                                    </div>
                                    <div class="sessiondiscription">
                                        <p class="mbr-text mb-3 mbr-fonts-style display-7">
                                            <?php echo $service[0]->description; ?>
                                        </p>
                                    </div>
                                    <div class="price">
                                        <h3 class="session-price">60 minutes / <?php echo do_shortcode('[woo_multi_currency_exchange price="' . $service[0]->price . '" currency="' . $curr . '"]'); ?></h3>
                                    </div>
                                    <div class="views">
                                        <h3 class="viewscount">6,349,764 Views</h3>
                                    </div>
                                    <?php
                                    $topvideosingle = "https://tolqs.com/single-service/?sid=" . $serviceid
                                    ?>
                                    <a href=<?php echo $topvideosingle; ?>><button type="button" class="btn btn-dark sessionbtn">Instant Booking</button></a>
                                </div>

                            </div>

                        </div>

                        <!--   <h5 class="viewstext">100 Views</h5>
              <div class="plybutton"><img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/play-button.png"></div>
                <div id="mutebtn" class="pusbutton"><img class="star-rating" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/pause-2.png"></div> -->
                        <p id="unmute"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/volume-3.png"></p>
                        <p id="mute"><img src="https://demoleqture.royboy.eu/wp-content/uploads/2022/09/volume-2.png"></p>
                                    </div>
                        </div>
                        <div class="container homebodysec">
                            <div class="innerhomesecondrow">
                                <div class="secondsec">
                                    <h2>Find your virtual speaker. Schedule and book. Get inspired.</h2>

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
                                                    <option disabled selected>Topic</option>
                                                    <?php

                                                    $servicecate = $wpdb->get_results("SELECT * FROM wp_821991_amelia_categories");
                                                    foreach ($servicecate as $row) {
                                                        $servicecateid = $row->id;
                                                        $servicecatename = $row->name;

                                                        echo "<option value=" . $servicecateid . ">" . $servicecatename . "</option>";
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
                                        <!-- <div class="col">
                                <div class="form-group">
                                    <input id="timepicker" width="150" placeholder="Time" name="timex" />
                                    <script>
                                        $('#timepicker').timepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                    </script>
                                </div>
                            </div> -->

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
            echo "<div class=searchandfilter>";
            if (isset($_POST['submit'])) {

            ?>
                <div class="searchresult">
                    <?php

                    // echo $_POST["topic"] . "<br>";
                    // echo $_POST["budget"] . "<br>";
                    // echo $_POST["budgetx"] . "<br>";
                    // echo $_POST["timex"] . "<br>";
                    // echo $_POST["searchtext"] . "<br>";
                    // echo $_POST["catname"] . "<br>" . "<br>";

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
                        $topics = $topicz . ",";
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
                        $timexs = $timex . ",";
                    }
                    if ($searchtext != "") {
                        if ($query != "") {
                            $query .= " AND name LIKE '%$searchtext%' or description LIKE '%$searchtext%'";
                        } else {
                            $query = "name LIKE '%$searchtext%' or description LIKE '%$searchtext%'";
                        }
                        $searchtexts = $searchtext;
                    }


                    // echo "SELECT * FROM wp_821991_amelia_services WHERE " . $query . ";";
                    echo "<div class='serchs'> <h2>Search Terms: <strong>" . $topics . "</strong> <strong>" . $budgets . "</strong>-<strong>" . $budgetxs . "</strong> <strong>" . $timexs . "</strong> <strong>" . $searchtext . "</strong></h2></div>";

                    $db_item =  $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_821991_amelia_services WHERE " . $query . ";"));
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

                                <div class="col dds">
                                    <div class="form-group">
                                        <input type="Date" placeholder="Date" class="form-control" id="Date" name="Date">
                                    </div>
                                </div>
                                <div class="col colsm6">
                                    <div class="form-group">
                                        <input placeholder="Time from" class="form-control" id="Timefrom" name="Timefrom">

                                    </div>
                                </div>
                                <div class="col colsm6">
                                    <div class="form-group">
                                        <input placeholder="Timeto" class="form-control" id="Timeto" name="Timeto">
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
                                        <button type="submit" name="filterbtn" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <div class="cardmain">

                            <?php
                            foreach ($db_item as $row) {

                            ?>

                                <div class="card">
                                    <?php
                                    $videourl1 =  $row->video;
                                    $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                                    $finalurl1 =  "https://www.youtube.com/embed/" . $videourl1 . $parameters1;
                                    $sid =  $row->id;
                                    $url = "https://tolqs.com/single-service/?sid=" . $sid;
                                    ?>
                                    <a href="<?php echo $url; ?>">
                                        <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


                                        <div class="container">
                                            <?php

                                            $employee =  $wpdb->get_results("SELECT * FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$sid'");
                                            foreach ($employee as $employeedetails) {
                                                $fnameandlastname =  $employeedetails->firstName . " " . $employeedetails->lastName;
                                            }
                                            ?>
                                            <p class="cardauthor"><?php echo $fnameandlastname ?></p>
                                            <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                            <p class="pricesession">60 minutes/<?php echo $row->price; ?>€</p>
                                            <p class="views">362.440 Views</p>
                                            <p class="paratext"><?php echo $row->description; ?></p>
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
                <?php

            } else {

                if (isset($_POST['filterbtn'])) {

                    $ftopic = $_POST["topicid"];
                    $searchtext = $_POST["fsearchtxt"];
                    $topicz = $_POST["fcatname"];
                    $budget = $_POST["fbudgetmin"];
                    $budgetx = $_POST["fbudgetmax"];

                ?>
                    <div class="searchresult">
                        <form method="POST" class="filterform">
                            <div class="row filter">
                                <input type="hidden" name="topicid" value="<?php echo $ftopic ?>">
                                <input type="hidden" name="fsearchtxt" value="<?php echo $searchtext ?>">
                                <input type="hidden" name="fcatname" value="<?php echo $topicz ?>">
                                <input type="hidden" name="fbudgetmin" value="<?php echo $budget ?>">
                                <input type="hidden" name="fbudgetmax" value="<?php echo $budgetx ?>">

                                <div class="col dds">
                                    <div class="form-group">
                                        <input type="Date" placeholder="Date" class="form-control" id="Date" name="Date">
                                    </div>
                                </div>
                                <div class="col colsm6">
                                    <div class="form-group">
                                        <input placeholder="Time from" class="form-control" id="Timefrom" name="Timefrom">
                                    </div>
                                </div>
                                <div class="col colsm6">
                                    <div class="form-group">
                                        <input placeholder="Time to" class="form-control" id="Timeto" name="Timeto">
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
                                        <button type="submit" name="filterbtn" class="btn btn-primary">Filter</button>
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




                        // $ftimefrom = $_POST["Timefrom"];
                        // $ftimeto = $_POST["Timeto"];
                        //echo 'start - '.$ftimefrom . " - end".  $ftimeto;


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


                        // $topic = $_POST["topic"];
                        // $budget = $_POST["budget"];
                        // $budgetx = $_POST["budgetx"];
                        // $timex = $_POST["timex"];
                        // $searchtext = $_POST["searchtext"];
                        // $topicz = $_POST["catname"];

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
                            $topics = $ztopicz . ",";
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
                        // if ($budgetx != "") {
                        //     if ($query != "") {
                        //         $query .= " or name LIKE ";
                        //     } else {
                        //         $query = "name LIKE '%$budgetx%'";
                        //     }
                        //     $budgetxs = $budgetx;
                        // }
                        if ($ztimex != "") {
                            if ($query != "") {
                                $query .= " AND duration LIKE '%$ztimex%'";
                            } else {
                                $query = "duration LIKE '%$ztimex%'";
                            }
                            $timexs = $ztimex . ",";
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


                        echo "<div class='serchs'> <h2>Search Terms: <strong>" . $topics . "</strong> <strong>" . $budgets . "</strong>-<strong>" . $budgetxs . "</strong> <strong>" . $timexs . "</strong> <strong>" . $searchtext . "</strong></h2></div>";

                        if ($frating == "") {
                            // echo "SELECT * FROM wp_821991_amelia_services WHERE " . $query . $endquery . ";";
                            $quaryselector = "SELECT * FROM wp_821991_amelia_services WHERE " . $query . $endquery . ";";
                        } else {
                            if ($frating != "" && $fprice != "") {
                                $fendquery = " , starreview ASC";
                                // echo "SELECT * FROM wp_821991_amelia_services JOIN review_details ON wp_821991_amelia_services.id = review_details.service_id WHERE " . $query . $endquery . $fendquery . ";";
                                $quaryselector = "SELECT * FROM wp_821991_amelia_services JOIN review_details ON wp_821991_amelia_services.id = review_details.service_id WHERE " . $query . $endquery . $fendquery . ";";
                            } else {
                                // echo "SELECT * FROM wp_821991_amelia_services JOIN review_details ON wp_821991_amelia_services.id = review_details.service_id WHERE " . $query . $endquery . $fendquery . ";";
                                $quaryselector = "SELECT * FROM wp_821991_amelia_services JOIN review_details ON wp_821991_amelia_services.id = review_details.service_id WHERE " . $query . $endquery . $fendquery . ";";
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
                                            // $querydate = " and wp_821991_amelia_providers_to_weekdays.dayIndex = 3" . $ffdate;
                                            $querydate = " and wp_821991_amelia_providers_to_weekdays.dayIndex = 3";
                                        }
                                        if ($ftimefrom != "" || $ftimeto != "") {
                                            if ($ftimefrom == "") {
                                                $ftimefrom = 90000;
                                            }
                                            if ($ftimeto == "") {
                                                $ftimeto = 180000;
                                            }

                                            $querytime = "AND (CAST(wp_821991_amelia_providers_to_weekdays.startTime AS int) >= " . $ftimefrom . " or 
                                    CAST(wp_821991_amelia_providers_to_weekdays.endTime AS int) <= " . $ftimeto . ")";
                                        }

                                        $quaryselector2 = "SELECT 
                            wp_821991_amelia_providers_to_services.userId,
                            wp_821991_amelia_services.id,
                            wp_821991_amelia_providers_to_weekdays.dayIndex,
                            wp_821991_amelia_providers_to_weekdays.startTime,
                            wp_821991_amelia_providers_to_weekdays.endTime
                            FROM 
                            wp_821991_amelia_services inner join 
                            wp_821991_amelia_providers_to_services inner join 
                            wp_821991_amelia_providers_to_weekdays 
                            on 
                            wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and 
                            wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_providers_to_weekdays.userId 
                            where wp_821991_amelia_services.id=" . $row->id . " " . $querydate . " " . $querytime . ";";
                                        $flag = true;
                                        $db_item2 =  $wpdb->get_results($wpdb->prepare($quaryselector2));
                                        if (!empty($db_item2)) {
                                            foreach ($db_item2 as $row2) {
                                                if ($flag) {
                                ?>
                                                    <div class="card">
                                                        <?php
                                                        $videourl1 =  $row->video;
                                                        $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                                                        $finalurl1 =  "https://www.youtube.com/embed/" . $videourl1 . $parameters1;
                                                        $sid =  $row->id;
                                                        $url = "https://tolqs.com/single-service/?sid=" . $sid;
                                                        ?>
                                                        <a href="<?php echo $url; ?>">
                                                            <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


                                                            <div class="container">
                                                                <?php

                                                                $employee =  $wpdb->get_results("SELECT * FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$sid'");
                                                                foreach ($employee as $employeedetails) {
                                                                    $fnameandlastname =  $employeedetails->firstName . " " . $employeedetails->lastName;
                                                                }
                                                                ?>
                                                                <p class="cardauthor"><?php echo $fnameandlastname ?></p>
                                                                <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                                <p class="pricesession">60 minutes/<?php echo $row->price; ?>€</p>
                                                                <p class="views">362.440 Views</p>
                                                                <p class="paratext"><?php echo $row->description; ?></p>
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
                                            $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                                            $finalurl1 =  "https://www.youtube.com/embed/" . $videourl1 . $parameters1;
                                            $sid =  $row->id;
                                            $url = "https://tolqs.com/single-service/?sid=" . $sid;
                                            ?>
                                            <a href="<?php echo $url; ?>">
                                                <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


                                                <div class="container">
                                                    <?php

                                                    $employee =  $wpdb->get_results("SELECT * FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$sid'");
                                                    foreach ($employee as $employeedetails) {
                                                        $fnameandlastname =  $employeedetails->firstName . " " . $employeedetails->lastName;
                                                    }
                                                    ?>
                                                    <p class="cardauthor"><?php echo $fnameandlastname ?></p>
                                                    <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                    <p class="pricesession">60 minutes/<?php echo $row->price; ?>€</p>
                                                    <p class="views">362.440 Views</p>
                                                    <p class="paratext"><?php echo $row->description; ?></p>
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
                <?php
                } else {
                ?>

                    <div class="mainresultdiv">
                        <div class="container-fluidx">

                            <div class="home-demo">


                                <h3 id="myList" class="hometitle">Diversity, Equity and Inclusion</h3>

                                <div class="owl-carousel owl-theme">


                                    <?php

                                    $results = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services where status='visible' and categoryId='4'");
                                    if (!empty($results)) {

                                        foreach ($results as $row) {
                                            $servicesingleid = $row->id;

                                            $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$servicesingleid'");







                                            foreach ($employee as $employeedetails) {



                                                $url = "https://tolqs.com/single-service/?sid=" . $servicesingleid;
                                    ?>
                                                <?php
                                               
                                                 $externalid = $employeedetails->externalId;
                                                 
                                                $worduser = 'user_' . $externalid;
                                                if (get_field('inactive', $worduser)) {
                                                ?>
                                                <?php } else {
                                                ?>
                                                    <div class="item">
                                                        <a href=""><img src=<?php echo $row->pictureFullPath; ?> alt=""></a>

                                                        <div class="thumb-info">
                                                          

                                                            <h4 class="sessionttile-thumb"><b><?php echo $row->name; ?></b></h4>

                                                            <p class="pricesession-thumb"><?php echo $row->price; ?>€</p>
                                                        </div>
                                                        <a href=<?php echo $url; ?>>
                                                            <div class="card">
                                                                <?php
                                                                $videourl1 =  "https://www.youtube.com/embed/" . $row->video;
                                                                $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                                                                $finalurl1 = $videourl1 . $parameters1;

                                                                ?>
                                                                <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


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
                                                                    <p class="pricesession">60 minutes/<?php echo $row->price; ?>€</p>
                                                                    <p class="views">362.440 Views</p>
                                                                    <p class="paratext"><?php echo $row->description; ?></p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php
                                                }
                                                ?>

                                    <?php

                                            }
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="home-demo">
                                <h3 id="myList" class="hometitle">Inspiration</h3>

                                <div class="owl-carousel owl-theme onecro">

                                    <?php

                                    $results2 = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services where status='visible' and categoryId='8'");
                                    if (!empty($results2)) {

                                        foreach ($results2 as $row) {
                                            $servicesingleid = $row->id;

                                            $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$servicesingleid'");




                                            foreach ($employee as $employeedetails) {

                                                $url = "https://tolqs.com/single-service/?sid=" . $servicesingleid;
                                    ?>
                                                <div class="item">
                                                    <a href=""><img src=<?php echo $row->pictureFullPath; ?> alt=""></a>

                                                    <div class="thumb-info">
                                                        <h4 class="sessionttile-thumb"><b><?php echo $row->name; ?></b></h4>

                                                        <p class="pricesession-thumb"><?php echo $row->price; ?>€</p>
                                                    </div>
                                                    <a href=<?php echo $url; ?>>
                                                        <div class="card">
                                                            <?php
                                                            $videourl1 =  "https://www.youtube.com/embed/" . $row->video;
                                                            $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                                                            $finalurl1 = $videourl1 . $parameters1;

                                                            ?>
                                                            <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


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
                                                                <p class="pricesession">60 minutes/<?php echo $row->price; ?>€</p>
                                                                <p class="views">362.440 Views</p>
                                                                <p class="paratext"><?php echo $row->description; ?></p>
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



                            <div class="home-demo">
                                <h3 id="myList" class="hometitle">Soft Skills</h3>

                                <div class="owl-carousel owl-theme">


                                    <?php

                                    $results3 = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services where status='visible' and categoryId='9'");
                                    if (!empty($results3)) {

                                        foreach ($results3 as $row) {
                                            $servicesingleid = $row->id;

                                            $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$servicesingleid'");




                                            foreach ($employee as $employeedetails) {

                                                $url = "https://tolqs.com/single-service/?sid=" . $servicesingleid;
                                    ?>
                                                <div class="item">
                                                    <a href=""><img src=<?php echo $row->pictureFullPath; ?> alt=""></a>

                                                    <div class="thumb-info">
                                                        <h4 class="sessionttile-thumb"><b><?php echo $row->name; ?></b></h4>

                                                        <p class="pricesession-thumb"><?php echo $row->price; ?>€</p>
                                                    </div>
                                                    <a href=<?php echo $url; ?>>
                                                        <div class="card">
                                                            <?php
                                                            $videourl1 =  "https://www.youtube.com/embed/" . $row->video;
                                                            $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                                                            $finalurl1 = $videourl1 . $parameters1;

                                                            ?>
                                                            <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


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
                                                                <p class="pricesession">60 minutes/<?php echo $row->price; ?>€</p>
                                                                <p class="views">362.440 Views</p>
                                                                <p class="paratext"><?php echo $row->description; ?></p>
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
                    </div>
                    <div class="container-fluid mobile-section">
                        <div class="mobile-section">
                            <h3 id="myList" class="hometitle">Diversity, Equity and Inclusion</h3>

                            <?php

                            $results = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services where status='visible' and categoryId='4'");
                            if (!empty($results)) {

                                foreach ($results as $row) {
                                    $servicesingleid = $row->id;

                                    $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$servicesingleid'");




                                    foreach ($employee as $employeedetails) {

                                        $url = "https://tolqs.com/single-service/?sid=" . $servicesingleid;
                            ?>
                                        <div class="item">
                                            <a href=""><img src=<?php echo $row->pictureFullPath; ?> alt=""></a>

                                            <div class="thumb-info">
                                                <h4 class="sessionttile-thumb"><b><?php echo $row->name; ?></b></h4>

                                                <p class="pricesession-thumb"><?php echo $row->price; ?>€</p>
                                            </div>
                                            <a href=<?php echo $url; ?>>
                                                <div class="card">
                                                    <?php
                                                    $videourl1 =  "https://www.youtube.com/embed/" . $row->video;
                                                    $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                                                    $finalurl1 = $videourl1 . $parameters1;

                                                    ?>
                                                    <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


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
                                                        <p class="pricesession">60 minutes/<?php echo $row->price; ?>€</p>
                                                        <p class="views">362.440 Views</p>
                                                        <p class="paratext"><?php echo $row->description; ?></p>
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

                <?php
                }
                ?>

            <?php
            }
            echo "</div>";
            ?>


            <div class="container-fluid">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <?php
                        $flag = true;
                        if (function_exists('ot_get_option')) {
                            $images = explode(',', ot_get_option('featured_images'));
                            if (!empty($images)) {
                                $i = 0;
                                foreach ($images as $id) {
                                    if (!empty($id)) {
                                        //echo wp_get_attachment_image_src( $id,"full" )[0];
                                        if ($flag) {

                        ?>
                                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <?php
                                            $flag = false;
                                        } else {
                                        ?>
                                            <li data-target="#demo" data-slide-to="1"></li>
                        <?php
                                        }
                                    }
                                }
                            }
                        }

                        ?>


                    </ul>
                    <div class="carousel-inner">

                        <?php
                        $flag = true;
                        if (function_exists('ot_get_option')) {
                            $images = explode(',', ot_get_option('featured_images'));
                            if (!empty($images)) {
                                $i = 0;
                                foreach ($images as $id) {
                                    if (!empty($id)) {
                                        //echo wp_get_attachment_image_src( $id,"full" )[0];
                                        if ($flag) {
                        ?>
                                            <div class="carousel-item active">
                                                <img src="<?php echo wp_get_attachment_image_src($id, "full")[0]; ?>" alt="Los Angeles" height="500">
                                                <div class="carousel-caption">
                                                    <h3>Los Angeles</h3>
                                                    <p>We had such a great time in LA!</p>
                                                </div>
                                            </div>
                                        <?php
                                            $flag = false;
                                        } else {
                                        ?>
                                            <div class="carousel-item">
                                                <img src="<?php echo wp_get_attachment_image_src($id, "full")[0]; ?>" alt="Chicago" height="500">
                                                <div class="carousel-caption">
                                                    <h3>Chicago</h3>
                                                    <p>Thank you, Chicago!</p>
                                                </div>
                                            </div>
                        <?php
                                        }
                                    }
                                }
                            }
                        }
                        ?>


                        <?php

                        ?>

                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>

            <div class="secondcategory container-fluidx">
                <div class="home-demo">


                    <h3 id="myList" class="hometitle">Diversity, Equity and Inclusion</h3>

                    <div class="owl-carousel owl-theme">


                        <?php

                        $results = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services where status='visible' and categoryId='4'");
                        if (!empty($results)) {

                            foreach ($results as $row) {
                                $servicesingleid = $row->id;

                                $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$servicesingleid'");

                                foreach ($employee as $employeedetails) {

                                    $url = "https://tolqs.com/single-service/?sid=" . $servicesingleid;
                        ?>
                                    <div class="item">
                                        <a href=""><img src=<?php echo $row->pictureFullPath; ?> alt=""></a>

                                        <div class="thumb-info">
                                            <h4 class="sessionttile-thumb"><b><?php echo $row->name; ?></b></h4>

                                            <p class="pricesession-thumb"><?php echo $row->price; ?>€</p>
                                        </div>
                                        <a href=<?php echo $url; ?>>
                                            <div class="card">
                                                <?php
                                                $videourl1 =  "https://www.youtube.com/embed/" . $row->video;
                                                $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                                                $finalurl1 = $videourl1 . $parameters1;

                                                ?>
                                                <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


                                                <div class="container">

                                                    <?php
                                                    $wordpressuserid = $employeedetails->externalId;
                                                    $worduser = 'user_' . $wordpressuserid;

                                                    ?>
                                                    <p class="cardauthor"><?php echo $employeedetails->firstName . " " . $employeedetails->lastName  ?>
                                                        <?php if (get_field('verifed', $worduser)) : ?>
                                                            <span class="verifiedtext"><img class="verifyimg" src="https://tolqs.com/wp-content/uploads/2022/10/checked.png"></span>
                                                        <?php endif; ?>
                                                    <h1 class="disable"><?php echo $worduser; ?><?php echo get_field('inactive', $worduser) ?></h1>
                                                    </p>
                                                    <h4 class="sessionttile"><b><?php echo $row->name; ?></b></h4>
                                                    <p class="pricesession">60 minutes/<?php echo $row->price; ?>€</p>
                                                    <p class="views">362.440 Views</p>
                                                    <p class="paratext"><?php echo $row->description; ?></p>
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
                <div class="home-demo">
                    <h3 id="myList" class="hometitle">Inspiration</h3>

                    <div class="owl-carousel owl-theme">

                        <?php

                        $results2 = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services where status='visible' and categoryId='8'");
                        if (!empty($results2)) {

                            foreach ($results2 as $row) {
                                $servicesingleid = $row->id;

                                $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$servicesingleid'");




                                foreach ($employee as $employeedetails) {

                                    $url = "https://tolqs.com/single-service/?sid=" . $servicesingleid;
                        ?>
                                    <div class="item">
                                        <a href=""><img src=<?php echo $row->pictureFullPath; ?> alt=""></a>

                                        <div class="thumb-info">
                                            <h4 class="sessionttile-thumb"><b><?php echo $row->name; ?></b></h4>

                                            <p class="pricesession-thumb"><?php echo $row->price; ?>€</p>
                                        </div>
                                        <a href=<?php echo $url; ?>>
                                            <div class="card">
                                                <?php
                                                $videourl1 =  "https://www.youtube.com/embed/" . $row->video;
                                                $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                                                $finalurl1 = $videourl1 . $parameters1;

                                                ?>
                                                <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


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
                                                    <p class="pricesession">60 minutes/<?php echo $row->price; ?>€</p>
                                                    <p class="views">362.440 Views</p>
                                                    <p class="paratext"><?php echo $row->description; ?></p>
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



                <div class="home-demo">
                    <h3 id="myList" class="hometitle">Soft Skills</h3>

                    <div class="owl-carousel owl-theme">


                        <?php

                        $results3 = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services where status='visible' and categoryId='9'");
                        if (!empty($results3)) {

                            foreach ($results3 as $row) {
                                $servicesingleid = $row->id;

                                $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$servicesingleid'");




                                foreach ($employee as $employeedetails) {

                                    $url = "https://tolqs.com/single-service/?sid=" . $servicesingleid;
                        ?>
                                    <div class="item">
                                        <a href=""><img src=<?php echo $row->pictureFullPath; ?> alt=""></a>

                                        <div class="thumb-info">
                                            <h4 class="sessionttile-thumb"><b><?php echo $row->name; ?></b></h4>

                                            <p class="pricesession-thumb"><?php echo $row->price; ?>€</p>
                                        </div>
                                        <a href=<?php echo $url; ?>>
                                            <div class="card">
                                                <?php
                                                $videourl1 =  "https://www.youtube.com/embed/" . $row->video;
                                                $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                                                $finalurl1 = $videourl1 . $parameters1;

                                                ?>
                                                <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


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
                                                    <p class="pricesession">60 minutes/<?php echo $row->price; ?>€</p>
                                                    <p class="views">362.440 Views</p>
                                                    <p class="paratext"><?php echo $row->description; ?></p>
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

            <div class="container-fluid mobile-section">
                <div class="mobile-section">


                    <?php

                    $results = $wpdb->get_results("SELECT * FROM wp_821991_amelia_services where status='visible' and categoryId='8'");
                    if (!empty($results)) {

                        foreach ($results as $row) {
                            $servicesingleid = $row->id;

                            $employee =  $wpdb->get_results("SELECT wp_821991_amelia_users.* FROM wp_821991_amelia_services inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_users on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_services.id='$servicesingleid'");




                            foreach ($employee as $employeedetails) {

                                $url = "https://tolqs.com/single-service/?sid=" . $servicesingleid;
                    ?>
                                <div class="item">
                                    <a href=""><img src=<?php echo $row->pictureFullPath; ?> alt=""></a>

                                    <div class="thumb-info">
                                        <h4 class="sessionttile-thumb"><b><?php echo $row->name; ?></b></h4>

                                        <p class="pricesession-thumb"><?php echo $row->price; ?>€</p>
                                    </div>
                                    <a href=<?php echo $url; ?>>
                                        <div class="card">
                                            <?php
                                            $videourl1 =  "https://www.youtube.com/embed/" . $row->video;
                                            $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                                            $finalurl1 = $videourl1 . $parameters1;

                                            ?>
                                            <iframe class="carouselvideo" src=<?php echo $finalurl1; ?>></iframe>


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
                                                <p class="pricesession">60 minutes/<?php echo $row->price; ?>€</p>
                                                <p class="views">362.440 Views</p>
                                                <p class="paratext"><?php echo $row->description; ?></p>
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
    </main>
</div>

<script>
    $('#Timefrom').timepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#Timeto').timepicker({
        uiLibrary: 'bootstrap4'
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
                    items: 1
                },
                600: {
                    items: 3
                },
                1024: {
                    items: 4
                },
                1366: {
                    items: 5
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
                    items: 1
                },
                600: {
                    items: 3
                },
                1024: {
                    items: 4
                },
                1366: {
                    items: 5
                }
            }
        });


    });





    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // var player;

    // function onYouTubeIframeAPIReady() {
    //   player = new YT.Player('youtube-video', {
    //   			videoId: 'VNGFep6rncY',   // The video id.
    //             width: 560,
    //             height: 316,
    //             playerVars: {
    //                 'autoplay': 1,		// Autoplay when page loads.
    //                 'controls': 0,
    //                 'showinfo': 0,
    //                 'modestbranding': 0,
    //                 'loop': 1,
    //                 'fs': 0,
    //               'start':8,
    //                 'cc_load_policty': 0,
    //                 'iv_load_policy': 3,
    // 				'origin': 'https://demoleqture.royboy.eu'
    //     },
    //     events: {
    //       'onReady': onPlayerReady,
    //       'onStateChange': onPlayerStateChange
    //     }
    //   });


    // }
    // var flag = true;
    // function onPlayerReady() {
    // console.log("hey Im ready");
    // // 	if(flag){
    // // 		console.log("hey Im ready");
    // // 	   var videoURL = $('iframe#youtube-video').prop('src');
    // // videoURL += "&autoplay=1";
    // // $('iframe#youtube-video').prop('src',videoURL);
    // // flag = false;
    // // 	   }
    // }

    // function onPlayerStateChange() {
    // // 	flag = true;
    //   console.log("my state changed");
    // }


    // document.getElementById("mute").addEventListener('click', function(event) {

    //   console.log(player);

    //   if (player.isMuted()) {
    //     player.unMute();
    //   } else {
    //     player.mute();
    //   }
    // });
    /*function onYouTubeIframeAPIReady() {

        var player;

        player = new YT.Player('div_YouTube', {
            videoId: 'VNGFep6rncY',   // The video id.
            width: 560,
            height: 316,
            playerVars: {
                'autoplay': 1,		// Autoplay when page loads.
                'controls': 1,
                'showinfo': 0,
                'modestbranding': 0,
                'loop': 1,
                'fs': 0,
                'cc_load_policty': 0,
                'iv_load_policy': 3
            },
            events: {
                'onLoad': function (e) {
                  e.target.unmute();
                  e.target.setVolume(50); // For max value, set value as 100.
                }
            }
        });
    }*/
</script>
<?php get_sidebar('content-bottom'); ?>
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>