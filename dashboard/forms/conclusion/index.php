<?php
require('../Menu.php');
?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header card-header-icon" data-background-color="blue">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Conclusion</h4>
                    <div class="toolbar">
                        <div class="col-md-6">
                            <div class="card">
                                <form id="RegisterValidation" action="#" method="">  
                                    <div class="card-content">
                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                            </label>
                         
                                            <input class="form-control" name="text" id="idServicio" type="hidden" required="true" placeholder="Tecnico" />
                                            <input class="form-control" name="text" id="Tecnico" type="text" required="true" placeholder="Tecnico" readonly="" />
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                Comentario
                                                <small>*</small>
                                            </label>
                                            <textarea class="form-control" name="text" id="Comentario" type="text" required="true" ></textarea>
                                        </div>


                                        <div class="form-footer text-right">
                                            <button type="button" class="btn btn-info" id="guardarnuevo" data-dismiss="modal">Agregar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="card">
                                <form id="RegisterValidation" action="#" method="">
                                    <table id="datatables2" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                        <thead class="table table-hover" style="background:#454d55">
                                            <tr style="color: #fff">
                                                <th>#</th>
                                                <th>Tecnico</th>                                              
                                                <th>Empreza</th>
                                                <th>Fecha</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT servicio.idServicio,empleado.Nombres,empleado.Apellidos,clientes_empleados.idCargoCliente,clientes.nEmpreza,Fecha,clientes.idCliente
FROM `servicio`

INNER JOIN clientes_empleados on clientes_empleados.idClientes_Empleados=servicio.idCliente

INNER JOIN clientes on clientes.idCliente=clientes_empleados.idClientes 
INNER JOIN empleado on empleado.idEmpleado=servicio.idTecnico

ORDER BY `servicio`.`idServicio`  desc";
                                            $result = mysqli_query($conexion, $sql);
                                            while ($ver = mysqli_fetch_row($result)) {
                                                $datos = $ver[0] . "||" .
                                                        $datos = $ver[1] . ' ' . $ver[2]
                                                ;
                                                ?>

                                                <tr>
                                                    <td><?php echo $ver[0] ?></td>
                                                    <td><?php echo $ver[1] . ' ' . $ver[2] ?></td>

                                                    <td><?php echo $ver[3] ?></td>
                                                    <td><?php echo $ver[4] ?></td>
                                                    <th>
                                                        <a class="btn btn-simple btn btn-success btn-icon" onclick="AgregarFrmConclusion('<?php echo $datos ?>')">
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

                        <div class="col-md-12">

                            <div id="tabla">

                            </div>  
                            <!-- end content-->
                        </div>
                        <!--  end card  -->
                    </div>


                    <div id="tabla">

                    </div>        
                </div>

            </div>
            <!-- end content-->
        </div>
        <!--  end card  -->
    </div>

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
                    <form id="RegisterValidation" action="#" method="">
                        <div class="card-header card-header-icon" data-background-color="green">
                            <i class="material-icons">mail_outline</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Actualizar</h4>
                            <input type="hidden" name="" id="idConclusion" class="form-control input-sm">
                            <input id="idServicio2" type="hidden" class="form-control" value>
                            <div class="card-content">

                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Comentario</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <textarea id="Comentario2" type="text" class="form-control" value></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-footer text-right">
                                <button type="button" class="btn btn-success" id="actualizadatos" data-dismiss="modal">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
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
                searchPlaceholder: "Filtro",
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
            Comentario = $('#Comentario').val();
            AgregarConclusion(idServicio, Comentario);
        });



        $('#actualizadatos').click(function () {
            ActualizarConclusion();
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
        $('#tabla').load('../../services/components/TablaConclusion.php');
    });
</script>

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>

