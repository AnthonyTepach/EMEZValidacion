<?php include APPPATH.'views/firebaseapp.php';?>
<!DOCTYPE html>
<html>
<head>


	<title>Validación</title>


	<?php include APPPATH.'views/header.php';?>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>" />
	<style type="text/css">
		body{
			background: url(<?=base_url('assets/img/COMPUTERFORMS-FONDO.png')?>) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			}
	</style>
	<script type='text/javascript'>
		$(document).ready(function(){ 
         
            $("#CB_text_flo").keypress(function(e) {
            	            	
            	if(e.which == 13) {
            		if( $('#CB_text_flo').val() ==''){
            			$('#ajax').html("");
            			alertify.alert('https://computerforms.com.mx', 'Debes llenar el campo del folio para continuar', function(){ alertify.error('El campo de texto esta vacío'); });
            		}
				
					else{
            			openDiv();
            			$(this).val('');
            		}
            	}
            });

       
        });
		function openDiv(){
			//alert($('#CB_text_flo').val());
			$.ajax({
		              type: 'POST',
		              data:{'alfanum':$('#CB_text_flo').val()},
		              url: 'C_consulta',
		               beforeSend: function(){

					   	$('#ajax').html("<center><img width='400px' oncontextmenu='return false' src='<?= base_url('assets/img/Gif/load.gif')?>'></center>");
					   		
					   },
		              success: function(data) {
		                $("#ajax").html(data);
		              },error:function (XMLHttpRequest, textStatus, errorThrown) {
		              	// body...
		              	var a= XMLHttpRequest.status;
		              	if (a==404) {
		              			$('#ajax').html("<center><img width='400px' src='<?= base_url('assets/img/System/404.svg')?>'><h4>"+XMLHttpRequest.statusText+"</h4></center>");
		              	}else if(a==500){
		              		$('#ajax').html("<center><img width='400px' src='<?= base_url('assets/img/System/500.svg')?>'><h4>"+XMLHttpRequest.statusText+"</h4></center>");
		              	}
		              
		              }
		              
		    });
		}
	</script>
	
</head>
<body>
	
	<div class="container">
	<?php 
		
	?>
	
		<br>
		<div class="card">
		    <div class="card-image waves-effect waves-block waves-light" >
		    	<ul class="navbar-nav px-3">
     
			    <!--<li class="nav-item text-nowrap">
			      <a class="nav-link" href="<?php //echo base_url('index.php/logout');?>">Cerrar sesión <span data-feather="log-out"></span></a>
			    </li>-->
			  </ul>
		      <img class="activator" oncontextmenu="return false" src="<?= base_url('assets/img/Logos/LOGO2.png')?>">
			  <div id="user_div" class="loggedin-div" style="padding:0px; margin :0px auto;">
					<p id="user_para" style="display: none;">Welcome to Firebase web login Example. You're currently logged in.</p>
					<button style="display: inline;" onclick="logout()">Cerrar sesión</button>
				</div>
		    </div><br>
		    	
		    <div class="card-content">
		    	<div class="row">
				
				      <div class="row">
				      	<table>
					        <tr>
				      			<td style="display:none;">
				      				<!--input del folio-->
				      				<div class="input-field col s12">
							          <input id="CB_text" type="text" oncontextmenu='return false' style="font-size: 30px" class=" validate">
							          <label for="CB_text" style="font-size: 20px">Folio</label>
							          <span class="helper-text" data-error="wrong" data-success="right">Ingrese el folio alfanúmerico</span>
							        </div>
				      			</td>
				             	<td>
				      				
				      				<div class="input-field col s12">
							          <input id="CB_text_flo" type="text" oncontextmenu='return false' style="font-size: 30px" class=" validate">
							          <label for="CB_text_flo" style="font-size: 20px">Folio alfanúmerico</label>
							          <span class="helper-text" data-error="wrong" data-success="right">Ingrese el folio alfanúmerico</span>
							        </div>
				      			</td>
				            </tr>
				        </table>

				      </div>
				    
	  			</div>
	  			<div id="ajax" oncopy="return false" oncontextmenu="return false">
	  				
	  			</div>

				
				  
		    </div>
  		</div>
	</div>
	<div id="login_div" class="main-div"></div>
	
	<?php include APPPATH.'views/footer.php';?>
	
</body>
</html>

