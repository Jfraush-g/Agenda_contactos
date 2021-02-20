    <br>
    <h4 class="text-center">Agregar nuevo contacto</h4>
    <br>

    <?php echo validation_errors();?>
    <?php echo form_open(''); ?>
    
    <div>
        <?php 
            echo form_label('Nombre', 'nombre');

            $input = array(
                'name'  =>  'nombre',
                'value' =>   $nombre,
                'class' =>  'form-control input-lg',
                'id'    =>  'miNombre'
            );

            echo form_input($input);
        ?>
    </div>

    <div>
        <?php 
            echo form_label('Dirección', 'direccion');

            $input = array(
                'name' => 'direccion',
                'value' => $direccion,
                'class' => 'form-control input-lg'
            );

            echo form_input($input);
        ?>
    </div>

    <div>
        <?php 
            echo form_label('Teléfono', 'telefono');

            $input = array(
                'name' => 'telefono',
                'type' => 'number',
                'value' => $telefono,
                'class' => 'form-control input-lg'
            );

            echo form_input($input);
        ?>
    </div>

    <div>
        <?php 
            echo form_label('Email', 'email');

            $input = array(
                'name' => 'email',
                'type' => 'email',
                'value' => $email,
                'class' => 'form-control input-lg'
            );

            echo form_input($input);
        ?>
    </div>
    <br>
    <?php
        echo form_submit('mysubmit', 'Guardar', "class='btn btn-success'");
    ?>
    <a href="http://localhost/agenda/" class="btn btn-danger">Atras</a>
    <?php echo form_close(); ?>

    <script language="javascript">
        function Focuso(){
            document.getElementById("miNombre").focus();
        }
        Focuso();
    </script>

