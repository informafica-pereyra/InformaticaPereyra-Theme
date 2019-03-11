<?php get_header(); ?>
<!-- Title -->
    <div class="container-fluid py-5 text-center text-justify text-white bg-personalized">
        <h1 class="text-white">Resultados de busqueda</h1>
    </div>
<!-- end title -->
<!-- Content -->
    <div class="container-fluid mx-auto">
        <div  class="text-center mx-auto">
            <h6>Escribí lo que estas bucando</h6>
            <?php get_search_form(); ?>
        </div>
    </div>
    <div class="py-5">
        <?php if ( ! have_posts() ) {?>
            <div class="p-5 col-11 col-md-8 mx-auto">
            <h6>No se encontro lo que buscás</h6>
            <p>Escribilo de otra manera</p>
            <?php get_search_form(); ?>
            </div>
        <?php } else { ?>
            <div class="card-columns-2 p-2">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()) ?> 
                <?php endwhile; endif; ?>  
            </div> 
        <?php }?> 
    </div>
<!-- end content -->
<?php get_footer(); ?>