<?
$h1 = 'Ferramentas';
$title =  'Ferramentas para Marketing e Programação | Ferramentas do Rah';
$desc = $h1 . ' - ' . 'Confira abaixo algumas ferramentas desenvolvidas para facilitar a vida de programadores e marketeiros. Aceito sugestões de ideias xD Contato.';
$key = '';
include('inc/head.php');
?>
</head>

<body>
  <? include('inc/header.php'); ?>
  <?= $breadnv1 ?>
  <!-- Page Content -->
  <div class="container">
    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="<?=$url?>vendor/images/bg-ferramentas.svg" alt="<?= $h1 ?>" title="<?= $h1 ?>">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light"><?= $h1 ?></h1>
        <p>Confira abaixo algumas ferramentas desenvolvidas para facilitar a vida de programadores e marketeiros. Aceito sugestões de ideias xD <a href="http://www.ramongomes.com.br/contato" title="Contato" target="_blank" class="simple-link-custom-dark text-decoration-none font-weight-bold">Contato</a>. Em breve terão mais!!!</p>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <div class="row">
          <div class="col-md-6">
            <div class="card card-custom mb-4">
              <div>
                <img class="px-5 py-3 mx-auto d-block" src="<?= $url ?>vendor/images/seo.png" alt="Gerador de Meta tags" title="Gerador de Meta tags">
              </div>
              <div class="card-body">
                <h4 class="card-title text-center">Gerador de Meta Tags</h4>
                <a class="btn btn-primary btn-custom w-100" href="<?= $url ?>gerador-meta-tags" title="Gerador de Meta Tags">Veja mais</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-custom mb-4">
              <div>
                <img class="px-5 py-3 mx-auto d-block" src="<?= $url ?>vendor/images/desenvolvimento-web.png" alt="Limpador de Tags HTML" title="Limpador de Tags HTML">
              </div>
              <div class="card-body">
                <h4 class="card-title text-center">Limpador de Tags HTML</h4>
                <a class="btn btn-primary btn-custom w-100" href="<?= $url ?>limpador-tags-html" title="Limpador de Tags HTML">Veja mais</a>
              </div>
            </div>
          </div>

        </div>


        <!-- Pagination -->
        <!-- <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul> -->

      </div>

      <!-- <? //include('inc/coluna-lateral.php'); ?> -->

    </div>
    <!-- /.row -->


  </div>
  <!-- /.container -->

  <? include('inc/footer.php') ?>

</body>

</html>