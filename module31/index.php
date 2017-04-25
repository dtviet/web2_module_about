<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module31.less', 'css/module31.css');
        ?>
        <link href="css/module31.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="module31">
            <div class="container">              
                <div class="col-md-3">
                    <a href=""><img src="images/ready-1024x682.jpg" alt=""/></a>
                </div>
                <div class="col-md-3">
                    <a href=""> <img src="images/Stocksy_txpcd1dc0eemKP100_Medium_695556-1024x682.jpg" alt=""/></a>
                </div>
                <div class="col-md-3">
                    <a href=""> <img src="images/Stocksy_txpcd1dc0eemKP100_Medium_1000349-683x1024.jpg" alt=""/></a>
                </div>
                <div class="col-md-3">
                    <a href=""><img src="images/Stocksy_txpcd1dc0eemKP100_Medium_1313602-683x1024.jpg" alt=""/></a>
                </div>                   
            </div>
        </div>
    </body>
</html>