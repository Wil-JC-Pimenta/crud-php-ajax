<!DOCTYPE html>
<html>
<head>
  <style>
    /*Estilos CSS para H1 */

    h1{
       margin-block-end: auto;
       margin-block-start: auto;
       color: #45a049;
       font-size: 3em;
       align-items:center;
    
    }
    /* Estilos CSS para o formulário */
    form {
      width:300px;
   
    }

    input[type="text"],
    input[type="email"],
    input[type="button"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="button"] {
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
    }

    input[type="button"]:hover {
      background-color: #45a049;
    }

    #resposta {
      margin-top: 10px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  
  <h1>Digite seu nome e email</h1>
  <form method="post">
    <input type="text" id="nome" name="nome" placeholder="Digite o nome" />
    <br>
    <input type="email" id="email" name="email" placeholder="Digite o email" />
    <br>
    <input type="button" id="btn_gravar" value="Salvar" />
  </form>
  <div id="resposta"></div>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
