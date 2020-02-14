<!DOCTYPE html>
<html>
<head>
    <title>contactgegevens</title>
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
    <a href="contactgegevens.php"><i class="fas fa-address-book"></i></i>Over mij</a>
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
<h1>Welkom op mijn contactpagina</h1>
<h2><strong>Mijn naam is Matthijs Meijboom<br> Ik ben 16 jaar<br> Ik woon op de Ten Ankerweg 74 te Tholen<br> Mijn postcode is 4691 GX Tholen.<br> U kunt mij bereiken op email(matthijs070403@gmail.com) en op mijn telefoon nummer(06-25448476) </strong></h2>

<script>
    var tabs = $('.tabs');
    var selector = $('.tabs').find('a').length;
    //var selector = $(".tabs").find(".selector");
    var activeItem = tabs.find('.active');
    var activeWidth = activeItem.innerWidth();
    $(".selector").css({
        "left": activeItem.position.left + "px",
        "width": activeWidth + "px"
    });

    $(".tabs").on("click","a",function(e){
        e.preventDefault();
        $('.tabs a').removeClass("active");
        $(this).addClass('active');
        var activeWidth = $(this).innerWidth();
        var itemPos = $(this).position();
        $(".selector").css({
            "left":itemPos.left + "px",
            "width": activeWidth + "px"
        });
    });
</script>

</body>
</html>
