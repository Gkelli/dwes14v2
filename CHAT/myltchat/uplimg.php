<?php
/*   uplimg.php
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
  if(empty($_FILES["nava"]["tmp_name"]) || $_FILES["nava"]["tmp_name"] == "none"){ die('0'); }
  $extar=strtolower(substr($_FILES["nava"]["name"],strlen($_FILES["nava"]["name"])-4));
  if( $extar=='.png' || $extar=='.jpg'  || $extar=='jpeg'){
    if($extar=='jpeg') $extar='.jpg';
    $arch_proc='avatares/tmp-'.$_POST["nick"].$extar;
    $arch_ava='avatares/'.$_POST["nick"].$extar;
    copy($_FILES['nava']['tmp_name'],$arch_proc);
    list($width,$height)=getimagesize($arch_proc);
    if($extar=='.jpg') $source=imagecreatefromjpeg($arch_proc);
    else if($extar=='.png')$source=imagecreatefrompng($arch_proc);
    $thumb=imagecreate(29,29);
    imagecopyresized($thumb,$source,0,0,0,0,29,29,$width,$height);
    if(is_file('avatares/'.$_POST['nick'].'.png')) unlink('avatares/'.$_POST['nick'].'.png');
    if(is_file('avatares/'.$_POST['nick'].'.jpg')) unlink('avatares/'.$_POST['nick'].'.jpg');
    if($extar=='.jpg') imagejpeg($thumb,$arch_ava);
    else if($extar=='.png') imagepng($thumb,$arch_ava);
    unlink($arch_proc);
    echo 'ok:'.$arch_ava;
  }
  else die('-1');
?>