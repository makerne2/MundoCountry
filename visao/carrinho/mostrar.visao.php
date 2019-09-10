<div class="col-25">
    <div class="container">
        <h3 style="font-size:30px; color:plum">Meu carrinho <span class="price" style="color:plum"></span></h3>
        <?php 
       //print_r ($produto);
        foreach ($produto as $produto): ?>
            <div class="produto-lista">
                <p><a href="produto/ver/<?=$produto["codigo"]?>"><?=$produto["nomeproduto"]?></a><span class="price">$<?=$produto["preco"]?></span><a href="sacola/removerproduto/<?=$produto["codigo"]?>">X</a></p>
            </div>
            <br>
        <?php endforeach; ?>
        <hr>
        <a href="sacola/limparCarrinho">Limpar Carrinho</a>
        <a href="produto/listarProdutos">Continuar Comprando</a>
        <p>Total <span class="price" style="color:plum"><b>R$ <?= $total ?></b></span></p>
    </div>
</div>