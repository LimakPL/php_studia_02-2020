<?php
        $aa = is_numeric($_POST["a"]);  //Pobranie informacji z inputów 1 - wpisane NULL - nie wpisane
        $bb = is_numeric($_POST["b"]);   
        $cc = is_numeric($_POST["c"]);


   if(isset($aa) && isset($bb) && isset($cc) && !empty($aa) && !empty($bb) && !empty($cc)){  //Sprawdzenie czy jest wpisane i nie jest puste
 
        $a = $_POST["a"]; //Pobranie wartości wpisanych w formularzu
        $b = $_POST["b"];   
        $c = $_POST["c"];

        $delta = $b*$b - 4*$a*$c;
            echo ("<a href=../main.html style=color:blue;text-decoration:none;> <img src=../img/menu.png> Wróć do głównego menu.</a>");
            echo ("<h1>Wynik równania kwadratowego:</h1><hr />");
            echo ("Delta = $delta <br />");

        if($delta < 0) {
            echo "Delta mniejsza od 0. Równanie nie ma rozwiązań!!";
        } elseif($delta = 0) {
            echo "Delta = ";
            echo (-$b / 2*$a);
        } else  {
            echo "x1 = ";
            echo ((-$b + sqrt($delta)) / (2*$a));
            echo "<br />";
            echo "x2 = ";
            echo ((-$b - sqrt($delta)) / (2*$a));
        }
            echo ("<hr /><br /><a href=z1.html><button type=button>Rozwiąż jeszcze raz </button></a>");
                exit;
    } 
    else { // Któreś z pól jest puste
        echo ("Uzupłenij wszystkie wartości! <br />");
        echo ("<a href=z1.html style=color:blue;text-decoration:none;><button type=button>Wróć i popraw wartości</button</a>");   
            exit;
     }      
?>
      
     
   
   