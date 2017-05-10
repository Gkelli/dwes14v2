/*   myltchat.js
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
var newa=null;
var isupdng=false;
var nck=null;
var dtnact=false;
var vhora=true;
var hpadm=false;
function chavtr(zind){
  var crtlca='<div style="z-index:'+(zind+1)+';background-color:white;overflow:auto;" id="mlc_divuplimg"> ';
  crtlca+='<form id="mlc_uplimg" name="uplimg" method="post" action="myltchat/uplimg.php" enctype="multipart/form-data"> '+mlc_lngj01+'<br />';
  crtlca+=mlc_lngj02+'<br /><input type="file" name="nava"> <input type="submit" value="'+mlc_lngj26+'">'
  crtlca+='<input type="hidden" value="'+nck+'" name="nick"> </form> </div>';
  $('#mlc_ctrld').hide(); $('#mlc_ctrl').append(crtlca);
  $(document).ready(function(){ $("#mlc_uplimg").jqupload({"callback":"fuplimg"}); $("#mlc_uplimg").jqupload_form(); });
}
function bannusu(zind,wtd){
  var crtlca='<div style="z-index:'+(zind+1)+';background-color:white;overflow:auto;" id="mlc_divchst"> '+mlc_lngj03;
  crtlca+='<input type="text" id="mlc_us2bann"> <input type="button" value="Banear" onClick="bannnow()"><br />'+mlc_lngj04+'<br />';
  $.ajax({url:'myltchat/rdbanns.php',success:function(tx){ $('#mlc_ctrld').hide(); $('#mlc_ctrl').append(crtlca+tx+'</div>'); }});
}
function bannnow(){
  var nick=$.trim(document.getElementById('mlc_us2bann').value);
  if(nick!=''){
    $.ajax({url:'myltchat/nwbann.php',type:'POST',data:'nnbnn='+nick,success:function(tx){
     if(tx=='ok'){ $('#mlc_divchst').remove(); $('#mlc_ctrld').show(); alert(mlc_lngj05);}else{alert(mlc_lngj06);} }});
  }else{ $('#mlc_divchst').remove(); $('#mlc_ctrld').show(); }
}
function unbann(nick){
  $.ajax({url:'myltchat/qtbann.php',type:'POST',data:'unnbnn='+nick,success:function(tx){
    if(tx=='ok'){ $('#mlc_bnn_'+nick).remove(); alert(mlc_lngj07);}else{alert(mlc_lngj06);} }});
}
function fuplimg(rs){
  var ttrs=rs.split(':');
  if(ttrs[0]=='-1'){ alert(mlc_lngj08); }
  else if(ttrs[0]=='0'){ alert(mlc_lngj09); }
  else if(ttrs[0]=='ok'){ $('#mlc_img_ava').attr('src','myltchat/imgs/avatar.png'); newa=new String(ttrs[1]); setTimeout(actumyava,2000); }
  $('#mlc_divuplimg').remove(); $('#mlc_ctrld').show();
}
function actumyava(){ $('#mlc_img_ava').attr('src','myltchat/'+newa); }
function vertcentra(){
  var altall=$(window).height();
  var altme=$("#mlc_all").height();
  var estilo=$("#mlc_all").attr('style');
  var estilooc=$("#mlc_ocul").attr('style');
  estilo+='top:'+parseInt(altall>altme?((altall-altme)/2):0)+'px;';
  estilooc+='top:'+parseInt(altall>altme?((altall-altme)/2):0)+'px;';
  $("#mlc_all").attr('style',estilo);
  $("#mlc_ocul").attr('style',estilooc);
}
function revisartipeo(evt){
  tecla=((document.all)?evt.keyCode:evt.which);
  var ctrlt=document.getElementById('mlc_txmens');
  var tx=$.trim(ctrlt.value);
  if(tecla==13 && tx!=''){
    $.ajax({url:'myltchat/addmss.php',type:'POST',data:'nck='+nck+'&mss='+escape(tx)+'&ava='+$('#mlc_img_ava').attr('src'),success:function(tx){
      if(tx!='fail'){ ctrlt.value=''; } }});
  }
}
function aggcode(code){
   var ctrlt=document.getElementById('mlc_txmens');
   var actu=ctrlt.value;
   ctrlt.value+=code; ctrlt.focus();
}
function actmnsjs(){
  if(!isupdng){ isupdng=true;
    var nummens=$('.mlc_mensa').size();
    if(nummens==0) $.ajax({url:'myltchat/getmss.php',type:'POST',data:'lsttime=0&nck='+nck,success:cargamsjs,error:function(){isupdng=false;}});
    else $.ajax({url:'myltchat/getmss.php',type:'POST',datatype:'xml',data:'lsttime='+$('#mlc_lstid').attr('alt')+'&nck='+nck,
      success:cargamsjs,error:function(){isupdng=false;}});
  }
  if(!dtnact) setTimeout(actmnsjs,2050);
}
function cargamsjs(dxml){
  var nmensjs=dxml.getElementsByTagName('mensaje').length;
  var hayses=dxml.getElementsByTagName('hayses').item(0).firstChild.data;
  if(hayses==0 && $('.mlc_nopp').css('display')=='none'){ nck=null; close(); return; }
  else if(hayses==0){ $('#mlc_all').remove(); $('#mlc_ocul').remove(); dtnact=true; return; }
  if(nmensjs==0){ isupdng=false; return; }
  for(var i=0;i<nmensjs;i++){
    var haylst=$('.mlc_mensa').size(); var agnew=true;
    var mensj=dxml.getElementsByTagName('mensaje').item(i).firstChild.data;
    var tksmjs=mensj.split(">");
    var idthsmesj=mensj.substr(mensj.indexOf('id="')+4,mensj.indexOf('class="')-10);
    var tksmjs2=tksmjs[0].split('"');
    $('#mlc_lstid').attr('alt',tksmjs2[1]);
    if(haylst>0){
      var lstnick=''+$('.mlc_mensa').get(haylst-1).childNodes[3].innerHTML;
      var parr=$('.mlc_mensa').get(haylst-1);
      var msjnick=tksmjs[3].split(":");
      var lstnickIE=''+$(parr.childNodes[2]).html();
      if(lstnick.substr(0,lstnick.length-1)==msjnick[0] || lstnickIE.substr(0,lstnickIE.length-1)==msjnick[0]){
        var newcnt=mensj.substr(mensj.lastIndexOf('<br'));
        newcnt=newcnt.substr(0,newcnt.lastIndexOf('</'));
        if(hpadm){ newcnt='<br /> <img src="myltchat/imgs/delt.png" width="13" height="13" alt="'+mlc_lngj10+'" title="'+mlc_lngj11+'" class="btnelimms" id="dl'+idthsmesj+'" onClick="elimcomnt(\''+idthsmesj+'\')">'+newcnt.substr(4); }
        var agp=$('.mlc_mensa').get(haylst-1); $(agp).append(newcnt); agnew=false;
      }
    }
    if(agnew){
      if(hpadm){ newcnt= mensj.substr(0,mensj.lastIndexOf('<br'))+'<br /> <img src="myltchat/imgs/delt.png" width="13" height="13" alt="'+mlc_lngj10+'" title="'+mlc_lngj11+'" class="btnelimms" id="dl'+idthsmesj+'" onClick="elimcomnt(\''+idthsmesj+'\')">'+mensj.substr(mensj.lastIndexOf('<br')+4); }
      else newcnt=mensj;
      $('#mlc_msjs').append(newcnt);
    }
  } isupdng=false;
  var mlcmsjs=document.getElementById('mlc_msjs');
  if(!vhora) $('.mlc_hora').css('display','none');
  mlcmsjs.scrollTop=mlcmsjs.scrollHeight;
}
function elimcomnt(idcmt){
  $.ajax({url:'myltchat/delmss.php',type:'POST',data:'idmss='+idcmt,success:function(tx){
    if(tx!='fail'){ alert(mlc_lngj12);
      if(idcmt=='evone'){ $('#mlc_msjs').html(''); $('#mlc_lstid').attr('alt','-'); }
      else{
        var lstid=$('.btnelimms').get($('.btnelimms').size()-1);
        var btnimg=document.getElementById('dl'+idcmt); $(btnimg).prev().remove();
        $(btnimg).next().remove(); $(btnimg).next().remove(); $(btnimg).remove();
        if(lstid.id=='dl'+idcmt){ lstid=$('.btnelimms').get($('.btnelimms').size()-1); $('#mlc_lstid').attr('alt',lstid.id.substr(2)); }
      }
    } }});
}
function minmax(){
  $('#mlc_all').toggle(); $('#mlc_ocul').toggle();
  if($('#mlc_all').css('display')=='block'){
    var mlcmsjs=document.getElementById('mlc_msjs');
    mlcmsjs.scrollTop=mlcmsjs.scrollHeight;
  }
  $.ajax({url:'myltchat/actvarssmm.php',type:'POST',data:'ctrl=1'});
}
function chestilo(zind,wtd){
  var prefsact=$('#mlc_lstprests').attr('alt');
  var prfs=prefsact.split(":");
  var crtlca='<div style="z-index:'+(zind+1)+';background-color:white;overflow:auto;"';
  crtlca+=' id="mlc_divchstyle"> '+mlc_lngj13+' <select id="mlc_fnt"> <option value="Arial"'+(prfs[0]=='Arial'?' selected':'')+'>Arial</option> <option ';
  crtlca+='value="Courier"'+(prfs[0]=='Courier'?' selected':'')+'>Courier</option> <option value="Garamond"'+(prfs[0]=='Garamond'?' selected':'');
  crtlca+='>Garamond</option> <option value="Tahoma"'+(prfs[0]=='Tahoma'?' selected':'')+'>Tahoma</option> <option value="Times new roman"';
  crtlca+=(prfs[0]=='Times new roman'?' selected':'')+'>Times new roman</option> <option value="Verdana"'+(prfs[0]=='Verdana'?' selected':'');
  crtlca+='>Verdana</option> </select> ';
  crtlca+='<img src="myltchat/imgs/bold.png" title="'+mlc_lngj14+'" width="19" height="19" onClick="seldesfnt(1)" id="mlc_fest1" style="border:outset 2px;border-color:'+(prfs[2]==1?'rgb(123,167,165);" alt="1"':'white;" alt="0"')+'>';
  crtlca+='<img src="myltchat/imgs/italic.png" title="'+mlc_lngj15+'" width="19" height="19" onClick="seldesfnt(2)" id="mlc_fest2" style="border:outset 2px;border-color:'+(prfs[3]==1?'rgb(123,167,165);" alt="1"':'white;" alt="0"')+'>';
  crtlca+='<img src="myltchat/imgs/subr.png" title="'+mlc_lngj16+'" width="19" height="19"onClick="seldesfnt(3)" id="mlc_fest3" style="border:outset 2px;border-color:'+(prfs[4]==1?'rgb(123,167,165);" alt="1"':'white;" alt="0"')+'> <br> Color: ';
  crtlca+='<img src="myltchat/imgs/cnegro.png" title="'+mlc_lngj17+'" width="19" height="19" onClick="chestilocl(1)" id="mlc_fcl1" class="mlc_clfn" style="border:outset 2px;border-color:'+(prfs[1]==1?'rgb(123,167,165);" alt="1"':'white;" alt="0"')+'>';
  crtlca+='<img src="myltchat/imgs/cazul.png" title="'+mlc_lngj18+'" width="19" height="19" onClick="chestilocl(2)" id="mlc_fcl2" class="mlc_clfn" style="border:outset 2px;border-color:'+(prfs[1]==2?'rgb(123,167,165);" alt="1"':'white;" alt="0"')+'>';
  crtlca+='<img src="myltchat/imgs/cgris.png" title="'+mlc_lngj19+'" width="19" height="19" onClick="chestilocl(3)" id="mlc_fcl3" class="mlc_clfn" style="border:outset 2px;border-color:'+(prfs[1]==3?'rgb(123,167,165);" alt="1"':'white;" alt="0"')+'>';
  crtlca+='<img src="myltchat/imgs/camarillo.png" title="'+mlc_lngj20+'" width="19" height="19" onClick="chestilocl(4)" id="mlc_fcl4" class="mlc_clfn" style="border:outset 2px;border-color:'+(prfs[1]==4?'rgb(123,167,165);" alt="1"':'white;" alt="0"')+'>';
  crtlca+='<img src="myltchat/imgs/cverde.png" title="'+mlc_lngj21+'" width="19" height="19" onClick="chestilocl(5)" id="mlc_fcl5" class="mlc_clfn" style="border:outset 2px;border-color:'+(prfs[1]==5?'rgb(123,167,165);" alt="1"':'white;" alt="0"')+'>';
  crtlca+='<img src="myltchat/imgs/cnaranja.png" title="'+mlc_lngj22+'" width="19" height="19" onClick="chestilocl(6)" id="mlc_fcl6" class="mlc_clfn" style="border:outset 2px;border-color:'+(prfs[1]==6?'rgb(123,167,165);" alt="1"':'white;" alt="0"')+'>';
  crtlca+='<img src="myltchat/imgs/crosa.png" title="'+mlc_lngj23+'" width="19" height="19" onClick="chestilocl(7)" id="mlc_fcl7" class="mlc_clfn" style="border:outset 2px;border-color:'+(prfs[1]==7?'rgb(123,167,165);" alt="1"':'white;" alt="0"')+'>';
  crtlca+='<img src="myltchat/imgs/crojo.png" title="'+mlc_lngj24+'" width="19" height="19" onClick="chestilocl(8)" id="mlc_fcl8" class="mlc_clfn" style="border:outset 2px;border-color:'+(prfs[1]==8?'rgb(123,167,165);" alt="1"':'white;" alt="0"')+'>';
  crtlca+='<br> <input type="button" value="'+mlc_lngj25+'" onClick="grdestilopref()"> </div>';
  $('#mlc_ctrld').hide(); $('#mlc_ctrl').append(crtlca);
}
function chestilocl(val){
  $('.mlc_clfn').each(function(n){ var crrt=this;
    $(crrt).css('border-color','white'); $(crrt).attr('alt','0');
  });
  $('#mlc_fcl'+val).css('border-color','rgb(93,127,125)');
  $('#mlc_fcl'+val).attr('alt','1');
}
function seldesfnt(val){
  var prev=$('#mlc_fest'+val).attr('alt');
  if(prev=='0'){ $('#mlc_fest'+val).css('border-color','rgb(93,127,125)'); $('#mlc_fest'+val).attr('alt',1); }
  else{ $('#mlc_fest'+val).css('border-color','white'); $('#mlc_fest'+val).attr('alt',0); }
}
function grdestilopref(){
  var fnt=$('#mlc_fnt').val();
  var fneg=$('#mlc_fest1').attr('alt');
  var fita=$('#mlc_fest2').attr('alt');
  var fsub=$('#mlc_fest3').attr('alt');
  var fcol=-1;
  $('.mlc_clfn').each(function(n){ var crrt=this; if($(crrt).attr('alt')==1) fcol=(n+1); });
  var nwpresest=fnt+':'+fcol+':'+fneg+':'+fita+':'+fsub;
  $.ajax({url:'myltchat/actvarsss.php',type:'POST',data:'fnt='+fnt+'&neg='+fneg+'&fita='+fita+'&fsub='+fsub+'&fcol='+fcol,success:function(tx){
    if(tx=='ok'){$('#mlc_divchstyle').remove(); $('#mlc_ctrld').show(); $('#mlc_lstprests').attr('alt',nwpresest); }}});
}
function uptopopup(wd,hg){
  var pp='location=no,statusbar=no,directories=no,menubar=no,titlebar=yes,toolbar=no,dependent=no';
  pp+=',width='+(wd+25)+',height='+(hg+25)+',resizable=yes,screenX=20,screenY=30,personalbar=no,scrollbars=yes';
  var pUp=window.open("","_blank",pp);
  $('.mlc_nopp').hide(); $.ajax({url:'myltchat/chppup.php'});
  dtnact=true;
  var prevh=$('#mlc_all').html();
  $('#mlc_all').hide(); $('#mlc_ocul').hide();
  pUp.document.open();
  pUp.document.write(prevh);
  pUp.document.close();
  pUp.onbeforeunload=chppup;
  pUp.focus();
}
function chppup(){ if(parent.nck!=null){ $.ajax({url:'myltchat/chppup.php'}); parent.reshowchat(); } }
function reshowchat(){ $('#mlc_all').show(); $('.mlc_nopp').show(); dtnact=false; actmnsjs(); }
function newreg(frm){
  var nm=$.trim(frm.nckus.value);
  var p1=$.trim(frm.pwdus.value);
  var p2=$.trim(frm.pwdusb.value);
  var errors='';
  if(nm=='' || nm.indexOf(',')>-1 || nm.indexOf(' ')>-1) errors=mlc_lngj27;
  if(p1=='' || p2=='' || p1!=p2) errors+="\n"+mlc_lngj28;
  if(errors!=''){ alert(errors);  return false; }
  $.ajax({url:'myltchat/nwautousr.php',type:'POST',data:'nnc='+nm+'&nnp='+p1,success:function(tx){ alert(tx); }});
  return false;
}
function inises(frm){
  var nm=$.trim(frm.nckus.value);
  var pw=$.trim(frm.pwdus.value);
  var vtt=$('#mlc_titulo').html();
  var prefs=$('#mlc_dtprfs').attr('alt');
  var errors='';
  if(nm=='' || pw=='') errors=mlc_lngj29;
  if(errors!=''){ alert(errors);  return false; }
  $.ajax({url:'myltchat/autoises.php',type:'POST',data:'nnc='+nm+'&nnp='+pw+'&tt='+vtt+'&prf='+prefs,success:function(tx){
    if(tx=='0'){ alert(mlc_lngj30); } else {
      var aprefs=prefs.split(':');
      var isad=tx.substr(tx.indexOf('hpadm=')+6,1);
      var prevtd=$('#mlc_all').prev(); $('#mlc_all').remove();
      nck=new String(nm); vhora=(aprefs[4]==1?true:false);
      hpadm=(isad=='t'?true:false); $(tx).insertAfter(prevtd);
      $(document).ready(function(){
        if(aprefs[2]==2 || aprefs[2]==4){ vertcentra(); }
        $('#mlc_txmens').keypress(function(evt){ revisartipeo(evt); });
        actmnsjs(nck);
      });
    }
  }});
  return false;
}
function chpwd(zind,wtd){
  var crtlca='<div style="z-index:'+(zind+1)+';background-color:white;overflow:auto;" id="mlc_divchpwd">';
  crtlca+='<form method="post" action="" onSubmit="return chpwdusr(this)"> '+mlc_lngj33+'<br />';
  crtlca+=mlc_lngj31+' <input type="password" name="npwd1"> <br />';
  crtlca+=mlc_lngj32+' <input type="password" name="npwd2"> <br />';
  crtlca+='<input type="submit" value="'+mlc_lngj25+'"> </form> </div>';
  $('#mlc_ctrld').hide(); $('#mlc_ctrl').append(crtlca);
}
function chpwdusr(frm){
  var p1=$.trim(frm.npwd1.value);
  var p2=$.trim(frm.npwd2.value);
  if(p1=='' || p1!=p2){ alert(mlc_lngj28); }
  else{
    $.ajax({url:'myltchat/updpwd.php',type:'POST',data:'nck='+nck+'&pwd='+p1,success:function(tx){
      if(tx=='ok'){ alert(mlc_lngj33); $('#mlc_divchpwd').remove(); $('#mlc_ctrld').show(); }else{alert(mlc_lngj06);}
    }});
  }
  return false;
}



