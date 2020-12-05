<?
$h1 = 'WHOIS';
$title =  'WHOIS - Consultar domínio, dados e mais | Ferramentas do Rah';
$desc = $h1 . ' - ' . 'Consulte aqui as informações de um domínio .com.br que já está no ar e fique por dentro de diversos dados sobre o domínio desejado, tais como: quem é...';
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
                <p>Consulte aqui as informações de um domínio .com.br que já está no ar e fique por dentro de diversos dados sobre o domínio desejado, tais como: quem é o titular, qual o servidor está hospedado, quando ele foi registrado, quando ele irá expirar e muito mais.</p>
                <p>Os dados aqui retornados são obtidos diretamente do <a href="https://registro.br/" title="RegistroBr" target="_blank" class="simple-link-custom-dark text-decoration-none font-weight-bold">RegistroBr</a>.</p>
                <!-- </div> -->
                <!-- <div class="row"> -->
                <form id="formWhois">
                    <hr class="border border-secondary">
                    <div class="form-group">
                        <label for="urlDomain" class="lead font-weight-bold">Nome do Domínio (URL/URI)</label>
                        <input type="text" class="form-control border border-info mt-1" id="urlDomain" name="urlDomain" placeholder="Insira sua URL .com.br aqui, ex: http://www.ramongomes.com.br/">
                        <div class="form-row mt-3">
                            <div class="col-md-12">
                                <input type="submit" value="Exibir dados da URL" class="btn btn-custom w-100"> <br>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <!-- <textarea id="dataUrl" name="dataUrl" class="form-control" rows="10" readonly></textarea> -->
                                <table class="table table-sm table-hover table-hover-custom" id="dataUrl">
                                    <div class="d-flex justify-content-center">
                                        <div class="spinner-border text-custom mt-3 d-none" role="status">
                                            <span class="sr-only">Carregando...</span>
                                        </div>

                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr class="border border-secondary">
                </form>
                <!-- </div> -->
                <div class="mb-3">
                    <h2>O que é um domínio?</h2>
                    <p>É um nome exclusivo, ou endereço que serve para localizar e identificar seu negócio na Internet, o mesmo aparece após o www em sites, ou após o @ nos e-mails.</p>
                    <h2>Como faço para registrar um domínio?</h2>
                    <p>Para registrar um domínio, acesse o <a href="https://registro.br/" title="RegistroBr" target="_blank" class="simple-link-custom-dark text-decoration-none font-weight-bold">RegistroBr</a> e verifique a disponibilidade do mesmo para uso. Se o mesmo estiver disponível, basta criar uma conta no RegistroBr e pagar pelo domínio.</p>
                    <h2>Deseja saber mais?</h2>
                    <p>Acesse o <a href="https://registro.br/ajuda/registro-de-novos-dominios/" title="RegistroBr - Canal de ajuda" target="_blank" class="simple-link-custom-dark text-decoration-none font-weight-bold">canal de ajuda do RegistroBr</a> e tire todas as dúvidas que possa ter sobre seu domínio, reservas, provedores de serviço e muito mais.</p>
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
    <script src="<?= $url ?>vendor/tools/whois/whois.js"></script>

</body>

</html>