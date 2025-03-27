<?php

$base_url = '/algoritmo-one';

include $_SERVER['DOCUMENT_ROOT'] . $base_url . '/includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?> /assets/css/imc.css">

<div id="imc-body">
    <main id="imc-container">
        <section id="imc-calculadora">
            <div id="imc-content">
                <h1 id="imc-titulo">
                    Calculadora - IMC
                </h1>
                <div class="imc-input-box">
                    <label for="peso">Peso(Kg)</label>
                    <div class="imc-input-campo">
                        <input id="peso" placeholder="Ex: 75" type="number">
                    </div>
                </div>
                <div class="imc-input-box">
                    <label for="altura">Altura(cm)</label>
                    <div class="imc-input-campo">
                        <input id="altura" placeholder="Ex: 187" type="number">
                    </div>
                </div>
                <div class="imc-botoes">
                    <button id="calcular" class="imc-btn">Calcular</button>
                    <button id="limpar" class="imc-btn">Limpar</button>
                </div>
            </div>

            <div id="imc-info" class="hidden">
                <span id="valorIMC"></span>
                <span id="descricao"></span>
            </div>
        </section>
    </main>
</div>

<script src="<?php echo $base_url; ?> /assets/js/imc.js"></script>

<?php include $_SERVER['DOCUMENT_ROOT'] . $base_url .  '/includes/footer.php'; ?>