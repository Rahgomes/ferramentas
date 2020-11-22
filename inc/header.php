<header>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-header-custom">
    <div class="container">
      <a class="navbar-brand" href="<?= $url ?>">
        <img src="vendor/images/logo.png" alt="Logo Ferramentas do Rah" title="Logo Ferramentas do Rah" class="size-logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-custom" title="Home" href="<?= $url ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" title="Ferramentas" href="<?= $url ?>ferramentas" id="dropDownProdutos" aria-haspopup="true" aria-expanded="false">Ferramentas</a>
            <div class="dropdown-menu dropdown-menu-custom dropdown-menu-right" aria-labelledby="dropDownProdutos">
              <a class="dropdown-item" href="<?= $url ?>gerador-meta-tags" title="Gerador de Meta Tags">Gerador de Meta Tags</a>
              <a class="dropdown-item" href="<?= $url ?>limpador-tags-html" title="Limpador de Tags HTML">Limpador de Tags HTML</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.ramongomes.com.br/ferramentasfrontend/" title="Ferramentas Front-end" target="_blank">Ferramentas Front-end</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://blog.ramongomes.com.br/" title="Blog do Rah" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.ramongomes.com.br/" title="Portfolio" target="_blank">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.ramongomes.com.br/contato" title="Contato" target="_blank">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>