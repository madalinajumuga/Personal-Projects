<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summer School: Calendar</title>
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

   .Calendar_Section {
        display: grid;
        justify-content: center;
    }

    .Calendar_Section h1{
       font-family: 'Kumbh Sans', sans-serif;
       font-size: 3.5rem;
       font-weight: bold;
       color: black;
    }

    .Calendar_Section p{
        font-family: 'Kumbh Sans', sans-serif;
        font-weight: bold;
        margin-left:325px;
        font-size: 30px;
        color: #fff;
    }
    .h1-calendar{
        margin-left:200px;
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
    <div class="Calendar_Section">
        <div>
        <h1>
            Perioada de inscriere Summer School
        </h1>
        <p>
            1 mai 2022 - 25 Mai 2022
            </p>
        </div>
        <div>
            <h1 class="h1-calendar">
            Intervievarea candidatilor
            </h1>
            <p>
            2 Iunie 2022 - 3 Iunie 2022
            </p>
        </div>
        <div>
            <h1 class="h1-calendar">
               Selectia candidatilor
            </h1>
            <p>
            5 Iunie 2022 - 6 Iunie 2022
            </p>
        </div>
        <div>
            <h1 class="h1-calendar">
              Perioada de desfasurare
            </h1>
            <p>
            15 Iunie 2022 - 15 August 2022
            </p>
        </div>
    </div>
</body>
</html>