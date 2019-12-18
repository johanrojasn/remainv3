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
                    <h4 class="card-title">Perfil</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div id="tabla">
                    
                        </div>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
    </div>
  
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <div class="card-header card-header-icon" data-background-color="blue">
                                <i class="material-icons">mail_outline</i>
                            </div>
                            <div class="card-content">
                                <h4 class="card-title">Registrar</h4>
                                <div class="form-group label-floating">
                                    <label class="control-label">
                                       Perfil
                                        <small>*</small>
                                    </label>
                                    <input class="form-control" name="text" id="Perfil" type="text" required="true" />
                                </div>
                                
                                <div class="form-footer text-right">
                                    <button type="button" class="btn btn-info" data-dismiss="modal" id="guardarnuevo">
                    Agregar
                </button>
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
                                <input type="hidden" id="idPerfil" class="form-control input-sm">
                                 <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 col-xs-3">Cargo*</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" name="" id="Perfil2" class="form-control">                     
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
        $('#tabla').load('../../services/components/TablaPerfil.php');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        $('#guardarnuevo').click(function () {
            Perfil = $('#Perfil').val();
            //esta=$('#estado').val();


            AgregarPerfil(Perfil);
        });



        $('#actualizadatos').click(function () {
            ActualizarPerfil();
        });

    });
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

    <!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>
