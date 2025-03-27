<?php
$base_url = '/algoritmo-one';

include $_SERVER['DOCUMENT_ROOT'] . $base_url . '/includes/header.php';
 ?>

 <link rel="stylesheet" href="<?php echo $base_url;?>/assets/css/calculadora.css">

<section id="calculadora-body">
    <h1>Calculadora</h1>
    <div class="calculadora">
        <input type="text" disabled id="display" placeholder="0">
        <div class="container-botoes">
            <button onclick="clearDisplay()">C</button>
            <button onclick="voltar()">&lt;</button>
            <button onclick="inserirNoDisplay('/')">/</button>
            <button onclick="inserirNoDisplay('*')">*</button>
            <button onclick="inserirNoDisplay('7')">7</button>
            <button onclick="inserirNoDisplay('8')">8</button>
            <button onclick="inserirNoDisplay('9')">9</button>
            <button onclick="inserirNoDisplay('-')">-</button>
            <button onclick="inserirNoDisplay('4')">4</button>
            <button onclick="inserirNoDisplay('5')">5</button>
            <button onclick="inserirNoDisplay('6')">6</button>
            <button onclick="inserirNoDisplay('+')">+</button>
            <button onclick="inserirNoDisplay('1')">1</button>
            <button onclick="inserirNoDisplay('2')">2</button>
            <button onclick="inserirNoDisplay('3')">3</button>
            <button class="btn-zero" onclick="inserirNoDisplay('0')">0</button>
            <button onclick="inserirNoDisplay('.')">.</button>
            <button onclick="resultado()" class="btn-resultado">=</button>
        </div>
    </div>
</section>

<script src="<?php echo $base_url;?>/assets/js/calculadora.js"></script>

<?php include $_SERVER['DOCUMENT_ROOT'] . $base_url .  '/includes/footer.php'; ?>
