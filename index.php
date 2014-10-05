<!doctype html>
<html>
<head>
<title>Synsemic writing cooker</title>

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

</head>
<body>
		
	<div class="pure-g-r">

		<div class="pure-u-6-24"></div>
        <div class="pure-u-1-2">
            <div class="l-box"> <h1>Synsemic writing cooker</h1> </div>
        </div>
        <div class="pure-u-6-24"></div>

		<div class="pure-u-6-24"></div>
        <div class="pure-u-4-24">
            <div class="l-box right"> <p><strong>tema</strong></p> </div>
        </div>
        <div class="pure-u-8-24">
        	<div class="l-box">
            	<p><?php $_GET['type'] = 0; include 'tema.php'; ?></p>
        	</div>
        </div>
        <div class="pure-u-6-24"></div>

        <div class="pure-u-6-24"></div>
        <div class="pure-u-4-24">
            <div class="l-box right"> <p><strong>compito</strong></p> </div>
        </div>
        <div class="pure-u-8-24">
        	<div class="l-box">
            	<p><?php $_GET['type'] = 0; include 'compito.php'; ?></p>
        	</div>
        </div>
        <div class="pure-u-6-24"></div>

        <div class="pure-u-6-24"></div>
        <div class="pure-u-4-24">
            <div class="l-box right"> <p><strong>contesto</strong></p> </div>
        </div>
        <div class="pure-u-8-24">
        	<div class="l-box">
            	<p><?php $_GET['type'] = 0; include 'contesto.php'; ?></p>
        	</div>
        </div>
        <div class="pure-u-6-24"></div>

		<div class="pure-u-6-24"></div>
        <div class="pure-u-4-24">
            <div class="l-box right"> <p><strong>formato</strong></p> </div>
        </div>
        <div class="pure-u-8-24">
        	<div class="l-box">
            	<p><?php $_GET['type'] = 0; include 'formato.php'; ?></p>
        	</div>
        </div>
        <div class="pure-u-6-24"></div>

        <div class="pure-u-6-24"></div>
        <div class="pure-u-4-24">
            <div class="l-box right"> <p><strong>colori</strong></p> </div>
        </div>
        <div class="pure-u-8-24">
        	<div class="l-box">
            	<p><?php $_GET['type'] = 0; include 'colori.php'; ?></p>
        	</div>
        </div>
        <div class="pure-u-6-24"></div>

		<div class="pure-u-6-24"></div>
        <div class="pure-u-4-24">
            <div class="l-box right"> <p><strong>tecnica</strong></p> </div>
        </div>
        <div class="pure-u-8-24">
        	<div class="l-box">
            	<p><?php $_GET['type'] = 0; include 'tecnica.php'; ?></p>
        	</div>
        </div>
        <div class="pure-u-6-24"></div>

        <div class="pure-u-6-24"></div>
        <div class="pure-u-4-24">
            <div class="l-box right"> <p><strong>tempo</strong></p> </div>
        </div>
        <div class="pure-u-8-24">
        	<div class="l-box">
            	<p><?php $_GET['type'] = 0; include 'tempo.php'; ?></p>
        	</div>
        </div>
        <div class="pure-u-6-24"></div>

        <div class="pure-u-6-24"></div>
        <div class="pure-u-4-24">
            <div class="l-box right"> <p><strong>limiti</strong></p> </div>
        </div>
        <div class="pure-u-8-24">
        	<div class="l-box">
            	<p><?php $_GET['type'] = 0; include 'limiti.php'; ?></p>
        	</div>
        </div>
        <div class="pure-u-6-24"></div>

        <div class="pure-u-1">&nbsp;</div>

		<div class="pure-u-6-24"></div>
        <div class="pure-u-1-2">
            <div class="center"> <input class="pure-button pure-button-primary" type="button" value="Go!" onclick="location='index.php'" /> </div>
        </div>
        <div class="pure-u-6-24"></div>

        <div class="pure-u-6-24 footer"></div>
        <div class="pure-u-1-2">
            <div class="center">&copy;Valentina Rachiele</div>
        </div>
        <div class="pure-u-6-24"></div>
    </div>

</body>
</html>