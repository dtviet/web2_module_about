<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module30.less', 'css/module30.css');
        ?>
        <link href="css/module30.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="module30">
            <div class="container">
                <div class="row">
                    <div class="sl1">                
                        <p>G</p>
                        <p1>A</p1> 
                        <p2>L</p2>
                        <p3>L</p3>
                        <p4>E</p4>
                        <p5>R</p5>
                        <p6>Y</p6>                      
                    </div>
                    <div class="hd2">
                        <h2>GALLERY</h2>
                        <p>FEW PHOTOS ABOUT US</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>