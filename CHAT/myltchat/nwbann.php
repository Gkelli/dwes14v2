<?php
/*   nwbann.php
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
  if(!isset($_SESSION['mlc_admin']) || !isset($_POST['nnbnn'])) die();
  $arch=fopen('banns.txt','a'); $escrito=false;
  if($arch) $escrito=fwrite($arch,$_POST['nnbnn']."\n");
  if(!$escrito) die('fail');
  fclose($arch);  echo 'ok';
  $lineas=file('chattx.txt'); $cntprev=''; $nlineas=count($lineas);
  for($h=0;$h<$nlineas;$h++){
    if(trim($lineas[$h])!=''){
      $posnick=stripos($lineas[$h],'mlc_nick')+10;
      $poscnick=stripos($lineas[$h],'</sp',$posnick)-($posnick+1);
      $tlnick=substr($lineas[$h],$posnick,$poscnick);
      if($tlnick!=$_POST['nnbnn']) $cntprev.=$lineas[$h];
    }
  }
  $arch=fopen('chattx.txt','w'); $escrito=false;
  if($arch) $escrito=fwrite($arch,$cntprev);
  fclose($arch);
?>