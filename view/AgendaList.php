<?php 
include "../controller/AgendaController.php";
include'../Util.php';
util::verificar();


   $agenda = new AgendaController();

  if(!empty($_GET['id'])){
    $agenda->deletar($_GET['id']);
    header("location: AgendaList.php");
  }
  if(!empty($_POST)){
    $load = $agenda->pesquisar($_POST);

  }else{
    $load = $agenda->carregar();

  }
   //var_dump($load);
  // exit;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="/img/pata.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda Mensal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <h1>Listagem da Agenda Mensal</h1>
    <form action="AgendaList.php" method="post">
      <div class="row">
        <div class="col-2">
          <select name="campo" clas="form-select">
            <option value="veterinaria">Nome Veterinário(a)</option>
            <option value="paciente">Paciente</option>
            <option value="consulta">Tipo Consulta</option>
            <option value="dia">Data</option>
            <option value="horario">Horário</option>
          </select>
        </div>

        <div class="col-4">
          <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        </div>

        <div class="col-6">
          <button class="btn btn-primary" type="submit">
          <i class="fa-solid fa-magnifying-glass"></i> Buscar
          </button>
          <a class="btn btn-success" href="AgendaForm.php"><i class="fa-solid fa-plus"></i>  Cadastrar</a>
          <a class="btn btn-primary" href="main.php">Voltar</a>
        </div>
      <div>
    <br>
</form>
  <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Nome Veterinário(a)</th>
            <th>Paciente</th>
            <th>Tipo consulta/procedimento</th>
            <th>Data</th>
            <th>Horario</th>       
            <th scope="col"></th>
            <th scope="col"></th>
          
            
        </tr>
    <?php 
    foreach($load as $item){
      echo"<tr>
            <td>$item->id</td>
            <td>$item->veterinaria</td>
            <td>$item->paciente</td>
            <td>$item->consulta</td>
            <td>$item->dia</td>
            <td>$item->horario</td>
           
            <td><a href='./AgendaForm.php?id=$item->id'><i class='fa-solid fa-pen-to-square'style='color:orange;'></i></a></td>
            <td><a href='./AgendaList.php?id=$item->id'
                    onclick='return confirm(\"Deseja Excluir?\")'
                    ><i class='fa-solid fa-trash' style='color:red;'></i></a></td>
           </tr>";
    }
        ?>
    </table>
    </div>
    <footer>
            <p>Copyright &copy 2023 por Dayanna de Campos Henrique. Todos os direitos reservados.</p>
         </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>