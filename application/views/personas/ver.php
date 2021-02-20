    <br>
    <h4 class="text-center">Información de <?php echo $nombre?></h4>
    <br>

    <?php echo form_open(''); ?>
    
    <div>
        <?php 
            echo form_label('Nombre', 'nombre');

            $input = array(
                'name'      =>  'nombre',
                'value'     =>  $nombre,
                'readonly'  =>  'readonly',
                'class'     =>  'form-control input-lg',
                'id'        =>  'miNombre'
            );

            echo form_input($input);
        ?>
    </div>

    <div>
        <?php 
            echo form_label('Dirección', 'direccion');

            $input = array(
                'name'      => 'direccion',
                'value'     => $direccion,
                'readonly'  => 'readonly',
                'class'     => 'form-control input-lg'
            );

            echo form_input($input);
        ?>
    </div>

    <div>
        <?php 
            echo form_label('Teléfono', 'telefono');

            $input = array(
                'name'      => 'telefono',
                'type'      => 'number',
                'value'     => $telefono,
                'readonly'  => 'readonly',
                'class'     => 'form-control input-lg'
            );

            echo form_input($input);
        ?>
    </div>

    <div>
        <?php 
            echo form_label('Email', 'email');

            $input = array(
                'name'      => 'email',
                'type'      => 'email',
                'value'     => $email,
                'readonly'  => 'readonly',
                'class'     => 'form-control input-lg'
            );

            echo form_input($input);
        ?>
    </div>
    <br>
    <a href="http://localhost/agenda/" class="btn btn-danger">Atras</a>
    <?php echo form_close(); ?>


