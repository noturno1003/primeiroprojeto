<?php
// print_r($_GET);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Cadastro</title>

     <style>

             form 
             {
              margin-left: 400px;
              font-size:30px;
              color: white;

             }

             h1
             {
             color: red;
             margin-left: 400px;
             margin-top: 20vh;
             }

             body 
             {
            background-image: url('https://i.pinimg.com/564x/0b/ff/da/0bffdabe241ea8bad0c339f367bc5007.jpg');
              background: cover auto;
               background-position: center auto;
               width: auto;
              height: auto;
             }


              .fim 
             { background-color: black;
               width: 250px;
               height: 25px;
             }


             .teste 
             {
             position: absolute;
             bottom: 0;
             font-size: 20px;
             color: white;
             margin-left: 500px;
             }

             .button 
             {
              font-size: 35px;
              margin-left: -390px;

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
            
           .cadastro
            {
            margin-left: 400px;
            font-size:30px;
           }

           input[type="checkbox"] {
            width: 25px;
            height: 25px;
           }



     </style>
</head>
<body>


                

    <header>

         <form action="index.php" method="GET">
         <button class= 'button botao-texturizado'>voltar</button>
         </form>
         <h1>Faça o seu cadastro aqui👇</h1>

             <form action="index.php" method="GET">
             <label>Nome:</label><input type="text" name="nomecandidato"><br/>
             <label>Idade:</label><input type="text" name="idadecandidato"><br/>
             <label>Telefone:</label><input type="text" name="telefonecandidato"><br/>
             <label>E-mail:</label><input type="text" name="emailcandidato"><br/>
             <label for="senha">Senha:</label>
             <input type="password" id="senha" name="senha">
             </form>
             <form class= 'cadastro'>
             <input type="checkbox" id="mostrarSenha"> Mostrar senha <br/>
             </form>
             <form action="index.php" method="GET">
             <input type="submit" value="criar login">
             </form>


    </header>


    <footer>
        <p class='teste fim'>&copy;Todos os direitos reservados.</p>
    </footer>
    <script>
        document.getElementById('mostrarSenha').addEventListener('change', function() {
            var senhaInput = document.getElementById('senha');
            senhaInput.type = this.checked ? 'text' : 'password';
        });
    </script>
</body>
</html>
