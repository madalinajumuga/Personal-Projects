<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summer School: Noutati</title>
    <style>
      .Site_Page{
        height: 100%;
        width: auto;
        scroll-behavior: smooth;
        overflow: scroll;
        overflow-x: hidden;
    }
    body{
        margin: 0;
        padding: 0;
        min-height: 100%;
        font-family: montserrat;
        background: radial-gradient(circle, rgba(118,9,116,1) 32%, rgba(71,9,121,1) 46%, rgba(40,86,144,1) 77%, rgba(0,5,6,1) 90%);
        overflow: hidden;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
   }

   /*Pagini Principale*/

   .navbar {
       background: black;
       height: 80px;
       display: flex;
       justify-content: center;
       align-items: center;
       font-size: 1.2rem;
       position: sticky;
       top: 0;
       z-index: 999;
   }
   .navbar__container {
       display: flex;
       justify-content: space-between;
       height: 80px;
       z-index: 1;
       width: 100%;
       max-width: 1300px;
       margin: 0 auto;
       padding: 0 50px;
   }

   .navbar__menu {
       display: flex;
       align-items: center;
       list-style: none;
   }

   .navbar__item {
       height: 80px;
       font-size: 1.4rem;
   }

   .navbar_links {
       color:white;
       display: flex;
       align-items: center;
       justify-content: center;
       width: 125px;
       text-decoration: none;
       height: 100%;
       transition: all 0.3 ease;
   }

   .Welcome_Text {
        display: flex;
        align-items: center;
        color: #355C7D;
        font-size: 30px;
        margin-right: 100px;
   }

   .Noutati_Section {
       margin-top:100px;
       margin-left:200px;
    }

    .Noutati_Section h1{
        font-family: 'Kumbh Sans', sans-serif;
       font-size: 2rem;
       font-weight: bold;
       color: black;
    }

    .Noutati_Section p{
        font-family: 'Kumbh Sans', sans-serif;
        font-size: 2rem;
        font-weight: bold;
        color: #fff;
    }

    img{
        width: 180px;
        height: auto;
    }
    </style>
</head>
<body class="Site_Page">
    <nav class="navbar">
        <div class="navbar__container ">
            <ul class="navbar__menu">
                <div class="Welcome_Text">
                <img src="welcome1.png" alt="Avatar" class="image">
                </div>
                <li class="navbar__item">
                    <a href="Home.php" class="navbar_links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="Cursuri.php" class="navbar_links" id="Cursuri-page">Cursuri</a>
                </li>
                <li class="navbar__item">
                    <a href="Traineri.php" class="navbar_links" id="Traineri-page">Traineri</a>
                </li>
                <li class="navbar__item">
                    <a href="Organizator.php" class="navbar_links" id="Organizatori-page">Organizatori</a>
                </li>
                <li class="navbar__item">
                    <a href="Noutati.php" class="navbar_links" id="Noutati-page">Noutati</a>
                </li>
                <li class="navbar__item">
                    <a href="Calendar.php" class="navbar_links" id="Calendar-page">Calendar</a>
                </li>
                <li class="navbar__item">
                    <a href="Contact.php" class="navbar_links" id="Contact-page">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="Noutati_Section">
        <div>
        <h1>
                In data de 1 mai 2022 vom da startul inscrierilor Summer School
            </h1>
            <p>
                Va invitam sa aplicati in numar cat mai mare
            </p>
        </div>
        <div>
            <h1>
                Scopul scolii noastre este de a va aprofunda cunostiintele <br>legate de domeniul IT
            </h1>
            <p>
                Scoala se va desfasura in decursul a o luna. O luna in care vom descoperii <br> cat de frumos este domeniul IT
            </p>
        </div>
    </div>
</body>
</html>