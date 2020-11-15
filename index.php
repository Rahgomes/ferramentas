<?
$h1 = 'Home';
$title =  'Home - Ferramentas Web para MKT, DEV e mais | Ferramentas do Rah';
$desc = $h1 . ' - ' . 'Este site foi construído para trazer o melhor conteúdo em ferramentas de produtividade, para desenvolvedores, além de conhecimentos tanto de';
$key = '';
include('inc/head.php');
?>
</head>
<body>
  <? include('inc/header.php'); ?>
  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="<?=$url?>vendor/images/ferramentas-rah.svg" alt="<?= $nomeSite ?>" title="<?= $nomeSite ?>">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light"><?= $nomeSite ?></h1>
        <p>Este site foi construído para trazer o melhor conteúdo em ferramentas de produtividade, para desenvolvedores, além de conhecimentos tanto de marketing digital, quanto de programação através do Blog.</p>
        <a class="btn btn-primary btn-custom" href="<?= $url ?>ferramentas" title="Ferramentas">Veja mais</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-custom my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-custom m-0">O intuito aqui é ajudar a comunidade com o melhor conteúdo possível, seja através de novidades da tecnologia, ferramentas para aumento na produtividade e muito mais.</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row mb-5">
      <div class="col-md-12">
        <h2>Ferramentas em destaque</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-5">
        <div class="card card-custom h-100">
          <img class="card-img-top px-4 py-3" src="<?=$url?>vendor/images/card.svg" alt="Gerador de Meta Tags" title="Gerador de Meta Tags">
          <div class="card-body">
            <h3 class="card-title">Gerador de Meta Tags</h3>
            <p class="card-text">Ferramenta para gerar Meta Tags para seu site de forma rápida e interativa em poucos passos.</p>
          </div>
          <div class="card-footer card-footer-custom">
            <a href="<?= $url ?>gerador-meta-tags" class="btn btn-primary btn-custom btn-sm w-100" title="Gerador de Meta Tags">Veja mais</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <!-- <div class="col-md-4 mb-5">
        <div class="card card-custom h-100">
          <img class="card-img-top px-5 py-3" src="vendor/images/card.svg" alt="">
          <div class="card-body">
            <h3 class="card-title">Ferramenta Online 2</h3>
            <p class="card-text">Em breve...</p>
          </div>
          <div class="card-footer card-footer-custom">
            <a href="javascript:;" class="btn btn-primary btn-custom btn-sm w-100">Em breve</a>
          </div>
        </div>
      </div> -->
      <!-- /.col-md-4 -->
      <!-- <div class="col-md-4 mb-5">
        <div class="card card-custom h-100">
          <img class="card-img-top px-5 py-3" src="vendor/images/card.svg" alt="">
          <div class="card-body">
            <h3 class="card-title">Ferramenta Online 3</h3>
            <p class="card-text">Em breve...</p>
          </div>
          <div class="card-footer card-footer-custom">
            <a href="javascript:;" class="btn btn-primary btn-custom btn-sm w-100">Em breve</a>
          </div>
        </div>
      </div> -->
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <? include('inc/footer.php'); ?>

</body>

</html>