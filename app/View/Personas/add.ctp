<?php $uuid = uniqid(); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Personas
        <small>Alta de Personas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Alta de Persona</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Alta de Personas</h3>
                </div>
                <div class="box-body">
                    <?php echo $this->Form->create('Persona', ['role' => 'form', 'autocomplete' => 'off', 'id' => 'form' . $uuid]); ?>        

                    <?php
                    echo $this->Form->input('nombre', ['div' => ['class' => 'form-group'], 'class' => 'form-control']);
                    echo $this->Form->input('apellido', ['div' => ['class' => 'form-group'], 'class' => 'form-control']);
                    echo $this->Form->input('cip', ['label' => 'Cédula de Identidad Civil', 'div' => ['class' => 'form-group'], 'class' => 'form-control']);
                    echo $this->Form->input('fechaNacimiento2', ['data-inputmask' => "'alias': 'dd/mm/yyyy'", 'data-mask' => '', 'id' => 'datepicker', 'label' => 'Fecha de Nacimiento', 'div' => ['class' => 'form-group'], 'class' => 'form-control', 'type' => 'text']);
                    //echo $this->Form->input('fechaNacimiento');
                    //echo $this->Form->input('user_id');
                    ?>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>


    <!-- /.row (main row) -->

</section>
<script>
    /*Formato de fecha para el fomulario*/
    $('#datepicker').datepicker({
        autoclose: true,
        format: 'dd/mm/yyyy',
        language: 'es'
    });
    /*Formato de fecha admitido por el sistema*/
    $("#datepicker").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    $('#form<?php echo $uuid; ?>').on('submit', function (event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                var obj = JSON.parse(response);
                if (obj.status) {
                    alert(obj.msg);
                    if (obj.url) {
                       //$("#notificacionesPedidos").load($("#notiPedidos").attr('href'));
                        $('#contenido').load(obj.url);
                    }
                } else {
                    alert(obj.msg);
                    // $.notify(obj.msg, "success");
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    });
</script>
