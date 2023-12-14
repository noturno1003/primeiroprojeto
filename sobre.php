<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>sobre nosso site!</title>
         <style>
            body
           {background-image: url('https://i.pinimg.com/564x/be/34/23/be3423e7324d400b4c5b9fee077d848a.jpg');     
           background: cover auto;
           background-position: no-repeat;
           width: 1250px;
            height: 500px;
            }

            .a 
           {
             color: blue;
            margin-left: 350px;
          }
 
           .b
           {
            color: black;
             margin-left: 25px;
           }
 
           .img1
           {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 250px;
            width: 250px;
            margin-left: 500px;
           }

          
           .button {
           margin-left: 1150px;
            font-size: 40px;
           }
           .botao-texturizado {
            background-image: url('caminho/da/sua/textura.jpg'); /* Substitua pelo caminho da sua textura */
            background-size: cover; /* Ajusta o tamanho da imagem para cobrir completamente o botão */
            color: blue; /* Cor do texto no botão */
            padding: 15px 20px; /* Espaçamento interno do botão */
            font-size: 20px; /* Tamanho do texto no botão */
            border: none; /* Remove a borda do botão */
            cursor: pointer; /* Transforma o cursor em uma mão ao passar sobre o botão */
           }
           
           .botao-texturizado:hover {
            opacity: 0.8; /* Reduz a opacidade ao passar o mouse */
           }

         </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

 <h1 class ='a'>Saiba tudo sobre nosso site!!!</h1>
 <h2 class ='b'>Nosso site foi criado com a ideia de juntar a comunidade gamer, trazemos diversos conteúdo diáriamente e focamos em te manter o mais atualizado possível. Na nossa página
    inicial trago algumas lives minhas e de outros jogadores, você pode postar suas jogadas hoje mesmo e outras pessoas vão ter acesso assim que você definir se quer deixar o seu vídeo
    público ou privado. Temos um suporte ativo e estamos sempre a disposição para atende-lo(a) da melhor forma possível!!!</h2>
 <img class ='img1' src= "https://i.pinimg.com/236x/9f/01/8a/9f018a13c5b0b1905ffdeda673f4ce6e.jpg">



 <form action="conteudo.php" method="GET">
         <button class= 'button botao-texturizado'>voltar</button>
         </form>





    </header>

</body>
</html>
