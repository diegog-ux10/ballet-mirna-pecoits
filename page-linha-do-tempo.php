<?php get_header(); ?>
<?php echo get_template_part( 'template-parts/part', 'page-header') ?>
<section class="main-container columns">
    <div class="secondary-container columns">
        <h1 class="title"><?php the_title() ?></h1>
        <p class="text margin-bottom-one">Navegue pela nossa Linha do Tempo, em cada álbum, uma bela história com personagens inesquecíveis.
        Avance ou volte os anos utilizando as setas.</p>
        <div class="years-container">
        
        <ul class="year-list">
            <li class="year-book">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/album-fondo.png'; ?>" alt="">
            </li>

            <li class="year-book">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/album-fondo.png'; ?>" alt="">
            </li>

            <li class="year-book">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/album-fondo.png'; ?>" alt="">
            </li>

            <li class="year-book">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/album-fondo.png'; ?>" alt="">
            </li>

            <li class="year-book">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/album-fondo.png'; ?>" alt="">
            </li>

            <li class="year-book">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/album-fondo.png'; ?>" alt="">
            </li>

            <li class="year-book">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/album-fondo.png'; ?>" alt="">
            </li>

            <li class="year-book">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/album-fondo.png'; ?>" alt="">
            </li>

            <li class="year-book">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/album-fondo.png'; ?>" alt="">
            </li>

        </ul>
        <img src="<?php echo get_theme_file_uri() . '/assets/img/bookshelf.png'; ?>" alt="shelf" class="shelf">
        <img src="<?php echo get_theme_file_uri() . '/assets/img/prev.png'; ?>" alt="prev icon" class="prev-icon">
        <img src="<?php echo get_theme_file_uri() . '/assets/img/next.png'; ?>" alt="next icon" class="next-icon">
    </div>
    </div>
    
</section>


<?php get_footer(); ?>