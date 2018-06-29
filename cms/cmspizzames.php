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
               <form>
                <table class="tabela" height="500">
                    <tr>
                        <td colspan="2" id="titulotabela">
                        Pizza do mes                        </td>
                    </tr>
                    <tr>
                        <td class="coluna1">
                           Selecione ou cadastre uma Pizza
                        </td>
                        <td class="coluna2cmscuriosidades">
                            <select name="kdai">
                                <option value="1">
                                    Selecionar
                                </option>
                            </select>
                            <a href="cmsadmprodutos.php" id="text1">Cadastrar</a>
                        </td>
                        
<!--
                        <td class="coluna2cmscuriosidades">
                            <input placeholder="Titulo" type="text" name="txttitulo" value="" size="50px" required pattern="[a-z A-Z ã Ã õ Õ é É ê Ê ô Ô ç Ç]*" title="Permitido apenas Letras" onkeypress="return validar(event,'number')" >

                        </td>
-->
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
                        <td colspan="2" id="titulotabela">
                            Add.foto
                            
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
                    <tr>
                        <td class="coluna1">
                            Selcione uma foto:
                        </td>
                        <td class="coluna2">
                            <input type="file" name="flefoto">
                        </td>
                    </tr>
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
                        <td colspan="2" class="coluna1">
                            <input type="submit" value="salvar" name="btnSalvar" style="width:100px;margin-left:300px;" >
                        </td>
                        
                    </tr>
                   
                </table>
        </form> 
            
            </div>
            
        
        </div>
        <footer>
        </footer>  
        
    
    
    
    </body>





</html>