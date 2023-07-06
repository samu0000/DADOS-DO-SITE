 <?php
include('protecao.php');
//echo  "ddd".$_SESSION['nome'];
 $host = "localhost";
 $user = "root";
 $pass="";
 $bd="produto";
 $conn = mysqli_connect($host, $user, $pass, $bd);
 

 if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
else{
include('cadastro_produto2.html');
// Verifica se o formulário foi submetido

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome_produto = $_POST["nome_produto"];
    $preco = $_POST["preco"];
    $categoria = $_POST['categoria'];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $descricao = $_POST["descricao"];
    $codigo= uniqid();
    //$fornecedor=  $_SESSION['nome'];
    $fornecedor=  $_SESSION['email'];
    $foto_representativa = $_FILES["arquivo"];
    $pasta = "uploads/";
     $nomedoarquivo = $foto_representativa["name"];
     $novonomedoarquivo = uniqid();
    $extensao = strtolower( pathinfo($nomedoarquivo, PATHINFO_EXTENSION));
    $path_foto_representativo = $pasta.$novonomedoarquivo.".".$extensao;
    $arquivos= $_FILES["arquivos"];
    $arquivos1 = $arquivos["name"];
    $extensao1 = strtolower( pathinfo($arquivos1, PATHINFO_EXTENSION));
    $path_arquivos = $pasta.$novonomedoarquivo.".".$extensao1;
    
    if($foto_representativa['size']> 2097152 || $arquivos['size']>2097152){
    die("arquivo muito grande max:2mb");}
    else{

        if($extensao != 'jpg' && $extensao != 'png'){
        die("tipo de arquivo invalido, insira uma foto");}
        else{
            $deu_certo = move_uploaded_file($foto_representativa["tmp_name"], $path_foto_representativo);
            $deu_certo1 = move_uploaded_file($arquivos["tmp_name"], $path_arquivos);

            if($deu_certo || $deu_certo1){
    // Verifica se os campos foram preenchidos
    if (!empty($nome_produto) && !empty($categoria) && !empty($descricao)) {
        // Verifica se o nome de usuário já existe no banco de dados
        $sql1 = "SELECT * FROM cad_produto WHERE modelo = '$modelo' ";
        $result = mysqli_query($conn, $sql1);
       
        if (mysqli_num_rows($result) > 0 ) {
           echo "este modelo já está cadastrado:Por favor insira um diferente";
        }else{
        
              
            
            // Insere o novo usuário no banco de dados
            $sql = "INSERT INTO cad_produto(nome_produto, cod_produto, marca, modelo, imagem_produto, imagem_logo, preco, descricao, fornecedor	, categoria) VALUES ('$nome_produto', '$codigo', '$marca','$modelo',  '$path_arquivos','$path_foto_representativo','$preco','$descricao',' $fornecedor','$categoria')";
            if (mysqli_query($conn, $sql)) {

             echo "produto cadastrado com sucesso";
               
            } else {
                echo "Erro ao cadastrar produto: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Por favor, preencha todos os campos.";
     
    }}
}}
}}
    



// Fecha a conexão com o banco de dados
mysqli_close($conn);

?>