<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module32.less', 'css/module32.css');
        ?>
        <link href="css/module32.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="module32">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="divider-inner">
                            <div class="divider-line line-left"></div>
                            <div class="icon-wrapper">
                                <i class="fa fa-picture-o"></i>
                            </div>
                            <div class="divider-line line-right"></div>
                        </div>                           
                        <p>Cidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ullamcorper suscipit lobortis nisl ut aliquip ex ea co nisl ut aliquip ex ea co mmodo consequat.</p>
                        <a href="">CONTACT US ></a>    
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </body>
</html>