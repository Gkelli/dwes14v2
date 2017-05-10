<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
  <title>myltchat V0.46</title>
  <script type="text/javascript" src="myltchat/jquery-1.6.2.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){ $('#lng_en').hide(); });
    function show_lng(lng){
      $('#lng_e'+(lng==1?'s':'n')).show();
      $('#lng_e'+(lng==1?'n':'s')).hide();
    }
  </script>
</head>
<body>
<h1 style="text-align:center;margin:1em 0;">myltchat V0.46</h1>

<?php
  include('myltchat/myltchat.php');
/** Constructs the myltchat object
    $nm string user's nick name
    $isad boolean user is admin level
    $tt string chat title
    $lng string (es | en) language to use (optional default value es)
    $musr boolean if true the chat manage its own users system and ignore the $nm and $isad parameters (optional default value false)
*/
  $mltchat=new myltchat('',false,'myltchat-v0.46','es',false);
/** Sets some chat preferences
    $al int chat height in pixels (min 185)
    $an int chat width in pixels
    $ps int chat position where
       1=Corner up-left; 2=left-center; 3=Corner up-right; 4=right-center; 5=Corner down-left; 6=Corner down-right
       2 & 4 does not center the chat on IE8
    $tp int position type where
       0=relative; 1=fixed; otro=absolute
    $vh boolean True if want every message time is displayed (optional default true)
*/
  $mltchat->setPrefs(465,335,6,1);
/** Out put the html code to load and display the chat
    tojq boolean means To Jquery [only must be true when called from autoises.php] (optional default value false)
*/
  $mltchat->escribeChat();
// If you want to close the session explicit (When changing page or closing session on site),
// Call $mltchat->cierrasess() Useful if the user changes the chat to popup
?>

<div style="width:68%;margin:0 auto;border:none;padding:0 2em;">
  <p style="display:inline;border:solid 2px gray;padding:0 12px;cursor:pointer;" onClick="show_lng(1)"> Espa&ntilde;ol </p>
  <p style="display:inline;border:solid 2px gray;padding:0 12px;cursor:pointer;" onClick="show_lng(2)"> English </p>
</div>
<div style="width:68%;margin:0 auto;border:solid 1px black;padding:25px 2em;" id="lng_es">
<h2 style="text-align:center;">Caracter&iacute;sticas</h2>
<ul>
  <li>Puede establecer el nombre e idioma (espa&ntilde;ol | ingl&eacute;s) del chat.</li>
  <li>No requiere de base de datos.</li>
  <li>El chat puede manejar su propio registro y login de usuarios o utilizar los usuarios del sitio donde se implementa.</li>
  <li>Si el sitio no maneja usuarios y no desea que el chat maneje registro de usuarios se puede generar un nick name aleatorio del tipo Inv + #aleatorio.</li>
  <li>Puede otorgar privilegios de administrador a uno o m&aacute;s usuarios.</li>
  <li>Los usuarios con privilegios de administrador pueden banear a otros usuarios o eliminar comentarios.</li>
  <li>Cada usuario puede elegir su avatar (al iniciar se usa uno gen&eacute;rico <img src="myltchat/imgs/avatar.png">)<br>el cambio puede requerir actualizaci&oacute;n con F5 seg&uacute;n el navegador.</li>
  <li>Cada usuario puede elegir: fuente, color de fuente, estilo negrita, estilo it&aacute;lica, estilo subrayada; para sus mensajes.</li>
  <li>Al enviar mensaje puede utilizar los iconos incluidos.</li>
  <li>El chat se puede minimizar/maximizar con el bot&oacute;n: <img src="myltchat/imgs/minmax.png" width="16" height="16"></li>
  <li>El chat se puede cambiar a popup con el bot&oacute;n: <img src="myltchat/imgs/pup.png" width="16" height="16"></li>
