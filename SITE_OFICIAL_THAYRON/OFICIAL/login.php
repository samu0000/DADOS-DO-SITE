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
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    // Verifica se os campos foram preenchidos
    if (!empty($cpf) && !empty($senha)) {
        // Verifica se o usuário existe no banco de dados
        $sql = "SELECT * FROM tb_cad WHERE cpf = '$cpf' AND senha = '$senha'";
        $sql_query = $conn->query($sql) or die("falha na execução do codigo SQL:" .$conn->error);
$quantidade = $sql_query->num_rows;

if($quantidade == 1){
    $usuario = $sql_query->fetch_assoc();
            // Obtém o tipo de usuário
           

            // Inicia a sessão e define as variáveis de sessão
            if(!isset($_SESSION)){
            session_start();}
          
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome']= $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['telefone'] = $usuario['telefone'];
            $_SESSION['data']= $usuario['data'];
            $_SESSION['cpf'] = $usuario['cpf'];
            if($usuario['tipo']== "administrador"){
                header("location:casa_logado.php");
            }
           else{
            header("location:casa_logado_usuario.php");
           }
            // Redireciona para a página de acordo com o tipo de usuário
       /*     if ($tipo == "usuario") {
                echo "Voçe é usuário";
            } elseif ($tipo == "administrador") {
                echo "voçe é administrador";}
            */      
        } else {
            echo "cpf de usuário ou senha inválidos.";
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
    <title>Login</title>
    <style>
#fil{
    height:300px;
    width: 300px;
    border-radius:25px;
    color: white;
    background-color: #582bb1;
    opacity: 50%;
    border-color: rgb(46, 44, 44);
    font-family:Arial, Helvetica, sans-serif;
    position:absolute;
    top:35%;
    transform:translate(250%);
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
input{
    border-radius: 19px;
    height: 30px ;
    background-color: #4E2872;
    border-color: black;
    border: hidden;
    
}
#en{
    background-color:green;
    color:white;
    border: hidden;
    transform:translate(100%);
    position: absolute;
    top: 230px;
    top: 250px;
    height:15%;
    width:100px;
}

#lg{
    position:absolute;
    top: -20px;
}
#cpf{
    position:absolute;
    top: 80px;
    transform:translate(20%);
    width:200px;
    height:15%;
}
#senha{
    position:absolute;
    top: 170px;
    transform:translate(20%);
    width:200px;
    height:15%;
}
#cp{
    transform:translate(42%);
    position:absolute;
    top: 40px;
}
#sn{
    transform:translate(50%);
    position:absolute;
    top: 132px;
    height:15%;
    width:100px;
}
#cc{
    width:30px;
    height:30px;
    position: absolute;
   top:3%;
   transform:translate(300%);
}
#nt{
    position: absolute;
   top:215px;
   font-size:10px;
   transform:translate(38%);
   font-family:initial;
}
#fc{
    color:rgb(9, 255, 0);
}
        </style>
</head>
<body background="fundoo.png">
    <fieldset id="fil">
    <h1 id="lg">Login</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p id="cp"><label for="cpf">Cpf do usuario:</label></p>
        <input type="text" id="cpf" name="cpf"><br><br>
        <p id="sn"><label for="senha">Senha:</label></p>
        <input type="password" id="senha" name="senha"><br><br>
        <p id="nt">NÃO TEM CONTA?<a id="fc" href="cadastro2.php">FAÇA CADASTRO!</a></p>
        <input id="en" type="submit" value="Entrar">
        <img id="cc" src="log.png">
    </form>
</fieldset>
</body>
</html>