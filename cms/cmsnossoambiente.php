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
                    CMS-<span>Sistema de gerenciamento do site</span>
                
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
                            Add Ambiente
                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                           Logradouro
                        </td>
                        <td class="coluna2cmscuriosidades">
                            <input placeholder="av.looney tunes..." type="text" name="txtNome" value="" size="30px" required pattern="[a-z A-Z ã Ã õ Õ é É ê Ê ô Ô ç Ç]*" title="Permitido apenas Letras" onkeypress="return validar(event,'number')" >

                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                            Telefone1(Obrigatorio):
                        </td>
                        <td class="coluna2cmscuriosidades">
                            <input placeholder="DDD XXXX-XXXX" type="password" name="txtSenha" value="" size="30px"  >
                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                            Telefone2:
                        </td>
                        <td class="coluna2cmscuriosidades">
                            <input placeholder="DDD XXXX-XXXX" type="password" name="txtSenhaConfirm" value="" size="30px"  >
                        </td>
                    </tr>
                    <tr >
                        <td class="coluna1">
                            Telefone3:
                        </td>
                        <td class="coluna2cmscuriosidades">
                            <input placeholder="DDD XXXX-XXXX" type="text" name="txtloggin" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                            Informações adicionais:
                        </td>
                        <td class="coluna2cmscuriosidades">
                            <textarea name="txtinfAdd" placeholder="Informaçoes adicioanis..."  ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="coluna1">
                            <input type="submit" value="salvar" name="btnSalvar" class="coluna1Salvar">
                        </td>
                        
                    </tr>
                   
                </table>
        </form>
               
            
            </div>
            <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    
      <table class="tabela" height="500">
                    <tr>
                        <td colspan="2" id="titulotabela">
                            Editar curiosidades
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
<!--
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
-->
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

            
        
        </div>
        <footer>
        </footer>  
        
    
    
    
    </body>





</html>