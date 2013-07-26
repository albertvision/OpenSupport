<!DOCTYPE html>
<html>
    <head>
        <title>OpenSupport</title>
        <link rel="stylesheet/less" type="text/css" href="<?= SITE_PATH; ?>css/style.less" />

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?= SITE_PATH; ?>js/less-1.4.1.min.js"></script>
    </head>
    <body>
        <div id="container">
            <img src="<?= SITE_PATH ?>images/logo.png" id="logo"/>
            <div id="login-nav"><a href="#">Login</a></div>
            <nav>
                <a href="#">Home</a>  <a href="#">Active tickets</a>  <a href="#">Closed tickets</a>
            </nav>
            <div id="page">
                <!--Content should always be longer than sidebar-->
                <div id="leftbar">