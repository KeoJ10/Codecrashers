<?php
if(isset($_COOKIE['userInput'])){
    $decode = json_decode($_COOKIE["userInput"], true);
    $textSize = $decode[0];
    $textColor = $decode[1];
    $backgroundColor = $decode[2];
    $dropDown = $decode[3];
    if(isset($decode[4])){
        $shadow = $decode[4];
    }
}
?><html>
    <head>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            font-size: <?=$textSize;?>px;
            font-family: <?=$dropDown;?>;
            background-color: <?=$backgroundColor;?>;
        }
        p{
            color: <?=$textColor;?>;
        }
        img{ <?php if($shadow == 'on') echo 'filter: drop-shadow(0px 0px 15px purple);';?>}
        </style>
    </head>
        <body>
            <h1>Da kat die van (heel veel) cookies houd</h1>
            <p>Betrayed cheerful declared end and. Questions we additions is extremely incommode. Next half add call them eat face. Age lived smile six defer bed their few. Had admitting concluded too behaviour him she. Of death to or to being other.
Material confined likewise it humanity raillery an unpacked as he. Three chief merit no if. Now how her edward engage not horses. Oh resolution he dissimilar precaution to comparison an. Matters engaged between he of pursuit manners we moments. Merit gay end sight front. <br>Manor equal it on again ye folly by match. In so melancholy as an sentiments simplicity connection. Far supply depart branch agreed old get our.
Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. <br>Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful.
Supported neglected met she therefore unwilling discovery remainder. Way sentiments two indulgence uncommonly own. Diminution to frequently sentiments he connection continuing indulgence. An my exquisite conveying up defective. Shameless see the tolerably how continued. She enable men twenty elinor points appear. Whose merry ten yet was men seven ought balls.
            </p>
            <img src="images/pusheen-big-cookie.gif" alt="">
        </body>
</html>