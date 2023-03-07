<?php /* Template Name: Page_Review */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area review_form">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <div class="py-5 stepr">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="p-5 col-md-8 border border-dark rform">
                            <h2 style="" class="text-center pb-3">Review</h2>

                           <!--  <div class="form-group"> <label for="lform16">Your Name</label> <input type="text" class="form-control" id="nameh" placeholder="Enter name here" autocomplete="off"> </div>
                            <div class="form-group"> <label for="form17">Service</label> <input type="text" class="form-control" id="serviceh" placeholder="Enter service here" autocomplete="off"> </div> -->
                            <div class="form-group"> <label for="form17">Review</label> <textarea class="form-control h-25" aria-label="With textarea" placeholder="Add review here" id="reviewh"></textarea></div>
                            <div class="form-group"> <label for="form17">Rating</label> 
                            <div class="rate">
                                <img class="star-rating" id="star1" data-id="1" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/10/star-2.png">
                                <img class="star-rating" id="star2" data-id="2" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/10/star-2.png">
                                <img class="star-rating" id="star3" data-id="3" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/10/star-2.png">
                                <img class="star-rating" id="star4" data-id="4" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/10/star-2.png">
                                <img class="star-rating" id="star5" data-id="5" src="https://demoleqture.royboy.eu/wp-content/uploads/2022/10/star-2.png">
                            </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12"><button id="reviewsubmit" type="submit" class="btn text-center btn-lg btn-dark float-right w-50">Submit</button></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

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