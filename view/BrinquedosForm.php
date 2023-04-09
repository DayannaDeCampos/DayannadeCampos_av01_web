<?php 
include "../controller/BrinquedosController.php";
include'../Util.php';
util::verificar();


$brinquedos = new BrinquedosController();

  if(!empty($_POST['id'])){
    $brinquedos->update($_POST);
    header("location: BrinquedosList.php");

  } elseif(!empty($_POST)) {
    $brinquedos->salvar($_POST);
    header("location: BrinquedosList.php");

  }

  if(!empty($_GET['id'])){
    $data = $brinquedos->buscar($_GET['id']);
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="/img/pata.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brinquedos Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body style="background-image: url(/img/background.jpg)">
  <nav class="navbar" style="background-color: rgb(184, 151, 214)">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <b>Pet Shop da Dayanna</b>
    </a>
          <a class="nav-link" href="UsuarioList.php">Listar Clientes</a>
          <a class="nav-link" href="AgendaList.php">Listar Consultas</a>
          <a class="nav-link" href="BrinquedosList.php">Listar Brinquedos</a>
          <a  class="btn btn-danger" href= 'login.php?sair=1' >Sair</a>


  </div>
</nav>
  <div class="container">
      <h1>Formulário Cadastro Brinquedos Para Vendas</h1>
        <form action="BrinquedosForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/><br>
          
            <div class="col-3">
              <label>Nome</label><br>
              <input type="text" class="form-control" name="nome" value="<?php echo !empty($data->nome) ? $data->nome : "" ?>"/><br>
            </div>
            <div class="col-3">
          <label>Cor</label><br>
              <input type="text" class="form-control" name="cor" value="<?php echo !empty($data->cor) ? $data->cor : "" ?>"/><br>
            </div>
          
            <div class="col-3">
              <label>Estoque Dispinível(uni.)</label><br>
              <input type="text" class="form-control" name="estoque" value="<?php echo !empty($data->estoque) ? $data->estoque : "" ?>"/><br>
            </div>
            <div class="col-3">
          <label>Valor(uni.)</label><br>
              <input type="text" class="form-control" name="valor" value="<?php echo !empty($data->valor) ? $data->valor : "" ?>"/><br>
            </div>
          
            <input type="submit" class="btn btn-success" value="Salvar"/>
            <a href="BrinquedosList.php" class="btn btn-primary">Voltar</a>
        </form>
      </div>
      <footer>
            <p>Copyright &copy 2023 por Dayanna de Campos Henrique. Todos os direitos reservados.</p>
         </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>