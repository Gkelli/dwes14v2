<?php
/*   actvarsss.php
 *   Parte del proyecto myltchat V0.46
 *   Author: Pedro Cardoso Rodriguez
 *   Mail: cardp_2004@yahoo.com.mx
    Copyright � 2011 Pedro Cardoso Rodriguez

    myltchat V0.46 is free software: you can redistribute it and/or modify it under the terms of the  GNU Lesser General Public License
    as published by the Free Software Foundation, either version 3 of the License, or any later version.

    myltchat V0.46 is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser General Public License for more details.

    You should have received a copy of the GNU Lesser General Public License along with myltchat V0.46 If not, see <http://www.gnu.org/licenses/>
 */
 if(!isset($_POST['fnt'])||!isset($_POST['neg'])||!isset($_POST['fita'])||!isset($_POST['fsub'])||!isset($_POST['fcol'])) die();
session_start();
$_SESSION['mlc_tf']=$_POST['fnt'];
$_SESSION['mlc_cf']=$_POST['fcol'];
$_SESSION['mlc_fb']=$_POST['neg'];
$_SESSION['mlc_fi']=$_POST['fita'];
$_SESSION['mlc_fs']=$_POST['fsub'];
echo 'ok';
?>