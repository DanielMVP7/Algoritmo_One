<?php
$base_url = '/algoritmo-one';

include $_SERVER['DOCUMENT_ROOT'] . $base_url . '/includes/header.php';
 ?>

<link rel="stylesheet" href="<?php echo $base_url; ?> /assets/css/home.css">

<main id="home-container">
    <section id="home-content">
        <h1 id="home-title">Projetos</h1>
        <div id="home-projetos">
            <div class="home-card">
                <img src="<?php echo $base_url; ?> /assets/images/imc-capa.png" alt="">
                <h2>Calculadora - IMC</h2>
                <div class="descricao-card">
                    <a href="https://github.com/DanielMVP7/calculadora-IMC.js" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="<?php echo $base_url; ?>/pages/imc.php"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
            <div class="home-card">
                <img src="<?php echo $base_url; ?> /assets/images/cronometro.png" alt="">
                <h2>Cronômetro</h2>
                <div class="descricao-card">
                    <a href="https://github.com/DanielMVP7/cronometro.js" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="<?php echo $base_url; ?>/pages/cronometro.php"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
            <div class="home-card">
                <img src="<?php echo $base_url; ?> /assets/images/calculadora-capa.png" alt="">
                <h2>Calculadora</h2>
                <div class="descricao-card">
                    <a href="https://github.com/DanielMVP7/calculadora-js" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="<?php echo $base_url; ?>/pages/calculadora.php"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
            
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>