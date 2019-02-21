<html>
    <style>
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        include_once $path.'/Css/HomeCss.css';
    ?>
    </style>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <div>
            <?php include 'header.php'; ?>
        </div>
    </head>
    <body>
        <div>
            <?php include 'body.php'; ?>
        </div>
        <div id="mobileBody">
            <?php include 'mobileBody.php'; ?>
        </div>
    </body>
    <footer>
        <div id="footer">
            <?php include 'footer.php'; ?>
        </div>
    </footer>
</html>
