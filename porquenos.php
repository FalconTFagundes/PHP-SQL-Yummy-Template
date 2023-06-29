<?php 
$listar = listarTodosRegistros('carddest', 'idcarddest, titulo, descricao, cadastro, alteracao, ativo', 'A');
foreach($listar as $item){
    $titulo_card_destaque = $item -> titulo;
    $descricao_card_destaque = $item -> descricao;
}
?>
<section id="why-us" class="why-us section-bg">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-box">
                    
                    <h3><?php echo $titulo_card_destaque; ?></h3>
                    <p>
                        <?php echo $descricao_card_destaque; ?>
                    </p>
                    <div class="text-center">
                        <a href="#" class="more-btn">Saiba Mais <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
            </div><!-- End Why Box -->
      
           
           
            <div class="col-lg-8 d-flex align-items-center">
          
                <div class="row gy-4">
                    
            <?php 
            $lista2 = listarTodosRegistros('card', 'idcard, titulocard, descricaocard, cadastro, alteracao, icon, ativo', 'A'); 
            foreach($lista2 as $item2){
                $titulo_card = $item2 -> titulocard;
                $descricao_card = $item2 -> descricaocard;
       
        ?>
                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-clipboard-data"></i>
                            <h4><?php echo $titulo_card; ?></h4> 
                            <p><?php echo $descricao_card; ?></p>
                         
                        </div>
                      
                    </div><!-- End Icon Box --> 
                
                    <?php } ?>
                </div>
      
            </div>
         
       
    
        </div>
      
    </div>
    
</section><!-- End Why Us Section -->