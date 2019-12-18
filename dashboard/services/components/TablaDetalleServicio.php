<?php
require_once "../controller/Config/Conexion.php";
$conexion = conexion();
?>

<div class="material-datatables">
    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
        <thead class="table table-hover" style="background:#454d55">
            <tr style="color: #fff">
                <th>#</th>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Ocurrencia</th>
                <th>Condicion Status</th>
                <th>Urgencia</th>
                <th>Asistencia</th>    
                <th>Acciones</th>

            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Ocurrencia</th>
                <th>Condicion Status</th>
                <th>Urgencia</th>
                <th>Asistencia</th>    
                <th>Acciones</th>
            </tr>

        <tbody>
            <?php
            $sql = "call sp_ListarDetalleServicio();";
            $result = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_row($result)) {
                $datos = $ver[0] . "||" .
                        $datos = $ver[1] . "||" .
                        $datos = $ver[2] . "||" .
                         $datos = $ver[3] . "||" .
                         $datos = $ver[4] . "||" .
                         $datos = $ver[5] . "||" .
                         $datos = $ver[6] . "||" .
                         $datos = $ver[7] . "||" .
                         $datos = $ver[8] . "||" .
                        $datos = $ver[9]
                ;
                ?>
                <tr>
                    <td><?php echo $ver[9] ?></td>
                    <td><?php echo $ver[1] ?></td>
                    <td><?php echo $ver[2] ?></td>
                    <td><span class="label label-danger"><?php echo $ver[3] ?></span></td>
                    <td>
                            <?php
                            if ($ver[4] == "0") {
                                echo " <span class='label label-warning'>Pendiente</span>";
                            } elseif ($ver[4] == "1") {
                                echo "<span class='label label-success'>Resolvido</span>";
                            }
                            ?>
                        </td>
                    <td><?php echo $ver[5] ?></td>
                    <td><?php echo $ver[6] ?></td>

                    <td>
                        <a class="btn btn-simple btn btn-success btn-icon" data-toggle="modal" data-target="#modalEdicion" onclick="AgregarFrmDetalleServicio('<?php echo $datos ?>')">
                            <i class="material-icons">edit</i>
                        </a>

                        <a class="btn btn-simple btn btn-danger btn-icon" onclick="preguntarSiNoDetalleServicio('<?php echo $ver[9] ?>')">
                            <i class="material-icons">close</i>
                        </a>

                    </td>
                </tr>
                <?php
            };
            ?>
        </tbody>
    </table>
</div>
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





