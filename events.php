<?php 
$listar_titulo_events = listarTodosRegistros('tituloeventos','idtituloeventos, titulo1, titulo2_1, titulo2_2, titulo2_3, cadastro, alteracao, ativo','A');
foreach($listar_titulo_events as $item_titulo_events){
$titulo1_events = $item_titulo_events -> titulo1;
$titulop1_events = $item_titulo_events -> titulo2_1;
$titulop2_events = $item_titulo_events -> titulo2_2;
$titulop3_events = $item_titulo_events -> titulo2_3;

}

?>

<section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $titulo1_events; ?></h2>
          <p><?php echo $titulop1_events; ?> <span><?php echo $titulop2_events; ?> </span> <?php echo  $titulop3_events; ?></p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
          <?php 
$listar_eventos = listarTodosRegistros('eventos','ideventos, img, tituloev, preco, descricao, cadastro, alteracao, ativo','A');
foreach($listar_eventos as $item_eventos){
$img_eventos = $item_eventos -> img;
$titulo_eventos = $item_eventos -> tituloev;
$preco_eventos = $item_eventos -> preco;
$descricao_eventos = $item_eventos -> descricao;

?>
            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(./assets/img/events/<?php echo $img_eventos; ?>)">
              <h3><?php echo $titulo_eventos; ?></h3>
              <div class="price align-self-start"><?php echo $preco_eventos;?></div>
              <p class="description">
                <?php echo $descricao_eventos; ?>
              </p>
        
            </div>
            <?php } ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>