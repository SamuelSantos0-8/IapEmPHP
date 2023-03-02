<?php
    $a = 24;
    //IF
    if($a < 12){
        echo 'Criança';

    } else if($a <18){
        echo 'Adolescente';

    } else{
        echo 'Adulto';

    }
    echo '<br>';
    $b = 1;
    //Caso
    switch ($b) {
        case 1:
            echo "opção 1";
            break;
        case 2:
            echo "opção 2";
            break;    
        case 3:
            echo "opção 3";
        break;
        case 4:
            echo "opção 4";
            break;    
        default:
            echo "padrão";
        break;
    }

?>
