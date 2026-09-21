<?php

class chessBoard {

private $color1;
private $color2;
private $height;
private $width;
private $border;

public function __construct($color1, $color2, $height, $width, $border) {
    $this->color1 = $color1;
    $this->color2 = $color2;
    $this->height = $height;
    $this->width = $width;
    $this->border = $border;
}

    public function __toString() {
        $board = '<table style="border:' . $this->border . '">';
        for ($row = 0; $row < 8; $row++) {
            $board .= '<tr>';
            for ($col = 0; $col < 8; $col++) {
                if (($row + $col) % 2 == 0) {
                    $board .=  '<td class="square" style="background-color:' . $this->color1 . '; width:' . $this->width . '; height:' . $this->height . ';"> </td>';
                } else {
                    $board .= '<td class="square" style="background-color:' . $this->color2 . '; width:' . $this->width . '; height:' . $this->height . ';"> </td>';
                }
            }
            $board .= '</tr>';
        }
        $board .= '</table>';
        return $board;
    }

}