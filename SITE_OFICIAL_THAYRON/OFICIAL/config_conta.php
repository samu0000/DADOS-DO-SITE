<?php
include('protecao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suas Configurações</title>
    <style>
        *{
            margin: 0;
           font-family: Verdana, Geneva, Tahoma, sans-serif;

        }
        body{
            background-color: rgb(255, 255, 255);
        }
        nav{
            background-color: #8B58EF;
            display: flex;
            padding: 80px;
           }
           .caixa_lua{
            display: flex;
            margin-left: 90%;
            margin-top: -2%;
            padding: 0;
           }
           #v, #v2{
            font-size: 50px;
            padding: 0;
           }
           #lua{
            width:70px;
            height:70px;
            display:block;
           }
           #sol{
            width:70px;
            height:70px;
            display:none;
           }
           .logo_empresa{
             width: 200px;
             height: 100px;
             padding: 0;
             margin-left: -4%;
             margin-top:-4% ;
           }
         .caixa_logo .minha_logo{
            border-radius: 100%;
            background-color: black;
            width: 100px;
            height: 100px;
            margin-top: 7%;
            margin-left: 7%;
          }
          .caixa_logo{
            border-radius: 100%;
            background-color: black;
            width: 120px;
            height: 120px;
            margin-top: -3%;
            margin-left: 10%;
            box-shadow: hsl(260, 100%, 75%) 2px 1px 25px 10px;
           
          }
          .caixa_informacoes{
            background-color: #8B58EF;
            border-radius: 10%;
            width: 200px;
            height: 160px;
            margin-left: -15%;
            margin-top: 100%;
            padding: 20px;
          }
          .caixa_informacoes h4{
            padding: 5px;
          }
          .caixa_informacoes .logo_info{
            width: 15px;
            height: 15px;
            margin-top: 5%;
          }
          .cifrao{
            text-decoration: none;
            font-size: 20px;
            color: white;
          }
          a{
            text-decoration: none;
            color: black;
          }
          .portinha{
            width: 15px;
            height: 15px;
          }
          .saida{
            margin-top: 10%;
          }
          .produto{
            margin-top: 10%;
         
          }
         .traco, .traco1{
            background-color: black;
            width: 240px;
            height: 2px;
            margin-left: -10%;
         }
        .caixa_informacoes .traco1{
            margin-top: 5%;
         }
         .caixa_informacoes .traco{
            margin-top: 6%;
            height: 2px;
         }
        
         #caixa_dados{
            background-color: #8B58EF;
            width: 500px;
            height: 300px;
            margin-left: 300%;
            margin-top: -100%;
            border-radius: 5%;
            padding: 30px;
            color: white;
           
        
         }
         #caixa_dados input{
            background-color: rgb(255, 255, 255,0.5);
            border-radius: 25px;
            width: 300px;
            height: 20px;
            padding: 5px;
            border-color: white;
            color: black;
         }
         .caixa_butoes{
            display: flex;
         }
        .caixa_butoes .enviar  {
            width: 150px;
            height: 30px;
            padding: 50px;
            border-color: rgb(0, 55, 255);
            background-color: transparent;
            color: white;
         }
         .caixa_butoes .resetar{
            width: 150px;
            height: 30px;
            padding: 8px;
            margin-left: 15%;
            border-color: rgb(255, 0, 0);
            background-color: transparent;
            color: white;
            text-align: center;
         }
         #caixa_dados .caixa_butoes{
            margin-top: 5%;
            margin-left: 10%;
         }
         #tipo{
          margin-top: 8%;
          background-color: transparent;
            border-radius: 25px;
            width: 300px;
            height: 30px;
            padding: 5px;
            border-color: white;
            color: white;
         }
         .dados:hover{
          font-size: 18px;
          color: white;
          cursor: pointer;
         }
         .produto:hover{
          font-size: 18px;
          color: white;
          cursor: pointer;
         }
          .saida:hover{
            font-size: 18px;
          color: white;
          cursor: pointer;
          }
          .Nome_conta{
            margin-left: 17%;
            margin-top: -7%;
          }
          .adicional{
            display: flex;
            margin-left: 17%;
          }
          .caixa_dados_produtos {
            display: flex;
            width: 500px;
          }
        
          #caixa_produtos{
            background-color: #8B58EF;
            width: 800px;
            height: 300px;
            margin-left: 500%;
            margin-top: -150%;
            border-radius: 5%;
            padding: 15px;
            color: white;
            border: white;
            display: none;
            overflow-x:auto;
          }
         #caixa_produtos .tabela_produtos{
          padding-top: 0;
          height: 30px;
          width: 800px;
           border: rgb(255, 255, 255,0.5);
         
           
         }
         .tabela_produtos .foto_produto{
          width: 80px;
          height: 40px;
          
         }
         .imagem_tabela{
          width: 50px;
          align-items: center;
          
         }
         .imagem_tabela .foto_produto{
          margin-left: 20%;
          margin-top: 10%;
        
         }
         .imagem_tabela{
          background-color: rgb(255, 255, 255,0.5);
         }
        #caixa_produtos .butoes_produtos{
            display: flex;
            margin-top: 20%;
         }
          .butoes_produtos .butao1{
          width: 150px;
            height: 30px;
            padding: 5px;
            border-color: rgb(0, 55, 255);
            background-color: transparent;
            color: white;
            border-radius: 25px;
             margin-left: 60%;
          }
         .butao2, .butao3{
          width: 150px;
            height: 30px;
            padding: 5px;
            background-color: transparent;
            color: white;
            border-radius: 25px;
            
         }
         .butao2{
          color:black;
          background:white;
          border-color: rgb(255, 255, 255);
         }
    .butao3{
          margin-left: 90%;
          border-color: rgb(255, 0, 0);
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
#aceito{
  color:yellow;
}
#andamento{
  color:#00FF19;
  text-decoration:none;
}
#negado{
  color:red;
  text-decoration:none;
}
#concluido{
  color:blue;
  text-decoration:none;
}
#add{
  padding:0px;
  color:green;
}
    </style>
