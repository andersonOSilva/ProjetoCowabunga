<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            
        
        </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
		.mySlides {display:none;}
		</style>-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!--
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
		.mySlides {display:none}
		.demo {cursor:pointer}
		</style>
-->
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


        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

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
    </head>
<!--    <body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">-->
    <body style="margin:0;padding:0;font-family: -apple-system, BlinkMacSystemFont, Helvetica, Arial, 'Segoe UI', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; background-color: #262626;">
        <header>
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
                        <div class="pao"><input type="text" name="usuario" placeholder="loggin" /></div>
                        <div class="pao"><input type="password" name="senha" placeholder="senha" /></div>
                        <div class="pao"><input type="button" onclick="Login()" class="botao" value=Login></div>
                
                
            </div>
            
        </header>
        <div id="calco">
        </div>
            
            
        <main>
        
            <!--<section id="jquery">
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
                    
                
            </section>  -->
             <div id="social">
                    <div class="social_nosso_ambiente"> 
                        <div class="animation">
                            
                        </div>
                    </div>
                    <div class="social_nosso_ambiente">
                        <div class="animation">
                            
                        </div>
                   </div>
                   <div class="social_nosso_ambiente">
                        <div class="animation">
                            
                        </div>
                   </div>
            
            </div>
            
            <section id="conteudodomes">
                <!--<div class="gallery"> <img src="imagens/AshLokiDuo.jpg"></div>
					<div class="gallery"></div>
					<div class="gallery"></div>
					<div class="gallery"></div>
					<div class="gallery"></div>
					<div class="gallery"></div>
					<div class="gallery"></div>
					<div class="gallery"></div>
					<div class="gallery"></div>
					<div class="gallery"></div>
					<div class="gallery"></div>
					<div class="w3-container">
					
					<img class="mySlides w3-animate-top" src="imagens/AshLokiDuo.jpg" style="width:100%">
					  <img class="mySlides w3-animate-bottom" src="imagens/ExcaliburBlind.jpg" style="width:100%">
					  <img class="mySlides w3-animate-bottom" src="imagens/ExcaliburFang.jpg" style="width:100%">
					  <img class="mySlides w3-animate-bottom" src="imagens/EmberVoid.jpg" style="width:100%">
					  <img class="mySlides w3-animate-bottom" src="imagens/VaubanSlide.jpg" style="width:100%">
					  <img class="mySlides w3-animate-bottom" src="imagens/MagSniper.jpg" style="width:100%">
					  <img class="mySlides w3-animate-bottom" src="imagens/LechKrilTeam.jpg" style="width:100%">
					  <img class="mySlides w3-animate-bottom" src="imagens/LokiExplosion.jpg" style="width:100%">
					  <img class="mySlides w3-animate-top" src="imagens/JackalBattle.jpg" style="width:100%">
					  <img class="mySlides w3-animate-bottom" src="imagens/Frost.jpg" style="width:100%">
  ../js/jssor.slider-26.3.0.min.js-->
                
                <script src="js/jssor.slider-26.1.5.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Align: 0,
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
                $Cols: 5,
                $SpacingX: 5,
                $SpacingY: 5,
                $Align: 390
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

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

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="/theme/svg/loading/static-svg/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="cms/arquivos/34ec78fcc91ffb1e54cd85e4a0924332.PNG" />
                <img data-u="thumb" src="cms/arquivos/34ec78fcc91ffb1e54cd85e4a0924332.PNG" />
            </div>
            <div>
                <img data-u="image" src="cms/arquivos/47c9742bd95ce83b1a95471fe6e18b4e.png" />
                <img data-u="thumb" src="cms/arquivos/47c9742bd95ce83b1a95471fe6e18b4e.png" />
            </div>
            <div>
                <img data-u="image" src="/demos/img/gallery/980x380/033.jpg" />
                <img data-u="thumb" src="/demos/img/gallery/980x380/033.jpg/=sample?190x90" />
            </div>
            <div>
                <img data-u="image" src="/demos/img/gallery/980x380/034.jpg" />
                <img data-u="thumb" src="/demos/img/gallery/980x380/034.jpg/=sample?190x90" />
            </div>
            <div>
                <img data-u="image" src="/demos/img/gallery/980x380/035.jpg" />
                <img data-u="thumb" src="/demos/img/gallery/980x380/035.jpg/=sample?190x90" />
            </div>
            <div>
                <img data-u="image" src="/demos/img/gallery/980x380/036.jpg" />
                <img data-u="thumb" src="/demos/img/gallery/980x380/036.jpg/=sample?190x90" />
            </div>
            <div>
                <img data-u="image" src="/demos/img/gallery/980x380/037.jpg" />
                <img data-u="thumb" src="/demos/img/gallery/980x380/037.jpg/=sample?190x90" />
            </div>
            <div>
                <img data-u="image" src="/demos/img/gallery/980x380/038.jpg" />
                <img data-u="thumb" src="/demos/img/gallery/980x380/038.jpg/=sample?190x90" />
            </div>
            <div>
                <img data-u="image" src="/demos/img/gallery/980x380/039.jpg" />
                <img data-u="thumb" src="/demos/img/gallery/980x380/039.jpg/=sample?190x90" />
            </div>
            <div>
                <img data-u="image" src="/demos/img/gallery/980x380/040.jpg" />
                <img data-u="thumb" src="/demos/img/gallery/980x380/040.jpg/=sample?190x90" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
    <div id="pizzadomes">
            <div id="intro">
        
            </div>
            <div id="ingre">
        
            </div>
            
    </div>           


                           
                            
            

                
            </section>
            
       
        
    </main>
       
        <footer>
        
        
        </footer> 
    
    
    </body>
</html>