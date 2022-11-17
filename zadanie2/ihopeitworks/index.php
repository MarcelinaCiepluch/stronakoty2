<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Kota, ale jakiego?</title>
</head>

<body>
    <div class="header">Koty, władcy nazych serc.<div class="lil"><br>Którego z nich wybrać?</div>
    </div>
    <div class="left">
        <u><b><br>Której rasie chciałbyś przyjrzeć się bliżej?<br><br><br></u></b>
        <div class="lil">Uwaga! Opcje są klikalne! Wybierz rasę by dowiedzieć się więcej!<br><br><br></div>
        <ul class="a">
            <li><a href="syjam.php" class="D">Syjam Tajski</a></li>
            <li><a href="Maine_Coon.php" class="D">Maine Coon</a></li>
            <li><a href="Ragdoll.php" class="D">Ragdoll</a></li>
            <li><a href="BritishShorthair.php" class="D">Brytyjski krótkowłosy</a></li>
            <li>Pers</li>
            <li>Birmański</li>
        </ul>
        <br><u><b>Źródła niektórych elemenów:</b></u>
        <ul>
            <li><a
                    href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fpl.pinterest.com%2Ftomekjachimek%2Fcats-in-ads%2F&psig=AOvVaw0Ri95E14lx4fBENDzQqORW&ust=1668019909774000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCODHlcSgn_sCFQAAAAAdAAAAABAD">Reklama (po prawej)</a></li>
            <li>Zdjęcia z sekcji dolnej: Marcelina Ciepluch, Adam Lewandowski</li>
            <li><a
                    href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fsklep.foteks.pl%2Fobrazy-na-plotnie-342466218-cat-banner-website-header-template-cute-cats-outside.php&psig=AOvVaw0jdabFlFMQo6VupizrFf0s&ust=1668023703853000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCOiHqtaun_sCFQAAAAAdAAAAABAD">Koty zza przycików</a></li>
            <li><a href="Spin_Meowy_Spin.php" target="Spin_Meowy_Spin.php">Zakręć kotem!</a></li>
                </ul>
    </div>
    <div class="right"><a
            href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fpl.pinterest.com%2Ftomekjachimek%2Fcats-in-ads%2F&psig=AOvVaw0Ri95E14lx4fBENDzQqORW&ust=1668019909774000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCODHlcSgn_sCFQAAAAAdAAAAABAD"><img
                src="./Images/Meowy.jpg" width="350" height="760"><a></a></div>
    <div class="middle">
        <div class="big">Koty to wspaniałe zwierzęta. My kochamy je, a one (czasem) odwdzięczają się tym samym. Mimo wszystko dobrze mieć je przy sobie.
            Wiele osób zapewne zastanawia się czy powinno zdecydować się na kota. Z naszej <a
            href="./Previous_Cat_Site/index.php">poprzedniej strony</a> jasno wynika prosta odpowiedź - tak! Tu jednak pojawia się nowy problem, a mianowicie,
            na jaką rasę najlepiej się zdecydować? Czy rasa w ogóle jest ważna? Podobnie jak w przypadku psów, rasa nie wpływa tylko na wygląd, często niesie ze sobą
            pewne cechy charakeru i usposobienia. Dachowce za to często bywają wyborem bezpieczniejszym od względem zdrowia - są zmniej obciążone genetycznie.
            Mimo tego, nie wszystkie rasy są chorowite, na ich probemy da się też zaradzić. Jeśli chcesz bliżej przyjrzeć się którejś z ras klikij wybraną rasę po lewej stronie ekranu.
            Pozwoli Ci to na zobaczenie jak dana rasa wygląda i dowiedzieć się trochę na jej temat. Ułatwi to podjęcie decyzji (a przynajmniej taką mamy nadzieję ☺). Jeśli już zdecydujesz się
            na kota pamiętaj aby dobrze się nim zajmować. Większość kotów wystarczy czesać raz na dwa tygodnie, ale rasy długowłose wymagają szczotkowania swojej sierści codziennie. Weź to pod uwagę 
            wybierając swojego pupila. Dłuższe futro często sprawia też kotom problem z zachowaniem higiey, dlatego jeśli nie masz zbyt dużo czasu, albo po prostu nie chcesz
            od czasu do czasu kąpać swojego kota nie decyduj się na długą sierść. Pamiętaj też, że nawet jeśli jesteś alergikiem nadal możesz zdecydować się na kota. 
            Istnieje kilka hipoalergicznych ras które nie wywołają u ciebie reakcji alergicznej. Jeśli rasa nie ma dla ciebie znaczenia i nie zależy ci na wychowaniu kota samodzielnie od początku
            możesz też rozważyć adopcję. Wiele schronisk jest pełnych czekających na ciebie kociaków, a jeśli chciałbyś któregoś bliżej poznać możesz przedtem owiedzić go na przykład w kociej kawiarni. 
            Ostatnio jest to całkiem popularny sposób na poznanie kota, którego po zapewnieniu mu odpowiednich warunków możesz zabrać do domu. Początkowa opieka weterynaryjna zazwyczaj jest zapewniona za darmo.
            Pamiętaj, że kiedy już zdecydujesz się na kota zobowiązujesz się do dobrej opieki nad niej przez kilkanaście lat, bądź więc pewien swojej decyzji.</div>
        <div class="midsec">Lubisz koty?<br>
            <form method="POST" action="yes.php">
                <button class="button button1" type="submit">Tak</button>
            </form>

            <form method="post" action="no.php">
                <button class="button button2" onclick="no.php">Nie</button>
            </form>
            <br>
            <div class="GodIsDeadLeft">
                <?php include ("echoyes.php"); ?>
             <br>
             </div>
            <div class="GodIsDeadRight">
                <?php include("echono.php"); ?>
            </div>
        </div>
        <div class="big">
            <div class="indamiddle"><b>Kilka zdjęć kotów dla zachęty!</b></div>
        </div>
        <div class="box">
            <img src="./Images/Cat1.jpg" alt="Cats ! ! !" style=width:320px;height:320px;>
            <img src="./Images/Cat7.png" alt="Cats ! ! !" style=width:320px;height:320px;>
            <img src="./Images/Cat4.jpg" alt="Cats ! ! !" style=width:320px;height:320px;>
            <img src="./Images/Cat8.jpg" alt="Cats ! ! !" style=width:320px;height:320px;>
        </div>
    </div>
    <div class="footer">
    <div class="GodIsDeadLeft"><button class="button button3" onclick="location.href='signup.php'">Zarejestruj się</button>
        <a href="Login.php"><button class="button button3">Zaloguj</button></a>
<a href="wyloguj.php"><button class="button button3">Wyloguj</button></a>
        <div class="Breaker">Strona autorstwa: Marcelina Ciepłuch, Adam Lewandowski</div>
    </div>
</div>
</body>

</html>