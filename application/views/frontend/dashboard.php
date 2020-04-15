<!-- MODAL INFO -->
<div id="myModalInformacion_civa"  class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal_horario">
      <h1>HORARIOS DE SALIDA Y COSTOS CIVA</h1>
          <table class="table">
            <thead class="thead-dark">
                <tr>
                 <th>DESTINO</th>
                 <th>HORA SALIDA</th>
                 <th>COSTO (SOLES)</th>
                </tr>
               </thead>
                  <tbody>
                    <!-- $pais -->
                    <?php if (!empty($destinos)): ?>
                      <?php foreach ($destinos as $value): ?>
                              <?php if ($value->empresa == 'CIVA'): ?>
                                <tr>
                                  <td><?php echo $value->destino; ?></td>
                                  <td><?php echo $value->hora; ?></td>
                                  <td><?php echo $value->costo; ?></td>
                                </tr>
                               <?php endif;?>
                         <?php endforeach;?>
                       <?php endif;?>
                  </tbody>
          </table>
    </div>
  </div>
</div>


<!-- MODAL INFO -->
<div id="myModalInformacion_chancas"  class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal_horario">
      <h1>HORARIOS DE SALIDA Y COSTOS CHANCAS</h1>
          <table class="table">
            <thead class="thead-dark">
                <tr>
                 <th>DESTINO</th>
                 <th>HORA SALIDA</th>
                 <th>COSTO (SOLES)</th>
                </tr>
               </thead>
                  <tbody>
                    <!-- $pais -->
                    <?php if (!empty($destinos)): ?>
                      <?php foreach ($destinos as $value): ?>
                              <?php if ($value->empresa == 'CHANCAS'): ?>
                                <tr>
                                  <td><?php echo $value->destino; ?></td>
                                  <td><?php echo $value->hora; ?></td>
                                  <td><?php echo $value->costo; ?></td>
                                </tr>
                               <?php endif;?>
                         <?php endforeach;?>
                       <?php endif;?>
                  </tbody>
          </table>
    </div>
  </div>
</div>


<!-- MODAL INFO -->
<div id="myModalInformacion_palomino"  class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal_horario">
      <h1>HORARIOS DE SALIDA Y COSTOS PALOMINO</h1>
          <table class="table">
            <thead class="thead-dark">
                <tr>
                 <th>DESTINO</th>
                 <th>HORA SALIDA</th>
                 <th>COSTO (SOLES)</th>
                </tr>
               </thead>
                  <tbody>
                    <!-- $pais -->
                    <?php if (!empty($destinos)): ?>
                      <?php foreach ($destinos as $value): ?>
                              <?php if ($value->empresa == 'PALOMINO'): ?>
                                <tr>
                                  <td><?php echo $value->destino; ?></td>
                                  <td><?php echo $value->hora; ?></td>
                                  <td><?php echo $value->costo; ?></td>
                                </tr>
                               <?php endif;?>
                         <?php endforeach;?>
                       <?php endif;?>
                  </tbody>
          </table>
    </div>
  </div>
</div>

<div id="myModalHorario_CIVA"  class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal_horario">
      <h1>SELECCIONE UN HORARIO DE SALIDA CIVA</h1>
        <div id="tableResponsive">
          <table class="table">
             <thead class="thead-dark">
                <tr>
                 <th>DESTINO</th>
                 <th>HORA SALIDA</th>
                 <th>COSTO (SOLES)</th>
                 <th>RESERVAR</th>
                </tr>
               </thead>
                  <tbody>
                    <!-- $pais -->
                    <?php if (!empty($destinos)): ?>
                      <?php foreach ($destinos as $value): ?>
                              <?php if ($value->empresa == 'CIVA'): ?>
                                <tr>
                                  <td><?php echo $value->destino; ?></td>
                                  <td><?php echo $value->hora; ?></td>
                                  <td><?php echo $value->costo; ?></td>
                                  <td>
                                   <form action="<?php echo base_url(); ?>frontend/asientos/asientos_num" method="post">
                                   <input type="hidden" name="destino" value="<?php echo $value->destino; ?>">
                                   <input type="hidden" name="hora" value="<?php echo $value->hora; ?>">
                                   <input type="hidden" name="tipo_empresa" value="<?php echo $value->id; ?>">
                                   <input type="hidden" name="tipo_hora" value="<?php echo $value->idhora; ?>">
                                   <input type="hidden" name="costo" value="<?php echo $value->costo; ?>">
                                   <input type="submit" class="btn btn-primary my-2 my-sm-0" value="VER ASIENTOS">
                                   </form>
                                  </td>
                                </tr>
                               <?php endif;?>
                         <?php endforeach;?>
                       <?php endif;?>
                  </tbody>
          </table>
        </div>
    </div>
  </div>
