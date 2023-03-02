<?php
    //Os vetores podem ser criados especificando as posições
    //Exemplo 1
    //alguns vetores com posição definida, se não tiver definar, ele irar pegar a posição do anterior e adicionar 1
    $vetor[6] = 1;
    $vetor[] = 2;
    $vetor[] = 3;
    $vetor[10] = 14;
    $vetor[] = 16;
    $vetor[3] = 199;
    //mostrar os vetores na tela
    foreach ($vetor as $indice => $valor) {
        echo $indice;
        echo ': ';
        echo $valor;
        echo '<br>';
    }
    
     //Exemplo 2
     //vetor com a posicão indicando algum dado
     $vetor2['Nome'] = 'Juan';
     $vetor2['Sobrenome'] = 'Portilho Narazeth';
     $vetor2['Idade'] = 2;
     $vetor2['email'] = 'juanportilhonazareth14@yahoo.com.br';
     //mostrar os vetores na tela
     foreach ($vetor2 as $indice => $valor) {
         echo $indice;
         echo ': ';
         echo $valor;
         echo '<br>';
     }
     // Array 
     $vetor3 = array(3=>2 ,3 , 156790=>"Maria de lama" ,62,12.34);
     //mostrar os vetores na tela
     foreach ($vetor3 as $indice => $valor) {
         echo $indice;
         echo ': ';
         echo $valor;
         echo '<br>';
     }

?>