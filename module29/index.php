<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module29.less', 'css/module29.css');
        ?>
        <link href="css/module29.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="module29">
            <div class="container">
                <div class="row">                 
                    <p>Since 1892</p>
                </div>
            </div>
        </div>
    </body>
</html>