<?php
/*   nwautousr.php
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
  if(!isset($_POST['nnc']) || !isset($_POST['nnp'])) die();
  include_once($_SESSION['mlc_lng'].'.php');
  $arch=fopen('rgusr.csv','r');
  if(!$arch) die($mlc_lngv36);
  while( ($regl=fgetcsv($arch,1000,",")) !== FALSE ){
    if($regl[0]==$_POST['nnc']){ fclose($arch); die($mlc_lngv35); }
  }
  fclose($arch); $arch=fopen('rgusr.csv','a');
  if(!$arch) die($mlc_lngv36);
  // every row nick,md5(pwd),(1=admin level || 0=normal level)
  $newreg='"'.$_POST['nnc'].'","'.md5($_POST['nnp']).'","0"'; $escrito=false;
  if($arch) $escrito=fwrite($arch,$newreg."\n");
  if(!$escrito) die($mlc_lngv36);
  fclose($arch);  echo $mlc_lngv37;
?>