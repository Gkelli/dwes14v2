<?php
/*   getmss.php
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
  if(!isset($_POST["lsttime"])||!isset($_POST["nck"])){ die(); }
  session_start();
  $lineas=file('chattx.txt'); $nlineas=count($lineas); $lini=0;
  if($_POST["lsttime"]!='0'){
    for($i=0;$i<$nlineas;$i++){ $toks=explode('"',$lineas[$i]);
      if($toks[1]==$_POST["lsttime"]){ $lini=($i+1); break; }
    }
  }
  header('Content-Type: text/xml');
  echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'."\n<response>\n";
  echo '<hayses>'.(isset($_SESSION['mlc_nck'])&&$_SESSION['mlc_nck']==$_POST['nck']?1:0)."</hayses>\n";
  for($i=$lini;$i<$nlineas;$i++){
    if(trim($lineas[$i])!='') echo "\n<mensaje>\n".htmlentities($lineas[$i])."\n</mensaje>\n";
  }
  echo "</response>";
?>