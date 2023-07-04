<?php 
$listar_titulo_chefs = listarTodosRegistros('titulochef','idtitulochef, titulo1, titulo2_1, titulo2_2, titulo2_3, cadastro, alteracao, ativo','A');
foreach($listar_titulo_chefs as $item_titulo_chef){
$titulo_chef_1 = $item_titulo_chef -> titulo1;
$titulo_chef2_1 = $item_titulo_chef -> titulo2_1;
$titulo_chef2_2 = $item_titulo_chef -> titulo2_2;
$titulo_chef2_3 = $item_titulo_chef -> titulo2_3;

}

?>


<section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $titulo_chef_1; ?></h2>
          <p><?php echo $titulo_chef2_1; ?> <span><?php echo $titulo_chef2_2; ?></span> <?php echo $titulo_chef2_3; ?></p>
        </div>

        <div class="row gy-4">

        <?php
$listar_chef = listarTodosRegistros('cardchef','idcardchef, img, nome, cargo, descricao, cadastro, alteracao, ativo','A');
foreach($listar_chef as $item_chef){
  $img_chef = $item_chef -> img;
  $nome_chef = $item_chef -> nome;
  $cargo_chef = $item_chef -> cargo;
  $descricao_chef = $item_chef -> descricao;
?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img"><!-- img chef -->
                <img src=<?php echo $img_chef; ?> class="img-fluid" alt=""> <!-- chef1 -->
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $nome_chef; ?></h4>
                <span><?php echo $cargo_chef; ?></span>
                <p><?php echo $descricao_chef; ?></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->
<?php }  ?>
        </div>

      </div>
    </section><!-- End Chefs Section -->