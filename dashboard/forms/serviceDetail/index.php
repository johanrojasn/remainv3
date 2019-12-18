<?php
require('../Menu.php');
?>

<style>
    .switch-field {
        display: flex;
        margin-bottom: 36px;
        overflow: hidden;
    }
    .switch-field input {
        position: absolute !important;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        width: 1px;
        border: 0;
        overflow: hidden;
    }

    .switch-field label {
        background-color:#cfc2c6;
        color:white;
        font-size: 14px;
        line-height: 1;
        text-align: center;
        padding: 8px 16px;
        margin-right: -1px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
        transition: all 0.1s ease-in-out;
    }

    .switch-field label:hover {
        cursor: pointer;

    }

    .switch-field input:checked + label {
        background:linear-gradient(60deg, #26c6da, #00acc1);
        color:white;
        box-shadow: none;
    }

    .switch-field label:first-of-type {
        border-radius: 4px 0 0 4px;

    }

    .switch-field label:last-of-type {
        border-radius: 0 4px 4px 0;
    }

</style>
<div class="content">
    


    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="blue">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Agregar Detalle Servicio</h4>
                    <div class="toolbar">
                        <div class="col-md-4">
                            <div class="card">
                                <form id="RegisterValidation" action="#" method="">
                                    <div class="card-content">
                                        <div class="form-group label-floating"> 
                                            <input class="form-control" name="text" id="idServicio" type="hidden" required="true" placeholder="Cliente *" />
                                            <input readonly="" class="form-control" name="text" id="Clientes" type="text" required="true" placeholder="Cliente *" />
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                Ocurrencia
                                                <small>*</small>
                                            </label>
                                            <textarea class="form-control" name="text" id="Ocurrencia" rows="10" cols="50"></textarea>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="">
                                                Estatus
                                                <small>*</small>
                                            </label>

                                            <div class="switch-field">
                                                <input type="radio" id="radio-one" name="switch-one" value="0" />
                                                <label for="radio-one" style="">Pendiente</label>
                                                <input type="radio" id="radio-two" name="switch-one" value="1"/>
                                                <label for="radio-two" style="">Resolvido</label>

                                            </div>
                                            <input type="hidden" class="form-control" name="text" id="condicionstatus"/>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                Urgencia
                                                <small>*</small>
                                            </label>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="radioUrgencia" name="radioUrgencia" value="1">Alta
                                                </label>
                                                <label>
                                                    <input  type="radio" id="radioUrgencia"  name="radioUrgencia" value="2" >Media
                                                </label>
                                                <label>
                                                    <input  type="radio" id="radioUrgencia"  name="radioUrgencia" value="3" >Baja
                                                </label>
                                            </div>
                                            <input type="hidden" id="idUrgencia"/>
                                        </div>

                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                Asistencia
                                                <small>*</small>
                                            </label>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="radioAsistencia" name="radioAsistencia" value="1">Presencial
                                                </label>
                                                <label>
                                                    <input  type="radio" id="radioAsistencia"  name="radioAsistencia" value="2" >Remota
                                                </label>
                                            </div>
                                            <input type="hidden" id="idTAsistencia"/>
                                        </div>
                                        

                                        <div class="form-footer text-right">
                                            <button type="button" class="btn btn-info" id="guardarnuevo" data-dismiss="modal">Agregar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> 
                        <div class="col-md-8">
                            <div class="card">
                                <form id="RegisterValidation" action="#" method="">
                                    <table id="datatables2" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                        <thead class="table table-hover" style="background:#454d55">
                                            <tr style="color: #fff">
                                                <th>#</th>
                                                <th>Cliente</th>
                                                <th>Cargo</th>
                                                <th>Empreza</th>
                                                <th>Fecha</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "call sp_ListarDSServicio()";
                                            $result = mysqli_query($conexion, $sql);
                                            while ($ver = mysqli_fetch_row($result)) {
                                                $datos = $ver[0] . "||" .
                                                        $datos = $ver[1]
                                                ;
                                                ?>

                                                <tr>
                                                    <td><?php echo $ver[0] ?></td>
                                                    <td><?php echo $ver[1] ?></td>
                                                     <td><?php echo $ver[2] ?></td>
                                                    <td><?php echo $ver[3] ?></td>
                                                    <td><?php echo $ver[5] ?></td>
                                                    <th>
                                                        <a class="btn btn-simple btn btn-success btn-icon" onclick="AgregarFrmDetalleServicios('<?php echo $datos ?>')">
                                                            Click
                                                        </a>

                                                    </th>
                                                </tr>
                                                <?php
                                            };
                                            ?>
                                        </tbody>
                                    </table>


                                </form>
                            </div>
                        </div>
                    </div> 
                </div>

            </div>
            <!-- end content-->
        </div>
        <div class="col-md-12">

            <div id="tabla">

            </div>  
            <!-- end content-->
        </div>
        <!--  end card  -->
    </div>



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="green">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Actualizar Detalle Servicio</h4>
                    <div class="toolbar">
                        <div class="col-md-12">
                            <div class="card">
                                <form id="RegisterValidation" action="#" method="">
                                    <div class="card-content">
                                        <div class="form-group label-floating">
                                            <input class="form-control" name="text" id="id" type="hidden" required="true" placeholder="Cliente *" />
                                            
                                            <input class="form-control" name="text" id="idServicio3" type="hidden" required="true" placeholder="Cliente *" />
                                            <input readonly="" class="form-control" name="text" id="Clientes3" type="text" required="true" placeholder="Cliente *" />
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                
                                                <small></small>
                                            </label>
                                            <textarea class="form-control" name="text" id="Ocurrencia3" rows="10" cols="50" placeholder="Ocurrencia"></textarea>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="">
                                                Estatus
                                                <small>*</small>
                                            </label>

                                            <div class="switch-field">
                                                <input type="radio" id="radio-one3" name="switch-one3" value="0" />
                                                <label for="radio-one3" style="">Pendiente</label>
                                                <input type="radio" id="radio-two3" name="switch-one3" value="1"/>
                                                <label for="radio-two3" style="">Resolvido</label>

                                            </div>
                                            <input type="hidden" class="form-control" name="text" id="condicionstatus3"/>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                Urgencia
                                                <small>*</small>
                                            </label>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="radioUrgencia3" name="radioUrgencia" value="1">Alta
                                                </label>
                                                <label>
                                                    <input  type="radio" id="radioUrgencia3"  name="radioUrgencia" value="2" >Media
                                                </label>
                                                <label>
                                                    <input  type="radio" id="radioUrgencia3"  name="radioUrgencia" value="3" >Baja
                                                </label>
                                            </div>
                                            <input type="hidden" id="idUrgencia3"/>
                                        </div>

                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                Asistencia
                                                <small>*</small>
                                            </label>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="radioAsistencia3" name="radioAsistencia" value="1">Presencial
                                                </label>
                                                <label>
                                                    <input  type="radio" id="radioAsistencia3"  name="radioAsistencia" value="2" >Remota
                                                </label>
                                            </div>
                                            <input type="hidden" id="idTAsistencia3"/>
                                        </div>

                                <input type="text" id="idUsuario2"/>
                                        <div class="form-footer text-right">
                                            <button type="button" class="btn btn-success" id="actualizadatos" data-dismiss="modal">Actualizar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> 
                        
                    </div> 
                </div>

            </div>
            <!-- end content-->
        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>








    <?php
    require('../Credits.php');
    ?>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
                                                            $(document).ready(function () {
                                                                $('#myform').on('change', function () {
                                                                    var setvalue = $("[type='radio']:cheked").val();
                                                                    $('#setvalue').val($("[type='radio']:cheked").val());
                                                                });
                                                            });
    </script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }

            });


            var table = $('#datatables2').DataTable();

            // Edit record
            table.on('click', '.edit', function () {
                $tr = $(this).closest('tr');

                var data = table.row($tr).data();
                alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            });

            // Delete a record
            table.on('click', '.remove', function (e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            });

            //Like record
            table.on('click', '.like', function () {
                alert('You clicked on Like button');
            });

            $('.card .material-datatables label').addClass('form-group');
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#guardarnuevo').click(function () {
                idServicio = $('#idServicio').val();
                Ocurrencia = $('#Ocurrencia').val();
                condicionstatus = $('#condicionstatus').val();
                idUrgencia = $('#idUrgencia').val();
                idTAsistencia = $('#idTAsistencia').val();
                sessionUser = $('#sessionUser').val();
                AgregarDetalleServicio(idServicio, Ocurrencia, condicionstatus, idUrgencia, idTAsistencia,sessionUser);
            });



            $('#actualizadatos').click(function () {
                ActualizarDetalleServicio();
            });

        

        });



    </script>
    <script lang="javascript" type="text/javascript">
        function Limpiar(control1, control2, control3, control4, control5, control6, control7)
        {
            document.getElementById(control1).value = '';
            document.getElementById(control2).value = '';
            document.getElementById(control3).value = '';
            document.getElementById(control4).value = '';
            document.getElementById(control5).value = '';
            document.getElementById(control6).value = '';
            document.getElementById(control7).value = 0;
        }
    </script>



    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/material.min.js" type="text/javascript"></script>
    <script src="../assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="../assets/js/jquery.validate.min.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="../assets/js/moment.min.js"></script>
    <!--  Charts Plugin -->
    <script src="../assets/js/chartist.min.js"></script>
    <!--  Plugin for the Wizard -->
    <script src="../assets/js/jquery.bootstrap-wizard.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>
    <!--   Sharrre Library    -->
    <script src="../assets/js/jquery.sharrre.js"></script>
    <!-- DateTimePicker Plugin -->
    <script src="../assets/js/bootstrap-datetimepicker.js"></script>
    <!-- Vector Map plugin -->
    <script src="../assets/js/jquery-jvectormap.js"></script>
    <!-- Sliders Plugin -->
    <script src="../assets/js/nouislider.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!--<script src="../assets/js/jquery.select-bootstrap.js"></script>-->
    <!-- Select Plugin -->
    <script src="../assets/js/jquery.select-bootstrap.js"></script>
    <!--  DataTables.net Plugin    -->
    <script src="../assets/js/jquery.datatables.js"></script>
    <!-- Sweet Alert 2 plugin -->
    <script src="../assets/js/sweetalert2.js"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../assets/js/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin    -->
    <script src="../assets/js/fullcalendar.min.js"></script>
    <!-- TagsInput Plugin -->
    <script src="../assets/js/jquery.tagsinput.js"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="../assets/js/material-dashboard.js"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

            demo.initVectorMap();
        });
    </script>

    <script type="text/javascript">
        function setFormValidation(id) {
            $(id).validate({
                errorPlacement: function (error, element) {
                    $(element).parent('div').addClass('has-error');
                }
            });
        }

        $(document).ready(function () {
            setFormValidation('#RegisterValidation');
            setFormValidation('#TypeValidation');
            setFormValidation('#LoginValidation');
            setFormValidation('#RangeValidation');
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#tabla').load('../../services/components/TablaDetalleServicio.php');
        });
    </script>
    
    
   
    <script>
        $(document).ready(function () {
            $('#RegisterValidation input').on('change', function () {
                var idUrgencia = $("[id='radioUrgencia']:checked").val();
                $('#idUrgencia').val($("[id='radioUrgencia']:checked").val());
            });
        });

    </script> 
    <script>
        $(document).ready(function () {
            $('#RegisterValidation input').on('change', function () {
                var idTAsistencia = $("[id='radioAsistencia']:checked").val();
                $('#idTAsistencia').val($("[id='radioAsistencia']:checked").val());
            });
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#RegisterValidation input').on('change', function () {
                var condicionstatus = $("[name='switch-one']:checked").val();
                $('#condicionstatus').val($("[name='switch-one']:checked").val());
            });
        });

    </script>
    
    
    
    
      <script>
        $(document).ready(function () {
            $('#RegisterValidation input').on('change', function () {
                var idUrgencia3 = $("[id='radioUrgencia3']:checked").val();
                $('#idUrgencia3').val($("[id='radioUrgencia3']:checked").val());
            });
        });

    </script> 
    <script>
        $(document).ready(function () {
            $('#RegisterValidation input').on('change', function () {
                var idTAsistencia3 = $("[id='radioAsistencia3']:checked").val();
                $('#idTAsistencia3').val($("[id='radioAsistencia3']:checked").val());
            });
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#RegisterValidation input').on('change', function () {
                var condicionstatus3 = $("[name='switch-one3']:checked").val();
                $('#condicionstatus3').val($("[name='switch-one3']:checked").val());
            });
        });

    </script>
    
    
    <!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>

