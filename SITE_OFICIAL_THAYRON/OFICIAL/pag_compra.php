<?php
      require('protecao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           *{
    margin: 0;
    font-family: Verdana, Geneva, Tahoma, sans-serif;

}
body{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
nav{
    background-color: #8B58EF;
    display: flex;
    padding: 0px;
}

a{
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
  padding-left:0%;
  margin-left:50%;
  font-size:18px;
  border:none;
  height:45px;
  width:230px;
  border-radius:25px 0px 0px 25px;
  margin-top:-10%;
}
#busca{
    border:none;
    float:left;
    height:49px;
    border-radius:0 50px 50px 0;
    width:50px;
    font-weight:bold;
    background:#5e17eb;
    margin-left:132%;
    margin-top:-17%;
}

header #pes{
    margin-left:2%;
  margin-top:3%;
  padding:0;
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
    margin-left:5% ;
}

#lua{
    padding:0%;
    width: 40px;
    height: 40px;
    margin-left:330%;
    margin-top:35%;
    display:block;
    padding-left:0%;

}
#lua:hover{
    cursor: pointer;
}
#v, #v2{
    transform: translate(2400%);
    font-family: initial;
    visibility: visible;
    padding:0;
    margin-left:-10%;
    margin-top:30%;
}
#v2{
    margin-left:-260%;
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
}
#fonn{
    position: absolute;
    top: 52%;
    transform: translate(35%);
    font-size: 300%;
    font-family: inherit;
    color: orange;

}
#fonnn{
    position: absolute;
    top: 57%;
    transform: translate(31.5%);
    font-size: 140%;
    font-family: inherit;
}
#sol{
    padding:0%;
    width: 40px;
    height: 40px;
    margin-left:330%;
    margin-top:35%;
    display:none;
    padding-left:0%;
    
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
.juncao{
    margin-left:30%;
    display:flex;
}
#area-produto{
    width:1000px;
    height:500px;
    margin-left:1%;
    margin-top:5%;
}
#dados-produto{
    width:600px;
    height:500px;
    margin-left:1%;
    margin-top:5%;
    text-align:center;
}
section{
    display:flex;
}
.slider{
   margin-top: 5%;
   margin-left:5%;
   width: 800px;
    height: 400px;
    overflow: hidden;
    
}
.slides{
    width: 400px;
    height: 400px;
    display:flex;
}
.slides input{
    display: none;
}
.slide{
    width: 800px;
    height: 400px;
    position: relative;
    transition: 2s;
}
.slide img{
    width: 800px;
    height: 400px;
}
.manual-navigation{
    position: absolute;
    width: 800px;
    margin-top: -40px;
    display: flex;
    justify-content: center;
}
.manual-btn{
    border: 2px solid white;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
}
.manual-btn:not(:last-child){
    margin-right: 40px;
}
.manual-btn:hover{
    background-color: white;
}

#radio1:checked ~ .first{
    margin-left: 0;;
}
#radio2:checked ~ .first{
    margin-left: -200%;;
}
#radio3:checked ~ .first{
    margin-left: -400%;;
}
#radio4:checked ~ .first{
    margin-left: -600%;
}
.navigation-auto div{
    border: 2px solid rgb(255, 255, 255);
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s; 
    
}
.navigation-auto{
    position: absolute;
    width: 800px;
    margin-top: 360px;
    display: flex;
    justify-content: center;

}
.navigation-auto div:not(:last-child){
    margin-right: 40px;
}
#radio1:checked ~ .navigation-auto .auto-btn1{
    background-color: white;
}
#radio2:checked ~ .navigation-auto .auto-btn2{
    background-color: white;
}
#radio3:checked ~ .navigation-auto .auto-btn3{
    background-color: white;
}
#radio4:checked ~ .navigation-auto .auto-btn4{
    background-color: white;
    
}
marquee{
        background-color:  #8B58EF;
        color: white;
        font-size:30px;
    }
  
#dados-produto #nome_produto{
    margin-top: 5%;
}
#info-produtos{
    display:flex;
    margin-left:10%;
    margin-top:20%;
}
#preco1{
    color:#00BF63;
    margin-top:-8%;
    padding:4px;
    font-size:60px;
    margin-left:2%;
}#preco{
    font-size:20px;
    color:black;
}
#local {
    margin-top:3%;
    color:#00BF63;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background:transparent;
    border-color:   #00BF63;
    border-radius:5px;
    padding:10px;
     }
     #cep{
        background:transparent;
        border-color:solid;
        font-size:20px;
        font-family: 'Times New Roman';
        padding:20px;
        border-radius:5px;
        margin-top:5%;
     }
     #produto{
        color:white;
        background:#00BF63;
        width:200px;
        margin-left:5%;
        margin-top:5%;
        font-size:30px;
        padding:20px
       
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
        <h3><a href="#">locação</a></h3>
        <h2>|</h2>
       <a href="prote.php"><img src="log.png" id="log" alt="fff"></a>
        <div id="pes">
            <form action="" method="post">
        <input id="pesquisa" type="text">
        <button id="busca"><img id="lupinha"src="lupinha.png" alt="lua"></button>
</form></div>
       <div class="juncao"> <h2 id="v">|</h2>
         <img id="sol" src="sol.png" alt="sol" onclick="dia()">
        <img id="lua"src="lua.png" alt="lua" onclick="noite()">
        <h2 id="v2">|</h2>
