<?php
      require('protecao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>Home</title>
    <style>
        *{
    margin: 0;
    font-family: Verdana, Geneva, Tahoma, sans-serif;

}
nav{
    background-color: #8B58EF;
    display: flex;
    padding: 20px;
}

{
   text-decoration: none;
    color: rgb(255, 255, 255);
    
}

header h3{
    display: inline-block;
    padding: 15px;
    font-size: 20px;
    padding-top: 40px;
    
}
img{
    width: 200px;
    padding: 0px;
    height: 100px;
}
#pesquisa{
    float:left;
  background-color:white;
  padding-left:5px;
  font-size:18px;
  border:none;
  height:45px;
  width:230px;
  border-radius:25px 0px 0px 25px;
}
#busca{
    border:none;
    float:left;
    height:47px;
    border-radius:0 50px 50px 0;
    width:50px;
    font-weight:bold;
    background:#5e17eb;
}
header #pes{
    padding-left: 500px;
    padding-top: 30px;
}
header #log{
    width: 40px;
    height: 40px;
    padding-top: 30px;
    padding-left: 20px;
}
header h2{
    padding: 0;
    color: white;
    padding-top: 30px;
    font-size: 35px;
}
h2{
    height: 80px;
    width: 10px;
    font-family: initial;
    color: black;
}
#busca #lupinha{
    width: 27px;
    height: 27px;
}

#lua{
    padding-top: 30px;
    padding-left: 0px;
    width: 40px;
    height: 40px;
    transform: translate(600%);
    visibility: visible;


}
#lua:hover{
    cursor: pointer;
}
#v, #v2{
    transform: translate(2400%);
    font-family: initial;
    visibility: visible;
}
#v2{
    margin-left:-3%;
}
#sol{
    margin-left:1%
    
}
a{
    text-decoration:none;
    color:white;
}
body #ff{
    position: absolute;
    top: 26%;
    transform: translate(170%);
    width: 600px;
    height: 600px;
    
}
#tr{
    position: absolute;
    top: 35%;
    height: 40%;
    width: 40%;
    transform: translate(-35%);
}
#fon{
    position: absolute;
    top: 48%;
    transform: translate(40%);
    font-size: 300%;
    font-family: initial;
    margin-left:2%;
}
#fonn{
    position: absolute;
    top: 52%;
    transform: translate(35%);
    font-size: 300%;
    font-family: inherit;
    color: orange;
    margin-left:2%;
}
#fonnn{
    position: absolute;
    top: 57%;
    transform: translate(31.5%);
    font-size: 140%;
    font-family: inherit;
}
#sol{
    padding-top: 30px;
    padding-left: 0px;
    width: 40px;
    height: 40px;
    transform: translate(470%);
    visibility: hidden;
    
}
#tb{
    position: absolute;
    top: 35%;
    height: 40%;
    width: 40%;
    transform: translate(-35%);
    visibility: hidden;
}
body #fff{
    position: absolute;
    top: 26%;
    transform: translate(170%);
    width: 600px;
    height: 600px;
    visibility: hidden;
    }
    footer{
     
     background-color: #8B58EF;
     padding: 30px;
     text-align: center;
     padding-top:10px;
     margin-top:50%;
    
 }
 ::-webkit-scrollbar{
  
 }
 ::-webkit-scrollbar-thumb{

 }
 footer h3{
     color:white;
     margin-left:4%;
     margin-top:2%;
 }
 footer h5{
     color:white;
     margin-left:4%;
    
 }
 footer img{
     margin-top:-15%;
     margin-left:40%;
     width:150px;
     height:75px;
 }
 footer h4{
     color:white;
     margin-left:80%;
     margin-top:-4%;
     font-size:20px;
 }
 .cartao{
    background:transparent;
 }
#nome-produto{
    text-decoration:none;
    color:black;
}
footer .cartao{
    margin-left:-90%;
    width:300px;
    height:150px;
    margin-top:-5%;
    padding:0%;
}

</style>
</head>
<body id="corpo">
    <header>
        <nav>
        <a href=""><img src="logo.png" alt="zeca"></a>
        <h2>|</h2>
        <h3><a href="#">Quem somos</a></h3>
        <h2>|</h2>
        <h3><a href="#" id="FAQ">contato</a></h3>
        <h2>|</h2>
        <h3><a href="pag_produto.php">locação</a></h3>
        <h2>|</h2>
       <a href="prote.php"><img src="log.png" id="log" alt="fff"></a>
        <div id="pes">
        <input id="pesquisa" type="text">
        <button id="busca"><img id="lupinha"src="lupinha.png"></button></div>
        <h2 id="v">|</h2>
        <img id="lua"src="lua.png" onclick="noite()">
         <img id="sol" src="sol.png" onclick="sol()">
        <h2 id="v2">|</h2>
        <?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "cadastro2";
  
  // Conexão com o banco de dados
  $conexao = mysqli_connect($host, $user, $password, $dbname);
  
  // Verifica se houve erro na conexão
  if (!$conexao) {
      die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
  }
  

 
$usuario1q=$_SESSION['cpf'];
$cadastroq = "SELECT*FROM tb_cad  WHERE cpf = '$usuario1q'";
$resultadoq = $conexao->query($cadastroq);
$rowq = $resultadoq->fetch_assoc();?>
        <img id="ff" src="lan.png">
        <img id="tr" src="traço.png">
        <h1 id="fon"> Bem vindo</h1>
        <h1 id="fonn"> <?php echo $rowq['nome'];?></h1>
        <img id="sol"src="sol.png" onclick="dia()">
        <img id="tb" src="traço branco.png">
        <img id="fff" src="fundo bla.png">
   
    
    </nav></header>
    <footer>
   
   <h3>EMPRESA MSLVP LOCAÇÕES</h3>
   <h5>OS MELHORES EQUIPAMENTOS QUE VOCÊ PROCURA!</h5>
   <img src="logo.png" alt="logo">
   <h4>00000 - 88888</h4>
   
   <img class="cartao"src="pix.png" alt="cartao">
   </footer>
    <script >
     function noite(){
    document.getElementById('corpo').style.background = 'black';
    
    document.getElementById('lua').style.visibility = 'hidden';
    document.getElementById('sol').style.visibility = 'visible';
    document.getElementById('tb').style.visibility = 'visible';
    document.getElementById('tr').style.visibility = 'hidden';
    document.getElementById('fon').style.color = 'white';
    document.getElementById('fonnn').style.color = 'white';
    document.getElementById('fff').style.visibility = 'visible';
    document.getElementById('ff').style.visibility = 'hidden';
    
}
function sol(){
    document.getElementById('corpo').style.background = 'white';
    document.getElementById('lua').style.visibility = 'visible';
    document.getElementById('sol').style.visibility = 'hidden';
    document.getElementById('tr').style.visibility = 'visible';
    document.getElementById('tb').style.visibility = 'hidden';
    document.getElementById('fon').style.color = 'black';
    document.getElementById('fonnn').style.color = 'black';
    document.getElementById('ff').style.visibility = 'visible';
    document.getElementById('fff').style.visibility = 'hidden';
}</script>

</body>
</html>