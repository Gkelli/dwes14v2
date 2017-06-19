<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Geyse Canquerino">
<style type="text/css">


	

body { background:#ffffff;}

/*nav css*/
.navbar-inverse {background-color: #ffffff;border-radius: 0px;height:80px;width:100%;position: fixed;z-index: 999;border: 0px solid;
-webkit-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);transition:all ease 0.8s;
-moz-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);}
.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus {
color:rgb(0, 4, 51) !important;background-color: #0e364c;}
.navbar-brand {padding: 0;margin-left: 0px !important;}
.navbar-brand img { height:50px;margin-left: 20px;margin-top: 9%;transition:all ease 0.8s;}
.navbar-inverse .navbar-nav>li>a {color:rgb(255, 102, 0);font-family: 'Open Sans', sans-serif; line-height:3;font-weight: bold;}
.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus {color:rgb(0, 4, 51) !important;}
.menu { display:none;}
.search-box1 {padding: 20px 0px;z-index: 99999;width: 100%;}
.search {padding: 30px 0px;float: left;width: 100%;}
.serach-footer {left: 20px;position: absolute;top: 10px;}
.search-wrap {display: block;width: 100%;height: 40px;padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;
background-image: none;border: 1px solid #e2e2e2;border-radius: 20px;
-webkit-box-shadow: inset 0 0px 0px rgba(0,0,0,.075);
box-shadow: inset 0 0px 0px rgba(0,0,0,.075);
-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
width: 100% !important;padding-left: 45px;}
.search-btn {background:rgb(0, 4, 51);
width: 100%;border-radius: 0px 20px 20px 0px;color: #fff !important;height: 40px;border: 0px solid;font-weight: 600;font-size: 14px;}
.search-btn:hover, .search-btn:focus {background:rgb(0, 4, 51);color: #fff !important;}
.modal-dialog {width: 90% !important;margin: 20% auto;}
.modal-content { background-color:rgb(255, 102, 0);}
.modal-title {color: #ffffff !important;}



/*nav css close*/




.page-header {background:#ccc;margin:0;}

.profile-head { width:100%;background-color: rgb(255, 102, 0);float: left;padding: 15px 5px;}
.profile-head img { height:150px; width:150px; margin:0 auto; border:5px solid #fff; border-radius:5px;}
.profile-head h5 {width: 100%;padding:5px 5px 0px 5px;text-align:justify;font-weight: bold;color: #fff;font-size: 25px;text-transform:capitalize;
margin-bottom: 0;}
.profile-head p {width: 100%;text-align: justify;padding:0px 5px 5px 5px;color: #fff;font-size:17px;text-transform:capitalize;margin:0;}
.profile-head a {width: 100%;text-align: center;padding: 10px 5px;color: #fff;font-size: 15px;text-transform: capitalize;}

.profile-head ul { list-style:none;padding: 0;}
.profile-head ul li { display:block; color:#ffffff;padding:5px;font-weight: 400;font-size: 15px;}
.profile-head ul li:hover span { color:rgb(0, 4, 51);}
.profile-head ul li span { color:#ffffff;padding-right: 10px;}
.profile-head ul li a { color:#ffffff;}
.profile-head h6 {width: 100%;text-align: center;font-weight: 100;color: #fff;font-size: 15px;text-transform: uppercase;margin-bottom: 0;}


.nav-tabs {margin: 0;padding: 0;border: 0;}
.nav-tabs > li > a {background: #DADADA;border-radius: 0;
    box-shadow: inset 0 -8px 7px -9px rgba(0,0,0,.4),-2px -2px 5px -2px rgba(0,0,0,.4);}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover {background: #F5F5F5;
    box-shadow: inset 0 0 0 0 rgba(0,0,0,.4),-2px -3px 5px -2px rgba(0,0,0,.4);}
.tab-pane {background: #ffffff;box-shadow: 0 0 4px rgba(0,0,0,.4);border-radius: 0;text-align: center;padding: 10px;}
.tab-content>.active {margin-top:50px;/*width:100% !important;*/} 

/* edit profile css*/

.hve-pro {    background-color:rgb(255, 102, 0);padding: 5px; width:100%; height:auto;float:left;}
.hve-pro p {float: left;color:#fff;font-size: 15px;text-transform: capitalize;padding: 5px 20px;font-family: 'Noto Sans', sans-serif;}
h2.register { padding:10px 25px; text-transform:capitalize;font-size: 25px;color: rgb(255, 102, 0);}
.fom-main { overflow:hidden;}

legend {font-family: 'Bitter', serif;color:#ff3200;border-bottom:0px solid;}
.main_form {background-color: #;}
label.control-label {font-family: 'Noto Sans', sans-serif;font-weight: 100; margin-bottom:5px !important; 
text-align:left !important; text-transform:uppercase; color:#798288;}
.submit-button {color: #fff;background-color:rgb(255, 102, 0);width:190px;border: 0px solid;border-radius: 0px; transition:all ease 0.3s;margin: 5px;
float:left;}
.submit-button:hover, .submit-button:focus {color: #fff;background-color:rgb(0, 4, 51);}
.hint_icon {color:#ff3200;}
.form-control:focus {border-color: #ff3200;}
select.selectpicker { color:#99999c;}
select.selectpicker option { color:#000 !important;}
select.selectpicker option:first-child { color:#99999c;}
.input-group { width:100%;}
.uplod-picture {width: 100%; background-color:#;color: #fff; padding:20px 10px;margin-bottom:10px;}
.uplod-file {position: relative;overflow: hidden;color: #fff;background-color: rgb(0, 4, 51);border: 0px solid #a02e09;border-radius: 0px;
 transition:all ease 0.3s;margin: 5px;}
.uplod-file input[type=file] {position: absolute;top: 0;right: 0;min-width: 100%;min-height: 100%;font-size: 100px;text-align: right;
filter: alpha(opacity=0);opacity: 0;outline: none;background: white;cursor: inherit;display: block;}
.uplod-file:hover, .uplod-file:focus {color: #fff;background-color:rgb(255, 102, 0);}
h4.pro-title { font-size:24px; color:rgba(0, 4, 51, 0.96); text-transform:capitalize; text-align:justify;padding: 10px 15px;font-family: 'Bitter', serif;}
.bio-table { width:75%;border:0px solid;}
.bio-table td {text-transform: capitalize;text-align: left;font-size: 15px;}
.bio-table>tbody>tr>td { border:0px solid;text-transform: capitalize;color: rgb(0, 4, 51); font-size:15px;}
.responsiv-table { border:0px solid;}
.nav-menu li a {margin: 5px 5px 5px 5px;position: relative;display: block;padding: 10px 50px;border: 0px solid !important;box-shadow: none !important;
background-color: rgb(0, 4, 51) !important;color: #fff !important;    white-space: nowrap;}
.nav-menu li.active a {background-color: rgb(255, 102, 0) !important;}
.stick{position:fixed !important;top:0;z-index:999 !important;width:100%;background:#ffffff !important;height:auto; transition:all ease 0.8s;
-webkit-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);}
.stick a { line-height:20px !important;}
.stick img { margin:0 !important;}



@media all and (max-width:768px){

.navbar-inverse .drop_menu {display: block;visibility: visible;width: 110px;height:1000px;padding:0px 20px;position: absolute;right:-100px;
transition:all ease 0.5s;border-top: 0px solid;cursor: pointer;}
.navbar-brand {padding: 0;margin-left: 10px !important;}
a.menu { display:block !important;margin: 9px 2px;float: right;color: rgba(255, 102, 0, 0.98); border:0px solid; background:none; font-size:30px;width:27px;position: relative;
cursor:pointer;}
a.menu:hover, a.menu:focus { color:rgb(0, 4, 51);}

.drop_menu1 { display: block;visibility: visible;width:250px;height:1000px;padding:5px 30px;position: absolute;right:0 !important;
background-color:#ffffff !important; transition:all ease 0.5s;border-top: 0px solid;cursor: pointer;}

}

@media all and (max-width:430px){
.profile-head ul li {font-size: 12px !important;}
.nav-menu li { width:50%;}
.bio-table>tbody>tr>td {font-size: 13px;}

}


	

</style>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" 
integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">
</head>

<body>






<nav id="sticker" class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
     <a class="menu"><i class="fa fa-bars" id="menu_icon"></i></a>
      <a class="navbar-brand" href="#">
    <img src="https://www.google.co.in/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" class="img-responsive" />
      
      </a>
    </div><!--navbar-header close-->
    <div class="collapse navbar-collapse drop_menu" id="content_details">
      <ul class="nav navbar-nav navbar-right">

<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<li><a href="#"><span class="glyphicon glyphicon-font"></span> About Us</a></li>

       <!--<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-font"></span> About us<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Company</a></li>
            <li><a href="#">Work</a></li>
            <li><a href="#">Timing</a></li>
          </ul>
        </li>-->
        <li><a href="#"><span class="glyphicon glyphicon-heart-empty"></span> Why Choose us</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-phone"></span> What We Do</a></li> 
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Contact Us</a></li>     
      <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-search"></span> Search</a></li>
        

      </ul><!--navbar-right close-->
    </div><!--collapse navbar-collapse drop_menu close-->
  </div><!--container-fluid close-->
</nav><!--navbar navbar-inverse close-->
<!--search box-->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Search Section</h4>
        </div>
        <div class="modal-body">





         <section class="search-box1" id="panel">
  <div class="container">
    <form class="form-inline" role="form">
      <div class="col-sm-8 col-xs-8 form-group top_search" style="padding-right:0px;">
        <div class="row">
          <label class="sr-only" for="search">Search here...</label>
          <span class="serach-footer"><img src="images/srch.png" /></span>
          <input type="text" class="form-control search-wrap" id="search" placeholder="Search here...">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-xs-4 form-group top_search" style="padding-left:0px;">
          <button type="submit" class="btn btn-default search-btn">SEARCH</button>
        </div>
      </div>
    </form>
  </div>
</section>



        </div>
        
        </div>
      </div>
      
    </div>
  </div>
<br>
<br>
<br>












<section>

<div class="container" style="margin-top: 30px;">
<div class="profile-head">
<div class="col-md- col-sm-4 col-xs-12">
<img src="http://www.newlifefamilychiropractic.net/wp-content/uploads/2014/07/300x300.gif" class="img-responsive" />
<h6>Jenifer Smith</h6>
</div><!--col-md-4 col-sm-4 col-xs-12 close-->


<div class="col-md-5 col-sm-5 col-xs-12">
<h5>Jenifer Smith</h5>
<p>Web Designer / Develpor </p>
<ul>
<li><span class="glyphicon glyphicon-briefcase"></span> 5 years</li>
<li><span class="glyphicon glyphicon-map-marker"></span> U.S.A.</li>
<li><span class="glyphicon glyphicon-home"></span> 555 street Address,toedo 43606 U.S.A.</li>
<li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call">(+021) 956 789123</a></li>
<li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail">jenifer123@gmail.com</a></li>

</ul>


</div><!--col-md-8 col-sm-8 col-xs-12 close-->




</div><!--profile-head close-->
</div><!--container close-->


<div id="sticky" class="container">
    
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-menu" role="tablist">
      <li class="active">
          <a href="#profile" role="tab" data-toggle="tab">
              <i class="fa fa-male"></i> Profile
          </a>
      </li>
      <li><a href="#change" role="tab" data-toggle="tab">
          <i class="fa fa-key"></i> Edit Profile
          </a>
      </li>
    </ul><!--nav-tabs close-->
    
    <!-- Tab panes -->
    <div class="tab-content">
    <div class="tab-pane fade active in" id="profile">
    <div class="container">
<div class="col-sm-11" style="float:left;">
<div class="hve-pro">
<p>Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. 
My graduation from Massey University with a Bachelor of Design majoring in visual communication.</p>
</div><!--hve-pro close-->
</div><!--col-sm-12 close-->
<br clear="all" />
<div class="row">
<div class="col-md-12">
<h4 class="pro-title">Bio Graph</h4>
</div><!--col-md-12 close-->


<div class="col-md-6">

<div class="table-responsive responsiv-table">
  <table class="table bio-table">
      <tbody>
     <tr>      
        <td>Firstname</td>
        <td>: jenifer</td> 
     </tr>
     <tr>    
        <td>Lastname</td>
        <td>: smith</td>       
     </tr>
     <tr>    
        <td>Birthday</td>
        <td>: 10 january 1980</td>       
    </tr>
    <tr>    
        <td>Contury</td>
        <td>: U.S.A.</td>       
    </tr>
    <tr>
        <td>Occupation</td>
        <td>: Web Designer</td> 
     </tr>

    </tbody>
  </table>
  </div><!--table-responsive close-->
</div><!--col-md-6 close-->

<div class="col-md-6">

<div class="table-responsive responsiv-table">
  <table class="table bio-table">
      <tbody>
     <tr>  
        <td>Emai Id</td>
        <td>: jenifer123@gmail.com</td> 
     </tr>
     <tr>    
        <td>Mobile</td>
        <td>: (+6283) 456 789</td>       
     </tr>
     <tr>    
        <td>Phone</td>
        <td>: (+021) 956 789123</td>       
    </tr>
    <tr>    
        <td>Experience</td>
        <td>: 5 years</td>       
    </tr>
    <tr>
        <td>Twiter</td>
        <td>#@jenifer123</td> 
     </tr>

    </tbody>
  </table>
  </div><!--table-responsive close-->
</div><!--col-md-6 close-->

</div><!--row close-->




</div><!--container close-->
</div><!--tab-pane close-->
      
      
<div class="tab-pane fade" id="change">
<div class="container fom-main">
<div class="row">
<div class="col-sm-12">
<h2 class="register">Edit Your Profile</h2>
</div><!--col-sm-12 close-->

</div><!--row close-->
<br />
<div class="row">

<form class="form-horizontal main_form text-left" action=" " method="post"  id="contact_form">
<fieldset>


<div class="form-group col-md-12">
  <label class="col-md-10 control-label">First Name</label>  
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group col-md-12">
  <label class="col-md-10 control-label" >Last Name</label> 
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group col-md-12">
  <label class="col-md-10 control-label">E-Mail</label>  
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group col-md-12">
  <label class="col-md-10 control-label">Phone #</label>  
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
 <div class="form-group col-md-12">
  <label class="col-md-10 control-label">Address</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
            <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
  </div>
  </div>
</div>

 <div class="form-group col-md-12">
  <label class="col-md-10 control-label">Project Description</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        	<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
  </div>
  </div>
</div>



<div class="form-group col-md-12"> 
  <label class="col-md-10 control-label">Industry</label>
    <div class="col-md-12 selectContainer">
    <div class="input-group">
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Industry</option>
      <option>Industry</option>
      <option>Industry</option>
      <option>Industry</option>
    </select>
  </div>
</div>
</div>


<!-- Select Basic -->
   
<div class="form-group col-md-12"> 
  <label class="col-md-10 control-label">Qualification</label>
    <div class="col-md-12 selectContainer">
    <div class="input-group">
    <select name="state" class="form-control selectpicker" >
           <option value=" " >your Qualification</option>
      <option>M.A.</option>
      <option>B.A.</option>
      <option >B.Ed</option>
    </select>
  </div>
</div>
</div>



<div class="form-group col-md-12"> 
  <label class="col-md-10 control-label">Expertise areas</label>
    <div class="col-md-12 selectContainer">
    <div class="input-group">
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Expertise areas</option>
      <option>Expertise areas1</option>
      <option>Expertise areas1</option>
      <option>Expertise areas1</option>
    </select>
  </div>
</div>
</div>

<div class="form-group col-md-12"> 
  <label class="col-md-10 control-label">Experience</label>
    <div class="col-md-12 selectContainer">
    <div class="input-group">
    <select name="state" class="form-control selectpicker" >
      <option value=" " >your Experience</option>
      <option>1 year</option>
      <option>2 years</option>
      <option >3 years</option>
    </select>
  </div>
</div>
</div>

<div class="form-group col-md-12"> 
  <label class="col-md-10 control-label">Salary expected</label>
    <div class="col-md-12 selectContainer">
    <div class="input-group">
    <select name="state" class="form-control selectpicker" >
      <option value=" " >your Salary expectation</option>
      <option>50 thousand</option>
      <option>30thousand</option>
    </select>
  </div>
</div>
</div>

<div class="form-group col-md-12"> 
  <label class="col-md-10 control-label">Preferred Location</label>
    <div class="col-md-12 selectContainer">
    <div class="input-group">
    <select name="state" class="form-control selectpicker" >
      <option value=" " >your Preferred Location</option>
      <option>Chandigarh</option>
      <option>Chandigarh</option>
    </select>
  </div>
</div>
</div>

<!--<div class="form-group col-md-12">
  <label class="col-md-10 control-label">Project Description</label>
    <div class="col-md-10 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil hint_icon"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
  </div>
  </div>
</div>-->


<div class="form-group col-md-12">
  <label class="col-md-10 control-label">Choose Password</label>  
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <input  name="first_name" placeholder="Choose Password" class="form-control"  type="password">
    </div>
  </div>
</div>



<div class="form-group col-md-12">
  <label class="col-md-10 control-label">Confiram Password</label>  
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <input  name="first_name" placeholder="Confiram Password" class="form-control"  type="password">
    </div>
  </div>
</div>


<!-- radio checks -->
 <div class="form-group col-md-12">
                        <label class="col-md-10 control-label">Gender</label>
                        <div class="col-md-6">
                            <div class="radio col-md-2">
                                <label>
                                    <input type="radio" name="hosting" value="yes" /> Male
                                </label>
                            </div>
                            <div class="radio col-md-2">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> Female
                                </label>
                            </div>
                        </div>
                    </div>

<!-- upload profile picture -->
<div class="col-md-12 text-left">
<div class="uplod-picture">
<span class="btn btn-default uplod-file">
    Upload Photo <input type="file" />
</span>
<span class="btn btn-default uplod-file">
    Upload Resume <input type="file" />
</span>
<span class="btn btn-default uplod-file">
    Upload Video <input type="file" />
</span>
</div><!--uplod-picture close-->
</div><!--col-md-12 close-->
<!-- Button -->
<div class="form-group col-md-10">
  <div class="col-md-6">
    <button type="submit" class="btn btn-warning submit-button" >Save</button>
    <button type="submit" class="btn btn-warning submit-button" >Cancel</button>

  </div>
</div>
</fieldset>
</form>
</div><!--row close-->
</div><!--container close -->          
</div><!--tab-pane close-->
</div><!--tab-content close-->
</div><!--container close-->

</section><!--section close-->

<script>

//tab js//
$(document).ready(function(e) {
    

$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

      if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
//canvas off js//
$('#menu_icon').click(function(){
		if($("#content_details").hasClass('drop_menu'))
		{
        $("#content_details").addClass('drop_menu1').removeClass('drop_menu');
    }
		else{
			$("#content_details").addClass('drop_menu').removeClass('drop_menu1');
			}
	
	
	});
	
//search box js//


    $("#flip").click(function(){
        $("#panel").slideToggle("5000");
    });

// sticky js//

$(window).scroll(function(){
    if ($(window).scrollTop() >= 500) {
       $('nav').addClass('stick');
    }
    else {
       $('nav').removeClass('stick');
    }
});




});









</script>
</body>
</html>