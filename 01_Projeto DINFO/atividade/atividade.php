<?php
    session_start();
    include_once("..\database\Conexao.php");
    if (!isset($_GET['id'])){
        header('location: ../listar');
    }
    $id_projeto = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../detalhe/style.css">
    <title>Criar Atividade</title>
</head>
<body>
<?php
    		include_once("..\HTML\Menu_Externo.php");
?>
<div id="atividades-container">

<form action="criarAtividade.php" method="post">
<b>Nome da atividade</b>
<input type="text" name="Nome_Ativ" placeholder="Nome da Atividade">

<input type="hidden" name="FK_Id_Projeto" value="<?php echo $id_projeto;?>">

<b>Usuario Responsável</b>

<select name="Fk_Id_Usuario">

<?php 

    $Result_Tbusuarios = "SELECT nome, id FROM usuario";
    $usuarios = $conn -> query($Result_Tbusuarios);
    
    if ($usuarios->num_rows > 0) {
           
           while($usuario = $usuarios->fetch_assoc()) {

            $usuario_id = $usuario['id'];
            $usuario_nome = $usuario['nome'];
            if($usuario_id == $_SESSION['id']) {
                $select = "selected";
            }else{
                $select = " ";
            }
            echo "<option value='$usuario_id' $select> $usuario_nome </option>";

           }
    }


?>
<!-- <option value="1">user01</option>
<option value="2">user02</option> -->
</select>

<b>Data prevista para terminar</b>
<input type="date" name="dtConcPrev">
<b>Descrição da atividade</b>
<input type="text" name="descicao" placeholder="Descrição da atividade">
<button type="submit"> Cadastrar </button>
</form>
</div>
</body>
</html>