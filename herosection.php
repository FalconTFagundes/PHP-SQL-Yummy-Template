<?php
    $listar = listarTodosRegistros('banner','idbanner, titulo, descricao, video, img, cadastro, alteracao, ativo','A');
    foreach($listar as $item){
    $titulo = $item -> titulo;
    $descricao = $item -> descricao;
    $banner = $item -> img;
    $video = $item -> video;
  }

?>

<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up"><?php echo $titulo; ?></h2>
          <p data-aos="fade-up" data-aos-delay="100"><?php echo $descricao; ?></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
            <a href="<?php echo $video; ?>" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="<?php echo $banner;?>" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>