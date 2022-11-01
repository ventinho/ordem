<?php $this->extend('Layout/principal'); ?>

<?php $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<?php $this->section('estilos'); ?>
<link rel="stylesheet" href="<?php echo site_url('recursos/'); ?>assets/bundles/pretty-checkbox/pretty-checkbox.min.css">
<?php $this->endSection(); ?>

<?php $this->section('conteudo'); ?>

<div class="row">

    <div class=" col-12 col-md-6 col-lg-6">

        <div id="response">

        </div>

        <div class="card">
            <div class="card-header">
                <b><?php echo esc($utilizador->nome); ?></b>
            </div>
            <div class="row no-gutters">

                <div class="col-md-8">
                    <div class="card-body">
                        <?php echo form_open('/', ['id' => 'form'], ['id' => "$utilizador->id"]); ?>
                            <?php echo $this->include('Utilizadores/_form');?>
                            <p class="mt-3"><input class="btn btn-success" id="btn-gravar" type="submit" value="Gravar">
                            <a href="<?php echo site_url("Utilizadores/exibir/$utilizador->id"); ?>" class="btn btn-danger">Voltar</a></p>                           
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>

<script>

    $(document).ready(function(){
        $("#form").on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url('Utilizadores/atualizar'); ?>',                
                data: new FormData(this),
                dataType: 'json',
                contentType: 'false',
                cache: 'false',
                processData: 'false',
                beforeSend: function(){
                    $("#response").html('');
                    $("#btn-gravar").val('Aguarde...');
                },
                success: function(response){
                    $("#btn-gravar").val('Gravar');
                    $("#btn-gravar").removeAttr("disabled");
                },
            });
        });
    });


</script>

<?php $this->endSection(); ?>