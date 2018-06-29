<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: darkred;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
/*    background-color: #fefefe;*/
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
/*    border: 1px solid #888;*/
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
    
    .tabela{
/*    margin-top: 100px;*/
    margin-left: auto;
    margin-right: auto;
/*    border:solid 1px;*/
}
#titulotabela{
    background-color: rgba(0,0,0,0.7);
    color: aliceblue;
/*    border:solid 2px red;*/
    
    
}
#titulotabelaclick{
    background-color: rgba(0,0,0,0.7);
    color: aliceblue;
/*    border:solid 2px red;*/
    
    
    
}#titulotabelaclick:active{
    background-color: rgba(255,255,255,0.7);
    color: aliceblue;
/*    border:solid 2px red;*/
    
    
    
}

.coluna1{
    
    background-color: rgba(0,0,0,0.7);
    color: aliceblue;
/*    border:solid 2px orange;*/
}
.coluna1Salvar{

    
    /*color: aliceblue;
*/
    margin-left: 150px;
    background-color: white;
    
/*    border:solid 2px orange;*/
}
.coluna2{
    background-color:
    rgba(0,0,0,0.5);
    color: aliceblue;
/*    border:solid 2px orange;*/
}
.coluna2cmscuriosidades{
    padding: 20px;
    width: 470px;
    height: 30px;
    background-color:
    rgba(0,0,0,0.5);
    color: aliceblue;
/*    border:solid 2px orange;*/
    
}
select{
    width: 200px;
    
    
}

</style>
<body>



<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

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

</body>
</html>
