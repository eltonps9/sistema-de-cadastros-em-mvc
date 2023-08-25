<nav id="nav" class="aside">
    <ul>
        
        <div class="nav" id="linkContainer">
            <li id="linkA"  ><img class="img" src="https://img.icons8.com/ios-glyphs/256/plus.png" alt="adicionar">Cadastros</li>
            
        </div>

        <a href="<?=$base;?>/search" class="nav">
            <li><img class="img" src="https://img.icons8.com/ios-glyphs/256/search-client.png" alt="search">Pesquisar</li>
        </a>
        <a href="<?=$base;?>/clientes" class="nav">
            <li><img class="img" src="https://img.icons8.com/ios-glyphs/256/client-management.png" alt="clientes">Clientes</li>
        </a>
        <a href="<?=$base;?>/tela" class="nav">
            <li><img class="img" src="https://img.icons8.com/ios-glyphs/256/move-stock.png" alt="estoque">Estoque  </li>
        </a>   
    </ul>
    <div class="hover">
        <ul id="menuCadastros">
            <!--fazer as rotas desses links-->
            <li><a href="<?=$base;?>/clienteTela">Clientes</a></li>
            <li><a href="<?=$base;?>/produtoTela">Produtos</a></li>
            <li><a href="<?=$base;?>/serviçoTela">Serviços</a></li>
        </ul>
    </div>
</nav>


<script src="<?=$base;?>/assets/js/menuCadastro.js"></script>
