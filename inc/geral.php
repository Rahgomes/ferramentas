<?
$nomeSite = 'Ferramentas do Rah';
// $slogan = '';
// $url = 'http://localhost/ferramentas/';
$url = 'http://www.ferramentas.ramongomes.com.br/';
$author = 'Ramon Gomes';
$prepos = array(' a ',' á ',' à ',' ante ',' até ',' após ',' de ',' desde ',' em ',' entre ',' com ',' para ',' por ',' perante ',' sem ',' sob ',' sobre ',' na ',' no ',' e ',' do ',' da ',' ','(',')','\'','"','.','/',':',' | ', ',, ');

$breadnv1 			= '
<nav aria-label="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <div class="bread-bg">
      <div class="container">
        <ol class="breadcrumb breadcrumb-arrow p-0">
          <li class="breadcrumb-item"><a rel="home" itemprop="url" href="'.$url.'" title="Home" class="text-uppercase pl-3">Home</a></li>
          <li aria-current="page" itemprop="title" class="breadcrumb-item pl-0 active text-uppercase pl-4">'.$h1.'</li>
        </ol>
      </div>
    </div>
  </nav>
';
$breadnv2	= '
<nav aria-label="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <div class="bread-bg">
      <div class="container">
        <ol class="breadcrumb breadcrumb-arrow p-0">
          <li class="breadcrumb-item"><a rel="home" itemprop="url" href="'.$url.'" title="Home" class="text-uppercase pl-3">Home</a></li>
          <li class="breadcrumb-item pl-0"><a href="'.$url.'ferramentas" rel="home" itemprop="url" class="text-uppercase">Ferramentas</a></li>
          <li aria-current="page" itemprop="title" class="breadcrumb-item pl-0 active text-uppercase pl-4">'.$h1.'</li>
        </ol>
      </div>
    </div>
  </nav>
';
?>