<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video id="background_video" playsinline autoplay muted loop> 
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/medias/studio_koukaki_video.mp4'; ?> " type="video/mp4">
            </video>
            <div id="logo" class="waving">
                <img  src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                </div>
            </section>
        <section id="#story" class="story" data-aos="fade-right" data-aos-offset= "500" data-aos-duration = "400" data-aos-anchor-placement="top-bottom">

            <h2> <span data-aos="fade-down" data-aos-offset= "300" data-aos-delay="1000"> L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <?php get_template_part('/template-parts/characters'); ?>

            

            <article id="place">
                <div>
                    <h3><span data-aos="fade-down"> Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <div class="nuages">
                        <img class="nuage-grand" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?> " alt="Gros nuage">
                        <img class="nuage-petit" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?> " alt="Petit nuage">
                    </div>
                </div>

            </article>
        </section>

        <section id="studio" data-aos="fade-left" data-aos-offset= "500" data-aos-duration = "400">
            <h2><span data-aos="fade-down" data-aos-delay="1500">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

    </main><!-- #main -->
    <script>
        AOS.init();
        skrollr.init({
                render: function(data) {
                    document.querySelector('.scrollpos').innerHTML = data.curTop;
                }
            });
    </script>

<?php
get_footer();
