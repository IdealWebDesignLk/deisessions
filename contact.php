<?php /* Template Name: Contact_us */ ?>
<script async src="https://www.youtube.com/iframe_api"></script>
<?php get_header(); ?>



<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="containerx">

            <div class="toprow">
                <div class="row">
                    <div class="col-md-6 topfirstcol">
                        <h2>
                           TOLQS History
                        </h2>

<div class="missiondiv">
	
						
                        <h3 class="missiontitle">
                            Mission & Vision</h3>

                        <p>
                            Our mission is to Inspire People. We believe in the power of curiosity and structural and continuous learning to grow and develop ourselves. We thrive on connecting experts from all over the world to people all over the world to inspire them with new insights, perspectives and knowledge.
                        </p>
	</div>
                    </div>

                    <div class="col-md-6 topsecondcol">
                        <div class="markup-description">
                            <p><strong>Our Values:</strong></p>
                            <p><em>Be Curious</em></p>
                            <p>We believe that curiosity cultivates lives of meaning and purpose. We encourage people to seek new experiences and to keep on learning.</p>
                            <p><em>Be Honest</em></p>
                            <p>We are transparent in everything we do and share our (humble) opinions directly to empower people to be the best version of themselves.
                            </p>
                            <p><em>Be Human</em></p>
                            <p>Even though we offer a digital service, we want to safeguard that our work is always based on people interacting with other people. We encourage people to connect, collaborate and keep an open mind at all times.
                            </p>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row contactheader">

                <div class="col-md-5 contactfirst">
                    <h1 class="contacttitle">We would Love to Hear From You</h1>
                </div>

                <div class="col-md-7 contactsecond">

                    <?php
                    echo do_shortcode(' [quform id="1" name="contact form"]');
                    ?>

                </div>


            </div>
        </div>


    </main>


    <?php get_sidebar('content-bottom'); ?>
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>