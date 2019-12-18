<?php 
require_once "../controller/Config/Conexion.php";
$conexion=conexion();
?>

               <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead class="table table-hover" style="background:#454d55">
                                <tr style="color:#fff">
                                    <th>#</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Tabla</th>   
                                    <th>Acciones</th>  
                                    <th>Detalle</th> 
                                </tr>
                            </thead>
                        
                      
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM `usuariocopia`";
                                $result = mysqli_query($conexion, $sql);
                                while ($ver = mysqli_fetch_row($result)) {

                                    $datos = $ver[0] . "||" .
                                            $ver[1] . "||" .
                                            $ver[2] . "||" .
                                            $ver[4] . "||" .
                                            $ver[5] . "||" .
                                            $ver[7]



                                    ;
                                    ?>
                                    <tr>
                                        <td><?php echo $ver[0] ?></td>
                                        <td><?php echo $ver[12] ?></td>
                                        <td><?php echo $ver[13] ?></td>
                                        <td><?php echo $ver[15] ?></td>
                                        <td><?php 
                                         
                                                if ($ver[14] == "Registro") {
                                echo "Se Registro un nuevo Registro";
                            } elseif ($ver[14] == "Actualizo") {
                                echo "Un Registro Fue Modificado";
                            }elseif ($ver[14] == "Elimino") {
                                echo "Un Registro Fue Eliminado";
                            }
                                            ?> </td>
                                        
<td >
    <a class="btn btn-simple btn btn-success btn-icon"  onclick="reportepdfUsuario('<?php echo  $ver[0] ?>')">
                           Seleccionar
                        </a>
                    </td>
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
                language:{
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