</head>
<body id="corpo">
  

  
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
$cadastroq = "SELECT*FROM tb_cad WHERE cpf = '$usuario1q'";
$resultadoq = $conexao->query($cadastroq);
$rowq = $resultadoq->fetch_assoc();?>
    <nav>
       <a href="casa_logado.php"> <img class="logo_empresa" src="logo.png" alt="logo"></a>
        <div class="caixa_lua">
        <h2 id="v">|</h2>
        <img id="sol" src="sol.png" onclick="sol()">
        <img id="lua"src="lua.png" onclick="lua()">
        <h2 id="v2">|</h2>
        </div>
    </nav>
    <header>
        <div class="caixa_logo">
       
<img class="minha_logo" src="log.png" alt="logo">
    <div class="Nome_conta" style="margin-left: 120%; margin-top:-90%;">
          <h2> Nome</h2>
          <div class="adicional" style="margin-left: 0%;">
          <h4> <?php echo $rowq['nome']?></h4>
          <h4>|</h4>
          <h4>  DNI:000111111</h4>
        </div>
          </div>
       
        
        
       
    
      

        <div class="caixa_informacoes">
            
           <h4 class="dados" onclick="dado()"><img class="logo_info" src="log.png" alt="logo"> Dados pessoais</h4>
            <div class="traco"></div>
          <h4 class="produto" onclick="produto()"><a class="cifrao">$</a> Produtos</h4>
            <div class="traco1"></div>
            <a href="logout.php"><h4 class="saida"> <img class="portinha" src="https://cdn-icons-png.flaticon.com/512/34/34696.png" alt="portinha">Sair da conta</h4></a>

        <div id="caixa_dados">
            <form action="" method="post">
                <p>Nome:
                    <input type="text" name="nome" value="<?php echo $rowq['nome']?>">
                </p>
                <br>
                <p>Email:
                    <input type="email" name="email" value="<?php echo $rowq['email']?>">
                </p>
                <br>
                <p>
                    Telefone:
                    <input type="text" name="telefone" value="<?php echo $rowq['telefone']?>">
                </p>
                <br>
                <p>
                    Data de Nascimento:
                    <input type="text" name="data" value="<?php echo $rowq['data']?>">
                    
                </p>
               <p>
                Alterar tipo de conta
                <select name="tipo" id="tipo" >
                  <option value="Administrador">Administrador</option>
                  <option value="Usuario">Usuario</option>
                </select>
               </p>
               
              
               
                <div class="caixa_butoes">
                <input class="enviar" type="submit" value="Alterar Conta" style="    padding: 5px; padding-top: 1px;">
                
                </div>
            </form>
            </div>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nome = $_POST["nome"];
  $email= $_POST["email"];
  $telefone = $_POST["telefone"];
  $data = $_POST["data"];
  $tipo = $_POST["tipo"];
  $usuario1 =$_SESSION['email'];
  $cadastro = "SELECT*FROM tb_cad  WHERE email = '$usuario1'";
  $resultado = $conexao->query($cadastro);
  $row = $resultado->fetch_assoc();
  $id = $rowq['id'];
  $sql = "UPDATE tb_cad2 SET nome='$nome' , email = '$email' , telefone = '$telefone' , data = '$data' , tipo ='$tipo'  WHERE id = '$id'";
  
  

  if ($conexao->query($sql) === TRUE) {
      
      // ...
      // Consulta SQL para selecionar a primeira linha da tabela
     
  
  
  } else {
      echo "Erro ao atualizar o dado da coluna 'nome': " . $conexao->error;
  }}
  
  // Fecha a conexão com o banco de dados
  
  ?>
        </div>

        <div id="caixa_produtos">
          <?php
             if($rowq['tipo'] == "administrador"){
           
          ?>
            <table class="tabela_produtos" width="600px" border="1" >
              
                <?php 
                        $host = "localhost";
                        $user = "root";
                        $pass="";
                        $bd="produto";
                        $conn = mysqli_connect($host, $user, $pass, $bd);
                        
                       
                        if (!$conn) {
                           die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
                       }
                      $userio = $rowq['email'];
            
                      $sql_query = $conn->query("SELECT * FROM cad_produto WHERE fornecedor = '$userio'") or die($mysqli->error);
                       $tabela = "SELECT * FROM  cad_produto";
                       $sql_tabela = $conn->query($tabela);
                   


                      if($sql_query->num_rows > 0){
                     echo "funcionava";
                       // <?php echo $arquivo['path'];
                       while($arquivo=$sql_query->fetch_assoc()){
                       ?>
                       <tr>
                <td class="imagem_tabela"><img class="foto_produto" src="logo.png" alt="">
                </td>
                <td><?php echo $arquivo['nome_produto'];?></td>
                <td>QTD:</td>
                <td><?php echo $arquivo['preco'];?></td>
               
              </tr>

              <?php } }else{
               
              ?>
                
               <p>não há produtos cadastrados</p>
              <?php
             
              }$conn->close();
               ?>
                            </table>

            <div class="butoes_produtos">
             <button class="butao2"><a id="add" href="cadastro_produto.php">Adcionar produto</a></button>
             </div>
        </div>
        <?php
           
          }  else{
            
            $host = "localhost";
            $user = "root";
            $password = "";
            $dbname = "pedido_compra";
            
            // Conexão com o banco de dados
            $conectado = mysqli_connect($host, $user, $password, $dbname);
            
            // Verifica se houve erro na conexão
            if (!$conectado) {
                die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
            }

            $usuario = $rowq['nome'];
            $sql_usuario = "SELECT*FROM pedido WHERE nome_comprador = '$usuario'";
            $resultado = $conectado->query($sql_usuario);
          
            if($resultado->num_rows>0){
              
          
              ?>
               <table id="tabela_usuario" width="600px" border="1" >
             <?php  while($role = $resultado->fetch_assoc()){?>
                <tr>
                  <td><?php echo $role['nome_produto'] ?></td>
                  <td><?php echo $role['nome_vendedor'] ?></td>
                  <td><?php echo $role['data_alugamento'] ?></td>
                  <td><?php echo $role['data_devolutiva'] ?></td>
                  <td><?php
                      if($role['status']== 'em andamento'){
                  ?>
                 <a id="andamento"><?php echo $role['status']; ?></a>
                  <?php }
               
               elseif($role['status'] == 'solicitação aceita'){
               ?>
                                <a id="aceito" <?php echo "href='form_aceita.php?id=" . $role["id"] . "'"?>><?php echo $role['status'] ?></a>

              <?php }
              elseif($role['status']=="solicitação negada"){
            ?>
           <a id="negado"> <?php echo $role['status'];?></a>
            <?php 
            }elseif($role['status']=="concluido"){
              ?>

              <a id="concluido"><?php echo $role['status']; ?></a>
  <?php          }}?>
            </td>
                </tr>
              </table>
             
              <?php }
             
             else{
              ?><p>não há produtos aqui</p><?php
             }
            }

        ?>
    </header>
    <br>
    <footer>
   
<h3>EMPRESA MSLVP LOCAÇÕES</h3>
<h5>OS MELHORES EQUIPAMENTOS QUE VOCÊ PROCURA!</h5>
<img src="logo.png" alt="logo">
<h4>00000 - 88888</h4>

<img class="cartao"src="pix.png" alt="cartao">
</footer>
    <script>
        function produto(){
          document.getElementById("caixa_dados").style.display = "none";
          document.getElementById("caixa_produtos").style.display = "block";
       
      }
      function dado(){
        document.getElementById("caixa_dados").style.display = "block";
          document.getElementById("caixa_produtos").style.display = "none";
      }
      function  lua(){
        document.getElementById("corpo").style.background = "black";
        document.getElementById("sol").style.display = "block";
        document.getElementById("lua").style.display = "none";

      }
      function sol(){
        document.getElementById("corpo").style.background = "white";
        document.getElementById("sol").style.display = "none";
        document.getElementById("lua").style.display = "block";


      }
    </script>
</body>
</html>