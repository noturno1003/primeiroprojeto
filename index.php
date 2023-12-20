<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


         <style>
     
                  body 
                  {background-image: url('https://i.pinimg.com/564x/9c/74/2d/9c742df90858b0cb33a699fa9f132b51.jpg');
                  background: cover auto;
                  background-position: center auto;
                  width: auto;
                  height: auto;}


             


             h1 
             {
             color: blue;
             margin-left: 300px;
             margin-top: 20vh;
             }


             .cadastro
            {
              margin-left: 400px;
              font-size:30px;
             }
      
 
             .teste 
             {
             position: absolute;
             bottom: 0;
             font-size: 20px;
             color: aqua;
             margin-left: 500px;
             }

             .fim 
             { background-color: black;
               width: 250px;
               height: 25px;
             }

             input[type="checkbox"] {
             width: 25px;
             height: 25px;
             }

         </style>
   
</head>
<body>
   
    <header>

     <h1>Bem vindo! Faça o login para acessar:</h1>

            <form class= 'cadastro' action="conteudo.php" method="GET">
            <label>e-mail:</label><input type="email" name="nomecandidato" required><br/>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            </form>
            <form class= 'cadastro'>
            <input type="checkbox" id="mostrarSenha"> Mostrar senha <br/>
            </form>
            <form class= 'cadastro' action="conteudo.php" method="GET">
            <input type="submit" value="entrar">
            </form> 

            <form class= 'cadastro' action="cadastro.php" method="GET">
            <input type="submit" value="cadastrar">
            </form>




            

    </header>



    <footer>
        <p class="teste fim" >  &copy;Todos os direitos reservados.</p>

      
    </footer>

    <script>
        document.getElementById('mostrarSenha').addEventListener('change', function() {
            var senhaInput = document.getElementById('senha');
            senhaInput.type = this.checked ? 'text' : 'password';
        });
    </script>


 
</body>
</html>

 
 
 
 
 
 
 
 
 