</div>

<div id="myModalHorario_CHANCAS"  class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal_horario">
      <h1>SELECCIONE UN HORARIO DE SALIDA CHANCAS</h1>
        <div id="tableResponsive">
          <table class="table">
             <thead class="thead-dark">
                <tr>
                 <th>DESTINO</th>
                 <th>HORA SALIDA</th>
                 <th>COSTO (SOLES)</th>
                 <th>RESERVAR</th>
                </tr>
               </thead>
                  <tbody>
                    <!-- $pais -->
                    <?php if (!empty($destinos)): ?>
                      <?php foreach ($destinos as $value): ?>
                              <?php if ($value->empresa == 'CHANCAS'): ?>
                                <tr>
                                  <td><?php echo $value->destino; ?></td>
                                  <td><?php echo $value->hora; ?></td>
                                  <td><?php echo $value->costo; ?></td>
                                  <td>
                                   <form action="<?php echo base_url(); ?>frontend/asientos/asientos_num" method="post">
                                   <input type="hidden" name="destino" value="<?php echo $value->destino; ?>">
                                   <input type="hidden" name="hora" value="<?php echo $value->hora; ?>">
                                   <input type="hidden" name="tipo_empresa" value="<?php echo $value->id; ?>">
                                   <input type="hidden" name="tipo_hora" value="<?php echo $value->idhora; ?>">
                                   <input type="hidden" name="costo" value="<?php echo $value->costo; ?>">
                                   <input type="submit" class="btn btn-primary my-2 my-sm-0" value="VER ASIENTOS">
                                   </form>
                                  </td>
                                </tr>
                               <?php endif;?>
                         <?php endforeach;?>
                       <?php endif;?>
                  </tbody>
          </table>
        </div>
    </div>
  </div>
</div>


<div id="myModalHorario_PALOMINO"  class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal_horario">
      <h1>SELECCIONE UN HORARIO DE SALIDA PALOMINO</h1>
        <div id="tableResponsive">
          <table class="table">
             <thead class="thead-dark">
                <tr>
                 <th>DESTINO</th>
                 <th>HORA SALIDA</th>
                 <th>COSTO (SOLES)</th>
                 <th>RESERVAR</th>
                </tr>
               </thead>
                  <tbody>
                    <!-- $pais -->
                    <?php if (!empty($destinos)): ?>
                      <?php foreach ($destinos as $value): ?>
                              <?php if ($value->empresa == 'PALOMINO'): ?>
                                <tr>
                                  <td><?php echo $value->destino; ?></td>
                                  <td><?php echo $value->hora; ?></td>
                                  <td><?php echo $value->costo; ?></td>
                                  <td>
                                   <form action="<?php echo base_url(); ?>frontend/asientos/asientos_num" method="post">
                                     <input type="hidden" name="destino" value="<?php echo $value->destino; ?>">
                                     <input type="hidden" name="hora" value="<?php echo $value->hora; ?>">
                                     <input type="hidden" name="tipo_empresa" value="<?php echo $value->id; ?>">
                                     <input type="hidden" name="tipo_hora" value="<?php echo $value->idhora; ?>">
                                     <input type="hidden" name="costo" value="<?php echo $value->costo; ?>">
                                     <input type="submit" class="btn btn-primary my-2 my-sm-0" value="VER ASIENTOS">
                                   </form>
                                  </td>
                                </tr>
                               <?php endif;?>
                         <?php endforeach;?>
                       <?php endif;?>
                  </tbody>
          </table>
       </div>
    </div>
  </div>
