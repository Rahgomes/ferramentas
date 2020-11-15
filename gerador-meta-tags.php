<?
$h1 = 'Gerador de Meta Tags';
$title =  'Tenha um ótimo SEO com o Gerador de Meta Tags | Ferramentas do Rah';
$desc = $h1 . ' - ' . 'é uma ferramenta que cria snippets(códigos) HTML para as páginas de seu site. As meta tags são linhas de código que são programadas para';
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
                    <p>Nosso gerador de meta tags é uma ferramenta que cria snippets(códigos) HTML para as páginas de seu site. Bem resumidamente as meta tags são linhas de código que são programadas para enviar informações específicas para que os buscadores interpretem o que uma página contém.</p>

                    <p>Sabemos que nem todo mundo possui conhecimento sobre programação, logo nosso gerador de meta tags fornece gratuitamente e de forma automática esse código para que não dependa tanto de um programador na hora de criar e manter o seu site.</p>

                    <p>Basta preencher os campos abaixo para que nossa ferramenta gere a sua meta tag. Em cada meta tag poderá ver o resultado final de seu código, ou poderá preencher todos os campos e lá no final da página exibir todos os resultados.</p>
                <!-- </div> -->
                <!-- <div class="row"> -->
                    <form id="formMetaTags">
                        <hr class="border border-secondary">
                        <div class="form-group">
                            <label for="metaTitle" class="lead font-weight-bold">Título do site</label>
                            <small class="obsMetaTag form-text text-dark">Para que seu titulo apareça completamente nos buscadores recomendamos utilizar até 60 caracteres</small>
                            <textarea class="form-control border border-info mt-1" id="metaTitle" name="metaTitle" placeholder="Preencha aqui o que deseja para seu título (title)" rows="2" cols="50"></textarea>
                            <small class="form-text text-dark">Quantidade de caracteres da Meta Tag Title: <span id="metaTitleCount">0</span></small>
                            <label for="contentMetaTitle" class="lead font-weight-bold mt-3">Exibição final da Tag</label>
                            <div class="form-row">
                                <div class="col-md-10">
                                    <textarea id="contentMetaTitle" name="contentMetaTitle" class="form-control" rows="2" readonly></textarea>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Copiar para a área de transferência" id="copyClipboard" class="btn btn-custom w-100 h-100">Copiar</button>
                                </div>
                            </div>
                        </div>

                        <hr class="border border-secondary">

                        <div class="form-group">
                            <label for="metaDescription" class="lead font-weight-bold">Descrição do site</label>
                            <small class="obsMetaTag form-text text-dark">Deixe uma descrição para que as pessoas possam visitá-lo. Sugestão de 140 a 160 caracteres</small>
                            <textarea class="form-control border border-info mt-1" id="metaDescription" name="metaDescription" placeholder="Preencha aqui o que deseja para sua descrição (description)" rows="4" cols="50"></textarea>
                            <small class="form-text text-dark">Quantidade de caracteres da Meta Tag Description: <span id="metaDescriptionCount">0</span></small>
                            <label for="contentMetaDescription" class="lead font-weight-bold mt-3">Exibição final da Tag</label>
                            <div class="form-row">
                                <div class="col-md-10">
                                    <textarea id="contentMetaDescription" name="contentMetaDescription" class="form-control" rows="4" readonly></textarea>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Copiar para a área de transferência" id="copyClipboard2" class="btn btn-custom w-100 h-100">Copiar</button>
                                </div>
                            </div>
                        </div>

                        <hr class="border border-secondary">

                        <div class="form-group">
                            <label for="metaKeywords" class="lead font-weight-bold">Meta Tag Keywords</label>
                            <small class="obsMetaTag form-text text-dark">Para adicionar palavras-chave compostas dê 2 espaços</small>
                            <textarea class="form-control border border-info mt-1" id="metaKeywords" name="metaKeywords" placeholder="Preencha aqui qual, ou quais palavra(s)-chave(s) (keywords) deseja" rows="2" cols="50"></textarea>
                            <small class="form-text text-dark">Quantidade de Keywords: <span id="metaKeywordsCount">0</span></small>
                            <label for="contentMetaKeywords" class="lead font-weight-bold mt-3">Exibição final da Tag</label>
                            <div class="form-row">
                                <div class="col-md-10">
                                    <textarea id="contentMetaKeywords" name="contentMetaKeywords" class="form-control" rows="2" readonly></textarea>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Copiar para a área de transferência" id="copyClipboard3" class="btn btn-custom w-100 h-100">Copiar</button>
                                </div>
                            </div>
                        </div>

                        <hr class="border border-secondary">

                        <div class="form-group">
                            <label for="metaAuthor" class="lead font-weight-bold">Meta Tag Author</label>
                            <!-- <small class="obsMetaTag form-text text-dark">Deixe uma descrição para que as pessoas possam visitá-lo. Sugestão de 140 a 160 caracteres</small> -->
                            <textarea class="form-control border border-info mt-1" id="metaAuthor" name="metaAuthor" placeholder="Preencha aqui qual é o autor (author)" rows="1" cols="50"></textarea>
                            <label for="contentMetaAuthor" class="lead font-weight-bold mt-3">Exibição final da Tag</label>
                            <div class="form-row">
                                <div class="col-md-10">
                                    <textarea id="contentMetaAuthor" name="contentMetaAuthor" class="form-control" rows="1" readonly></textarea>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Copiar para a área de transferência" id="copyClipboard4" class="btn btn-custom w-100 h-100">Copiar</button>
                                </div>
                            </div>
                        </div>

                        <hr class="border border-secondary">

                        <div class="form-group">
                            <label for="metaRobots" class="lead font-weight-bold">Meta Tag Robots</label>
                            <!-- <small class="obsMetaTag form-text text-dark">Deixe uma descrição para que as pessoas possam visitá-lo. Sugestão de 140 a 160 caracteres</small> -->
                            <select name="metaRobots" id="metaRobots" class="custom-select">
                                <option value="selecionar">Selecione a meta tag Robots</option>
                                <option value="index-follow">Indexar e rastrear todos os links da página</option>
                                <option value="noindex-nofollow">Não indexar nem rastrear todos os links da página</option>
                                <option value="index-nofollow">Indexar a página, mas não rastrear os links da página</option>
                                <option value="noindex-follow">Não indexar a página, mas rastrear todos os links</option>
                            </select>
                            <label for="contentMetaRobots" class="lead font-weight-bold mt-3">Exibição final da Tag</label>
                            <div class="form-row">
                                <div class="col-md-10">
                                    <textarea id="contentMetaRobots" name="contentMetaRobots" class="form-control" rows="1" readonly></textarea>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Copiar para a área de transferência" id="copyClipboard5" class="btn btn-custom w-100 h-100">Copiar</button>
                                </div>
                            </div>
                        </div>

                        <hr class="border border-secondary">

                        <div class="form-group">
                            <label for="metaCharset" class="lead font-weight-bold font-weight-bold">Tipo de Charset</label>
                            <!-- <small class="obsMetaTag form-text text-dark">Deixe uma descrição para que as pessoas possam visitá-lo. Sugestão de 140 a 160 caracteres</small> -->
                            <select name="metaCharset" id="metaCharset" class="custom-select">
                                <option value="selecionar">Selecione o tipo de Charset</option>
                                <option value="UTF-8">UTF-8</option>
                                <option value="ISO-8859-1">ISO-8859-1</option>
                            </select>
                            <label for="contentMetaCharset" class="lead font-weight-bold mt-3">Exibição final da Tag</label>
                            <div class="form-row">
                                <div class="col-md-10">
                                    <textarea id="contentMetaCharset" name="contentMetaCharset" class="form-control" rows="1" readonly></textarea>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Copiar para a área de transferência" id="copyClipboard6" class="btn btn-custom w-100 h-100">Copiar</button>
                                </div>
                            </div>
                        </div>

                        <hr class="border border-secondary">

                        <div class="form-group">
                            <label for="metaLanguage" class="lead font-weight-bold">Meta Tag Language</label>
                            <!-- <small class="obsMetaTag form-text text-dark">Deixe uma descrição para que as pessoas possam visitá-lo. Sugestão de 140 a 160 caracteres</small> -->
                            <select name="metaLanguage" id="metaLanguage" class="custom-select">
                                <option value="selecionar">Selecione a língua desejada</option>
                                <option value="pt-br">Português</option>
                                <option value="en-us">Inglês/Estados Unidos</option>
                                <option value="en-gb">Inglês/Britânico</option>
                                <option value="fr">Francês</option>
                                <option value="es">Espanhol</option>
                                <option value="ja">Japonês</option>
                                <option value="zh-sg">Chinês</option>
                                <option value="ru">Russo</option>
                            </select>
                            <label for="contentMetaLanguage" class="lead font-weight-bold mt-3">Exibição final da Tag</label>
                            <div class="form-row">
                                <div class="col-md-10">
                                    <textarea id="contentMetaLanguage" name="contentMetaLanguage" class="form-control" rows="1" readonly></textarea>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Copiar para a área de transferência" id="copyClipboard7" class="btn btn-custom w-100 h-100">Copiar</button>
                                </div>
                            </div>
                        </div>

                        <hr class="border border-secondary">

                        <div class="form-group">
                            <label for="contentMetaResult" class="lead font-weight-bold">Resultado final com todas as Tags</label>
                            <small class="obsMetaTag form-text text-dark mb-1">Antes de <span class="font-weight-bold">exibir todos os resultados</span> primeiramente preencha cada meta tag que deseja utilizar em seu site</small>
                            <div class="form-row">
                                <div class="col-md-10">
                                    <textarea id="contentMetaResult" name="contentMetaResult" class="form-control" rows="10" readonly></textarea>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Copiar para a área de transferência" id="copyClipboard8" class="btn btn-custom w-100 h-100">Copiar</button>
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Exibir todos os resultados" class="btn btn-custom">

                        <hr class="border border-secondary">
                    </form>
                <!-- </div> -->
                <div class="mb-3">
                    <h2>Qual a importância das Meta tags para o SEO</h2>
                    <p>As meta tags são importantíssimas para seu SEO, pois estabelecem uma comunicação direta entre seu site e os mecanismos de busca, responsáveis por captar seu conteúdo e exibir a quem deseja encontrar o que você está disposto a entregar.</p>

                    <p>Os robôs que fazem este papel de analisar os dados de seu site agradecem se seu arquivo HTML possuir as meta tags que possibilitam que seja indexado seu conteúdo na internet. Ainda assim a utilização das meta tags não são os únicos fatores nos quais fará com que seu site tenha muita relevância e um bom posicionamento na web, sendo que o algoritmo possui mais de 250 fatores para esta indexação.</p>

                    <p>Abordamos mais da importância das Meta tags em nosso artigo: <a href="http://blog.ramongomes.com.br/meta-tags/" target="_blank" title="O que são Meta Tags" class="simple-link-custom-dark text-decoration-none">O que são Meta Tags</a>, falamos também sobre as principais tags para utilizar em seu site, além de algumas tags alternativas, que dependendo do projeto pode sim ser essencial sua utilização.</p>
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
    <script src="vendor/tools/gerador-meta-tags.js"></script>

</body>

</html>