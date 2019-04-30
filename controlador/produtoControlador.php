
        <?php
     
        
        function visualizar () {
            
            $meusdados = array() ; 
            $meusdados["Produto"] = "Texana" ;
            $meusdados["Descricao"] = "Texana Goyazes feminina" ;
            $meusdados["Valor"] = "R$473,00" ;
            
            exibir ("produto/visualizar",$meusdados);
            
        }
        
        function adicionar () {
            
            
            if (ehPost()) {
                
            $categoria = $_POST ["categoria"];
            $nome = $_POST ["nome"];
            $valor = $_POST ["valor"];
            
                  echo "Nome: $nome <br>"; 
                echo "Categoria : $categoria <br>";
                echo "Valor : $valor <br>";
            //redirecionar ("usuario/index)
            
            
           
            } else {
                
                exibir ("paginas/formulario");
            }
        } 
            ?>
     
 