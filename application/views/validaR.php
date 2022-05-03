<script type='text/javascript'>
    $(document).ready(function(){ 
            $("#CB_CODI").keypress(function(e) {
              if(e.which == 13) {
                if($(this).val() ==''){
                  $('#ajaxRaspa').html("");
                  alertify.alert('https://intelligentforms.mx', 'Debes ingresar el código interno de verificación', function(){ alertify.error('El campo de texto esta vacío'); });
                }else{
                  openDiv2();
                  $(this).val('');
                }
              }
            });

       
        });
    function openDiv2(){
      var phpv='<?=$folio?>';
     
      $.ajax({
                  type: 'POST',
                  data:{'CB':$('#CB_CODI').val(),'CB2':phpv},
                  url: 'index.php/C_consulta2',
                   beforeSend: function(){

              $('#ajaxRaspa').html("<center><img width='100px' oncontextmenu='return false' src='<?= base_url('assets/img/Gif/load.gif')?>'></center>");
                
             },
                  success: function(data) {
                    $("#ajaxRaspa").html(data);
                  },error:function (XMLHttpRequest, textStatus, errorThrown) {
                    // body...
                    var a= XMLHttpRequest.status;
                    if (a==404) {
                        $('#ajaxRaspa').html("<center><img width='100px' src='<?= base_url('assets/img/Gif/404.gif')?>'><h6>"+XMLHttpRequest.statusText+"</h6></center>");
                    }else if(a==500){
                      $('#ajaxRaspa').html("<center><img width='100px' src='<?= base_url('assets/img/Gif/500.gif')?>'><h6>"+XMLHttpRequest.statusText+"</h6></center>");
                    }
                  
                  }
                  
        });
    }
  </script>

<div class="card">

	<style type="text/css">
	#rotar{
transform:rotate(90deg);
-ms-transform:rotate(90deg); /* IE 9 */
-webkit-transform:rotate(90deg); /* Opera, Chrome, and Safari */
}
</style>
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?=base_url('assets/img/Logos/bandainfo.png')?>">
    </div>
    <!--<div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><h4>Código de verificación (Tómbola)</h4></span>
      <p><a href="#"><h5><?php echo $folio; ?></h5></a></p>
    </div>-->
  
    <div class="card-reveal">
      <center>
        <div id="ajaxRaspa" oncopy="return false" oncontextmenu="return false">
          
        </div>
      </center>

      <span class="card-title grey-text text-darken-4">Ingresa las letras flotantes del folio<span data-feather="archive"></span></span>
      <input type="text" name="CB_CODI" id="CB_CODI">  
    </div>
   
  </div>
