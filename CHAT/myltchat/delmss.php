<?php
/*   delmss.php
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
  session_start();
  if(!isset($_SESSION['mlc_admin']) || !isset($_POST["idmss"])) die();
  $lineas=file('chattx.txt'); $cntprev=''; $nlineas=count($lineas);
  for($h=0;$h<$nlineas;$h++){ $mensj=$lineas[$h];
    if(strlen($mensj)>0){ $com1=stripos($mensj,'"');
      if($com1){ $com2=stripos($mensj,'"',$com1+1);
        if($com2){
          $idmensj=substr($mensj,$com1+1,($com2-$com1-1));
          if($_POST["idmss"]!=$idmensj && $_POST["idmss"]!='evone') $cntprev.=$lineas[$h];
        }
      }
    }
  }
  $arch=fopen('chattx.txt','w'); $escrito=false;
  if($arch) $escrito=fwrite($arch,$cntprev);
  if(!$escrito && $_POST["idmss"]!='evone') die('fail');
  fclose($arch);
  echo 'ok';
?>