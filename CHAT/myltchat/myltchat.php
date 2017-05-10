<?php
/*   myltchat.php
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
if(!isset($_SESSION['mlc_vs'])) $_SESSION['mlc_vs']=1;
if(!isset($_SESSION['mlc_tf'])) $_SESSION['mlc_tf']='Times new roman';
if(!isset($_SESSION['mlc_cf'])) $_SESSION['mlc_cf']=1;
if(!isset($_SESSION['mlc_fb'])) $_SESSION['mlc_fb']=0;
if(!isset($_SESSION['mlc_fi'])) $_SESSION['mlc_fi']=0;
if(!isset($_SESSION['mlc_fs'])) $_SESSION['mlc_fs']=0;
if(!isset($_SESSION['mlc_pu'])) $_SESSION['mlc_pu']=0;
if(!isset($_SESSION['mlc_lng'])) $_SESSION['mlc_lng']='es';
class myltchat{
  private $titulo='';
  private $pos=2;
  private $tpPos='fixed';
  private $zindex=15;
  private $alt=210;
  private $anch=180;
  private $vhora=true;
  private $manusr=false;
  /** Constructs the myltchat object
    $nm string user's nick name
    $isad boolean user is admin level
    $tt string chat title
    $lng string (es | en) language to use (optional default value es)
    $musr boolean if true the chat manage its own users system and ignore the $nm and $isad parameters (optional default value false)
  */
  function __construct($nm,$isad,$tt,$lng='es',$musr=false){ 
    if(!isset($_SESSION['mlc_nck']) && $musr){ $nm=''; $isad=false; }
    else if(!isset($_SESSION['mlc_nck']) && !$musr) $_SESSION['mlc_nck']=($nm!=''?$nm:'Inv'.rand (1,9999));
    else if(isset($_SESSION['mlc_nck']) && $nm!='' && $nm!=$_SESSION['mlc_nck'] && !$musr){
      $_SESSION['mlc_nck']=$nm; $_SESSION['mlc_vs']=1; $_SESSION['mlc_tf']='Times new roman';
      $_SESSION['mlc_cf']=1; $_SESSION['mlc_fb']=0; $_SESSION['mlc_fi']=0; $_SESSION['mlc_fs']=0;
      $_SESSION['mlc_pu']=0;
    }
    $_SESSION['mlc_lng']=$lng; $this->titulo=$tt; $this->manusr=$musr;
    if($isad) $_SESSION['mlc_admin']=1;
    else if(!$isad && !$musr) unset($_SESSION['mlc_admin']);
  }
  /** Sets some chat preferences
    $al int chat height in pixels (min 185)
    $an int chat width in pixels
    $ps int chat position where
       1=Corner up-left; 2=left-center; 3=Corner up-right; 4=right-center; 5=Corner down-left; 6=Corner down-right
       2 & 4 does not center the chat on IE8
    $tp int position type where
       0=relative; 1=fixed; otro=absolute
    $vh boolean True if want every message time is displayed (optional default true)
  */
  function setPrefs($al,$an,$ps,$tp,$vh=true){
    $this->alt=($al<185?185:$al); $this->anch=$an; $this->pos=$ps; $this->vhora=$vh;
    $this->tpPos=($tp==0?'relative':($tp==1?'fixed':'absolute'));
  }
  /** Out put the html code to load and display the chat
    tojq boolean means To Jquery [only must be true when called from autoises.php] (optional default value false)
  */
  function escribeChat($tojq=false){
    if($_SESSION['mlc_pu']==1) return;
    if(!isset($_SESSION['mlc_nck'])){ $this->lginscr(); return; }
    if(is_file('myltchat/imgs/avatar.png')) $dirprev='myltchat/';
    else if(is_file('imgs/avatar.png')) $dirprev='';
    $exsav1=is_file($dirprev.'avatares/'.$_SESSION['mlc_nck'].'.jpg');
    $exsav2=is_file($dirprev.'avatares/'.$_SESSION['mlc_nck'].'.png');
    if($exsav1) $avatar='myltchat/avatares/'.$_SESSION['mlc_nck'].'.jpg';
    else if($exsav2) $avatar='myltchat/avatares/'.$_SESSION['mlc_nck'].'.png';
    else $avatar='myltchat/imgs/avatar.png';
    include($_SESSION['mlc_lng'].'.php'); ?>
    <div id="mlc_ocul" style="position:<?php echo $this->tpPos;?>;display:<?php echo ($_SESSION['mlc_vs']==1?'none':'block');?>;
     z-index:<?php echo $this->zindex.';'.$this->setpos();?>">
      <?php echo $this->titulo;?> <img src="myltchat/imgs/minmax.png" width="16" height="16" title="<?php echo $this->titulo;?> Maximizar" onClick="minmax()"> </div>
    <div id="mlc_all" style="position:<?php echo $this->tpPos;?>;display:<?php echo ($_SESSION['mlc_vs']!=1?'none':'block');?>;
       width:<?php echo $this->anch;?>px;height:<?php echo $this->alt;?>px;z-index:<?php echo $this->zindex.';'.$this->setpos();?>">
       <?php if(!$tojq){ ?>
        <script src="myltchat/jquery-1.6.2.min.js" type="text/javascript" ></script>
        <script src="myltchat/myltchat.js" type="text/javascript"></script>
        <script src="<?php echo 'myltchat/'.$_SESSION['mlc_lng'];?>.js" type="text/javascript"></script>
        <script src="myltchat/jquery.jqupload.min.js" type="text/javascript"></script>
        <script type="text/javascript">
          $('head').append('<link rel="stylesheet" href="myltchat/myltchat_e1.css" media="screen" type="text/css">');
          document.createStyleSheet("myltchat/myltchat_e1.css"); // para ie 8
        </script>
        <script type="text/javascript"> $(document).ready(function(){
            nck=new String('<?php echo $_SESSION['mlc_nck'];?>');
            vhora=<?php echo ($this->vhora?"true":"false");?>;
            hpadm=<?php echo (isset($_SESSION['mlc_admin'])?"true":"false");?>;
            $('#mlc_txmens').keypress(function(evt){ revisartipeo(evt); });
            <?php if($this->pos==2 || $this->pos==4){ ?> vertcentra(); <?php } ?>
            actmnsjs('<?php echo $_SESSION['mlc_nck'];?>');
        });
        </script>
       <?php }?>
      <img src="myltchat/imgs/pup.png" width="16" height="16" title="<?php echo $mlc_lngv01;?>" onClick="uptopopup(<?php echo $this->anch.','.$this->alt;?>)" class="mlc_nopp">
      <img src="myltchat/imgs/minmax.png" width="16" height="16" title="<?php echo $mlc_lngv02;?>" onClick="minmax()" class="mlc_nopp">
      <p id="mlc_titulo"> <?php echo $this->titulo;?></p>
      <span style="dusplay:none;" id="mlc_dtprfs" alt="<?php echo $this->alt.':'.$this->anch.':'.$this->pos.':'.($this->tpPos=='relative'?0:($this->tpPos=='fixed'?1:2)).':'.$this->vhora;?>"></span>
      <div id="mlc_msjs" style="height:<?php echo ($this->alt-137);?>px;">
        <span style="display:none;" id="mlc_lstid" alt=""></span>
      </div>
      <div id="mlc_ctrl">  <div id="mlc_ctrld">
        <span style="display:none;" id="mlc_lstprests" alt="<?php echo $_SESSION['mlc_tf'].':'.$_SESSION['mlc_cf'].':'.$_SESSION['mlc_fb'].':'.$_SESSION['mlc_fi'].':'.$_SESSION['mlc_fs'];?>"></span>
        <?php if($this->manusr){ ?>
           <img src="myltchat/imgs/chpwd.png" title="<?php echo $mlc_lngv39;?>" width="19" height="19" class="mlc_imgfd" onClick="chpwd(<?php echo $this->zindex.','.$this->anch;?>)">
        <?php } ?>
        <img src="myltchat/imgs/estilos.png" title="<?php echo $mlc_lngv03;?>" width="19" height="19" class="mlc_imgfd" onClick="chestilo(<?php echo $this->zindex.','.$this->anch;?>)">
        <?php if(isset($_SESSION['mlc_admin'])){ ?>
          <img src="myltchat/imgs/delt.png" title="<?php echo $mlc_lngv04;?>" width="19" height="19" class="mlc_imgfd" onClick="elimcomnt('evone')">
          <img src="myltchat/imgs/ban.png" title="<?php echo $mlc_lngv05;?>" width="19" height="19" class="mlc_imgfd" onClick="bannusu(<?php echo $this->zindex.','.$this->anch;?>)">
        <?php } ?>
        <img src="<?php echo $avatar;?>" height="29" title="<?php echo $mlc_lngv06;?>" width="29" id="mlc_img_ava" onClick="chavtr(<?php echo $this->zindex;?>)">
          <span id="mlc_nckuser"><?php echo $_SESSION['mlc_nck'];?>:</span> <br>
        <?php if($this->isbanned()){ ?> <img src="myltchat/imgs/ban.png" title="<?php echo $mlc_lngv07;?>" width="19" height="19">
         <?php echo $mlc_lngv08;?> <img src="myltchat/imgs/ban.png" title="<?php echo $mlc_lngv08;?>" width="19" height="19"> <?php }else{ ?>
          <input type="text" id="mlc_txmens" maxlength="190">
        <?php } ?>
        <p style="float:right;font-size:20px;font-weight:bold;" title="&copy;Pedro Cardoso Rodriguez.">
          <a href="mailto:cardp_2004@yahoo.com.mx" style="text-decoration:none;">&copy;</a></p>
        <div id="mlc_cnticons">
        <img src="myltchat/imgs/035.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':D')" title="<?php echo $mlc_lngv09;?>">
        <img src="myltchat/imgs/036.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':)')" title="<?php echo $mlc_lngv10;?>">
        <img src="myltchat/imgs/039.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':O')" title="<?php echo $mlc_lngv11;?>">
        <img src="myltchat/imgs/040.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':P')" title="<?php echo $mlc_lngv12;?>">
        <img src="myltchat/imgs/037.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':|')" title="<?php echo $mlc_lngv13;?>">
        <img src="myltchat/imgs/045.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(';)')" title="<?php echo $mlc_lngv14;?>">
        <img src="myltchat/imgs/038.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':(')" title="<?php echo $mlc_lngv15;?>">
        <img src="myltchat/imgs/041.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':8')" title="<?php echo $mlc_lngv16;?>">
        <img src="myltchat/imgs/042.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':{')" title="<?php echo $mlc_lngv17;?>">
        <img src="myltchat/imgs/043.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':S')" title="<?php echo $mlc_lngv18;?>">
        <img src="myltchat/imgs/044.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':E')" title="<?php echo $mlc_lngv19;?>">
        <img src="myltchat/imgs/034.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':C')" title="<?php echo $mlc_lngv20;?>">
        <img src="myltchat/imgs/031.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':5')" title="<?php echo $mlc_lngv21;?>">
        <img src="myltchat/imgs/050.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':!')" title="<?php echo $mlc_lngv22;?>">
        <img src="myltchat/imgs/056.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':M')" title="<?php echo $mlc_lngv23;?>">
        <img src="myltchat/imgs/053.png" height="16" width="16" class="mlc_imgeicon" onClick="aggcode(':R')" title="<?php echo $mlc_lngv24;?>">
        </div>
      </div> </div>
    </div>
  <?php }
  /**When auto management user system prints a screen to ask for login*/
  private function lginscr(){
    include_once($_SESSION['mlc_lng'].'.php'); ?>
    <div id="mlc_all" style="position:<?php echo $this->tpPos;?>;display:<?php echo ($_SESSION['mlc_vs']!=1?'none':'block');?>;
       width:<?php echo $this->anch;?>px;height:<?php echo $this->alt;?>px;z-index:<?php echo $this->zindex.';'.$this->setpos();?>">
      <script src="myltchat/jquery-1.6.2.min.js" type="text/javascript" ></script>
      <script src="myltchat/myltchat.js" type="text/javascript"></script>
      <script src="myltchat/<?php echo $_SESSION['mlc_lng'];?>.js" type="text/javascript"></script>
      <script src="myltchat/jquery.jqupload.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        $('head').append('<link rel="stylesheet" href="myltchat/myltchat_e1.css" media="screen" type="text/css">');
        document.createStyleSheet("myltchat/myltchat_e1.css"); // para ie 8
      </script>
      <script type="text/javascript"> $(document).ready(function(){ hpadm=<?php echo (isset($_SESSION['mlc_admin'])?"true":"false");?>;
        <?php if($this->pos==2 || $this->pos==4){ ?> vertcentra(); <?php } ?> });
      </script>
      <p id="mlc_titulo"> <?php echo $this->titulo;?></p>
      <span style="dusplay:none;" id="mlc_dtprfs" alt="<?php echo $this->alt.':'.$this->anch.':'.$this->pos.':'.($this->tpPos=='relative'?0:($this->tpPos=='fixed'?1:2)).':'.$this->vhora;?>"></span>
      <div>
        <form id="mlc_inises" method="post" action="" onsubmit="return inises(this)">
          <legend><?php echo $mlc_lngv28;?></legend> <br />
          <label><?php echo $mlc_lngv29;?></label> <input type="text" name="nckus"> <br />
          <label><?php echo $mlc_lngv30;?></label> <input type="password" name="pwdus"> <br />
          <input type="submit" value="<?php echo $mlc_lngv31;?>">
        </form>
        <form id="mlc_inises" method="post" action="" onsubmit="return newreg(this)">
          <legend><?php echo $mlc_lngv32;?></legend> <br />
          <label><?php echo $mlc_lngv29;?></label> <input type="text" name="nckus"> <br />
          <label><?php echo $mlc_lngv30;?></label> <input type="password" name="pwdus"> <br />
          <label><?php echo $mlc_lngv34;?></label> <input type="password" name="pwdusb"> <br />
          <input type="submit" value="<?php echo $mlc_lngv33;?>">
        </form>
        <p style="float:right;font-size:20px;font-weight:bold;" title="&copy;Pedro Cardoso Rodriguez.">
          <a href="mailto:cardp_2004@yahoo.com.mx" style="text-decoration:none;">&copy;</a></p>
      </div>
    </div> <?php
  }
  /** Set the css propierties due to $this->pos value */
  private function setpos(){
    $posicion='';
    if($this->pos==1) $posicion='top:0;left:0;';
    else if($this->pos==2) $posicion='left:0;';
    else if($this->pos==3) $posicion='top:0;right:0;';
    else if($this->pos==4) $posicion='right:0;';
    else if($this->pos==5) $posicion='bottom:0;left:0;';
    else if($this->pos==6) $posicion='bottom:0;right:0;';
    return $posicion;
  }
  /** Checks if yhe current user is banned */
  private function isbanned(){
    if(is_file("myltchat/banns.txt")) $banns=file("myltchat/banns.txt");
    else if(is_file("banns.txt")) $banns=file("banns.txt");
    $banned=false;
    if($banns){
      $nbanns=count($banns);
      if($nbanns==0) return $banned;
      for($g=0;$g<$nbanns;$g++){
        $actu=trim($banns[$g]); $actu=preg_replace("/\n/","",$actu);
        if($actu==$_SESSION['mlc_nck']){ $banned=true; break; }
      }
    }
    return $banned;
  }
  /*Close the session. Useful if the user changes the chat to pouup and closes session on main site*/
  function cierrasess(){
    unset($_SESSION['mlc_vs']); unset($_SESSION['mlc_tf']); unset($_SESSION['mlc_cf']);
    unset($_SESSION['mlc_fb']); unset($_SESSION['mlc_fi']); unset($_SESSION['mlc_fs']);
    unset($_SESSION['mlc_pu']); unset($_SESSION['mlc_nck']); unset($_SESSION['mlc_admin']);
    unset($_SESSION['mlc_lng']);
  }
}
?>