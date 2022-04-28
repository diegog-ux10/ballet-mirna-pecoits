<?php get_header(); ?>
<body style="background-image: url('<?php echo get_theme_file_uri() . '/assets/img/1.png' ; ?>')">
    <main class="columns" style="background-image: url('<?php echo get_theme_file_uri() . '/assets/img/girl-training.png' ; ?>')">
        <?php echo get_template_part( 'template-parts/part', 'header') ?>
        <div class="secondary-container">
            <div class="columns main-text">
                <h1>Bem-Vindo!</h1>
                <p class="text">Muito mais do que ensinar dança, o Ballet Mirna Pécoits
                tem como objetivo promover a arte, revelando talentos e
                contribuindo na formação físico-psicológica de crianças e jovenns.</p>

                <p class="text">
                <strong>A Arte como Fisolosofia<br>
                A Escola como Veículo<br>
                Os Alunos como Potencial</strong>
                </p>
            </div>
        </div>
    </main>  

    <footer>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>