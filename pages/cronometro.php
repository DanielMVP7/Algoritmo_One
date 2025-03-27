<?php

$base_url = '/algoritmo-one';

include $_SERVER['DOCUMENT_ROOT'] . $base_url . '/includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url;?>/assets/css/cronometro.css">

<section id="cronometro-body">
    <div id="cronometro-container">
        <h1 id="cronometro-titulo">Cronômetro.js</h1>
        <div class="timer">
            <div class="time" id="minutes">00</div>
            <div class="separator">:</div>
            <div class="time" id="seconds">00</div>
            <div class="separator">:</div>
            <div class="time" id="milliseconds">000</div>
        </div>
        <div class="buttons">
            <button class="btn" id="startBtn">Iniciar</button>
            <button class="btn" id="pauseBtn">Pausar</button>
            <button class="btn" id="resumeBtn">Continuar</button>
            <button class="btn" id="resetBtn">Resetar</button>
        </div>
    </div>
    
</section>

<script src="<?php echo $base_url;?>/assets/js/cronometro.js"></script>

<?php include $_SERVER['DOCUMENT_ROOT'] . $base_url .  '/includes/footer.php'; ?>