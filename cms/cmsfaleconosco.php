<?php 

//ativa uso das variaveis de sessao
session_start();

 //******************Conexão com o Mysql *******
    //Estabelece a conexão com o banco de dados mysql
    $conexao= mysql_connect('localhost', 'root', 'bcd127');
    
    //Ativa o database a ser utilizado no programa
    mysql_select_db('dbprojetocowabunga');
/******************************************/
$nome=null;
$telefone=null;
$celular=null;
$email=null;
$sexo=null;
$dt_nasc=null;
$obs=null;
$chkmasculino=null;
$chkfeminino=null;
$botao="Salvar";


if(isset($_GET['modo'])){
    
    $modo=$_GET['modo'];
    //echo($modo);
    
    if($modo=='excluir'){
        
        $codigo=$_GET['codigo'];
        
        $sql="delete from tbl_fale_conosco where id_fale_conosco=".$codigo;
        echo($sql);
        mysql_query($sql);
        
        //header("location:cmsfaleconosco.php");essa merda aqui tava apagando todo role
        
    }else if($modo=='consulta_editar'){
        
        $botao="Editar";
        $codigo=$_GET['id'];
        //var global utilixzado no update
        $_SESSION['id']=$codigo;
        
        $sql="select * from tbl_fale_conosco where id_fale_conosco=".$codigo;
        
        $select=mysql_query($sql);
        
        if($rsConsulta=mysql_fetch_array($select)){
            
            
                $nome=$_POST["txtNome"];
                $telefone=$_POST["txtTelefone"];
                $celular=$_POST["txtCelular"];
                $email=$_POST["txtEmail"];
                $sugestoes=$_POST["txtLink"];
                $sexo=$_POST["rdoSexo"];
                $link_facebook=$_POST["txtobs"];
                $produto=$_POST["txtProdutos"];
                $profissao=$_POST["txtProf"];
            
           /* $dt=explode("-",$dtnasc);
            $dia=$dt2[0];
            $mes=$dt2[1];
            $ano=$dt2[2];
            
            echo($dia."/".$mes."/".$ano)*/
            
            
            $chkmasculino="";
            
            $chkfeminino="";
                
            if($sexo=="F"){
                $chkfeminino="checked";
                
            }else{
                $chkmasculino="checked";
                
            }
            
            
            header("location:cadastros.php");
                
        }
    }
    
    
    
    
}




//Verifica se o botão salvar foi clicado
if(isset($_GET["btnsalvar"]))
{
    //Resgata os dados fornecidos pelo usuário
    //usando o metodo GET, conforme escolhindo no FORM
    $nome=$_GET['txtnome'];
    $telefone=$_GET['txttlf'];
    $celular=$_GET['txtclr'];
    $email=$_GET['txteml'];
    $dt_nasc=$_GET['txtdtn'];
    $sexo=$_GET['rdosexo'];
    $obs=$_GET['txtobs'];
    if($_GET[btnsalvar]=="Salvar"){   
        $sql = "insert into tbl_fale_conosco (nome, telefone,celular,email,dt_nasc,sexo,obs)
            values('".$nome."','".$telefone."','".$celular."','".$email."','".$dt_nasc."','".$sexo."','".$obs."')";
    }else if($_GET[btnsalvar]=="Editar"){
        $sql = "update tbl_fale_conosco set nome='".$nome."',telefone='".$telefone."',celular='".$celular."',email='".$email."',dt_nasc='".$dt_nasc."',sexo='".$sexo."',obs='".$obs."'where codigo=".$_SESSION['id'];
            
           
        
    }
    
    mysql_query($sql);
    
    header('location:cadastros.php');
    
    if($nome=="" || $email="")
    {
     /* //echo("<font color ='red'>Dados Obrigatorios</font>") 
        ?>
            <script>
            alert('Dados Obrigatórios');
            </script>
            <?php*/
            
    }
}
?><html>
    <head>
        <title>
        
        
        </title>
        <link type="text/css" href="css/stylecms.css" rel="stylesheet">
    
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
                <form method="get" action="cmsfaleconosco">
                    <table width="900" height="100" align="center" border="1" id="cont">
                        <tr>
                            <td align="center" id="consulta" colspan="6">Consulta de Contatos</td>
                        </tr>
                        <tr  align="center">
                            <td >Nome</td>
                             <td >Telefone</td>
                             <td >Celular</td>
                             <td >Email</td>
                             <td>Opções</td>
                        </tr>
                        <?php 
                            $sql="select * from tbl_fale_conosco order by id_fale_conosco desc;";


                            $select=mysql_query($sql);

                            while($rsContatos=mysql_fetch_array($select))
                            {

                        ?>
                        <tr>
                            <td><?php echo($rsContatos['nome']) ?></td>
                            <td><?php echo($rsContatos['telefone']) ?></td>
                            <td><?php echo($rsContatos['celular']) ?></td>
                            <td><?php echo($rsContatos['email']) ?></td>
                            <td>
                                <a href="cmsfaleconosco.php?modo=consulta_editar&codigo=<?php echo($rsContatos['id_fale_conosco']) ?>">
                                    <img src="icones/ic_mode_edit_black_24dp_1x.png">
                                </a>
                                
                                <a href="cmsfaleconosco.php?modo=excluir&codigo=<?php echo($rsContatos['id_fale_conosco']) ?>">
                                    <img src="icones/ic_delete_black_24dp_1x.png">
                                </a>
                            </td>
                        </tr>
                        <?php 

                            }
                        ?>
                    </table>
                </form>
            
            
            </div>
            
        
        </div>
        <footer>
        </footer>  
        
    
    
        
    </body> 

        



</html>