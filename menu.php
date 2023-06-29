<?php 
$listar_menu = listarTodosRegistros('titulocardapio','idtitulocardapio, titulo1, titulo2, titulo3, cadastro, alteracao, ativo','A');
foreach($listar_menu as $item_menu){

  $titulopequeno = $item_menu -> titulo1;
  $tituloparte_1 = $item_menu -> titulo2;
  $tituloparte_2 = $item_menu -> titulo3;
}

?>

<section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $titulopequeno; ?></h2>
          <p><?php echo $tituloparte_1; ?> <span><?php echo $tituloparte_2; ?> </span></p>
        </div>

<?php 
$listar_categoria = listarTodosRegistros('categorias','idcategorias, categoria, cadastro, alteracao, ativo','A');
foreach($listar_categoria as $item_categorias){
  $categoria = $item_categorias -> categoria;
}
?>
        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-<?php echo $categoria; ?>">
              <h4><?php echo $categoria; ?></h4>
            </a>
          </li><!-- End tab nav item -->
   
<?php 

$listar_categoria2 = listarTodosRegistros('categorias','idcategorias, categoria, cadastro, alteracao, ativo','A');
foreach($listar_categoria2 as $item_categorias2){
  $categoria2 = $item_categorias2 -> categoria;

?>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-<?php echo $categoria2;?>">
              <h4><?php echo $categoria2; ?></h4>
            </a><!-- End tab nav item -->
            <?php }?>
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3><?php echo $categoria; ?></h3>
            </div>


            <div class="row gy-5">
            <?php 
$listar_cardapio = listarTodosRegistros('cardapio','idcardapio, idcategorias, img, titulo, descricao, valor, cadastro, alteracao, ativo','A');
foreach($listar_cardapio as $item_cardapio){
  $titulo_cardapio = $item_cardapio -> titulo;
  $descricao_cardapio = $item_cardapio -> descricao;
  $valor_cardapio = $item_cardapio -> valor;
  $img_cardapio = $item_cardapio -> img;


?>
              <div class="col-lg-4 menu-item">
                <a href="<?php echo $img_cardapio;?>" class="glightbox"><img src="<?php echo $img_cardapio; ?>" class="menu-img img-fluid" alt=""></a>
                <h4><?php echo $titulo_cardapio; ?></h4>
                <p class="ingredients">
                  <?php echo $descricao_cardapio;?>
                </p>
                <p class="price">
                  <?php echo $valor_cardapio; ?>
                </p>
          
              </div><!-- Menu Item -->
              <?php }?>


          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3><?php echo $categoria; ?></h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

            

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3><?php echo $categoria; ?></h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

             
          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3><?php echo $categoria; ?></h3>
            </div>

            <div class="row gy-5">
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

          
            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->