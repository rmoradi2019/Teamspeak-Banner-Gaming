<?php

    use Tivet\Banner\TeamSpeak\Factory;
    date_default_timezone_set('Asia/Tehran');
    $hour = date('h');
    $min = date('i');
    $hours = $hour - 1;
    $date = date('Y-m-d');

    $url = "https://www.game-state.com/5.42.223.103:22003/"; 
$content = file_get_contents($url); 
$player = getInbetweenStrings( "<td class=\"value\" id=\"players\">" , "</td>" , $content );

function getInbetweenStrings ( $start, $end , $string) {
  $string = ' ' . $string;
  $ini = strpos($string, $start);
  if ($ini == 0) return '';
  $ini += strlen($start);
  $len = strpos($string, $end, $ini) - $ini;
  return substr($string, $ini, $len);
}


    return [
        'text' => [
            [
                'value'   => "127.0.0.1",
                'size'    => 17,
                'font'    => BASE_DIR . '/resources/font/Exo2-Bold.otf',
                'color'   => '#d61120',
                'opacity' => 1,
                'align'   => 'left',
                'valign'  => 'top',
                'x'       => 350,
                'y'       => 225,
            ],
            [
                'value'   => $player." Online",
                'size'    => 17,
                'font'    => BASE_DIR . '/resources/font/Exo2-Bold.otf',
                'color'   => '#d61120',
                'opacity' => 1,
                'align'   => 'left',
                'valign'  => 'top',
                'x'       => 330,
                'y'       => 178,
            ],
            [
                'value'   => "Sorena MTA",
                'size'    => 17,
                'font'    => BASE_DIR . '/resources/font/Exo2-Bold.otf',
                'color'   => '#d61120',
                'opacity' => 1,
                'align'   => 'left',
                'valign'  => 'top',
                'x'       => 333,
                'y'       => 129,
            ],
            [
                'value'   => $hours . ":" . $min,
                'size'    => 20,
                'font'    => BASE_DIR . '/resources/font/Exo2-Regular.otf',
                'color'   => '#d98c09',
                'opacity' => 1,
                'align'   => 'left',
                'valign'  => 'top',
                'x'       => 215,
                'y'       => 88,
            ],
            [
                'value'   => $date,
                'size'    => 15,
                'font'    => BASE_DIR . '/resources/font/Exo2-Regular.otf',
                'color'   => '#d98c09',
                'opacity' => 1,
                'align'   => 'left',
                'valign'  => 'top',
                'x'       => 218,
                'y'       => 220,
            ],
        ],
    ];