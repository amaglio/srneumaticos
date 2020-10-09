<!-- CUERPO -->
<div class="row-fluid" style="margin-left:20px"  >
    <div class="row" style="color:#C3211F; margin-top:20px; font-size:30px; font-family:arial; font-weight:bold">
        La carta
    </div>
    <div  class="row" style="margin-top:20px; border: solid 1px #E18940; color: #E18940; padding:5px; padding-left:30px; font-size:18px; font-weight:bold; background-color:#F7D0B0;">
        <?=$titulo?>
    </div>
    <div class="row" style="margin-top:10px;  ">
        <div class="span8">
          
          <table class="table table-hover table-striped">


          <?php
            foreach ($menus->result() as $row) 
            { ?>
                <tr>
                      <td><?=$row->menu?></td> 
                      <td><?=$row->precio?></td> 
                </tr>
      
        <?php  }

          ?>
           </table>

        </div>
        <div class="span4" style="text-align:right">
               <div class="row"  >
                  <img src="<?=base_url()?>assets/imagenes/imagenes_carta/<?=$foto1?>">
              </div> 
              <div class="row" style="margin-top:20px;"  >
                  <img src="<?=base_url()?>assets/imagenes/imagenes_carta/<?=$foto2?>">
              </div>
        </div>
    </div>
 
 
</div>
<!-- FIN CUERPO -->