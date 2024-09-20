<?php
$katana =  ['naam' => 'katana', 'description' => 'Samurai sword that randomly inflicts stun.', 'price' => 70, 'strength' => 10, 'element' => '', 'status' => 'stun 25%' ];
$Kotetsu = ['naam'=>'Kotetsu', 'description' =>  'Samurai sword that randomly inflicts blind.', 'price' => 300, 'strength' => 30, 'element' => '', 'status' =>  'blind 25%'];
$Asura =   ['naam'=>'Asura', 'description' =>  'Samurai sword that randomly inflicts silence.', 'price' => 920, 'strength' => 40, 'element' => '', 'status' =>  'silence 25%'];
$Osafune = ['naam'=>'Osafune', 'description' =>  'Samurai sword that randomly decreases enemy magic.', 'price' => 1350, 'strength' => 50, 'element' => '', 'status' =>  'mag brk 25%'];
$Kiyomori = ['naam'=>'Kiyomori', 'description' =>  'Earthly samurai sword that randomly inflicts slow.', 'price' => 'n/a', 'strength' => 60, 'element' => 'earth', 'status' =>  'slow 25%'];
$Muramasa = ['naam'=>'Muramasa', 'description' =>  'Samurai sword that randomly inflicts confuse.', 'price' => 2100, 'strength' => 80, '', 'status' =>  'confuse 10%'];
$Stunner = ['naam'=>'Stunner', 'description' =>  'Samurai sword that often inflicts stun.', 'price' => 'n/a', 'strength' => 90, '', 'status' =>  'stun 50%'];
$Kokuei = ['naam'=>'Kokuei', 'description' =>  'Dark samurai sword that randomly inflicts berserk.', 'price' => 'n/a', 'strength' => 105, 'element' => 'dark', 'status' =>  'berserk 10%'];
$Kazekiri = ['naam'=>'Kazekiri', 'description' =>  'Aerial samurai sword that randomly inflicts sleep..', 'price' => 9900, 'strength' => 120, 'element' => 'wind', 'status' =>  'sleep 25%'];
$Chirijiraden = ['naam'=>'Chirijiraden', 'description' =>  'Ice-elemental katana that belongs to TEC.', 'price' => 'n/a', 'strength' => 200, 'element' => 'ice', 'status' =>  ''];
$Murasame = ['naam'=>'Murasame', 'description' =>  'Samurai sword that randomly decreases enemy strength.', 'price' => 12000, 'strength' => 175, 'element' => '', 'status' =>  'pwr brk 25%'];
$Fantomu = ['naam'=>'Fantomu', 'description' =>  'Ghastly samurai sword that randomly decreases enemy defense.', 'price' => 'n/a', 'strength' => 215, 'element' => 'ghost', 'status' =>  'def brk 25%'];
$Shockblade = ['naam'=>'Shockblade', 'description' =>  'Samurai sword that increases your own defense.', 'price' => 60000, 'strength' => 260, 'element' => '', 'status' =>  ''];
$Defender = ['naam'=>'Defender', 'description' =>  'Samurai sword that randomly inflicts paralyze.', 'price' => 30000, 'strength' => 300, 'element' => '', 'status' =>  'paralyze 10%'];
$kikuichimonji = ['naam'=>'Kiku-ichimonji', 'description' =>  'Samurai sword that inflicts random status ailments.', 'price' => 50000, 'strength' => 335, 'element' => '', 'status' =>  'poison 25%, blind 25%, silence 25%, berserk 25%, confuse 25%'];
$Masamune = ['naam'=>'Masamune', 'description' =>  'The king of all samurai swords.', 'price' => 'n/a', 'strength' => 480, 'element' => '', 'status' =>  'instant-death 20%'];
$Purizumu = ['naam'=>'Purizumu', 'description' =>  'Multi-elemental katana that shines like a prism.', 'price' => 'n/a', 'strength' => 400, 'element' => 'fire, ice, thunder, water, earth, wind', 'status' =>  ''];



$allarrays = ['katana-181' => $katana, 'katana-182' => $Kotetsu, 'katana-183' => $Asura, 'katana-643' => $Osafune, 'katana-596' => $Kiyomori, 'katana-184' => $Muramasa,
            'katana-606' => $Stunner, 'katana-597' => $Kokuei, 'katana-644' => $Kazekiri, 'katana-608' => $Chirijiraden, 'katana-185' => $Muramasa, 'katana-600' => $Fantomu, 'katana-186' => $Shockblade,
            'katana-187' => $Defender, 'katana-645' => $kikuichimonji, 'katana-599' => $Masamune, 'katana-629' => $Purizumu];

            foreach($allarrays as $key => $newarray) {
                echo "<style> .katana {background-color: black;} </style>";
                echo "<div id = '".$key."'><arcticale> <div><h1>" . $newarray['naam'] . "</h1>" . "<br> ";
                echo "<div><strong>".$newarray['description']. "</strong>"."<br> </n></div>";
                echo $newarray['price']. "<br></div>";
                echo $newarray['strength']. "<br>"."<div>";
                echo $newarray['status']. "<br> </div> </articale></div>";
                
                
                

            }
	
