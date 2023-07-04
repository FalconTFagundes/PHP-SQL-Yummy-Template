<?php
$listar_titulo_cardapio = listarTodosRegistros('titulocardapio', 'idtitulocardapio, titulo1, titulo2, titulo3, cadastro, alteracao, ativo', 'A');
foreach ($listar_titulo_cardapio as $item_titulo_menu) {
    $titulo1_cardapio = $item_titulo_menu->titulo1;
    $titulo2_cardapio = $item_titulo_menu->titulo2;
    $titulo3_cardapio = $item_titulo_menu->titulo3;
}
?>
<section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2><?php echo $titulo1_cardapio; ?></h2>
            <p><?php echo $titulo2_cardapio; ?><span> <?php echo $titulo3_cardapio; ?></span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

            <?php
            $listar_categoria_cardapio = listarTodosRegistros('categorias', 'idcategorias, categoria, cadastro, alteracao, ativo', 'A');
            foreach ($listar_categoria_cardapio as $item_categoria_cardapio) {
                $idcategorias = $item_categoria_cardapio->idcategorias;
                $categoriaMenu = $item_categoria_cardapio->categoria;
            ?>

                <li class="nav-item">
                    <a class="nav-link show" data-bs-toggle="tab" data-bs-target="#menu-<?php echo $idcategorias; ?>">
                        <h4><?php echo $categoriaMenu; ?></h4>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <?php
            foreach ($listar_categoria_cardapio as $item_categoria_cardapio2) {
                $idcategorias2 = $item_categoria_cardapio2->idcategorias;
                $categoriaMenu2 = $item_categoria_cardapio2->categoria;
            ?>
                <div class="tab-pane fade show" id="menu-<?php echo $idcategorias2; ?>">

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3><?php echo $categoriaMenu2; ?></h3>
                    </div>

                    <div class="row gy-5">
                        <?php
                        $listarProdMenu = listarTodosRegistrosId('cardapio', 'idcardapio, img, titulo, descricao, valor', 'A', 'idcategorias', "$idcategorias2");
                        if ($listarProdMenu != 'Vazio') {
                            foreach ($listarProdMenu as $listarProdMenuItem) {
                                $idcardapio = $listarProdMenuItem->idcardapio;
                                $img_menu = $listarProdMenuItem->img;
                                $titulo = $listarProdMenuItem->titulo;
                                $descricao = $listarProdMenuItem->descricao;
                                $valor = $listarProdMenuItem->valor;

                        ?>
                                <div class="col-lg-4 menu-item">
                                    <a href="./assets/img/cardapio/<?php echo $img_menu; ?>" class="glightbox"><img src="./assets/img/cardapio/<?php echo $img_menu; ?>" class="menu-img img-fluid" alt=""></a>
                                    <h4><?php echo $titulo; ?></h4>
                                    <p class="ingredients">
                                        <?php echo $descricao; ?>
                                    </p>
                                    <p class="price">
                                        <?php echo $valor; ?>
                                    </p>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>
                </div>
                <?php
            }
    ?>
        </div>
   
</section>