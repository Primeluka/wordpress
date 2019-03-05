<?php
get_header();
?>

    <section class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/slider_4.jpg" class="d-block w-100" alt="img_1">
                    </div>
                    <div class="carousel-item">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/slider_5.jpg" class="d-block w-100" alt="img_2">
                    </div>
                    <div class="carousel-item">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/slider_6.jpg" class="d-block w-100" alt="img_3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    </section>
    <!--
    <div class="row">
        <div class="container">
            <div class="col-md">
    
                <?php /*
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
            
                        get_template_part( 'content', get_post_format() );
        
                    endwhile; endif; */
                ?>

            </div>
        </div>
    </div>
    </*?php get_template_part( 'content', 'single' ); */?>
    -->

    <section class="offer py-5">
        <h2 class="text-center mb-3">Oferta</h2>
        <div class="container">
            <div class="text-secondary">
                <div class="row">
                    <div class="col-md">
                        <h4 class="text-uppercase text-center font-weight-light pb-2">Projektowanie</h4>
                        <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex corporis ipsum nobis suscipit enim, explicabo quibusdam, cum perspiciatis eius ullam recusandae praesentium est. Sit iure ipsam aliquid, iusto quisquam modi quis quidem quos ex beatae recusandae nulla fugiat esse cum?</p>
                    </div>
                    <div class="col-md">
                        <h4 class="text-uppercase text-center font-weight-light pb-2">Kompleksowa realizacja</h4>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At laborum quos minus temporibus ullam! Doloribus corrupti, consequatur explicabo officia voluptates magnam similique delectus vero animi excepturi amet, obcaecati, at magni?</p>
                    </div>
                    <div class="col-md">
                        <h4 class="text-uppercase text-center font-weight-light pb-2">Wsparcie i doradztwo w planowaniu inwestycji</h4>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis inventore quo cumque nisi enim mollitia!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="specializations text-white-50 pb-5">
        <div class="pb-4 pt-5">
            <h2 class="text-center text-uppercase text-white">Specjalizacje</h2>
            <h5 class="text-center text-uppercase">Jesteśmy dumni z naszych realizacji</h5>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div>
                        <img class="mb-3 img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/images/specjalizacja_1.jpg" alt="img_1">
                        <h4>Budownictwo przemysłowe</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis veniam quibusdam esse voluptate?</p>
                    </div>
                </div>
                <div class="col-md">
                    <div>
                        <img class="mb-3 img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/images/specjalizacja_2.jpg" alt="img_1">
                        <h4>Budownictwo komercyjne</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nesciunt accusantium sunt!</p>
                    </div>
                </div>
                <div class="col-md">
                    <div>
                        <img class="mb-3 img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/images/specjalizacja_3.jpg" alt="img_1">
                        <h4>Budownictwo infrastrukturalne</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint laudantium maxime distinctio eaque! Placeat, cumque.</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-warning text-dark">Zobacz portfolio</button>
            </div>
        </div>
    </section>


    <section class="aboutme pb-5">
        <div class="pb-4 pt-5">
            <h2 class="text-center text-uppercase">Kim jesteśmy?</h2>
            <h5 class="text-center text-uppercase text-black-50">Kilka słów o nas</h5>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 bg-white m-3 shadow-sm p-4">
                    <h4 class="text-center">O nas</h4>
                    <p class="text-secondary font-italic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore tempora pariatur, tenetur illum eligendi minus neque consequatur consequuntur esse eum molestias saepe natus itaque reiciendis deserunt repellendus debitis nisi cumque? Suscipit error eos quam incidunt? Debitis temporibus eveniet rem sed. Tempora inventore, incidunt ipsum ut consectetur tenetur iste dolorum minima fugit dolorem, blanditiis ipsam corporis?</p>
                </div>
                <div class="col-md-5 bg-white m-3 shadow-sm p-4">
                    <h4 class="text-center">Lokalizacja</h4>
                    <p class="text-secondary font-italic">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis architecto doloremque, dolor tempore amet perspiciatis sapiente expedita ipsam. Cumque, at. Maiores magnam nihil unde, deleniti animi dolorum ipsa minima eius. Consequuntur, fuga necessitatibus optio fugit similique nulla.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact py-5">
        <div class="container">
            <div class="text-center">
                <div class="text-uppercase mb-3">
                    <h2>Budujemy dla Ciebie</h2>
                    <h5>Skontaktuj się z naszymi specjalistami</h5>
                </div>
                <button class="btn btn-warning text-dark">Kontakt</button>
            </div>
        </div>
    </section>

<?php
get_footer();
?>