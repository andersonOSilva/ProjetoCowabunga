<?php

//Ativa o uso das variaveis de sessão
session_start();

$nome=null;
$telefone=null;
$celular=null;
$email=null;
$sexo=null;
$dt_nasc=null;
//echo($dt_nasc);
$obs=null;

$chkmasculino="checked";
$chkfeminino=null;

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
        $sql = "delete from tblcontatos where codigo=".$codigo;
        mysql_query($sql);
        
        //Redireciona para a pagina inicial para apagar o GET da url
        header('location:cadastro.php');
        
     //Verifica se a variavel modo = consulta_editar
    }else if($modo=='consulta_editar')
    {
        $botao="Atualizar";
        
        //Resgata o codigo passado na URL
        $codigo=$_GET['codigo'];
        
        //Essa variavel Global será utilizada no UPDATE do registro
        $_SESSION['id']=$codigo;
        
        //Monta o select para buscar o registro no BD
        $sql="select * from tblcontatos where codigo=".$codigo;
        
        //Executa no BD o select
        $select = mysql_query($sql);
        
        //Verifica se o resultado do select tem registros e 
        //converte o resultado em um array
        if($rsConsulta=mysql_fetch_array($select))
        {
            //Resgata todos os dados do BD e guarda em variavel local
            $nome=$rsConsulta['nome'];
            $telefone=$rsConsulta['telefone'];
            $celular=$rsConsulta['celular'];
            $email=$rsConsulta['email'];
            $sexo=$rsConsulta['sexo'];
            $dt_nasc=$rsConsulta['dt_nasc'];
            
            $dt=explode(" ",$dt_nasc);
            
            $data=$dt[0];
            $hora=$dt[1];
            
            /*
            $dt2=explode("-",$data);
            
            $dia=$dt2[2];
            $mes=$dt2[1];
            $ano=$dt2[0];
            
                            
            echo($dia."/".$mes."/".$ano);
            */
            $obs=$rsConsulta['obs'];
            
            //*****Tratamento para checar o radio do sexo
                $chkmasculino="";
                $chkfeminino="";

                if($sexo=='F')
                    $chkfeminino="checked";
                else
                    $chkmasculino="checked";
            //********
            
        }
        
        
    }
}

//Verifica se o botao Salvar foi clicado
if(isset($_POST["btnsalvar"]))
{
    //Resgata os dados fornecidos pelo usuário
    //usando o metodo POST, conforme escolhido no Form
    $nome=$_POST["txtnome"];
    $telefone=$_POST["txttelefone"];
    $celular=$_POST["txtcelular"];
    $email=$_POST["txtemail"];
    $sugestoes=$_POST["txtdatanasc"];
    $sexo=$_POST["rdosexo"];
    $obs=$_POST["txtobs"];
    
    //Verificação para o sistema inserir ou atualizar conforme a ação
    //do usuário, usamos uma variavel $botao para mudar o value o btnsalvar
    //qdo a pagina é aberta o botão vem com a palavra Salvar, qdo clicamos para editar o botão vem com a palvra Atualizar
    if($_POST["btnsalvar"]=='Salvar')
    {
        //Monta o Script para enviar para o BD
        $sql="insert into tblcontatos (nome,telefone,celular,email,sexo,dt_nasc,obs)
            values('".$nome."','".$telefone."','".$celular."','".$email."',
                   '".$sexo."','".$dt_nasc."','".$obs."')";
        
    }else if($_POST["btnsalvar"]=='Atualizar')
    {
        $sql="update tblcontatos set nome='".$nome."',telefone='".$telefone."',
            celular='".$celular."', email='".$email."',sexo='".$sexo."',
            dt_nasc='".$sugestoes."',obs='".$obs."' where codigo=".$_SESSION['id']
        ;
    }
    
    //Executa o script no BD
    mysql_query($sql);
    
    
    header('location:faleconsoco.php');
    //echo($sql);

    
}



?>


