<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa :: inserir </title>
    <?php
    include "referencias.php";
    ?>
</head>
<body>
    <h1> Tarefa inserida</h1>

    <?php
      $descricao = $_POST["txtDescricao"];
      $data_entrega = $_POST["txtData"];
      $prioridade = $_POST["txtPrioridade"];
      $responsavel = $_POST["txtresponsavel"];
      
      $sql = "INSERT INTO tarefa(descricao,data_entrega,prioridade,responsavel) VALUES (?,?,?,?)";

      $comando = $conexao->prepare($sql);
      
      $comando->bind_param("ssss",$descricao,$data_entrega,$prioridade,$responsavel);

      if ($comando->execute())
      {
        echo "<h1> Tarefa marcada!</h1>";
      }
      else
      {
        echo "<h1>Erro!confira os dados!</h1>";
      }

      




    ?>
    
</body>
</html>