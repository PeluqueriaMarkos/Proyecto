<?php

require_once("conexion.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=Citas.xls");
?>


<table class="table"
    style="width: 100%;  background-color: #D4D4D4; border: 3px solid #000; color: #000;font-weight: 600;">
    <thead class="text-primary">
        <th class="text-center">Fecha</th>
        <th class="text-center">Empleado</th>
        <th class="text-center">Cliente</th>
        <th class="text-center">Servicio</th>
        <th class="text-center">Estado</th>
    </thead>
    <tbody class="text-dark">
        <?php

        $Consultar = "select c.id,
                         c.fecha, 
                         concat(p1.primer_nombre,' ',p1.primer_apellido) as empleado, 
                         concat(p2.primer_nombre,' ',p2.primer_apellido) as cliente, 
                         s.descripcion, 
                         c.estado 
                    from citas c 
                    inner join personas p1 on c.id_persona = p1.id 
                    inner join personas p2 on c.persona_cita = p2.id 
                    inner join servicios s on c.id_servicio = s.id";

        $resultado = mysqli_query($conexion, $Consultar);

        while ($fila = $resultado->fetch_assoc()) {
            ?>
            <tr>
                <td>
                    <?php echo $fila['fecha'] ?>
                </td>
                <td>
                    <?php echo $fila['empleado'] ?>
                </td>
                <td>
                    <?php echo $fila['cliente'] ?>
                </td>
                <td>
                    <?php echo $fila['descripcion'] ?>
                </td>
                <td>
                    <?php echo $fila['estado'] ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>