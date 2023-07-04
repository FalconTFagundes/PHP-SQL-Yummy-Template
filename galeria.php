<?php 
$listar_titulo_galeria = listarTodosRegistros('titulosgaleria','idtitulosgaleria, titulo1, titulo2, titulo2_1, cadastro, alteracao, ativo','A');
foreach($listar_titulo_galeria as $item_titulo_galeria){
  $titulo1_galeria = $item_titulo_galeria -> titulo1;
  $titulo2_galeria = $item_titulo_galeria -> titulo2;
  $titulo2_1_galeria = $item_titulo_galeria -> titulo2_1; 
}


?>
<!-- LISTANDO TITULOS -->
<section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $titulo1_galeria; ?></h2>
          <p><?php echo $titulo2_galeria; ?> <span><?php echo $titulo2_1_galeria; ?></span></p>
        </div>
     
        <div class="gallery-slider swiper">
     
          <div class="swiper-wrapper align-items-center">
          <?php 
        $listar_galeria = listarTodosRegistros('galeria','idgaleria, img, cadastro, alteracao, ativo','A');
        foreach($listar_galeria as $item_galeria){
          $img_galeria = $item_galeria -> img;
        
      ?>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?php echo $img_galeria; ?>"><img src="<?php echo $img_galeria; ?>" class="img-fluid" alt=""></a></div>
           
            <?php } ?>
          </div>
       
          <div class="swiper-pagination"></div>
        
        </div>

      </div>
    </section><!-- End Gallery Section -->