<?php
echo"<head>
<meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh'
     crossorigin='anonymous'>
</head>";
$id = $_POST['id'];
$comando = $_POST['comando'];
include_once("conec.php");
if($comando == "Deletar"){
$sql = "DELETE FROM  testform WHERE id = $id";
if(mysqli_query($conn, $sql))
    echo"DELETADO COM SUCESSO!";
    else
    echo"CADASTRO NÃO DELETADO!";
    }
if($comando == "Editar"){
    $sql = "SELECT * FROM testform WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $funcionario = mysqli_fetch_array($result);
    $checkedM = $funcionario["sexo"] == "Masculino"?"checked":"";
    $checkedF = $funcionario["sexo"] == "Feminino"?"checked":"";
    $checkedO = $funcionario["sexo"] == "Outro"?"checked":"";

    $selectedM = $funcionario['escol'] == "medio"?"selected":"";
    $selectedF = $funcionario['escol'] == "fundamental"?"selected":"";
    $selectedS = $funcionario['escol'] == "superior"?"selected":"";


    echo"<div class='container mt-5'>
    <form action='update_cliente.php' method='POST'>
    <input type='hidden' name='id' value='$id'>
      <div class='form-group'>
        <label for='nome'>Nome:</label>
        <input type='text' class='form-control'  name='neme' value='".$funcionario["nome"]."'maxlength='200'>
      </div>
      <div class='form-group'>
        <label for='nome'>Usuario:</label>
        <input type='text' class='form-control' name='usuario' value='".$funcionario["usuario"]."' maxlength='30'>
      </div>
      <div class='form-group'>
        <label for='number'>Telefone:</label>
        <input type='number' class='form-control'  maxlength='11' name='telefone' value='".$funcionario["telefone"]."'>
      </div>
      <div class='form-group'>
        <label for='dataNascimento'>Data de Nascimento:</label>
        <input type='date' class='form-control datepicker'  name='nascimento' value='".$funcionario["nascimento"]."'>
      </div>              Sexo:
        <div class='form-check'>
          <input class='form-check-input' type='radio' name='sexo' ".$checkedM." value='Masculino'>
          <label class='form-check-label' >Masculino</label>
        </div>
        <div class='form-check'>
          <input class='form-check-input' type='radio' name='sexo'  ".$checkedF." value='Feminino'>
          <label class='form-check-label'  >Feminino</label>
        </div>
        <div class='form-check'>
          <input class='form-check-input' type='radio' name='sexo'  ".$checkedO." value='Outro'>
          <label class='form-check-label'>Outro</label>
        </div>
        <div class='form-group'>
              <label for='nivel-escolaridade'>Escolaridade:</label>
              <select name='escol'  class='form-control' >
                <option  value='medio' ".$selectedM." >Ensino Médio</option>
                <option  value='fundamental' ".$selectedF.">Ensino Fundamental</option>
                <option  value='superior' ".$selectedS." >Ensino Superior</option>
              </select>
            </div>
      <div class='form-group'>
        <label for='email'>Email:</label>
        <input type='email' class='form-control' name='email' maxlength='70' value='".$funcionario["email"]."'>
      </div>
      <div class='form-group'>
        <label for='password'>Senha:</label>
        <input type='password' class='form-control' name='senha' maxlength='30' value='".$funcionario["senha"]."'>
      </div>
      <button type='submit' class='btn btn-primary' >Salvar</button>
    </form>
  </div>
";
}
mysqli_close($conn);
?>