slct<?php
    

//Ativa o uso das variaveis de sessão
session_start();

$nome=null;
$senha=null;
$senhaconfirm=null;
$loggin=null;


$prioridade=null;
$botao="Salvar";


/*conexao com o Banco de Dados*/
    
    //Estabelece uma conexao com o BD MySQl
    $conexao=mysql_connect('localhost','root','bcd127');
    
    //Ativa o database a ser utilizado no projeto
    mysql_select_db('dbprojetocowabunga');


/**/

//Verificação se existe uma variavel chamada modo na URL
if(isset($_GET['modo']))
{
    //Pega o conteudo da variavel modo
    $modo=$_GET['modo'];
    
    //Verifica se a variavel modo = excluir
    if($modo=='excluir')
    {
        //Resgata o codigo passado na URL
        $codigo=$_GET['codigo'];
        
        //Deleta no BD o Registro
        $sql = "delete from tbl_usuarios where id_usuarios=".$codigo;
        mysql_query($sql);
        
        //Redireciona para a pagina inicial para apagar o GET da url
       // header('location:cmsadmusuarios.php');
    }
     //Verifica se a variavel modo = consulta_editar
//    }else if($modo=='consulta_editar')
//    {
//        $botao="Atualizar";
//        
//        //Resgata o codigo passado na URL
//        $codigo=$_GET['codigo'];
//        
//        //Essa variavel Global será utilizada no UPDATE do registro
//        $_SESSION['id']=$codigo;
//        
//        //Monta o select para buscar o registro no BD
//        $sql="select * from tblcontatos where codigo=".$codigo;
//        
//        //Executa no BD o select
//        $select = mysql_query($sql);
//        
//        //Verifica se o resultado do select tem registros e 
//        //converte o resultado em um array
//        if($rsConsulta=mysql_fetch_array($select))
//        {
//            //Resgata todos os dados do BD e guarda em variavel local
//            $nome=$rsConsulta['nome'];
//            $telefone=$rsConsulta['telefone'];
//            $celular=$rsConsulta['celular'];
//            $email=$rsConsulta['email'];
//            $sexo=$rsConsulta['sexo'];
//            $dt_nasc=$rsConsulta['dt_nasc'];
//            
//            $dt=explode(" ",$dt_nasc);
//            
//            $data=$dt[0];
//            $hora=$dt[1];
//            
//            /*
//            $dt2=explode("-",$data);
//            
//            $dia=$dt2[2];
//            $mes=$dt2[1];
//            $ano=$dt2[0];
//            
//                            
//            echo($dia."/".$mes."/".$ano);
//            */
//            $obs=$rsConsulta['obs'];
//            
//            //*****Tratamento para checar o radio do sexo
//                $chkmasculino="";
//                $chkfeminino="";
//
//                if($sexo=='F')
//                    $chkfeminino="checked";
//                else
//                    $chkmasculino="checked";
//            //********
//            
//        }
        
        
    }


//Verifica se o botao Salvar foi clicado
if(isset($_POST["btnSalvar"]))
{
    //Resgata os dados fornecidos pelo usuário
    //usando o metodo POST, conforme escolhido no Form
    $nome=$_POST["txtNome"];
    $senha=$_POST["txtSenha"];
    $senhaconfirm=$_POST["txtSenhaConfirm"];
    $loggin=$_POST["txtloggin"];
    $prioridade=$_POST["slctprioridade"];
    
    
    //Verificação para o sistema inserir ou atualizar conforme a ação
    //do usuário, usamos uma variavel $botao para mudar o value o btnsalvar
    //qdo a pagina é aberta o botão vem com a palavra Salvar, qdo clicamos para editar o botão vem com a palvra Atualizar
    if($_POST["btnSalvar"]=='salvar')
    {
        //Monta o Script para enviar para o BD insert into tbl_usuarios (nome,loggin,senha,id_prioridade) values('asbjha','vdlajcv','asd','1');
        $sql="insert into tbl_usuarios (nome,loggin,senha,id_prioridade)
            values('".$nome."','".$loggin."','".$senha."','".$prioridade."');";
        echo($sql);
        mysql_query($sql);
        
      }  
//    else if($_POST["btnsalvar"]=='Atualizar')insert into tbl_fale_conosco (nome,telefone,celular,email,sexo,sugestoes,informacoesProdutos,profissao,linkFacebook) values('é vdd','011 6541-6541','011 96541-6541','xcsasx@xv', 'F','sdf','vsxgv','sdfsdf','dsfsf');
//    {
//        $sql="update tblcontatos set nome='".$nome."',telefone='".$telefone."',
//            celular='".$celular."', email='".$email."',sexo='".$sexo."',
//            dt_nasc='".$sugestoes."',link/facebook='".$sugestoes."' where codigo=".$_SESSION['id']
//        ;
//    }
    
    //Executa o script no BD
    
    
    
    //header('location:faleconsoco.php');
    //echo($sql);

    
}






