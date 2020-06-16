<?php
    $q1 = is_numeric($_POST['q']); //Pobranie informacji z inputów 1 - wpisane NULL - nie wpisane
    $n1 = is_numeric($_POST['n']);

    if(isset($q1) && isset($n1) && !empty($q1) && !empty($n1)){
            
	       $q=$_POST["q"]; //Pobranie wartości wpisanych w formularzu
	       $n=$_POST["n"];

            $suma=1;
            echo ("<a href=../main.html style=color:blue;text-decoration:none;> <img src=../img/menu.png> Wróć do głównego menu.</a>");
             echo ("<h1>Ciąg geometryczny wynosi:</h1><hr />");
		      echo ("1, ");
	           for($nast=$i=1;$i<$n;$i++){
		          $nast=$nast * $q;
			         echo("$nast, ");
                    $suma+=$nast;
	   }
		   echo ("<br /> Suma= $suma <br />");
        echo ("<a href=z4.html><button type=button>Rozwiąż jeszcze raz </button></a>");
            exit;
               
        }
        else{ // Któreś z pól jest puste
            echo ("Uzupłenij wszystkie wartości! <br />");
            echo ("<a href=z4.html style=color:blue;text-decoration:none;><button type=button>Wróć i popraw wartości</button</a>");   
                exit;            
        }
?>