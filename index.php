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
            <h4 class="card-title">Gerador de Meta Tags</h4>
            <p class="card-text">Nosso gerador de meta tags é uma ferramenta que cria snippets(códigos) HTML para as páginas...</p>
          </div>
          <div class="card-footer card-footer-custom">
            <a href="<?= $url ?>gerador-meta-tags" class="btn btn-primary btn-custom btn-sm w-100" title="Gerador de Meta Tags">Veja mais</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card card-custom h-100">
          <img class="card-img-top px-4 py-3" src="<?=$url?>vendor/images/card.svg" alt="Limpador de Tags HTML" title="Limpador de Tags HTML">
          <div class="card-body">
            <h4 class="card-title">Limpador de Tags HTML</h4>
            <p class="card-text">Extraia o conteúdo de texto que estão entre as tags HTML utilizando nosso Limpador de tags HTML...</p>
          </div>
          <div class="card-footer card-footer-custom">
            <a href="<?= $url ?>limpador-tags-html" class="btn btn-primary btn-custom btn-sm w-100" title="Limpador de Tags HTML">Veja mais</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card card-custom h-100">
          <img class="card-img-top px-4 py-3" src="<?=$url?>vendor/images/card.svg" alt="WHOIS" title="WHOIS">
          <div class="card-body">
            <h4 class="card-title">WHOIS</h4>
            <p class="card-text">Consulte aqui as informações de um domínio .com.br que já está no ar e fique por dentro de diversos dados...</p>
          </div>
          <div class="card-footer card-footer-custom">
            <a href="<?= $url ?>whois" class="btn btn-primary btn-custom btn-sm w-100" title="WHOIS">Veja mais</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <? include('inc/footer.php'); ?>

</body>

</html>