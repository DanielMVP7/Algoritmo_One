<?php 
$base_url = '/algoritmo-one';

include $_SERVER['DOCUMENT_ROOT'] . $base_url . '/includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url;?>/assets/css/notas.css">

<section id="notas-container">
    <div id="notas-content">
        <h1 id="notas-titulo">Calculadora de notas</h1>
        <div class="notas-input-box">
            <label for="media-escola">Qual é a média onde você estuda?</label>
            <div class="notas-input-campo">
                <input id="media-escola" type="number">
            </div>
        </div>
        <div id="notas-bimestre">
            <div class="notas-input-box">
                <label for="primeiro-bim">
                    Nota 1º Bimestre
                </label>
                <div class="notas-input-campo">
                    <input id="primeiro-bim" type="number">
                </div>
            </div>
            <div class="notas-input-box">
                <label for="segundo-bim">
                    Nota 2º Bimestre
                </label>
                <div class="notas-input-campo">
                    <input id="segundo-bim" type="number">
                </div>
            </div>
             <div class="notas-input-box">
                <label for="terceiro-bim">Nota 3º Bimestre</label>
                <div class="notas-input-campo">
                    <input id="terceiro-bim" type="number">
                </div>
            </div>
            <div class="notas-input-box">
                <label for="quarto-bim">
                    Nota 4º Bimestre
                </label>
                <div class="notas-input-campo">
                    <input id="quarto-bim" type="number">
                </div>
            </div>
        </div>

        <div id="notas-botoes">
            <button id="calcular">Calcular</button>
            <button id="limpar">Limpar</button>
        </div>
        <h2 id="sub-titulo">Resultado Final</h2>
        <div id="notas-resultado">
            <span id="sua-media"></span>
            <span id="msg"></span>
        </div>
    </div>
</section>

<script src="<?php echo $base_url; ?>/assets/js/notas.js"></script>

<?php include $_SERVER['DOCUMENT_ROOT'] . $base_url . '/includes/footer.php'; ?>