<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"></meta>
         <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
         <title>INICIO</title>
                <!-- Tell the browser to be responsive to screen width -->
         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"></meta>


         <link href="<?php echo base_url(); ?>assets/css/index.css" rel="stylesheet" type="text/css"></link>
         <link href="<?php echo base_url(); ?>assets/css/asientos.css" rel="stylesheet" type="text/css"></link>

         <link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet" type="text/css"></link>
                        <!-- Bootstrap CSS -->
         <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet"></link>
                            <!-- Bootstrap ICONOS -->
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"></link>

                                <!-- JQUERY -->
         <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet"></link>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

         <script src="<?php echo base_url(); ?>assets/jquery/jquery.seat-charts.js"></script>

         <link rel="icon" type="image/png" tamaños="32x32" href="<?php echo base_url(); ?>assets/images/icoBus.png">

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                          </button>

                            <span class="fa fa-user form-control-feedback">
                            </span>
                            <b>
                                PASAJITOS.COM
                            </b>
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input aria-label="Search" class="form-control mr-sm-2" placeholder="Buscar.." type="search">
                                    <!-- <a class="btn btn-outline-danger my-2 my-sm-0" data-toggle="modal" href="#">
                                        USUARIO:
                                    </a> -->
                                    <button class="btn btn-danger my-2 my-sm-0">
                                        <B><?php echo $this->session->userdata("id_user"); ?></B>
                                    </button>
                                    <li>
                                      <a class="btn btn-danger my-2 my-sm-0" href="<?php echo base_url(); ?>backend/auth/logout" title="Cerrar Sesion" id="logout">
                                      <img width="20" height="20" src="<?php echo base_url(); ?>assets/images/logout.png"alt="Cerrar Session" >
                                      </a>
                                    </li>
                                </input>
                            </form>
                        </div>
                    </div>
                </nav>
            </header>
            <br>
            </br>
        </div>
    </body>
</html>