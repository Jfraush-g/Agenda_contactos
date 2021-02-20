<br>
<h4 class="text-center">Agenda de contactos</h4>
<br>
<br>
<button class="btn btn-success" id="btn-ventana">Añadir contacto</button>
<br>
<br>
<table class="table table-striped table-bordered dt-responsive table-hover table-condensed">
    <tr>
        <th class="bg-dark text-white text-center">#</th>
        <th class="bg-dark text-white text-center">Nombre</th>
        <th class="bg-dark text-white text-center">Dirección</th>
        <th class="bg-dark text-white text-center">Teléfono</th>
        <th class="bg-dark text-white text-center">Email</th>
        <th class="bg-dark text-white text-center">Acción</th>
    </tr>
    <?php foreach ($personas as $key => $p): ?>
    <tr>
        <td class="text-center" scope="row"><?php echo $p->id?></td>
        <td class="text-center"><?php echo $p->nombre ?></td>
        <td class="text-center"><?php echo $p->direccion ?></td>
        <td class="text-center"><?php echo $p->telefono ?></td>
        <td class="text-center"><?php echo $p->email ?></td>
        <td class="text-center">
        <a href="personas/guardar/<?php echo $p->id?>" class="btn btn-outline-primary">Editar</a>
        <a href="personas/borrar/<?php echo $p->id?>" class="btn btn-outline-danger">Eliminar</a>
        <a href="personas/ver/<?php echo $p->id?>" class="btn btn-outline-info">Ver</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>