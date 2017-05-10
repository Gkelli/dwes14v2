<?php
/*   rdbanns.php
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
  if(!isset($_SESSION['mlc_admin'])) die();
  include_once($_SESSION['mlc_lng'].'.php');
  $banns=file('banns.txt');
  if(!$banns) die($mlc_lngv25);
  $nbanns=count($banns);
  if($nbanns==0) die($mlc_lngv26);
  $actbanns='';
  for($g=0;$g<$nbanns;$g++){
    $actu=trim($banns[$g]); $actu=preg_replace("/\n/","",$actu);
    if($actu!=''){
      $actbanns.='<span id="mlc_bnn_'.$actu.'" style="display:block;"> <img src="myltchat/imgs/acepta.png" height="16" width="16" ';
      $actbanns.='onClick="unbann('."'".$actu."'".')" title="'.$mlc_lngv27.'"> '.$banns[$g].'</span>';
    }
  }
  if($actbanns=='') die($mlc_lngv26);
  echo $actbanns;
?>