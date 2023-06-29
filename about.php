<?php

$listarsobre = listarTodosRegistros('sobrenos', 'idsobrenos, titulo, img, descricao1, video, cadastro, alteracao, ativo, subtitulo, confirm1, confirm2, confirm3, descricao2, imgvideo, mensagemcontato, telefone', 'A');
foreach($listarsobre as $item){   
$subtitulo = $item -> subtitulo;
$titulo_about = $item -> titulo;
$descricao1 = $item -> descricao1; 
$descricao2 = $item -> descricao2;
$img_about = $item -> img;
$img_video = $item -> imgvideo;
$video_about = $item -> video;
$c1 = $item -> confirm1;
$c2 = $item -> confirm2;
$c3 = $item -> confirm3;
$msgcontato = $item -> mensagemcontato;
$tel = $item -> telefone;

}

?>
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $subtitulo; ?></h2>
          <p><?php echo $titulo_about; ?></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(<?php echo $img_about; ?>)" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4><?php echo $msgcontato; ?></h4>
              <p><?php echo $tel; ?></p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                <?php echo $descricao1; ?>
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <?php echo $c1; ?></li>
                <li><i class="bi bi-check2-all"></i> <?php echo $c2; ?></li>
                <li><i class="bi bi-check2-all"></i> <?php echo $c3; ?></li>
              </ul>
              <p>
                <?php echo $descricao2; ?>
              </p>

              <div class="position-relative mt-4">
                <img src="<?php echo $img_video; ?>" class="img-fluid" alt="">
                <a href=<?php echo $video_about; ?> class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->