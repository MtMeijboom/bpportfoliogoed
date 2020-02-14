<!DOCTYPE html>
<html>
<head>
    <title>portfolio</title>
    <link rel="stylesheet" href="portfolio1.3.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="homepageportfolio.php"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="form.php"><i class="fas fa-plus"></i>Toevoegen</a>
    <a href="contactgegevens.php"><i class="fas fa-address-book"></i>Over mij</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
<h1>Welkom op de portfolio-website van Matthijs Meijboom</h1>
<h2><strong>Op deze site kunt u onder meer mijn curriculem vitae zien</strong></h2>
<br><br><br><br>
<img src="ikzelf3.0.jpg" class="w3-circle" alt="HTML5 Icon">

</body>
</html>
