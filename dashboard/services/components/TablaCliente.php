<?php
require_once "../controller/Config/Conexion.php";
$conexion = conexion();
?>

<button class="btn btn-info" data-toggle="modal" data-target="#modalNuevo" onclick="Limpiar('Nombres', 'Apellidos', 'Dni', 'Celular', 'Telefono', 'Correo', 'Cargo')">
    Agregar nuevo 
    <span class="glyphicon glyphicon-plus"></span>
</button>
<div class="material-datatables">
    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
        <thead class="table table-hover" style="background:#454d55">
            <tr style="color: #fff">
                <th>#</th>
                <th>Razon Social</th>
                <th>Ruc</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Direccion</th>
               <th>Acciones</th>
                <th>Empleados</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Nombre de Usuario</th>
                <th>Contraseña</th>
                <th>Perfil</th>
                <th>Empleado</th>
                <th>Estado</th>
                <th>Acciones</th>
                <th>Empleados</th>
            </tr>

        <tbody>
            <?php
            $sql = "SELECT * FROM `clientes`;";
            $result = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_row($result)) {
                $datos = $ver[0] . "||" .
                        $ver[1] . "||" .
                        $ver[2] . "||" .
                        $ver[3] . "||" .
                        $ver[4] . "||" .
                        $ver[5];
                ?>
                <tr>
                    <td><?php echo $ver[0] ?></td>
                    <td><?php echo $ver[1] ?></td>
                    <td><?php echo $ver[2] ?></td>
                    <td><?php echo $ver[3] ?></td>
                    <td><?php echo $ver[4] ?></td>
                    <td><?php echo $ver[5] ?></td>
                    <td >
                        <a class="btn btn-simple btn btn-success btn-icon" data-toggle="modal" data-target="#modalEdicion" onclick="AgregarFrmCliente('<?php echo $datos ?>')">
                            <i class="material-icons">edit</i>
                        </a>

                        <a class="btn btn-simple btn btn-danger btn-icon" onclick="preguntarSiNoCliente('<?php echo $ver[0] ?>')">
                            <i class="material-icons">close</i>
                        </a>

                    </td>
                    <td >
                         <a class="btn btn-simple btn btn-success btn-icon"  onclick="reportepdfClienteEmpleado('<?php echo  $ver[0] ?>')">
                           Seleccionar
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










