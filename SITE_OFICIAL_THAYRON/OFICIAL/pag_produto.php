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
        
    marquee{
        background-color:  #8B58EF;
        color: white;
        font-size:30px;
    }
    .slider{
   margin: 0 auto;
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
.categoria{
    text-align:center;
    font-size:50px;
}

.categorias{
    width:400px;
    margin-left:39%;
    border-radius:20px;
    border-color:#8B58EF;
}
.imagem1 , .imagem2 , .imagem3 , .imagem4 , .imagem5{
    width:600px;
    height:300px;
   
}
.caixa_imagem{
    display:flex;
   
}
.imagem1{
    transform:translate(50%);
}
.imagem2{
    transform:translate(-20%);
}
.imagem3{
    transform:translate(-90%);
}
.imagem4{
    transform:translate(-160%);
}
.imagem5{
    transform:translate(-230%);
}
.produtos{
    width:400px;
    margin-left:10%;
    border-radius:20px;
    border-color:#8B58EF;
}
.conteiner{
    width: 95vw ;
    height: 25rem;
    background-color: transparent;
    color: white;
    margin: 10rem auto 0 auto;
    border: solid 4px white;
    display: flex;
    padding: 1px;
    overflow-x: auto;
    color:black;
}

.conteiner .samuel{
    padding:1px;
    max-width: 150rem;
    min-height: 8rem;
    background-color: #DEF1FF;
    border: solid 2px white;
    margin-left: 2rem;
    word-wrap: break-word;
    align-items:left;
}
.samuel img{
   margin-left:0%;
   width: 400px;
   height:200px;
   background-color: rgba(125, 228, 228, 0.3);   
      position:relative;
padding:0px;

}
.samuel{
    
    padding-left:150px;
    word-wrap: break-word;
   
}
.samuel .texto_produto{
margin-top:5%;
text-align:center;
}
.samuel .preco{
    
    margin-left:-49%;
   margin-top: -9%;
}
.samuel .seminovo{
    color: #8B58EF;
    margin-left:70%;
}
.samuel .dinheiro{
    margin-top:-7%;
}
footer{
     
     background-color: #8B58EF;
     padding: 30px;
     text-align: center;
     padding-top:10px;
    
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
    <nav>
    <?php
    include('menu_geral.php');
    ?>
    </nav>
        <header>
            <br>
    <marquee> Aqui você encontra os melhores equipamentos do mercado! <br></marquee>
    <br>
    </header>
<br>
<section>
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
         <div class="slide">
      <img src="https://telaviva.com.br/wp-content/uploads/2023/03/hbo-max.jpg" alt="">
         </div> <div class="slide">
        <img src="https://www.hardware.com.br/static/wp/2021/05/26/HBO-max-lancamento-Brasil.jpg?fm=pjpg&ixlib=php-3.3.1" alt="">
         </div>
         <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>

         </div>
        </div>

        <div class="manual-navigation">
             <label for="radio1" class="manual-btn"></label>
             <label for="radio2" class="manual-btn"></label>
             <label for="radio3" class="manual-btn"></label>
             <label for="radio4" class="manual-btn"></label>

            </div>
   </div>
</section>
<section>
        <br>
   <br>
   <fieldset class="categorias">
    <h1 class="categoria"><strong>Categorias</strong></h1>
</fieldset>

<br>
<div class="caixa_imagem">
<a herf=""><img src="acessorios.png" class="imagem1" alt="imagem_categoria"></a>
<a herf=""><img src="componn.png" class="imagem2" alt="imagem_categoria"></a>
<a herf=""><img src="compu.png" class="imagem3" alt="imagem_categoria"></a>
<a herf=""><img src="notbek.png" class="imagem4" alt="imagem_categoria"></a>
<a herf=""><img src="monit.png" class="imagem5" alt="imagem_categoria"></a>
</div>
</section>
<section>

    <fieldset class="produtos">
    <h1>Produtos Melhor Avaliados</h1>
    
</fieldset>

        <div class="conteiner">
           
             
                
                    <?php 
                        $host = "localhost";
                        $user = "root";
                        $pass="";
                        $bd="produto";
                        $conn = mysqli_connect($host, $user, $pass, $bd);
                        
                       
                        if (!$conn) {
                           die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
                       }

                       $sql_query = $conn->query("SELECT * FROM cad_produto") or die($mysqli->error);
                       while($arquivo = $sql_query->fetch_assoc()){
                       // <?php echo $arquivo['path'];?>
                    
                    <div class="samuel" >
                        <div>
                    <img  src="<?php echo $arquivo['imagem_logo'];?>" alt="imagem_produto"></img>
                       </div>
                    <p class="seminovo">Seminovo</p>
                       <p class="dinheiro">R$</p>
                       <div class="preco">
                   <h1><p class="texto_produto">  <?php echo $arquivo['preco'];?></p><h1>
                       </div>
                       <div class="nome_produto">
                       <a id="nome-produto"<?php echo "href='pag_compra.php?id=" . $arquivo["id"] . "'"?>><p class="texto_produto">    <?php echo $arquivo['nome_produto'];?></p></a>
                       </div>
                </div>
                     <?php  }?>
                
    
                        
                      
        
    
                        </div>
    
</section>

<footer>
   
<h3>EMPRESA MSLVP LOCAÇÕES</h3>
<h5>OS MELHORES EQUIPAMENTOS QUE VOCÊ PROCURA!</h5>
<img src="logo.png" alt="logo">
<h4>00000 - 88888</h4>

<img class="cartao"src="pix.png" alt="cartao">
</footer>

    <script>
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


        </script>
</body>
</html>