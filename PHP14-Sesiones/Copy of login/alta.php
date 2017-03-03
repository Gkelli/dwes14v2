<?php 
 
if(isset($_POST["register"])){
 
if(!empty($_POST['full_name'])  && !empty($_POST['username']) && !empty($_POST['password'])) {
 $full_name=$_POST['full_name'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 
 $query=mysql_query("SELECT * FROM usuario WHERE login= ".$username."");
 $numrows=mysql_num_rows($query);
 
 if($numrows==0)
 {
 $sql="INSERT INTO usuario (login ,password, nombre ) VALUES('$username', '$password', '$full_name')";
 echo "Bienvenido";
$result=mysql_query($sql);
 
 if($result){
 $message = "Cuenta Correctamente Creada";
 } else {
 $message = "Error al ingresar datos de la informacion!";
 }
 
} else {
 $message = "El nombre de usuario ya existe! Por favor, intenta con otro!";
 }
 
} else {
 $message = "Todos los campos no deben de estar vacios!";
}
}
?>
 
<?php if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>
 
<div class="container mregister">


 <div id="login">
 <h3>Registrar</h3>
<form name="registerform" id="registerform" action="alta.php" method="post">
 <p>
 <label for="user_login">Nombre Completo<br />
 <input type="text" name="full_name" id="full_name" class="input" size="32" value="" /></label>
 </p>
 
 <p>
 <label for="user_pass">Nombre De Usuario<br />
 <input type="text" name="username" id="username" class="input" value="" size="20" /></label>
 </p>
 
 <p>
 <label for="user_pass">Contraseña<br />
 <input type="password" name="password" id="password" class="input" value="" size="32" /></label>
 </p>
 
<p class="submit">
 <input type="submit" name="register" id="register" class="button" value="Registrar" />
 </p>
 
 <p class="regtext">Ya tienes una cuenta? <a href="login.php" >Entra Aquí!</a>!</p>
</form>
 
 </div>
 </div>
 