</div>



<div class="content-wrapper">
    <section class="general">
        <div class="imagen" id="caja">
            <img height="300" src="<?php echo base_url(); ?>assets/images/civa.jpg" width="300">
            </img>
        </div>
        <div class="caja1_empresa" id="caja">
            <h3 class="text-left mt-4 ml-4">
                CIVA
            </h3>
            <p class="text-left mt-4 ml-4">
                DESCRIPCION:
                Brindar y garantizar un servicio de transporte seguro y de excelencia reconocida por los clientes, basado en un sistema de gestión y control de flota de vanguardia en el servicio de transporte industrial, interurbano e internacional de pasajeros, turismo, transporte de cargas, materiales y arriendo de maquinarias.
            </p>
            <a href="#myModalInformacion_civa" class="btn btn-primary text-left mt-4 ml-4" data-toggle="modal"><span class="fas fa-user"></span>
            INFORMACION</a>
        </div>
        <div class="col-md-2 botones bg-dark" id="caja">
              <div class="icobus text-center ">
                <a href="#myModalHorario_CIVA" class="btn btn-info my-2 my-sm-0" data-toggle="modal"><i class="fa fa-bus"></i></a>
                <b class="text-white">RESERVAR AQUI</b>
              </div>
        </div>
    </section>
     <section class="general">
        <div class="imagen" id="caja">
            <img height="300" src="<?php echo base_url(); ?>assets/images/chancas.jpg" width="300">
            </img>
        </div>
        <div class="caja1" id="caja">
            <h3 class="text-left mt-4 ml-4">
                CHANCAS
            </h3>
            <p class="text-left mt-4 ml-4">
                DESCRIPCION:
                Brindar y garantizar un servicio de transporte seguro y de excelencia reconocida por los clientes, basado en un sistema de gestión y control de flota de vanguardia en el servicio de transporte industrial, interurbano e internacional de pasajeros, turismo, transporte de cargas, materiales y arriendo de maquinarias.
            </p>
            <a href="#myModalInformacion_chancas" class="btn btn-primary text-left mt-4 ml-4" data-toggle="modal"><span class="fas fa-user"></span>
            INFORMACION</a>
        </div>
        <div class="col-md-2 botones bg-dark" id="caja">
             <div class="icobus text-center ">
                <a href="#myModalHorario_CHANCAS" class="btn btn-info my-2 my-sm-0" data-toggle="modal"><i class="fa fa-bus"></i></a>
                <b class="text-white">RESERVAR AQUI</b>
              </div>
        </div>
    </section>
     <section class="general">
        <div class="imagen" id="caja">
            <img height="300" src="<?php echo base_url(); ?>assets/images/palomino.jpg" width="300">
            </img>
        </div>
        <div class="caja1" id="caja">
            <h3 class="text-left mt-4 ml-4">
                PALOMINO
            </h3>
            <p class="text-left mt-4 ml-4">
                DESCRIPCION:
                Brindar y garantizar un servicio de transporte seguro y de excelencia reconocida por los clientes, basado en un sistema de gestión y control de flota de vanguardia en el servicio de transporte industrial, interurbano e internacional de pasajeros, turismo, transporte de cargas, materiales y arriendo de maquinarias.
            </p>
            <a href="#myModalInformacion_palomino" class="btn btn-primary text-left mt-4 ml-4" data-toggle="modal"><span class="fas fa-user"></span>
            INFORMACION</a>
        </div>
        <div class="col-md-2 botones bg-dark" id="caja">
            <div class="icobus text-center ">
                <a href="#myModalHorario_PALOMINO" class="btn btn-info my-2 my-sm-0" data-toggle="modal"><i class="fa fa-bus"></i></a>
                <b class="text-white">RESERVAR AQUI</b>
              </div>
        </div>
    </section>
</div>