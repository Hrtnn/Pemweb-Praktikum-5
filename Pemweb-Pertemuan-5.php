function integerToRomawi   
    $integer = 0;
    $romawi = "";
    $integer = $_POST['integer'];
    if ($integer < 1 || $integer > 3000) {
        echo "Bilangan harus antara 1 dan 3000";
    } else {
        while ($integer >= 1000) {
            $romawi .= "M";
            $integer -= 1000;        
        }
        while ($integer >= 500) {
            if ($integer >= 900) {
                $romawi .= "CM";
                $integer -= 900;
            } else {
                $romawi .= "D";
                $integer -= 500;
            }
        }
        while ($integer >= 100) {
            if ($integer >= 400) {
                $romawi .= "CD";
                $integer -= 400;
            } else {
                $romawi .= "C";
                $integer -= 100;
            }
        }
        while ($integer >= 50) {
            if ($integer >= 90) {
                $romawi .= "XC";
                $integer -= 90;
            } else {
                $romawi .= "L";
                $integer -= 50;
            }
        }
        while ($integer >= 10) {
            if ($integer >= 40) {
                $romawi .= "XL";
                $integer -= 40;
            } else {
                $romawi .= "X";
                $integer -= 10;
            }
        }
        while ($integer >= 5) {
            if ($integer == 9) {
                $romawi .= "IX";
                $integer -= 9;
            } else {
                $romawi .= "V";
                $integer -= 5;
            }
        }
        while ($integer >= 1) {
            if ($integer == 4) {
                $romawi .= "IV";
                $integer -= 4;
            } else {
                $romawi .= "I";
                $integer -= 1;
            }
        }
    }
    return $romawi;
}