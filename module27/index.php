<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module27.less', 'css/module27.css');
        ?>
        <link href="css/module27.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="module27">
            <div class="container">
                <div class="row">
                    <div class="banner">
                        <h1>ABOUT</h1>
                        <p>GET TO KNOW MORE ABOUT US</p>
                        <div class="divider-inner">
                            <div class="divider-line line-left"></div>
                            <div class="icon-wrapper">
                                <span class="icon">
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                            <div class="divider-line line-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>