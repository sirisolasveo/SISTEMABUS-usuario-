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



<!-- MODAL -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="<?php echo base_url(); ?>assets/images/bus.png" alt="Avatar">
                </div>
                <h4 class="modal-title">Iniciar Sesion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <!-- <input type="button" onclick="window.location ='https://accounts.google.com/signout/chrome/landing?continue=https://mail.google.com/mail&oc=https://mail.google.com/mail&hl=es';" value="Iniciar Sesion con GMAIL" class="btn btn-danger"> -->
            <div class="modal-body">
                <form action="<?php echo base_url() ?>backend/auth/login" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Iniciar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#">Olvide mi contraseña?</a>
            </div>
        </div>
    </div>
</div>

<!-- MODAL -->
<div id="myModal2" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="<?php echo base_url(); ?>assets/images/bus.png" alt="Avatar">
                </div>
                <h4 class="modal-title">Registrarse</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form onsubmit="return comprobarClave();" action="<?php echo base_url() ?>backend/auth/save" method="post">
                    <div class="form-group">
                        <input type="number" class="form-control" name="dni" placeholder="Dni" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="direccion" placeholder="Direccion" required="required">
                    </div>
                    <div class="form-group">
                        <input type="number " class="form-control" name="celular" placeholder="Celular" required="required">
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-control" name="correo" placeholder="Correo" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pass_1" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pass_2" name="password_1" placeholder="Confirma Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<body>
<div>
  <img width="100%" height="400" src="<?php echo base_url(); ?>assets/images/portada.png">
  <nav id="navi" class="nav nav-pills nav-justified bg-dark">
      <a class="nav-item nav-link active" href="#"><i class="fa fa-home"></i>HOME</a>
      <a class="nav-item nav-link" href="#"><i class="fa fa-users"></i>NOSOTROS</a>
      <a class="nav-item nav-link" href="#"><i class="fa fa-id-card"></i>CONTACTO</a>
      <a class="nav-item nav-link disabled" href="#"><i class="fa fa-question-circle"></i>AYUDA</a>
  </nav>
</div>
<div>
</div>
<div class="content-wrapper" id="everyone">
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
            <a href="https://wa.me/5211234567890?text=Me%20gustaría%20saber%20el%20precio%20del%20coche" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
            <input type="hidden" value="CIVA"  id="nameEmpresa">
            <a href="#myModalInformacion_civa" class="btn btn-primary text-left mt-4 ml-4" data-toggle="modal"><span class="fas fa-user"></span>
            INFORMACION</a>
        </div>
        <div class="col-md-2 botones bg-dark" id="caja">
            <div class="icobus text-center ">
                <a href="#myModal" class="btn btn-info my-2 my-sm-0" data-toggle="modal"><i class="fa fa-bus"></i></a>
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
                CANCHAS
            </h3>
            <p class="text-left mt-4 ml-4">
                DESCRIPCION:
                Brindar y garantizar un servicio de transporte seguro y de excelencia reconocida por los clientes, basado en un sistema de gestión y control de flota de vanguardia en el servicio de transporte industrial, interurbano e internacional de pasajeros, turismo, transporte de cargas, materiales y arriendo de maquinarias.
            </p>
            <input type="hidden" id="nameEmpresa">
            <a href="#myModalInformacion_chancas"  class="btn btn-primary text-left mt-4 ml-4" data-toggle="modal"><span class="fas fa-user"></span>
            INFORMACION</a>
        </div>
        <div id="caja" class="col-md-2 botones bg-dark">
            <div class="icobus text-center ">
                <a href="#myModal" class="btn btn-info my-2 my-sm-0" data-toggle="modal"><i class="fa fa-bus"></i></a>
                <b class="text-white">RESERVAR AQUI</b>
            </div>
        </div>
    </section>
     <section class="general">
        <div  id="caja" class="imagen">
            <img height="300" src="<?php echo base_url(); ?>assets/images/palomino.jpg" width="300">
            </img>
        </div>
        <div id="caja" class="caja1">
            <h3 class="text-left mt-4 ml-4">
                PALOMINO
            </h3>
            <p class="text-left mt-4 ml-4">
                DESCRIPCION:
                Brindar y garantizar un servicio de transporte seguro y de excelencia reconocida por los clientes, basado en un sistema de gestión y control de flota de vanguardia en el servicio de transporte industrial, interurbano e internacional de pasajeros, turismo, transporte de cargas, materiales y arriendo de maquinarias.
            </p>
            <input type="hidden" id="nameEmpresa">
            <a href="#myModalInformacion_palomino"  class="btn btn-primary text-left mt-4 ml-4" data-toggle="modal"><span class="fas fa-user"></span>
            INFORMACION</a>
        </div>
        <div id="caja" class="col-md-2 botones bg-dark">
           <div class="icobus text-center ">
                <a href="#myModal" class="btn btn-info my-2 my-sm-0" data-toggle="modal"><i class="fa fa-bus"></i></a>
                <b class="text-white">RESERVAR AQUI</b>
            </div>
        </div>
    </section>
</div>
<BR/><BR/>
  <!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

 <h2 class="text-center">EMPRESAS DE BUS AFILIADAS</h2><BR/><BR/>
  <!-- Footer Elements -->
  <div class="container text-center">


    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-4 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img width="200" height="200" src="//s3.rdbuz.com/Images/home/bologos/PERU/LINEA.png" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img width="200" height="200" src="//s3.rdbuz.com/Images/home/bologos/PERU/OLTURSA.png" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->
      <br/><br/><br/><br/><br/><br/>
      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img width="200" height="200" src="//s3.rdbuz.com/Images/home/bologos/PERU/CIVA.png" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->
    </div>
          <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img width="200" height="200" src="//s3.rdbuz.com/Images/home/bologos/PERU/movilbus-120x39.png" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img width="200" height="200" src="//s3.rdbuz.com/Images/home/bologos/PERU/ittsa.png" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img width="200" height="200" src="//s3.rdbuz.com/Images/home/bologos/PERU/TEPSA.png" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <!-- <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div> -->
  <!-- Copyright -->

</footer>
<!-- Footer -->
<br/><br/>
<!-- Footer -->
<footer class="page-footer font-small bg-dark pt-4 text-white">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase ">GRUPO DE DESARROLLO</h5>
        <p>Encargados del proyecto:</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Backend</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Frontend</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</body>