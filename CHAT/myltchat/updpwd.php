<?php
/*   updpwd.php
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
  if(!isset($_POST['nck'])||!isset($_POST['pwd'])) die();
  $arch=fopen('rgusr.csv','r'); $newcnt='';
  if(!$arch) die('fail');
  while( ($regl=fgetcsv($arch,1000,",")) !== FALSE ){
    if($regl[0]==$_POST['nck'])
      $newcnt.='"'.$regl[0].'","'.md5($_POST['pwd']).'","'.$regl[2].'"'."\n";
    else $newcnt.='"'.$regl[0].'","'.$regl[1].'","'.$regl[2].'"'."\n";
  }
  fclose($arch); $arch=fopen('rgusr.csv','w');
  if(!$arch) die('fail');
  // every row nick,md5(pwd),(1=admin level || 0=normal level)
  $escrito=false;
  if($arch) $escrito=fwrite($arch,$newcnt);
  if(!$escrito){ fclose($arch); die('fail'); }
  fclose($arch);  echo 'ok';
?>