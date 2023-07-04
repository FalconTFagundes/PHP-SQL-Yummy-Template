<?php
include_once('config/conexao.php');
include_once('config/constantes.php');
include_once('func/funcoes.php');

$listar_titulo_reserva = listarTodosRegistros('tituloreserva', 'idtituloreserva, titulo1, titulo2, titulo2_1, titulo2_2, cadastro, alteracao, ativo, img, msgreserva', 'A');
foreach ($listar_titulo_reserva as $item_titulo_reserva) {
    $titulo1_reserva = $item_titulo_reserva->titulo1;
    $titulo2_reserva = $item_titulo_reserva->titulo2;
    $titulo2_1reserva = $item_titulo_reserva->titulo2_1;
    $titulo2_2reserva = $item_titulo_reserva->titulo2_2;
    $img_reserva = $item_titulo_reserva->img;
}
?>

<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2><?php echo $titulo1_reserva; ?></h2>
            <p><?php echo $titulo2_reserva; ?><span><?php echo $titulo2_1reserva; ?></span> <?php echo $titulo2_2reserva; ?></p>
        </div>

        <div class="row g-0">
            <div class="col-lg-4 reservation-img" style="background-image: url(<?php echo $img_reserva; ?>);" data-aos="zoom-out" data-aos-delay="200"></div>

            <div class="col-lg-8 d-flex align-items-center">
                <form action="" method="POST" role="form" class="rafaelFrm" data-aos="fade-up" id="faelStyle">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Seu Telefone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="text" name="date" class="form-control" id="date" placeholder="Data" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="text" class="form-control" name="time" id="time" placeholder="Hora" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="number" class="form-control" name="people" id="people" placeholder="Numero de Pessoas" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Mensagem"></textarea>
                        <div class="validate"></div>
                    </div>
                    <style>
                        button {
                            background-color: red;
                            padding: 20px;
                            width: 20%;
                            border-radius: 20px;
                            color: white;
                            border: none;
                            outline: none;

                        }
                    </style>
                    <br>
                    <div class="text-center"><button type="submit">Salvar</button></div>
                </form>
            </div><!-- End Reservation Form -->

        </div>

    </div>
</section><!-- End Book A Table Section -->

<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['people']) && isset($_POST['message'])) {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['phone'];
    $data = $_POST['date'];
    $hora = $_POST['time'];
    $pessoas = $_POST['people'];
    $mensagem = $_POST['message'];

    $resultado = cadastro($nome, $email, $telefone, $data, $hora, $pessoas, $mensagem);


} else {
    echo "Vazio";
}
?>
