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


    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <div class="row">
        <h1 class="font-weight-light mt-4 mb-1"><?= $h1 ?></h1>
      </div>
      <img src="vendor/images/bg-tool.svg" alt="Ferramentas Online" title="Ferramentas Online" width="300" class="img-fluid mx-auto d-block mb-5">
      <div class="row mb-5">
        <h2>Ferramentas Online</h2>
        <p>Confira abaixo algumas ferramentas desenvolvidas para facilitar a vida de programadores e marketeiros. Aceito sugestões de ideias xD <a href="http://www.ramongomes.com.br/contato" title="Contato" target="_blank" class="simple-link-custom-dark text-decoration-none">Contato</a>. Em breve terão mais!!!</p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card card-custom mb-4">
            <div>
              <img class="px-5 py-3 mx-auto d-block" src="<?= $url ?>vendor/images/gerador-meta-tags.png" alt="Gerador de Meta tags" title="Gerador de Meta tags">
            </div>
            <div class="card-body">
              <h3 class="card-title text-center">Gerador de Meta Tags</h3>
              <a class="btn btn-primary btn-custom w-100" href="<?= $url ?>gerador-meta-tags" title="Gerador de Meta Tags">Veja mais</a>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-6">
            <div class="card card-custom mb-4">
              <div>
                <img class="px-5 py-3 mx-auto d-block" src="vendor/images/gerador-meta-tags.png" alt="Card image cap">
              </div>
              <div class="card-body">
                <h3 class="card-title text-center">Gerador de Meta Tags</h3>
                <a class="btn btn-primary btn-custom w-100" href="javascript:;" title="Em breve novas ferramentas">Em breve</a>
              </div>
            </div>
          </div>           -->
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

    <? include('inc/coluna-lateral.php'); ?>



  </div>
  <!-- /.container -->

  <? include('inc/footer.php') ?>

</body>

</html>