<?php
$katanas =  ['181' => ['naam' => 'katana', 'description' => 'Samurai sword that randomly inflicts stun.', 'price' => 70, 'strength' => 10, 'element' => '', 'status' => 'stun 25%' ],
            '182' => ['naam'=>'Kotetsu', 'description' =>  'Samurai sword that randomly inflicts blind.', 'price' => 300, 'strength' => 30, 'element' => '', 'status' =>  'blind 25%'],
            '183' =>['naam'=>'Asura', 'description' =>  'Samurai sword that randomly inflicts silence.', 'price' => 920, 'strength' => 40, 'element' => '', 'status' =>  'silence 25%'],
            '643' =>['naam'=>'Osafune', 'description' =>  'Samurai sword that randomly decreases enemy magic.', 'price' => 1350, 'strength' => 50, 'element' => '', 'status' =>  'mag brk 25%'],
            '596' => ['naam'=>'Kiyomori', 'description' =>  'Earthly samurai sword that randomly inflicts slow.', 'price' => 'n/a', 'strength' => 60, 'element' => 'earth', 'status' =>  'slow 25%'],
            '184' => ['naam'=>'Muramasa', 'description' =>  'Samurai sword that randomly inflicts confuse.', 'price' => 2100, 'strength' => 80, '','element' => '', 'status' =>  'confuse 10%'],
            '606' => ['naam'=>'Stunner', 'description' =>  'Samurai sword that often inflicts stun.', 'price' => 'n/a', 'strength' => 90, 'element' => '', 'status' =>  'stun 50%'],
            '597' => ['naam'=>'Kokuei', 'description' =>  'Dark samurai sword that randomly inflicts berserk.', 'price' => 'n/a', 'strength' => 105, 'element' => 'dark', 'status' =>  'berserk 10%'],
            '644'=> ['naam'=>'Kazekiri', 'description' =>  'Aerial samurai sword that randomly inflicts sleep..', 'price' => 9900, 'strength' => 120, 'element' => 'wind', 'status' =>  'sleep 25%'],
            '608' => ['naam'=>'Chirijiraden', 'description' =>  'Ice-elemental katana that belongs to TEC.', 'price' => 'n/a', 'strength' => 200, 'element' => 'ice', 'status' =>  ''],
            '185' => ['naam'=>'Murasame', 'description' =>  'Samurai sword that randomly decreases enemy strength.', 'price' => 12000, 'strength' => 175, 'element' => '', 'status' =>  'pwr brk 25%'],
            '600' => ['naam'=>'Fantomu', 'description' =>  'Ghastly samurai sword that randomly decreases enemy defense.', 'price' => 'n/a', 'strength' => 215, 'element' => 'ghost', 'status' =>  'def brk 25%'],
            '186' => ['naam'=>'Shockblade', 'description' =>  'Samurai sword that increases your own defense.', 'price' => 60000, 'strength' => 260, 'element' => '', 'status' =>  ''],
            '187' => ['naam'=>'Defender', 'description' =>  'Samurai sword that randomly inflicts paralyze.', 'price' => 30000, 'strength' => 300, 'element' => '', 'status' =>  'paralyze 10%'],
            '645' => ['naam'=>'Kiku-ichimonji', 'description' =>  'Samurai sword that inflicts random status ailments.', 'price' => 50000, 'strength' => 335, 'element' => '', 'status' =>  'poison 25%, blind 25%, silence 25%, berserk 25%, confuse 25%'],
            '599' => ['naam'=>'Masamune', 'description' =>  'The king of all samurai swords.', 'price' => 'n/a', 'strength' => 480, 'element' => '', 'status' =>  'instant-death 20%'],
            '629' => ['naam'=>'Purizumu', 'description' =>  'Multi-elemental katana that shines like a prism.', 'price' => 'n/a', 'strength' => 400, 'element' => 'fire, ice, thunder, water, earth, wind', 'status' =>  '']
];
?>
<html>
    <head>
        <link rel="stylesheet"  href="css/style.css">
        </head>
        <body>
<?php
    foreach($katanas as $key => $newarray) {
        $arrayKeys = array_keys($newarray);
        echo '<article id = '.$key.'> <h1><em><strong>' . $newarray['naam'] . '</em></h1></strong>';
        echo '<p>'.$newarray['description']. '</p>';
        echo '<p id="keys"><strong>'.$arrayKeys[2].' '.  $arrayKeys[3]. '</p></strong>';
        echo '<p id="content">'. $newarray['price'].' ' .$newarray['strength']. '</p>';
        echo '<p><strong>'.$arrayKeys[4] . ' ' .  $arrayKeys[5] . '</strong></p>';
        echo '<p>'.$newarray['element'] . ' ' . $newarray['status']. '</p></article>';
    }
?>
        </body>
</html>