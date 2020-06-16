<?php
   
    $xa = is_numeric($_POST['x1']); //Pobranie informacji z inputów 1 - wpisane NULL - nie wpisane
    $ya = is_numeric($_POST['y1']);
    $xb = is_numeric($_POST['x2']);
    $yb = is_numeric($_POST['y2']);
    $xc = is_numeric($_POST['x3']);
    $yc = is_numeric($_POST['y3']); 
    

    if(isset($xa) && isset($ya) && isset($xb) && isset($yb) && isset($xc) && isset($yc) && !empty($xa) && !empty($ya) && !empty($xb) && !empty($yb) && !empty($xc) && !empty($yc)){ 

    $x1 = $_POST['x1']; //Pobranie wartości wpisanych w formularzu
    $y1 = $_POST['y1'];
    $x2 = $_POST['x2'];
    $y2 = $_POST['y2'];
    $x3 = $_POST['x3'];
    $y3 = $_POST['y3'];
   
// OBLICZENIA DŁUGOŚCI ODCINKÓW Z WIERZCHOŁKÓW        
        
        $ab1 = ($x1 - $x2);
        $ab2 = ($y1 - $y2);
        $ab3 = pow($ab1, 2);
        $ab4 = pow($ab2, 2);
        $ab5 = $ab3 + $ab4;
        $AB = sqrt($ab5);


        $bc1 = ($x2 - $x3);
        $bc2 = ($y2 - $y3);
        $bc3 = pow($bc1, 2);
        $bc4 = pow($bc2, 2);
        $bc5 = $bc3 + $bc4;
        $BC = sqrt($bc5);
        
        
        $ca1 = ($x3 - $x1);
        $ca2 = ($y3 - $y1);
        $ca3 = pow($ca1, 2);
        $ca4 = pow($ca2, 2);
        $ca5 = $ca3 + $ca4;
        $CA = sqrt($ca5);

// KONIEC OBLICZEŃ DŁUGOŚCI ODCINKÓW Z WIERZCHOŁKÓW      
        
    echo ("<a href=../main.html style=color:blue;text-decoration:none;> <img src=../img/menu.png> Wróć do głównego menu.</a>");
    echo ("<h1>Wynik Pola trójkąta z podanych wierzchołków:</h1><hr />");    
        
        if( $AB+$BC >$CA && $AB+$CA >$BC && $CA+$BC >$AB  ){
        
            $pole=1/2*abs(($x2-$x1)*($y3-$y1)-($y2-$y1)*($x3-$x1));
                echo ("Pole trójkąta = $pole j<sup>2</sup> <hr />");
                echo ("<a href=z2.html><button type=button>Rozwiąż jeszcze raz </button></a>");
                    exit;
        }
        else{ // Z podanych wartości nie można utworzyć trójkąt
            echo ("Z podanych wartości nie można stworzyć trójkąta <hr />");
            echo ("<a href=z2.html><button type=button>Wpisz inne wartości</button></a>");
                exit;
        }

      }  
        else{ // Któreś z pól jest puste
            echo ("Uzupłenij wszystkie wartości! <br />");
            echo ("<a href=z2.html style=color:blue;text-decoration:none;><button type=button>Wróć i popraw wartości</button</a>");
                exit;      
        }
?>