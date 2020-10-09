<!-- CUERPO -->
<div class="row-fluid" style="margin-left:20px"  >
    <div class="row" style="color:#C3211F; margin-top:20px; font-size:30px; font-family:arial; font-weight:bold">
        Contactenos
    </div>
    <div  class="row" style="margin-top:20px; padding:5px; padding-left:30px; font-size:18px; font-weight:bold;">
          <div class="span8"> 
                      
                      <form name="enq" method="post" action="<?=base_url()?>index.php/contacto/enviar_email" onsubmit="return validation();">
                        <fieldset>
                          
                        <input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Nombre" />
                          <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
                          <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Mensaje"></textarea>
                          <div class="actions">
                        <input type="submit" value="Enviar mensaje" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
                        </div>
                        
                        </fieldset>
                      </form> 
          </div>
          <div class="span4" style="padding:15px; font-size:14px; font-family:arial">  
                <div  class="row" style="padding:5px; font-size:13px; font-family:arial"><img src="<?=base_url()?>assets/imagenes/iconos/icono_telefono.png"> 4696-7848 / 15-5830-9939 / 15-6164-6066</div>
                <div  class="row" style="padding:5px; font-size:13px; font-family:arial"><img src="<?=base_url()?>assets/imagenes/iconos/icono_what.png"> 15-6536-2208</div>
                <div  class="row" style="padding:5px; font-size:13px; font-family:arial"><img src="<?=base_url()?>assets/imagenes/iconos/icono_email.png"> moron.catering.services@gmail.com</div>
                <div  class="row" style="padding:5px; font-size:13px; font-family:arial"><img src="<?=base_url()?>assets/imagenes/iconos/icono_facebook.png"> /moron.catering.services</div>
          </div>
    </div>
 
 
</div>
<!-- FIN CUERPO -->