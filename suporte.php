<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>
  <style>
     body {background-image: url('https://i.pinimg.com/564x/be/34/23/be3423e7324d400b4c5b9fee077d848a.jpg');

                  background: cover auto;
                  background-position: no-repeat;
                  width: auto;
                  height: auto;
                 }



                 form 
                 {
                 margin-left: 100px;
                 font-size:30px;
                 }

                  .sup 
                  {
                  font-size: 100px;
                  }

                  label 
                  {
                    margin-left: 400px;
                    font-size: 25px;
                  }


  </style>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <header>
 <!-- nav bar-->
    <div class="container bg-dark">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="conteudo.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="features.php" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="FAQs.php" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="sobre.php" class="nav-link px-2 text-white">Sobre</a></li>
          <li><a href="suporte.php" class="nav-link px-2 text-white">Suporte</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
        <a href= "index.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
        <a href= "cadastro.php"><button type="button" class="btn btn-warning">Sign-up</button></a>
        </div>
      </div>
     </div>
<!-- end nav bar-->
        <h1>Bem vindo ao suporte, para prosseguir peço que coloque suas informações e em seguida descreva sobre o que precisa de suporte</h1>
             <label>Seu nome:</label><input type="text" name="nomecandidato"><br/>
             <label>Seu e-mail:</label><input type="text" name="emailcandidato"><br/>
             <label>motivo:</label><input type="text" name="ajudacanditato"><br/>
    </header>


</body>
</html>
