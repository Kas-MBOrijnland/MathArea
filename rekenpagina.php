<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="language" content="NL">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Kas Kozakiewicz">
    <meta name="keywords" content=""> 
<title>HOMEPAGE</title>
	<!-- bootstrap css koppelen -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!-- stylesheet koppelen -->
	<link rel="stylesheet" type="text/css" href="css/rekenpagina.css">
	</head>
<body  class="container mt-5">
	
	<!-- bootstrap bestanden koppelen -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	
	<!-- jquery bestanden koppelen -->
	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
	<!-- my JS file-->
	<script src="lib/maths.js"></script>

	<header class="row w-100 h-100 align-items-center">
		<article class="col-md-2 pt-2 logo"><img class="img-fluid" src="images/Mathmate_logo.svg" alt="Logo MathArea"></article>
		<nav class="nav col-md-10 d-flex justify-content-center navigatie_boven">
			<a class="nav-link" href="index.html">Homepage</a>
			<a class="nav-link" href="rekenpagina.php">Reken Pagina</a>
			<a class="nav-link" href="#">Reeks Pagina</a>
			<a class="nav-link" href="#">Moeilijke Berekeningen</a>
			<a class="nav-link" href="Presentatiepagina.php">Presentatie</a>
			<a class="nav-link" href="#">Dobbelsteen Pagina</a>
			<a class="nav-link" href="#">Spel Pagina</a>
		</nav>
	</header>

        <div class="row form-group">
            <div class="col-sm-12">
                <select class="form-control" id="opKeuze" onchange="opzetKeuze()">
                    <option value="tafel">Tafel van ...</option>
                    <option value="macht">Machtreeks van ...</option>
                    <option value="breuk">Breukenreeks 1/...</option>
                    <option value="kwadraat">Kwadratenreeks van ...</option>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6">
                <input type="number" class="form-control" placeholder="invoer" id="txt_Ond3_In" />
            </div>
            <div class="col-sm-6">
                <input type="number" class="form-control" placeholder="tot" id="txt_Ond3_Tot" />
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6">
                <button class="btn btn-danger form-control" onclick="clear()">Wissen</button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-dark form-control" onclick="Bereken()">Bereken</button>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-12">
                <div id="dResultaat" class="jumbotron"></div>
            </div>
        </div>
		
</body>
</html>