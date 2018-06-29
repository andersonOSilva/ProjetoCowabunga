<?php 
/*conexao com o Banco de Dados*/
$titulo=null;
$conteudo=null;
    
//Estabelece uma conexao com o BD MySQl
    $conexao=mysql_connect('localhost','root','bcd127');
    
    //Ativa o database a ser utilizado no projeto
    mysql_select_db('dbprojetocowabunga');


if(isset($_GET['modo'])){
    
    $modo=$_GET['modo'];
    
    
    if($modo=='excluir'){
        
        $id=$_GET['codigo'];
        
        $sql="delete from tbl_curiosidades where id_curiosidades=".$id;
        
        mysql_query($sql);
        
        
        
    }
}

/**/

//Verifica se o botao Salvar foi clicado
if(isset($_POST["btnSalvar"]))
{
    //Resgata os dados fornecidos pelo usuário
    //usando o metodo POST, conforme escolhido no Form
    $titulo=$_POST["txttitulo"];
    $introducao=$_POST["txtintroducao"];
    $conteudo=$_POST["txtconteudo"];
    
    
    $sql="INSERT INTO tbl_curiosidades (titulo,introdução,conteudo)
    VALUES ('".$titulo."','".$introducao."','".$conteudo."')";
                
    mysql_query($sql);
                
    
     // CAMINHO DA PASTA ONDE AS IMAGENS SERÃO ARMAZENADAS
		$upload_dir="arquivos/";
		
        // Armazenando o nome e a extensão do arquivo que foi seleciona 
        $nome_arq= basename($_FILES['flefoto']['name']);
    
        // verifica o tipo de extensãopermitida para o upload do arquivo, usamos o comando
        //strstr() para localizar a sequencia de caracteres;
        $extensao = substr($nome_arq,strlen($nome_arq)-3,3);
        
        if($extensao=="jpg" || $extensao=="png" || $extensao=="gif"){
            
            $extensao = substr($nome_arq,strpos($nome_arq,"."),5);
            $prefixo = substr($nome_arq,0,strpos($nome_arq,"."));
            $nome_arq = md5($prefixo).$extensao;
            
            // Guardamos o caminho e o nome da imagem que sera inserido no BD.
            $upload_file = $upload_dir . $nome_arq;
            $id_curiosidade=1;
            if (move_uploaded_file($_FILES['flefoto']['tmp_name'], $upload_file)){
                
               $sql="INSERT INTO tbl_imagem_curiosidade (id_curiosidade,imagem)
                VALUES ('".$id_curiosidade."','".$upload_file."')";
                
                mysql_query($sql);
                
                header('location:cmsCuriosidades.php');
                echo("arquivo movido com sucesso!!");
            } else {
                echo("O arquivo não pode ser movido para o servidor !!");
            }
        } else {
            echo('Extensão Inválida!!');
        }
    
                
   // mysql_query($sql);
    //echo($sql);
    //header('location:cmsCuriosidade.php');
    
}
?>
<html>
    <head>
        <title>
        
        
        </title>
        <link type="text/css" href="css/stylecms.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
		.mySlides {display:none;}
		</style>-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
		.mySlides {display:none}
		.demo {cursor:pointer}
		</style>
    
    </head> 
    <body>
        <div id="main">
            <header>
                <div id="text">
                    cms-sistema de gerenciamento do site
                
                </div>
                <div id="logo">
                
                </div>
                
            </header>
            <nav>
                <ul>
                    <a href="cms.php"><li>
                            <div>
                                <img src="../img/004.jpg" height="100" width="100" >
                        
                            </div>
                            adm.conteudo
                        </li>
                    </a>
                    <a href="cmsfaleconosco.php"><li><div>
                                <img src="../img/004.jpg" height="100" width="100" >
                        
                            </div>adm.fale conosco
                        </li>
                    </a>
                    <a href="cmsadmprodutos.php"><li>
                        <div>
                                <img src="../img/004.jpg" height="100" width="100" >
                        
                            </div>adm.produtos
                        </li>
                    </a>
                    <a href="cmsadmusuarios.php"><li><div>
                                <img src="../img/004.jpg" height="100" width="100" >
                        
                            </div>adm.usuarios
                        </li>
                    </a>
                    
                
                
                
                </ul>
            
            </nav>
            <div id="conteudo">
                <form method="POST" action="cmscuriosidades.php" enctype="multipart/form-data">
                <table class="tabela" height="500">
                    <tr>
                        <td colspan="2" id="titulotabela">
                            Add curiosidades
                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                           Titulo:
                        </td>
                        <td class="coluna2cmscuriosidades">
                            <input placeholder="Titulo" type="text" name="txttitulo" value="" size="50px" required pattern="[a-z A-Z ã Ã õ Õ é É ê Ê ô Ô ç Ç]*" title="Permitido apenas Letras" onkeypress="return validar(event,'number')" >

                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                            Introdução:
                        </td>
                        <td class="coluna2cmscuriosidades">
                            <textarea name="txtintroducao" placeholder="introdução..." ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                            Conteudo:
                        </td>
                        <td class="coluna2cmscuriosidades">
                            <textarea name="txtconteudo"  placeholder="Conteudo..."></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="titulotabela">
                            Galeria
                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                            Selcione uma foto:
                        </td>
                        <td class="coluna2">
                            <input type="file" name="flefoto">
                        </td>
