<!DOCTYPE html>
<html lang="pt-br">

<head>
    <? include('inc/geral.php'); ?>

    <title><?= $title . ' ' . $nomeSite ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= ucfirst($desc) ?>">
    <meta name="author" content="<?= $author ?>">
    <meta name="robots" content="index,follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <link rel="canonical" href="<?= $url . $urlPagina ?>">
    <meta property="og:region" content="Brasil">
    <meta property="og:title" content="<?= $title . " - " . $nomeSite ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= $url . $urlPagina ?>">
    <meta property="og:description" content="<?= $desc ?>">
    <meta property="og:site_name" content="<?= $nomeSite ?>">

    <link href="<?= $url ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $url ?>css/style.css" rel="stylesheet">
    <link href="<?= $url ?>css/botao-topo.css" rel="stylesheet">

    <?php
    $desc = strip_tags($desc);
    if (mb_strlen($desc, "UTF-8") > 160) {
        $desc = mb_substr($desc, 0, 159);
        $finalSpace = strrpos($desc, " ");
        $desc = substr($desc, 0, $finalSpace);
        $desc .= ".";
    } else if (mb_strlen($desc, "UTF-8") < 140 && mb_strlen($desc, "UTF-8") > 130) {
        $desc .= "... Saiba mais.";
    }
    ?>

    <link rel="shortcut icon" href="<?= $url ?>vendor/images/favicon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700&display=swap" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9E2G48CB6L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9E2G48CB6L');
    </script>