<?php

function cadastro (){
    
    
    if (ehPost()) {
    $nome = $_POST ["nome"];
    $email = $_POST ["email"];
    $senha = $_POST ["senha"];
    $cpf= $_POST ["cpf"];
    $celular = $_POST ["celular"];
    
    
    echo "Nome: $nome <br>" ;
    echo "Email : $email <br>" ;
    echo "Senha : $senha <br>" ;
    echo "CPF :$cpf <br>" ;
    echo "Celular : $celular <br>" ;
    }
    
    else {
         
    exibir ("cliente/cadastro");

     
     
 }
}
    
    ?>