</ul>
<h2 style="text-align:center;">Notas de instalaci&oacute;n</h2>
<ul>
  <li>Siempre se debe instalar como subcarpeta
    <br> tusitio: /index.php (Aqu&iacute; implementas el chat o en otro archivo php de tu sitio)<br>tusitio: /myltchat (agregar la carpeta as&iacute;)
  </li>
  <li>Hay que dar permisos de escritura a:<br>Directorio: /myltchat/avatares<br>Archivos: chattx.txt, banns.txt y rgusr.csv</li>
  <li> Ejempo de implementacion 1 Usuarios anonimos:<span style="white-space:pre;"><code>
    &lt;?php
      include('myltchat/myltchat.php');
       // Instanciar el chat, recibe los parametros:
       // nombre de usuario, es administrador del chat,
       // nombre del chat, [idioma], [manejo de usuarios propios]
      $mltchat=new myltchat('',false,'myltchat','es',false);
       // como el manejo de usuarios se indica a false y no se indica
       // nombre de usuario se generara un usuario invitado con nombre aleatorio
       // establecer preferencias del chat, recibe los parametros:
       // altura en pixeles, anchura en pixeles, posicion donde 1=arriba-izquierda; 
       // 2=izquierda-centro; 3=arriba-derecha; 4=derecha-centro; 5=abajo-izquierda;
       // 6=abajo-derecha (2 & 4 no centra verticalmente en IE8)
      $mltchat->setPrefs(465,335,6,1);
       // escribe el html necesario para crear el chat
      $mltchat->escribeChat();
    ?&gt;</code></span>
  </li>
  <li> Ejempo de implementacion 2 utiliza Usuarios propios del sitio:<span style="white-space:pre;"><code>
    &lt;?php
      ...
      $mltchat=new myltchat($nombre_usuario_actual,false,'myltchat','es',false);
       // notese que $nombre_usuario_actual debe ser el nombre del usuario de la sesion actual
       // cambie el segundo parametro a true si el usuario actual es administrador
      ...
    ?&gt;</code></span>
  </li>
  <li> Ejempo de implementacion 3 el chat maneja su propio sistema de usuarios:<br>
   (Cuando use esta opcion por primer vez la cuenta de administrador es 'admin' con password 'admin')<span style="white-space:pre;"><code>
    &lt;?php
      ...
      $mltchat=new myltchat('',false,'myltchat','es',true);
       // notese que el ultimo parametro es true, con esto internamente se
       // realizara la carga de los dos primeros parametros
      ...
    ?&gt;</code></span>
  </li>
</ul>
<h2 style="text-align:center;">Notas para desarrolladores</h2>
<ul>
  <li>Desarrollado bajo Apache 2.0, PHP Versi&oacute;n 5.2.8 con MySQl 5.0.51a y JQuery </li>
  <li>Probado en:<br>Google Chrome 8.0.552.237<br>Firefox 5.0<br>Internet Explorer 8<br>Opera 10.62<br>Safari 5.0.3  </li>
  <li>En IE 8 para setPrefs($al,$an,$ps,$tp) donde $ps=2 o 4 no funciona y no se centra verticalmente</li>
  <li>En IE 8 al cambiar a popup puede requerir actualizacion dentro del popup con F5.</li>
  <li>En IE 8 y Opera al cerrar ventana popup (si se cambio a popup) ya no se recarga el chat en la ventana principal</li>
  <li>La altura m&iacute;nima es de 185px<br>Si se pone menor se cambiar&aacute; autom&aacute;ticamente a 185px</li>
  <li>Puede cambiar el estio visual en myltchat_e1.css</li>
  <li>En addmss.php l&iacute;nea 5, si altera la estructura de la etiquetas (en la variable $newcnt) debe actualizar la funci&oacute;n cargamsjs() en myltchat.js</li>
  <li>En addmss.php puede controlar el numero de mensajes guardados<br>Establezca en la variable $maxmsjs el numero m&aacute;ximo permitido (default 165)
    <br>Establezca en la variable $prcntctrl el porcentaje de control, cada que el numero de mensaje supere el m&aacute;ximo ser&aacute;
    reducido (borrando los mensajes m&aacute;s viejos) al porcentaje de control (default 85%)</li>
</ul>
</div>

<div style="width:68%;margin:0 auto;border:solid 1px black;padding:25px 2em;" id="lng_en">
<h2 style="text-align:center;">Features</h2>
<ul>
  <li>You can set the chat's name and language (spanish | english).</li>
  <li>Does not need a data base.</li>
  <li>The chat can manage its own login/register or use the site existing users.</li>
  <li>If the site does not manage users and you don't want the chat register users it can genarate a random nick name as Inv + #rand_number</li>
  <li>You can set adminitrator privilegies to one or more users.</li>
  <li>The admin users can bann other users or erase comments.</li>
  <li>Every user can choose its avatar (at starting it is used one generic <img src="myltchat/imgs/avatar.png">)<br>changing can need to reload the page with F5 due to browser.</li>
  <li>Every user can choose: font, color font, bold font, italic font, underline font; for its comments.</li>
  <li>There are icons to include in comments.</li>
  <li>The chat can be minimize/maximize with button: <img src="myltchat/imgs/minmax.png" width="16" height="16"></li>
  <li>The chat can be show as popup window with button: <img src="myltchat/imgs/pup.png" width="16" height="16"></li>
