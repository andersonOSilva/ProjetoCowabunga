<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            
        
        </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body style="padding:0px; margin:0px; background-color:#ffa;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
        <header>
            <div id="logo"></div>
            <nav id="menu">
                <div id="a">
                    <ul>
                        <a href="main.php"><li >home </li></a>
                        <a href="curiosidades.php"><li >curiosidades</li></a>
                        <a href="nossoambiente.php"><li class="p">nosso ambiente </li></a>
                        <a href="pizzadomes.php" ><li class="p">pizza do mes  </li></a>
                        <a href="faleconosco.php"><li class="p"> fale conosco </li></a>


                    </ul>
                    
                    
                </div>
                
                    
            </nav>
            <div id="login">
                        

                
<!--
                        <div class="pao"><input type="text" name="usuario" placeholder="loggin" /></div>
                        <div class="pao"><input type="password" name="senha" placeholder="senha" /></div>
                        <div class="pao"><input type="button" onclick="Login()" class="botao" value=Login></div>
                
-->
  


<button class="logbtn"onclick="document.getElementById('id01').style.display='block'" style="width:auto;margin: 8px 100px;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
      <script language="JavaScript">
                    function Login() {
                          var done=0;
                          var usuario = document.getElementsByName('usuario')[0].value;
                          usuario=usuario.toLowerCase();
                          var senha= document.getElementsByName('senha')[0].value;
                          senha=senha.toLowerCase();
                          if (usuario=="admin" && senha=="admin") {
                            window.location="cms/cms.php";
                            done=1;
                          }else if (usuario=="" || senha==""){
                              done=2
                          }else {done=3}
                              
                          if (done==2) { alert("Dados incorretos, tente novamente preenchendo todos os campos"); }
                        else if(done==3){ alert("Usuario ou senha incorretos"); }}
                    
                    </script>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="imagens/1.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
     <div class="pao">
        <div><b>Loggin</b></div>
        <input type="text" size="30" placeholder="loggin" name="usuario" required><br>

        <div><b>Senha</b></div>
        <input type="password" size="30" placeholder="******" name="senha" required>
    </div>
                
    <div>
        <button type="button" onclick="Login()" value=Login class="logbtn">Login</button>
<!--      <input type="checkbox" checked="checked"> Remember me-->
        </div>

        <div >
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="logbtn">Cancel</button>

        </div>
    </div>
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

        </header>
        <div id="calco2"></div>
        
        <main>
        
            
                <section id="jquery">
                    <div id="social">
                    <div style="box-shadow: blue  5px 10px 30px;" class="social"> 
                        <div class="animation">
                            
                        </div>
                    </div>
                    <div style="box-shadow: green  5px 10px 30px;" class="social">
                        <div class="animation">
                            
                        </div>
                   </div>
                   <div style="box-shadow: magenta  5px 10px 30px;" class="social">
                        <div class="animation">
                            
                        </div>
                   </div>
                </div>     
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
<!--                slider background-->
                <div id="jssor_1" style="position:relative;margin: auto;width:auto;height:480px;visibility:hidden;background-image:url(../imagens/14574552-Diferentes-sabores-pizza-patr-n-transparente-sobre-madera-con-textura-de-fondo-de-la-bandera-italian-Foto-de-archivo.jpg);">
                    <!--<div id="jssor_1" style="position:relative;margin:0 auto;top:100px;left:0px;width:960px;height:480px;visibility:hidden;background-color:#24262e;">-->
                    <!-- cARREGAMENTO DA TELA-->
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
                    <!-- Thumbnail Navigator -->
<!--                    miini galeria background-->
                    <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:rgba(255,255,255,0.7);" data-autocenter="2" data-scale-left="0.75">
<!--                        
<div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:rgba(255,255,255,0.7);" data-autocenter="2" data-scale-left="0.75">-->
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
                    <!-- BOATOZIN SHOW -->
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
<!--                faz a div sumir -->
<!--
                <script>
                       $(window).scroll(function() {

                        if ($(this).scrollTop()>500)
                         {
                            $('#jquery').fadeOut();
                         }
                        else
                         {
                          $('#jquery').fadeIn();
                         }
                     });
                </script>
-->
                <!-- #FIM DO JSSOR SLIDER -->
               
                
            </section>        
            <div id="itens">
                        <div class="itens">shazam</div>
                        <div class="itens">shazam</div>
                        <div class="itens">shazam</div>
                    </div>
            
            <section id="conteudo">
                
                
                <div id="cardapio">
                    
                    <div id="produtos">
                        <section>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>


                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                               <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>


                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                               <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            


                            
                            


                           
                            
                        </section>

                    
                    </div>
                    
                    
                </div>
                
            </section>
            
       
       
    </main>
        
       
        <footer>
        
        
        </footer> 
    
    
    </body>
</html>