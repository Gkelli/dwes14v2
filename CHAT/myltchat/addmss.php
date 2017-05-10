<?php
/*   addmss.php
 *   Parte del proyecto myltchat V0.46
 *   Author: Pedro Cardoso Rodriguez
 *   Mail: cardp_2004@yahoo.com.mx
    Copyright © 2011 Pedro Cardoso Rodriguez

    myltchat V0.46 is free software: you can redistribute it and/or modify it under the terms of the  GNU Lesser General Public License
    as published by the Free Software Foundation, either version 3 of the License, or any later version.

    myltchat V0.46 is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser General Public License for more details.

    You should have received a copy of the GNU Lesser General Public License along with myltchat V0.46 If not, see <http://www.gnu.org/licenses/>
 */
  if(!isset($_POST["nck"])||!isset($_POST["mss"])||!isset($_POST["ava"])){ die(); }
  session_start();
  /***** Control de historial de mensajes *****/
  $maxmsjs=165; $prcntctrl=0.85;
  $timest=microtime(false); $timesttd=time();
  $mensaje=htmlentities(strip_tags(stripcslashes($_POST['mss'])));
  /*** 
    NOTA: si altera la estructura de las etiquetas debe actualizar las funciones cargamsjs() y elimcomnt() 
    en myltchat.js, el codigo en delmss.php y el codigo en nwbann.php
  ***/
  $newcnt="\n".'<p id="mlc_'.mkidtemp($timest).'" class="mlc_mensa"> <img src="'.$_POST["ava"].'" height="29" width="29">';
  $newcnt.=' <span class="mlc_nick">'.$_POST["nck"].':</span> <br><span class="mlc_hora">';
  $newcnt.=($_SESSION['mlc_lng']=='es'?date('d-m H:i:s',$timesttd):date('m-d H:i:s',$timesttd));
  $newcnt.='</span> <span style="padding:0 5px;font-family:'.$_SESSION['mlc_tf'].';color:'.selcolor($_SESSION['mlc_cf']).';';
  $newcnt.=($_SESSION['mlc_fb']?'font-weight:bold;':'').($_SESSION['mlc_fi']?'font-style:italic;':'');
  $newcnt.=($_SESSION['mlc_fs']?'text-decoration:underline;':'').'"> '.cambsmiles($mensaje).'</span></p>';
  $lineas=file('chattx.txt'); $cntprev=''; $tpopen='a';
  if($lineas && count($lineas)>$maxmsjs){ $nlineas=count($lineas);
    for($h=($nlineas-floor($prcntctrl*$maxmsjs));$h<$nlineas;$h++) $cntprev.=$lineas[$h];
    $tpopen='w';
  }
  $arch=fopen('chattx.txt',$tpopen); $escrito=false;
  if($arch) $escrito=fwrite($arch,$cntprev.$newcnt);
  if(!$escrito) die('fail');
  fclose($arch);
  echo $timest;

  function cambsmiles($texto){
    $tx1=preg_replace('/:D/','<img src="myltchat/imgs/035.png" height="16" width="16">',$texto);
    $tx2=preg_replace('/:\)/','<img src="myltchat/imgs/036.png" height="16" width="16">',$tx1);
    $tx3=preg_replace('/:O/','<img src="myltchat/imgs/039.png" height="16" width="16">',$tx2);
    $tx4=preg_replace('/:P/','<img src="myltchat/imgs/040.png" height="16" width="16">',$tx3);
    $tx5=preg_replace('/:\|/','<img src="myltchat/imgs/037.png" height="16" width="16">',$tx4);
    $tx6=preg_replace('/:\(/','<img src="myltchat/imgs/038.png" height="16" width="16">',$tx5);
    $tx7=preg_replace('/:8/','<img src="myltchat/imgs/041.png" height="16" width="16">',$tx6);
    $tx8=preg_replace('/:{/','<img src="myltchat/imgs/042.png" height="16" width="16">',$tx7);
    $tx9=preg_replace('/:S/','<img src="myltchat/imgs/043.png" height="16" width="16">',$tx8);
    $tx10=preg_replace('/:E/','<img src="myltchat/imgs/044.png" height="16" width="16">',$tx9);
    $tx11=preg_replace('/:C/','<img src="myltchat/imgs/034.png" height="16" width="16">',$tx10);
    $tx12=preg_replace('/:5/','<img src="myltchat/imgs/031.png" height="16" width="16">',$tx11);
    $tx13=preg_replace('/:!/','<img src="myltchat/imgs/050.png" height="16" width="16">',$tx12);
    $tx14=preg_replace('/:M/','<img src="myltchat/imgs/056.png" height="16" width="16">',$tx13);
    $tx15=preg_replace('/:R/','<img src="myltchat/imgs/053.png" height="16" width="16">',$tx14);
    $tx16=preg_replace('/;\)/','<img src="myltchat/imgs/045.png" height="16" width="16">',$tx15);
    return $tx16;
  }
  function selcolor($val){
    if($val==1) return 'black';
    else if($val==2) return 'blue';
    else if($val==3) return 'gray';
    else if($val==4) return 'yellow';
    else if($val==5) return 'green';
    else if($val==6) return 'orange';
    else if($val==7) return 'pink';
    return 'red';
  }
  function mkidtemp($tm){ return preg_replace('/ /','',$tm); }
?>