</div>
   
    </nav></header>
     <?php
    
    
        
        // Configurações de conexão com o banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "produto";
    
        // Conexão com o banco de dados
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Verifica se a conexão foi estabelecida corretamente
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }
    
        // Obtém o ID do produto da URL
        $produto_id = $_GET['id'];
    
        // Consulta para obter os detalhes do produto
        $sql = "SELECT * FROM cad_produto WHERE id = $produto_id";
        $result = $conn->query($sql);
    
        // Ver
        if ($result->num_rows > 0) {
            // Exibe os detalhes do produto
            $row = $result->fetch_assoc();
            
           
       
        // Fecha a conexão com o banco de dados
        
    ?>

    <section>
        <fieldset id="area-produto">
          
        <div class="slider">
    <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
         <div class="slide first">
<img src="outdoor.png" alt="">         </div>
         <div class="slide">
            <img src="https://www.oficinadanet.com.br/imagens/post/46111/hbo-max_1.jpg">
          </div>
         
         <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
          

         </div>
        </div>

        <div class="manual-navigation">
             <label for="radio1" class="manual-btn"></label>
             <label for="radio2" class="manual-btn"></label>
            

            </div>
   </div>
        </fieldset>
        <fieldset id="dados-produto">
            
                     <h1 id="nome_produto"><?php echo $row["nome_produto"]; ?></h1>
                     <div id="info-produtos">
         <p id="preco">por apenas:</p> <h1 id="preco1"> R$<?php echo $row['preco'] ;?></h1> <p id="preco"> á vista</p>
        </div>
      
        
        <?php 
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "cadastro2";
     
         // Conexão com o banco de dados
         $conexao = new mysqli($servername, $username, $password, $dbname);
     
         // Verifica se a conexão foi estabelecida corretamente
         if ($conexao->connect_error) {
             die("Falha na conexão: " . $conn->connect_error);
         }

        $usuario = $_SESSION['id'];
        $sql_usuario = "SELECT*FROM tb_cad  WHERE id = '$usuario'";
        $resultado = $conexao->query($sql_usuario);
        $rowq = $resultado->fetch_assoc();
        if($rowq['tipo']== "administrador"){
           echo "Administradores não podem alugar produtos";

        }
        else{
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pedido_compra";
        
            // Conexão com o banco de dados
            $conectado = new mysqli($servername, $username, $password, $dbname);
        
            // Verifica se a conexão foi estabelecida corretamente
            if ($conectado->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            } 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 
               $cep= $_POST['cep'];
               $nome_produto = $row['nome_produto'];
               $nome_comprador = $rowq['nome'];
               $nome_vendedor=$row['fornecedor'];
               $status = "em andamento";

               if (!empty($cep)) {
                 $insercao = "INSERT INTO pedido(nome_produto,nome_comprador,nome_vendedor,cep,status) VALUES ('$nome_produto' , '$nome_comprador','$nome_vendedor','$cep','$status')";
                 if (mysqli_query($conectado, $insercao)) {
                       echo "<script> alert('Solicitação de alugamento feita')</script>" ;
                }
                else{
                    echo "<script> alert('Solicitação de alugamento feita')</script>";
                }
                }}
        }  
    } else {
       echo "Produto não encontrado.";
   }

        ?>
        <button id="local">
            Receber em Casa
        </button>
        <br>
      
        <form method="post">
        <input name="cep" type="text" id="cep" placeholder=" I n f o r m e - s e u - c e p">
        <br>
        
        <input type="submit"  id="produto" placeholder="Alugar" value="Alugar">
        </form>
        </fieldset>
        
    </section>
   <footer>
    <br>
            <h1>Descrição do produto</h1>
            <br>
        <div id="descricao">
          <h1 id="descricao1"><?php echo $row['descricao'] ;?></h1> <p id="preco"></h1>    
    </div>
    <?php $conn->close(); ?>
</footer>
     <script >
        let count= 1;
document.getElementById("radio1").checked = true;

setInterval(function(){
    nextImage();

},5000)

function nextImage(){
    count++;
    if(count>4){
        count = 1;
    }
    document.getElementById("radio"+count).checked = true;
}
     function noite(){
    document.getElementById('corpo').style.background = 'black';
    
    document.getElementById('lua').style.display = "none";
    document.getElementById('sol').style.display = "block";
    document.getElementById('tb').style.visibility = 'visible';
    document.getElementById('tr').style.visibility = 'hidden';
    document.getElementById('fon').style.color = 'white';
    document.getElementById('fonnn').style.color = 'white';
    document.getElementById('fff').style.visibility = 'visible';
    document.getElementById('ff').style.visibility = 'hidden';
    document.getElementByNameTag('p').style.color='white;'
}
function dia(){
    document.getElementById('corpo').style.background = 'white';
    document.getElementById('lua').style.display = "block";
    document.getElementById('sol').style.display = "none";
    document.getElementById('tr').style.visibility = 'visible';
    document.getElementById('tb').style.visibility = 'hidden';
    document.getElementById('fon').style.color = 'black';
    document.getElementById('fonnn').style.color = 'black';
    document.getElementById('ff').style.visibility = 'visible';
    document.getElementById('fff').style.visibility = 'hidden';
    
}</script>
</body>
</html>