?>

<html>
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
            <div id="conteudo">
                <form method="post" action="cmsadmusuarios.php">
                <table class="tabela" height="500">
                    <tr>
                        <td colspan="2" id="titulotabela">
                            Add Usuarios
                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                           Nome:
                        </td>
                        <td class="coluna2">
                            <input placeholder="Digite seu nome..." type="text" name="txtNome" value="" size="30px" required pattern="[a-z A-Z ã Ã õ Õ é É ê Ê ô Ô ç Ç]*" title="Permitido apenas Letras" onkeypress="return validar(event,'number')" >

                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                            senha:
                        </td>
                        <td class="coluna2">
                            <input placeholder="*******" type="password" name="txtSenha" value="" size="30px"  >
                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                            Confirmar senha:
                        </td>
                        <td class="coluna2">
                            <input placeholder="*******" type="password" name="txtSenhaConfirm" value="" size="30px"  >
                        </td>
                    </tr>
                    <tr >
                        <td class="coluna1">
                            loggin:
                        </td>
                        <td class="coluna2">
                            <input placeholder="loggin" type="text" name="txtloggin" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                            nivel de privilegio:
                        </td>
                        <td class="coluna2">
                            <select name="slctprioridade">
                                <option value="0"> Selecione uma prioridade:  </option>
                                <?php
                                    $sql="select * from tbl_prioridade order by id_prioridade;";
//
//
                                    $select=mysql_query($sql);

                                    while($rs=mysql_fetch_array($select))
                                    {
                                    
                                ?>
                                
                                <option value="<?php echo($rs['id_prioridade']); ?>"> <?php echo($rs['prioridade']); ?>  </option>
                                <?php 
                                    }
                                ?>
                                
                            
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="coluna1">
                            <input type="submit" value="salvar" name="btnSalvar" class="coluna1Salvar">
                        </td>
                        
                    </tr>
                   
                </table>
        </form> 
                <form method="get" action="cmsadmusuarios">
                    <table width="500" height="100" align="center" border="1" id="cont">
                        <tr>
                            <td align="center" id="consulta" colspan="4">Consulta de Contatos</td>
                        </tr>
                        <tr  align="center">
                            <td >Nome</td>
                             <td >loggin</td>
                             <td >nivel</td>
                            <td>Opções</td>
<!--
                             <td >Email</td>-->
                             

                        </tr>
                        <?php 
                            $sql="select * from tbl_usuarios order by id_usuarios desc;";


                            $select=mysql_query($sql);

                            while($rsContatos=mysql_fetch_array($select))
                            {

                        ?>
                        <tr>
                            <td><?php echo($rsContatos['nome']) ?></td>
                            <td><?php echo($rsContatos['loggin']) ?></td>
                            <td><?php echo($rsContatos['id_prioridade']) ?></td>
<!--                            <td><?php/* echo($rsContatos['email']) */?></td>-->
                            <td>
                                <a href="cmsadmusuarios.php?modo=consulta_editar&codigo=<?php echo($rsContatos['id_usuarios']) ?>">
                                    <img src="icones/ic_mode_edit_black_24dp_1x.png">
                                </a>
                                
                                <a href="cmsadmusuarios.php?modo=excluir&codigo=<?php echo($rsContatos['id_usuarios']) ?>">
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
            
            
            </div>
            
        
        </div>
        <footer>
        </footer>  
        
    
    
    
    </body>





</html>