<!--
                    <tr >
                        <td class="coluna1">
                            loggin:
                        </td>
                        <td class="coluna2">
                            <input placeholder="loggin" type="text" name="txtloggin" required>
                        </td>
                    </tr>
-->
                    <tr>
                        <td class="coluna1">
                            nivel de privilegio:
                        </td>
                        <td class="coluna2cmscuriosidades">
<!--
                            <select name="slctprioridade">
                                <option value="0"> Selecione uma prioridade:  </option>
                                <?php
                                    $sql="select * from tbl_prioridade order by id_prioridade;";

                                    $select=mysql_query($sql);

                                    while($rs=mysql_fetch_array($select))
                                    {
                                    
                                ?>
                                
                                <option value="<?php echo($rs['id_prioridade']); ?>"> <?php echo($rs['prioridade']); ?>  </option>
                                <?php 
                                    }
                                ?>
                                
                            
                            </select>
-->
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="coluna1">
                            <input type="submit" value="salvar" name="btnSalvar" class="coluna1Salvar">
                        </td>
                        
                    </tr>
                   
                </table>
        </form> 
                <form method="get" action="cmscuriosidades">
                    <table width="500" height="100" align="center" border="1" id="cont">
                        <tr>
                            <td align="center" id="consulta" colspan="4">Consulta de Contatos</td>
                        </tr>
                        <tr  align="center">
                            <td >Titulo</td>
                             <td >introdução</td>
                             <td >conteudo</td>
                            <td>Opções</td>
<!--
                             <td >Email</td>-->
                             

                        </tr>
                        <?php 
                            $sql="select * from tbl_curiosidades order by id_curiosidades desc;";
                            

                            $select=mysql_query($sql);

                            while($rsContatos=mysql_fetch_array($select))
                            {

                        ?>
                        <tr>
                            <td><?php echo($rsContatos['Titulo']) ?></td>
                            <td><?php echo($rsContatos['introdução']) ?></td>
                            <td><?php echo($rsContatos['conteudo']) ?></td>
<!--                            <td><?php/* echo($rsContatos['email']) */?></td>-->
                            <td>
                                <a href="cmscuriosidades.php?modo=consulta_editar&codigo=<?php echo($rsContatos['id_curiosidades']) ?>">
                                    <img src="icones/ic_mode_edit_black_24dp_1x.png">
                                </a>
                                
                                <a href="cmscuriosidades.php?modo=excluir&codigo=<?php echo($rsContatos['id_curiosidades']) ?>">
                                    <img src="icones/ic_delete_black_24dp_1x.png">
                                </a>
                            </td>
                        </tr>
                        <?php 
//
                            }
                        ?>
                    </table>
                </form>
<!--
                <table class="tabela">
                    
                    <tr>
                        <td colspan="2" id="titulotabela">
                            Galeria
                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                            Selcione uma foto:
                        </td>
                        <td class="coluna2">
                            <input type="file" name="flefoto">
                        </td>
                        
                    </tr>
                </table>
-->             <?php 
                            $sql="select * from tbl_imagem_curiosidade order by id_imagem_curiosidade desc;";
                            

                            $select=mysql_query($sql);

                            while($rs=mysql_fetch_array($select))
                            {

                        ?>
                <div class="w3-content" style="max-width:1200px">
                                <img class="mySlides w3-animate-top" src="<?php echo($rs['imagem']) ?>" style="width:100% ,height:50%">
                                  <img class="mySlides w3-animate-bottom" src="<?php echo($rs['imagem']) ?>" style="width:100%">
                                  <img class="mySlides w3-animate-bottom" src="<?php echo($rs['imagem']) ?>" style="width:100%">
                                  <img class="mySlides w3-animate-bottom" src="<?php echo($rs['imagem']) ?>" style="width:100%">


              <div class="w3-row-padding w3-section">
                <div class="w3-col s4">
                  <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo($rs['imagem']) ?>" style="width:100%" onclick="currentDiv(1)">
                </div>
                <div class="w3-col s4">
                  <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo($rs['imagem']) ?>"  style="width:100%" onclick="currentDiv(2)">
                </div>
                <div class="w3-col s4">
                  <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo($rs['imagem']) ?>" style="width:100%" onclick="currentDiv(3)">
                </div>
                <div class="w3-col s4">
                  <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo($rs['imagem']) ?>" style="width:100%" onclick="currentDiv(4)">
                </div>
                  <?php
                  
                            }
                      
                ?>

    
                  </div>
                </div>
                <script>
                    var slideIndex = 1;
                    showDivs(slideIndex);

                    function plusDivs(n) {
                      showDivs(slideIndex += n);
                    }

                    function currentDiv(n) {
                      showDivs(slideIndex = n);
                    }

                    function showDivs(n) {
                      var i;
                      var x = document.getElementsByClassName("mySlides");
                      var dots = document.getElementsByClassName("demo");
                      if (n > x.length) {slideIndex = 1}
                      if (n < 1) {slideIndex = x.length}
                      for (i = 0; i < x.length; i++) {
                         x[i].style.display = "none";
                      }
                      for (i = 0; i < dots.length; i++) {
                         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                      }
                      x[slideIndex-1].style.display = "block";
                      dots[slideIndex-1].className += " w3-opacity-off";
                    }
                </script>
            
            </div>
            
        
        </div>
        <footer>
        </footer>  
        
    
    
    
    </body>





</html>