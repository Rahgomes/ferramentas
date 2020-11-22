<?
$h1 = 'Limpador de Tags HTML';
$title =  'Limpador de Tags HTML Atualizado | Ferramentas do Rah';
$desc = $h1 . ' - ' . 'Basicamente insira o código HTML no primeiro campo de texto logo abaixo e veja o resultado simultaneamente no segundo campo de texto';
$key = '';
include('inc/head.php');
?>
</head>

<body>
    <? include('inc/header.php'); ?>
    <?= $breadnv2 ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- <div class="row"> -->
                <h1 class="font-weight-light my-4"><?= $h1 ?></h1>
                <p>Extraia o conteúdo de texto que estão <span class="font-weight-bold">entre as tags HTML</span> utilizando nosso Limpador de tags HTML.</p>
                <p>Basicamente insira o código HTML no primeiro campo de texto logo abaixo e veja o resultado simultaneamente no segundo campo de texto. Poderá selecionar o texto desejado e copiá-lo manualmente, ou utilizando o botão de "Copiar".</p>
                <p>Embora o foco aqui seja para remover as tags HTML, há também a possibilidade de remover tags XML, JS e muito mais!</p>
                <!-- </div> -->
                <!-- <div class="row"> -->
                <form id="formRemoveTags">
                    
                    <hr class="border border-secondary">
                    <div class="form-group">
                        <label for="codeArea" class="lead font-weight-bold">Código HTML</label>
                        <textarea class="form-control border border-info mt-1" id="codeArea" name="codeArea" placeholder="Insira seu código HTML aqui" rows="10" cols="50"></textarea>
                        <!-- <small class="form-text text-dark">Quantidade de caracteres da Meta Tag Title:</small> -->
                        <!-- <div class="form-row mt-3">
                            <div class="col-md-12">
                                <input type="submit" value="Remover Tags" class="btn btn-custom d-block w-100">
                            </div>
                        </div> -->

                        <label for="textArea" class="lead font-weight-bold mt-3">Exibição final do texto</label>
                        <div class="form-row">
                            <div class="col-md-10">
                                <textarea id="textArea" name="textArea" class="form-control" rows="10" readonly></textarea>
                            </div>
                            <div class="col-md-2">
                                <button type="button" data-toggle="tooltip" data-placement="top" title="Copiar para a área de transferência" id="copyClipboard" class="btn btn-custom w-100 h-100">Copiar</button>
                            </div>
                        </div>
                    </div>

                </form>
                <!-- </div> -->
                <div class="mb-3">
                    <!-- <h2>Qual a importância das Meta tags para o SEO</h2> -->
                    <!-- <p>Abordamos mais da importância das Meta tags em nosso artigo: <a href="http://blog.ramongomes.com.br/meta-tags/" target="_blank" title="O que são Meta Tags" class="simple-link-custom-dark text-decoration-none font-weight-bold">O que são Meta Tags</a>, falamos também sobre as principais tags para utilizar em seu site, além de algumas tags alternativas, que dependendo do projeto pode sim ser essencial sua utilização.</p> -->
                </div>

            </div>

            <? include('inc/coluna-lateral.php'); ?>

        </div>
    </div>
    <!-- /.container -->

    <? include('inc/footer.php') ?>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script src="vendor/tools/limpador-tags-html/limpador-tags-html.js"></script>

</body>

</html>