<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            
        
        </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
        <header>
            <nav id="menu">
                <div id="a">
                    <ul>
                        <a href="main.html"><li>home </li></a>
                        <a href="curiosidades.html"><li>curiosidades</li></a>
                        <a href="nossoambiente.html"><li>nosso ambiente </li></a>
                        <a href="pizzadomes.html"><li>pizza do mes  </li></a>
                        <a href="faleconosco.html"><li> fale conosco </li></a>


                    </ul>
                    
                    
                </div>
                
                    
            </nav>
            <div id="login">
                        <div class="pao"><input type="text" name="login" placeholder="loggin" /></div>
                        <div class="pao"><input type="text" name="senha" placeholder="senha" /></div>
                        <div class="pao"><input type="submit" name="loggin" value="Ok"/></div>
            </div>
        </header>
        <div class="calco"></div>
        <main>
        
            <!-- <section id="jquery">
                <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
                <script src="js/jssor.slider-26.1.5.min.js" type="text/javascript"></script>
                <script type="text/javascript">
                    jQuery(document).ready(function ($) {

                        var jssor_1_SlideshowTransitions = [
                          {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
                          {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
                          {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
                          {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                          {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:$Jease$.$Swing,$Opacity:2,$Round:{$Rotate:0.5}},
                          {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
                          {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:$Jease$.$Swing,$Opacity:2,$Round:{$Rotate:0.5}},
                          {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
                          {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
                          {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
                          {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
                          {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
                        ];

                        var jssor_1_options = {
                          $AutoPlay: 1,
                          $SlideshowOptions: {
                            $Class: $JssorSlideshowRunner$,
                            $Transitions: jssor_1_SlideshowTransitions,
                            $TransitionsOrder: 1
                          },
                          $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                          },
                          $ThumbnailNavigatorOptions: {
                            $Class: $JssorThumbnailNavigator$,
                            $Rows: 2,
                            $Cols: 6,
                            $SpacingX: 14,
                            $SpacingY: 12,
                            $Orientation: 2,
                            $Align: 156
                          }
                        };

                        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                        /*#region responsive code begin*/

                        var MAX_WIDTH = 960;

                        function ScaleSlider() {
                            var containerElement = jssor_1_slider.$Elmt.parentNode;
                            var containerWidth = containerElement.clientWidth;

                            if (containerWidth) {

                                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                jssor_1_slider.$ScaleWidth(expectedWidth);
                            }
                            else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }

                        ScaleSlider();

                        $(window).bind("load", ScaleSlider);
                        $(window).bind("resize", ScaleSlider);
                        $(window).bind("orientationchange", ScaleSlider);
                        /*#endregion responsive code end*/
                    });
                </script>
                <style>
                    /* jssor slider loading skin spin css */
                    .jssorl-009-spin img {
                        animation-name: jssorl-009-spin;
                        animation-duration: 1.6s;
                        animation-iteration-count: infinite;
                        animation-timing-function: linear;
                    }

                    @keyframes jssorl-009-spin {
                        from {
                            transform: rotate(0deg);
                        }

                        to {
                            transform: rotate(360deg);
                        }
                    }

                    /*BOATOZIN SHOW */
                    .jssora093 {display:block;position:absolute;cursor:pointer;}
                    .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
                    .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
                    .jssora093:hover {opacity:.8;}
                    .jssora093.jssora093dn {opacity:.6;}
                    .jssora093.jssora093ds {opacity:.3;pointer-events:none;}

                    .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
                    .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
                    .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
                    .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
                    .jssort101 .p:hover{padding:2px;}
                    .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
                    .jssort101 .p:hover.pdn{padding:0;}
                    .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
                    .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
                    .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
                    .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
                    .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
                </style>
                <div id="jssor_1" style="position:relative;margin:0 auto;top:100px;left:0px;width:960px;height:480px;visibility:hidden;background-color:#24262e;">
                    <!-- cARREGAMENTO DA TELA
                    <div data-u="loading" class="jssorl-009-spin" style="top:0px;left:0px;width:100%;height:100%;text-align:center">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;top:0px;left:240px;width:720px;height:480px;">
                        <div>
                            <img data-u="image" src="img/1.jpg" />
                            <img data-u="thumb" src="img/1.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="img/2.jpg" />
                            <img data-u="thumb" src="img/2.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="img/3.jpg" />
                            <img data-u="thumb" src="img/3.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="img/4.jpg" />
                            <img data-u="thumb" src="img/4.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="img/5.png" />
                            <img data-u="thumb" src="img/5.png" />
                        </div>
                        <div>
                            <img data-u="image" src="img/6.png" />
                            <img data-u="thumb" src="img/6.png" />
                        </div>
                        <div>
                            <img data-u="image" src="img/7.jpg" />
                            <img data-u="thumb" src="img/7.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="img/8.jpg" />
                            <img data-u="thumb" src="img/8.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="img/9.jpg" />
                            <img data-u="thumb" src="img/9.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="img/10.jpg" />
                            <img data-u="thumb" src="img/10.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="img/11.png" />
                            <img data-u="thumb" src="img/11.png" />
                        </div>
                        <div>
                            <img data-u="image" src="img/12.jpg" />
                            <img data-u="thumb" src="img/12.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="img/13.jpg" />
                            <img data-u="thumb" src="img/13.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="img/14.jpg" />
                            <img data-u="thumb" src="img/14.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="img/15.jpg" />
                            <img data-u="thumb" src="img/15.jpg" />
                            
                        </div>
                        
                        <a data-u="any" href="https://www.jssor.com" style="display:none">bootstrap slider</a>
                    </div>
                    <!-- Thumbnail Navigator 
                    <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
                        <div data-u="slides">
                            <div data-u="prototype" class="p" style="width:99px;height:66px;">
                                <div data-u="thumbnailtemplate" class="t"></div>
                                <svg viewbox="0 0 16000 16000" class="cv">
                                    <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                    <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                    <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- BOATOZIN SHOW 
                    <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                            <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                            <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                            <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                            <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                        </svg>
                    </div>
                </div>
                <!-- #FIM DO JSSOR SLIDER 
               
                
            </section>-->
            <div id="social">
                    <div class="social"> 
                        <div class="animation">
                            
                        </div>
                    </div>
                    <div class="social">
                        <div class="animation">
                            
                        </div>
                   </div>
                   <div class="social">
                        <div class="animation">
                            
                        </div>
                   </div>
            </div>           
            <section id="conteudo">
<!--
                <table id="table1">
                
            </table>
-->
            <table class="formulario" >
                <tr>
                    <td  colspan="2" id="titulo_tabela" align="center">
                        Fale Conosco
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
                        Telefone:
                    </td>
                    <td class="coluna2">
                        <input placeholder=" DDD XXXX-XXXX" type="text" name="txtTelefone" value="" size="30px" pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" title="Formato inválido!" onkeypress="return validar(event,'caracter')">
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Celular:
                    </td>
                    <td class="coluna2">
                        <input placeholder=" DDD XXXXX-XXXX" type="text" name="txtCelular" value="" size="30px" pattern="[0-9]{3} [0-9]{5}-[0-9]{4}">
                    </td>
                </tr>
                <tr >
                    <td class="coluna1">
                        Email:
                    </td>
                    <td class="coluna2">
                        <input placeholder="cadrasto@contatos.com" type="email" name="txtEmail" value="" size="30px" required>
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Home Page:
                    </td>
                    <td class="coluna2">
                        <input type="text" name="txtDtNasc" value="" size="30px">
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Sexo:
                    </td>
                    <td class="coluna2">
                        <input type="radio" name="rdoSexo" value="F"  checked>Feminino
                        <input type="radio" name="rdoSexo" value="M" >Masculino
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Sugestões/Criticas:
                    </td>
                    <td class="coluna2">
                        <textarea placeholder="Deixe aqui sua observação..." name="txtobs" cols="32" rows="5" ></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Informações de Produtos:
                    </td>
                    <td class="coluna2">
                        <input placeholder="" type="text" name="txtProdutos" value="" size="30px" pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" title="Formato inválido!" onkeypress="return validar(event,'caracter')">
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Profissão:
                    </td>
                    <td class="coluna2">
                        <input placeholder="" type="text" name="txtProf" value="" size="30px" pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" title="Formato inválido!" onkeypress="return validar(event,'caracter')">
                    </td>
                </tr>
                <tr>
                    <td class="coluna1">
                        Link/Facebook:
                    </td>
                    <td class="coluna2">
                        <input placeholder="" type="text" name="txtLink" value="" size="30px" pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" title="Formato inválido!" onkeypress="return validar(event,'caracter')">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center" class="coluna1" id="btns">
                        <input type="submit" name="btnSalvar" value="salvar">
                        <input type="reset" name="btnLimpar" value="Limpar">
                    </td>
                </tr>
            </table>
        </form>          
                    
                    
                           
                            
            </section>

                    </div>
                </div>
            </section>
            
       
        
    </main>
       
        <footer>
        
        
        </footer> 
    
    
    </body>
</html>