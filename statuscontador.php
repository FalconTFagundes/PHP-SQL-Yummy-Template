<section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">
        <div class="row gy-4">
        <?php 
        $listar = listarTodosRegistros('contador','idcontador, campo, valor, cadastro, alteracao, ativo, img','A');
        foreach($listar as $item_contador){
        $campo = $item_contador -> campo;
        $valor = $item_contador -> valor;
        $img_contador = $item_contador -> img;
        ?>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $valor; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><?php echo $campo; ?></p>
            </div>
       
          </div><!-- End Stats Item -->
          <?php } ?>


        </div>
    
      </div>
    </section><!-- End Stats Counter Section -->