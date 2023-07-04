<?php 
$listar_d = listarTodosRegistros('titulodepoimento','titulo, subtitulo, cadastro, alteracao, ativo','A');
foreach($listar_d as $item_d){

  
  $titulod = $item_d -> titulo ;
  $subtitulod = $item_d -> subtitulo;
  
  

}

?>
<section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2> <?php echo $titulod ; ?> </h2>
          <p> <?php echo $subtitulod ;  ?></span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                  <?php 
$listar_menu = listarTodosRegistros('depoimento','depoimento, nome, cargo, estrelas, img, cadastro, alteracao, ativo','A');
foreach($listar_menu as $item_depoimento){

  
  $depoimento = $item_depoimento -> depoimento;
  $nome = $item_depoimento -> nome;
  $cargo = $item_depoimento -> cargo;
  $estrelas = $item_depoimento -> estrelas;
  $img_depoimento = $item_depoimento -> img;



?>
                    <div class="testimonial-content">
                      
                      
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        
                        <?php echo $depoimento; ?>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3> <?php echo $nome; ?></h3>
                      <h4> <?php echo $cargo; ?></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src=./assets/img/testimonials/<?php echo $img_depoimento; ?> class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
             
              </div>
              <div class="swiper-pagination"></div>
            </div><!-- End testimonial item -->
      
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
              
                <div class="col-lg-6">
           
                <?php } ?>
      
                    <div class="testimonial-content">
                   
                    </div>
         
  
         
       </div>
        
      </div>
    </section><!-- End Testimonials Section -->