</ul>
<h2 style="text-align:center;">Installing</h2>
<ul>
  <li>Always must be installed as sub-folder
    <br> yoursite: /index.php (Here you call the myltchat class or in another file of your site)<br>yoursite: /myltchat (add the folder directly)
  </li>
  <li>You must give write permission to:<br>Folder: /myltchat/avatares<br>Files: chattx.txt, banns.txt and rgusr.csv</li>
  <li> Example 1 annonymus users:<span style="white-space:pre;"><code>
    &lt;?php
      include('myltchat/myltchat.php');
       // Creates the chat object, receives the parameters:
       // user name, is chat administrator,
       // chat name, [language], [active the manage users system]
      $mltchat=new myltchat('',false,'myltchat','es',false);
       // as the manage user system is set to false and does not set a
       // user name it will be generate a user with random name
       // set chat preferences, receives the parameters:
       // height on pixels, width on pixels, position where 1=up-left corner;
       // 2=left-center; 3=up-right corner; 4=rigth-center; 5=down-left corner;
       // 6=down-right corner (2 & 4 does not center vertically on IE8)
      $mltchat->setPrefs(465,335,6,1);
       // writes the html code needed to dispaly the chat
      $mltchat->escribeChat();
    ?&gt;</code></span>
  </li>
  <li> Example 2 use the site users:<span style="white-space:pre;"><code>
    &lt;?php
      ...
      $mltchat=new myltchat($current_user_name,false,'myltchat','es',false);
       // the $current_user_name var must be the current user name accord to the session site
       // control changes the second parameter to true si the currect user is the admin
      ...
    ?&gt;</code></span>
  </li>
  <li> Example 3 the chat managing its own users system:<br>
   (When usign this option for first time the admin account is 'admin' password 'admin')<span style="white-space:pre;"><code>
    &lt;?php
      ...
      $mltchat=new myltchat('',false,'myltchat','es',true);
       // the last parameter must be true, with that the chat
       // will load/verify the two first parameters
      ...
    ?&gt;</code></span>
  </li>
</ul>
<h2 style="text-align:center;">For developers</h2>
<ul>
  <li>Developed under Apache 2.0, PHP Versi&oacute;n 5.2.8 con MySQl 5.0.51a and JQuery </li>
  <li>Tested on:<br>Google Chrome 8.0.552.237<br>Firefox 5.0<br>Internet Explorer 8<br>Opera 10.62<br>Safari 5.0.3  </li>
  <li>On IE 8 for setPrefs($al,$an,$ps,$tp) where $ps=2 or 4 does not works and does not center vertically.</li>
  <li>On IE 8 when changes to popup window it can need reload inside the popup with F5.</li>
  <li>On IE 8 and Opera when closing the popup window (if user changes to it) the chat does not re-appear on the browser</li>
  <li>The minimum height is 185px<br>If you set a minor one it will change to 185px</li>
  <li>You can change the visua style in myltchat_e1.css</li>
  <li>In addmss.php line 5, if you change the tags structure (in the var $newcnt) you must update the function cargamsjs() in myltchat.js</li>
  <li>In addmss.php you can manage the limit of saved comments<br>Set in the var $maxmsjs the allowed maximum limit (default 165)
    <br>Set in the var $prcntctrl the control percent, any time the comments are more than the maximum limit it will be
    reduced (erasing the older comments) to control percent (default 85%)</li>
</ul>
</div>

<p style="width:70%;margin:1em auto;border:solid 1px black;white-space:pre;padding:10px 1em;">
Proyecto myltchat V0.46
Author: Pedro Cardoso Rodr&iacute;guez
Mail: <a href="mailto:cardp_2004@yahoo.com.mx">cardp_2004@yahoo.com.mx</a>
Copyright © 2011 Pedro Cardoso Rodr&iacute;guez Bajo LGPL

myltchat V0.46 is free software: you can redistribute it and/or modify it under the terms of the  GNU Lesser General Public License
as published by the Free Software Foundation, either version 3 of the License, or any later version.

myltchat V0.46 is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along with myltchat V0.46 If not, see
<a href="http://www.gnu.org/licenses/">http://www.gnu.org/licenses/</a>
</p>

</body>
</html>