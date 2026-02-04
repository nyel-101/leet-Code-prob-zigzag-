<?php


function convert($s, $numRows){
      if ($numRows === 1) {
            return $s;
        }

        $rows = array_fill(0, $numRows, "");
        $curRow = 0;
        $goingDown = true;

        for ($i = 0; $i < strlen($s); $i++) {
            $rows[$curRow] .= $s[$i];
            if ($curRow === $numRows - 1) {
                $goingDown = false;
            } else if ($curRow === 0) {
                $goingDown = true;
            }

            $curRow += $goingDown ? 1 : -1;
        }

        return implode("", $rows);
    }

