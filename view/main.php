<?php
  include'../Util.php';
  util::verificar();

?>
<html>
  <head>
    <title>Pet Shop Dayanna</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="/img/pata.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
  <br>
		<h5>Tela de cadastros</h5>
		<?php
				echo "<b>Seja bem vindo: </b>" .$_SESSION['login']. " ";
		?>

<div class="d-grid gap-2 col-6 mx-auto">
<a href="UsuarioForm.php"button href="UsuarioForm.php" class="btn btn" style="background-color: rgb(184, 151, 214)" type="button">Cadastrar Cliente(pet)</button></a>
<a href="BrinquedosForm.php" button class="btn btn" style="background-color: rgb(184, 151, 214)" type="button">Cadastrar Brinquedos para venda</button> </a>
<a href="AgendaForm.php" button class="btn btn" style="background-color: rgb(184, 151, 214)" type="button">Cadastrar Consultas</button> </a>
</div>
 

 

 <section >
           <br> <br> <h4>Contato</h4>
            <footer>
                <ul>
                   <center> <span class="material-symbols-outlined">phone_in_talk</span>
                        <a>Telefone: (49) 9 8883-2143 </a><br>
                    <span class="material-symbols-outlined">outgoing_mail</span>
                        <a>Email: PetShop.Daya@gmail.com </a><br>
                    <span class="material-symbols-outlined">location_on</span>
                        <a>ENDEREÇO: <p>Rua das rosas,<br>
                            Bairro do céu<br>
                            Chapecó/SC</p> </a></li></center>
                </ul>
            </footer>

        <footer>
            <div>
                <center><img src="/img/icone.png"></center>
                <center><h1>Pet Shop</h1></center>
            </div>
        </footer>
    </div>
        <footer>
            <p>Copyright &copy 2023 por Dayanna de Campos Henrique. Todos os direitos reservados.</p>
         </footer>
         </section>
  </body>
</html>