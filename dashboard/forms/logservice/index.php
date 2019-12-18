<?php
require('../Menu.php');
?>

<div class="content">
    <!--    <div class="container-fluid">
            <div class="row">
    
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header" data-background-color="rose" data-header-animation="true">
                            <div class="ct-chart" id="websiteViewsChart"></div>
                        </div>
                        <div class="card-content">
                            <div class="card-actions">
                                <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                </button>
                                <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                    <i class="material-icons">refresh</i>
                                </button>
                                <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                    <i class="material-icons">edit</i>
                                </button>
                            </div>
                            <h4 class="card-title">Servicios Realizados</h4>
                            <p class="category">Cuadro Estadistico de los Servicios Realizados</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> Publicado hace 2 minutos
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header" data-background-color="green" data-header-animation="true">
                            <div class="ct-chart" id="dailySalesChart"></div>
                        </div>
                        <div class="card-content">
                            <div class="card-actions">
                                <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                </button>
                                <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                    <i class="material-icons">refresh</i>
                                </button>
                                <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                    <i class="material-icons">edit</i>
                                </button>
                            </div>
                            <h4 class="card-title">Ganacias de la Emperza</h4>
                            <p class="category">
                                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 50% </span> de Incrementacion de las Ganancias</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> Publicado hace 4 minutos
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header" data-background-color="blue" data-header-animation="true">
                            <div class="ct-chart" id="completedTasksChart"></div>
                        </div>
                        <div class="card-content">
                            <div class="card-actions">
                                <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                </button>
                                <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                    <i class="material-icons">refresh</i>
                                </button>
                                <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                    <i class="material-icons">edit</i>
                                </button>
                            </div>
                            <h4 class="card-title">Clientes Conformes</h4>
                            <p class="category">Clientes Sastisfechos con el Servicio Brindado</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> Publicado hace 2 Dias
                            </div>
                        </div>
                    </div>
                </div>
    
    
            </div>
        </div>-->
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="blue">
                    <i class="material-icons">backup</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Auditoria</h4>
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





    <?php
    require('../Credits.php');
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#tabla').load('../../services/components/TablaDetalleLOG.php');
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


            var table = $('#datatables').DataTable();

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
