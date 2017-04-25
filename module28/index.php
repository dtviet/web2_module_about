<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module28.less', 'css/module28.css');
        ?>
        <link href="css/module28.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="module28">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="gd1">
                            <h1>HISTORY</h1>
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ullamcorper suscipit lobortis nisl ut aliquip ex ea co nisl ut aliquip.</p>
                            <a href="">Read More »</a>
                        </div>
                    </div>                   
                    <div class="col-md-3">
                        <div class="gd2">                          
                            <div class="n1">
                                <p>Saoreet dolore magnanaliquam erat volutpat 1892.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="images/Stocksy_txpcd1dc0eemKP100_Medium_1204406-683x1024.jpg" alt=""/>
                    </div>
                    <div class="col-md-3">
                        <img src="images/Stocksy_txpcd1dc0eemKP100_Medium_1000349-683x1024.jpg" alt=""/>                       
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>