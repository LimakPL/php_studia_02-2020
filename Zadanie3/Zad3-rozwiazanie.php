<?php

    $n1 = is_numeric($_POST['n']); //Pobranie informacji z inputów 1 - wpisane NULL - nie wpisane
    $r1 = is_numeric($_POST['r']);


        if(isset($n1) && isset($r1) && !empty($n1) && !empty($r1)){
	
	       $n=$_POST["n"]; //Pobranie wartości wpisanych w formularzu
	       $r=$_POST["r"];
	
	       $suma=1;
        echo ("<a href=../main.html style=color:blue;text-decoration:none;> <img src=../img/menu.png> Wróć do głównego menu.</a>");
         echo ("<h1>Ciąg arytmetyczny wynosi:</h1><hr />");
                echo ("1, ");
	       for($nast=$i=1;$i<$n;$i++){
		      $nast=$nast+$r;
		      echo("$nast, ");
		      $suma+=$nast;
	       }
	   echo ("<br /> Suma= $suma <br />");
        echo ("<a href=z3.html><button type=button>Rozwiąż jeszcze raz </button></a>");
            exit;
               
        }
        else{ // Któreś z pól jest puste
            echo ("Uzupłenij wszystkie wartości! <br />");
            echo ("<a href=z3.html style=color:blue;text-decoration:none;><button type=button>Wróć i popraw wartości</button</a>");   
                exit;            
        }
?>

