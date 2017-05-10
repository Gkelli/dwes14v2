<?php
/*   autoises.php
 *   Parte del proyecto myltchat V0.46
 *   Author: Pedro Cardoso Rodriguez
 *   Mail: cardp_2004@yahoo.com.mx
    Copyright © 2011 Pedro Cardoso Rodriguez

    myltchat V0.46 is free software: you can redistribute it and/or modify it under the terms of the  GNU Lesser General Public License
    as published by the Free Software Foundation, either version 3 of the License, or any later version.

    myltchat V0.46 is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser General Public License for more details.

    You should have received a copy of the GNU Lesser General Public License along with myltchat V0.46. If not, see <http://www.gnu.org/licenses/>
 */
  session_start();
  if(!isset($_POST['nnc']) || !isset($_POST['nnp']) || !isset($_POST['tt']) || !isset($_POST['prf'])) die();
  include_once($_SESSION['mlc_lng'].'.php');
  $arch=fopen('rgusr.csv','r'); $exis=false;
  if(!$arch) die('0');
  $md5pwd=md5($_POST['nnp']); $isad=false;
  while( ($regl=fgetcsv($arch,1000,",")) !== FALSE ){
    // every row nick,md5(pwd),(1=admin level || 0=normal level)
    if($regl[0]==$_POST['nnc'] && $regl[1]==$md5pwd){ $exis=true; $isad=($regl[2]=='1'); }
  }
  fclose($arch);
  if(!$exis){ echo '0'; }
  else{
    include('myltchat.php'); $_SESSION['mlc_nck']=$_POST['nnc'];
    $tprefs=explode(':',$_POST['prf']);
    $mltchat=new myltchat($_POST['nnc'],$isad,$_POST['tt'],$_SESSION['mlc_lng'],true);
    $mltchat->setPrefs($tprefs[0],$tprefs[1],$tprefs[2],$tprefs[3]);
    $mltchat->escribeChat(true);
    echo '<span style="display:none;">hpadm='.($isad?'t':'n').'</span>';
  }
?>