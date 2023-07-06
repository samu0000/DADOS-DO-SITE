<?php
// Configurações do banco de dados
$host = "localhost";
$user = "root";
$password = "";
$dbname = "cadastro2";

// Conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $senha = ($_POST['senha']);
    $cpf = $_POST['cpf'];
    $data = $_POST['data'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $tipo = $_POST["tipo"];


    // Verifica se os campos foram preenchidos
    if (!empty($nome) && !empty($senha) && !empty($tipo)) {
        // Verifica se o nome de usuário já existe no banco de dados
        $sql = "SELECT * FROM tb_cad WHERE senha = '$senha'  || cpf = '$cpf' || telefone = '$telefone' || email = '$email'";
        $result = mysqli_query($conn, $sql);
       
        if (mysqli_num_rows($result) > 0 ) {
            echo "Esses dados ja estão cadastrados (por favor insira outro).";

            
        }else {
              
            
            // Insere o novo usuário no banco de dados
            $sql = "INSERT INTO tb_cad (nome, senha, cpf,data, endereco, telefone,email , tipo) VALUES ('$nome', '$senha', '$cpf','$data', '$endereco', '$telefone','$email', '$tipo')";
            if (mysqli_query($conn, $sql)) {
                header("location:login.php");
             
               
            } else {
                echo "Erro ao cadastrar usuário: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Por favor, preencha todos os campos.";
     
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<limk rel="stylesheet" href="cadastrin.css">
    <title>Cadastro de Usuário</title>
	<style>
        #fill{
    border-radius: 30px;
    height: 730px ;
    width: 400px;
    transform: translate(180%);
    position: absolute;
    top: 100px;
    background-color: #582bb1;
    opacity: 50%;
    color: white;
    border-color: rgb(46, 44, 44);
    font-family:Arial, Helvetica, sans-serif;

}
input{
    border-radius: 19px;
    height: 40px ;
    position: relative;
   top:-20%;
   width: 300px;
   border: hidden;
   background-color: #4E2872;
   transform: translate(15%);
   
}
p{
   position: relative;
   top:-30%;
   
}
#pp{
    position: absolute;
   top:6.5%;  
   transform: translate(42%);
}
#pp1{
    position: absolute;
   top:17.5%;  
   transform: translate(100%);

}
#pp2{
    position: absolute;
   top:28.5%;  
   transform: translate(200%);
}
#pp3{
    position: absolute;
   top:39.5%;  
   transform: translate(35%);
}
#pp4{
    position: absolute;
   top:50.5%;  
   transform: translate(73%);
}
#pp5{
    position: absolute;
   top:61.5%;  
   transform: translate(85%);
}
#pp6{
    position: absolute;
   top:72%;  
   transform: translate(120%);
}
#pp7{
    position: absolute;
   top:82%;  
   transform: translate(42%);
}
fieldset, input{
    justify-content:space-around;
}
#nome{
    position: absolute;
   top:11%;
}
#senha{
    position: absolute;
   top:22%; 

}
#cpf{
    position: absolute;
   top:33%;
}
#data{
    position: absolute;
   top:44%;
   color: white;
   font-size: 20px
}
#endereco{
    position: absolute;
   top:55%;
}
#telefone{
    position: absolute;
   top:66%;
}
#email{
    position: absolute;
   top:77%;
}
#ct{
    position: absolute;
   top:92%;
   background-color: green;
   border-radius:20px;
   width: 100px;
   color: white;
   opacity: 60PX;
   transform:translate(150%)
}
#tipo{
    position: absolute;
   top:87%;
   width: 100px;
   transform: translate(50%);
   background-color: #8B58EF;
   height: 30px;
   border-radius: 30px;
   border-color:black;
   color:white;
}
#cd{
    position: absolute;
   top:-1.5%;
}
#cc{
    width:35px;
    height:35px;
    position: absolute;
   top:1%;
   transform:translate(530%);
}
</style>
</head>
<body background="fundoo.png">
    <fieldset id="fill">
    <h1 ID="cd">CADASTRO</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p id="pp"><label for="nome">Nome de usuário:</label></p>
        <input type="text" id="nome" name="nome"><br><br>
        <p id="pp1"><label for="senha">Senha:</label></p>
        <input type="password" id="senha" name="senha"><br><br>
        <p id="pp2"><label for="senha">cpf:</label></p>
        <input type="text" id="cpf" name="cpf"><br><br>
        <p id="pp3"><label for="senha">data de nascimento:</label></p>
        <input type="date" id="data" name="data"><br><br>
        <p id="pp4"><label for="senha">endereço:</label></p>
        <input type="text" id="endereco" name="endereco"><br><br>
        <p id="pp5"><label for="senha">telefone:</label></p>
        <input type="text" id="telefone" name="telefone"><br><br>
        <p id="pp6"><label for="senha">email:</label></p>
        <input type="email" id="email" name="email"><br><br>
        <p id="pp7"><label for="tipo">Tipo de usuário:</label></p>
        <select id="tipo" name="tipo">
            <option value="usuario">Usuário</option>
            <option value="administrador">Administrador</option>
        </select><br><br>
        <input type="submit" id="ct" value="Cadastrar">
        <img id="cc" src="log.png">
</fieldset>
    </form>
</body>
</html>