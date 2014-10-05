<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Synsemic writing cooker">

    <title>Synsemic writing cooker</title>

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure.css">



<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive.css">
  
<!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/style.css">
    <!--<![endif]-->

</head>
<body>

<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">Synsemic writing cooker</h1>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="https://github.com/valentinarachiele/synsemic-writing-cooker">Github repository</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
			<div class="pure-g">
			   	<div class="pure-u-1-3"> tema </div>
			   	<div class="pure-u-1-3"> <?php $_GET['type'] = 0; include 'tema.php'; ?></div>
                <div class="pure-u-1-3"></div>
			   	<div class="pure-u-1-3"> compito </div>
			   	<div class="pure-u-1-3"> <?php $_GET['type'] = 0; include 'compito.php'; ?></div>
                <div class="pure-u-1-3"></div>
			   	<div class="pure-u-1-3"> contesto </div>
			   	<div class="pure-u-1-3"> <?php $_GET['type'] = 0; include 'contesto.php'; ?></div>
                <div class="pure-u-1-3"></div>
			   	<div class="pure-u-1-3"> formato </div>
			   	<div class="pure-u-1-3"> <?php $_GET['type'] = 0; include 'formato.php'; ?></div>
                <div class="pure-u-1-3"></div>
			   	<div class="pure-u-1-3"> colori </div>
			   	<div class="pure-u-1-3"> <?php $_GET['type'] = 0; include 'colori.php'; ?></div>
                <div class="pure-u-1-3"></div>
			   	<div class="pure-u-1-3"> tempo </div>
			   	<div class="pure-u-1-3"> <?php $_GET['type'] = 0; include 'tempo.php'; ?></div>
                <div class="pure-u-1-3"></div>
			   	<div class="pure-u-1-3"> tecnica </div>
			   	<div class="pure-u-1-3"> <?php $_GET['type'] = 0; include 'tecnica.php'; ?></div>
                <div class="pure-u-1-3"></div>
			   	<div class="pure-u-1-3"> limiti </div>
			   	<div class="pure-u-1-3"> <?php $_GET['type'] = 0; include 'limiti.php'; ?></div>
                <div class="pure-u-1-3"></div>
                <div class="pure-u-1-3"></div>
                <div class="pure-u-1-3">
			   	<input class="pure-button pure-button-primary" type="button" value="Go!" onclick="location='index.php'" /></div>
			</div>
        </div>

            <div class="footer">
                <div class="pure-menu pure-menu-horizontal pure-menu-open">
                    <ul>
                        <li>&copy;2014 Valentina Rachiele</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>