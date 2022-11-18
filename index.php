<?php 
    include "./conexion.php";
    $conexion = conexion();

    $sql = "SELECT * FROM usuarioComputo";
    $respuesta = mysqli_query($conexion,$sql);
?>

<html>
    <table border="1">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Hardware</th>
            </tr>
        </thead>
        <tbody>
            <?php while($ver = mysqli_fetch_array($respuesta)): ?>
            <tr>
                <td><?php echo $ver['Usuario']; ?></td>
                <td><?php echo $ver['Equipo'];?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</html>