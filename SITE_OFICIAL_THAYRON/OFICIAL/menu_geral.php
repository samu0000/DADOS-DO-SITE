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

nav{
    background-color: #8B58EF;
    display: flex;
    padding: 10px;
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
#sol{
    padding:0px;

}
#lua:hover{
    cursor: pointer;
}

#v, #v2{
    transform: translate(2400%);
    font-family: initial;
    visibility: visible;
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
    #sidebar {
      width: 200px;
      background-color: #8B58EF;
      color: #fff;
      height: 100vh;
      position: fixed;
      display: none;
      margin-left:-1%;
      margin-top:-1%;

    }

    #sidebar ul {
      list-style: none;
      padding: 0;
    }

    #sidebar ul li {
      padding: 10px;
      border-bottom: 1px solid #666;
    }

    #sidebar ul li a {
      color: #fff;
      text-decoration: none;
    }
    #logo1{
   
        width:150px;
        height:150px;
        margin-left:13%;
        margin-top:30%;
        
        border-radius:50%;

    }
 
    #sidebar #logo1{
        margin-top:20%;
    }
      #nome_logi{
        margin-left:20%;
      }
      #sair{
        color:white;
        margin-left:20%;
        margin-top:20%;
      }
      #sair:hover{
        cursor:pointer;
      }
</style>
</head>
<body>
<header>
        <nav>
        <a href="casa_logado.php"><img src="logo.png" alt="zeca"></a>
        <h2>|</h2>
        <h3><a href="#">Quem somos</a></h3>
        <h2>|</h2>
        <h3><a href="#" id="FAQ">contato</a></h3>
        <h2>|</h2>
        <h3><a href="pag_produto.php">locação</a></h3>
        <h2>|</h2>
       <a href="login.php"><img src="log.png" id="log" alt="fff" ></a>
        <div id="pes">
        <input id="pesquisa" type="text">
        <button id="busca"><img id="lupinha"src="lupinha.png"></button></div>
        <h2 id="v">|</h2>
        <img id="lua"src="lua.png" onclick="noite()">
       
        <h2 id="v2">|</h2>
        <img id="sol"src="sol.png" onclick="dia()">
       
        <div id="sidebar">
    <ul>
        <p id="sair"onclick="botao()">Sair -></p>
    <img src="log.png" id="logo1" alt="sua foto"  >
    <p id="nome_logi">Nome</p>
     

    </ul>
  </div>
    </nav></header>
  
      <script >
     function noite(){
    document.getElementById('corpo').style.background = 'black';
    
    document.getElementById('lua').style.visibility = 'hidden';
    document.getElementById('sol').style.visibility = 'visible';
   
    
}
function dia(){
    document.getElementById('corpo').style.background = 'white';
    document.getElementById('lua').style.visibility = 'visible';
    document.getElementById('sol').style.visibility = 'hidden';
  
}
const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');
     
    function botao(){
        sidebar.style.display ="none";
    }
    function botaon(){
        sidebar.style.display ="block";
    }</script>
</body>
</html>