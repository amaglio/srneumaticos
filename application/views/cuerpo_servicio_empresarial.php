<!-- CUERPO -->
<div class="row-fluid" style="margin-left:20px"  >
    <div class="row" style="color:#C3211F; margin-top:20px; font-size:30px; font-family:arial; font-weight:bold;  ">
        Servicio Empresarial
    </div>
    <div  class="row" style="margin-top:20px; border: solid 1px #E18940; color: #000; padding:10px; font-family:arial;    font-size:14px; background-color:#F7D0B0;">
          Nuestra empresa cuenta con un servicio de viandas a medida, adaptada a las necesidades de nuestros clientes. El servicio de viandas contempla tanto 
          comedores en planta como trabajadores administrativos.
          El servicio se compone de un menu diario, que varia semanalmente y a un precio diferencial.
    </div>
    <div  class="row" style="margin-top:20px; color: #000; padding:10px; font-family:arial;   font-size:14px;  ">
        
        <?php 
            $i = 0;
            $fecha_anterior = ''; 

            foreach ($menu_semanales->result() as $row): 

              $fecha =  $row->fecha_comienzo; 
 

                if( $fecha != $fecha_anterior ):      // Es la segunda semana
                      
                      if($fecha_anterior != ''): ?>   

                            </table>
                          </div>
                      </div>

                 <?php   endif;   ?>

                      <div class="span4"  >  
                        <div class="span12" style=" font-family:arial; color:#C3211F; font-size:16px; font-weight:bold;   ">Semana del <?=$fecha?> al <?php 
                                                                                                                                                          $fecha2 = date_create($fecha);
                                                                                                                                                          date_add($fecha2, date_interval_create_from_date_string('4 days'));
                                                                                                                                                          echo date_format($fecha2, 'Y-m-d'); 

                                                                                                                                                        ?></div>
                        <div class="span12" style="  ">
                          <table class="table table-hover table-striped">

            <?php   endif;  ?>

                  <tr>
                    <td style="font-weight:bold; padding: 6px"><?=$row->dia?></td>
                    <td style="padding: 6px"><?=$row->menu?></td>
                  </tr>
            <?php
                $i = 1;
                $fecha_anterior = $fecha; 

            endforeach; ?>
            

                  </table>
                </div>
            </div>

                 
       
        <div class="span4" style="background-color:#AFCFCB; border:solid 1px #C3211F; padding:10px"> 
            <table style=" font-family:arial; width:'100%'; padding:10px; " >
              <tr>
                 <td style="font-weight:bold; font-size:16px">El servicio incluye</td>
              </tr>
              <tr>
                  <td style="padding-left:10px; padding-top:10px">
                  - Menu del dia <br>
                  - Pan <br>
                  - Postre
                  </td>
              </tr>
              <tr>
                  <td style="font-weight:bold; font-size:16px;  padding-top:10px">
                    Opcional
                  </td>
              </tr>
               <tr>
                  <td style="padding-left:10px; padding-top:10px">
                  - Gaseosa 1ra marca <br>
                  - Gaseosa 2da marca <br>
                  </td>
              </tr>
            </table>

        </div>
    </div>
    <div  class="row" style="margin-top:10px; padding:5px;  font-family:arial; color:#C3211F; font-size:16px; font-weight:bold;  ">
          Algunas empresas que confian en nosotros:
    </div>
    <div  class="row" style="margin-top:10px; padding:5px;    ">
            <table   style=" width:100%;  padding:10px">
                <tr>
                    <td style=" padding:10px">
                          • Gonzalez S.A
                    </td>
                    <td style=" padding:10px">
                          • Gonzalez S.A
                    </td>
                    <td style=" padding:10px">
                          • Gonzalez S.A
                    </td>
                </tr>
                <tr>
                    <td style=" padding:10px">
                          • Gonzalez S.A
                    </td>
                    <td style=" padding:10px">
                          • Gonzalez S.A
                    </td>
                    <td style=" padding:10px">
                          • Gonzalez S.A
                    </td>
                </tr>
            </table>
    </div>
 
 
</div>
<!-- FIN CUERPO -->