<?php /* Template Name: Page_search_result */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">

            <?php

            // echo $_POST["topic"];
            // echo $_POST["budget"];
            // echo $_POST["datex"];
            // echo $_POST["timex"];
            // echo $_POST["searchtext"];

            $topic = $_POST["topic"];
            $budget = $_POST["budget"];
            $datex = $_POST["datex"];
            $timex = $_POST["timex"];
            $searchtext = $_POST["searchtext"];
			$topicz = $_POST["catname"];

            $topics = "";
            $budgets = "";
            $datexs = "";
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
            if ($budget != "") {
                if ($query != "") {
                    $query .= " or price LIKE '%$budget%'";
                } else {
                    $query = "price LIKE '%$budget%'";
                }
                $budgets = $budget;
            }
            if ($datex != "") {
                if ($query != "") {
                    $query .= " or name LIKE '%$datex%'";
                } else {
                    $query = "name LIKE '%$datex%'";
                }
                $datexs = $datex;
            }
            if ($timex != "") {
                if ($query != "") {
                    $query .= " or duration LIKE '%$timex%'";
                } else {
                    $query = "duration LIKE '%$timex%'";
                }
                $timexs = $timex;
            }
            if ($searchtext != "") {
                if ($query != "") {
                    $query .= " or name LIKE '%$searchtext%' or description LIKE '%$searchtext%'";
                } else {
                    $query = "name LIKE '%$searchtext%' or description LIKE '%$searchtext%'";
                }
                $searchtexts = $searchtext;
            }


            // echo "SELECT * FROM wp_821991_amelia_services WHERE " . $query;
            echo "<div class='serchs'> <h2>Search Terms: <strong>".$topics."</strong> <strong>".$budgets."</strong> <strong>".$datexs."</strong> <strong>".$timexs."</strong> <strong>".$searchtext."</strong></h2></div>";

            $db_item =  $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_821991_amelia_services WHERE " . $query));
            $fnameandlastnam = "";
            // echo $db_item;
            if (!empty($db_item)) {


                foreach ($db_item as $row) {

            ?>

                    <div class="card">
                        <?php
                        $videourl1 =  $row->video;
                        $parameters1 = "?controls=1&showinfo=0&rel=0&loop=1&mute=1";
                        $finalurl1 =  "https://www.youtube.com/embed/" . $videourl1 . $parameters1;
                        $sid =  $row->id;
                        $url = "https://demoleqture.royboy.eu/single-service/?sid=" . $sid;
                        ?>
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
                    </div>
            <?php

                }
            } else {
                echo "<div class='nores'> <h3>No result found </h3></div>";
            }
            ?>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </div>
        <!-- End of container -->
    </main><!-- .site-main -->
    <?php get_sidebar('content-bottom'); ?>
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>