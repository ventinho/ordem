<?php $this->extend('Layout/principal'); ?>

<?php $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<?php $this->section('estilos'); ?>

<?php $this->endSection(); ?>

<?php $this->section('conteudo'); ?>

<div class="row">

    <div class=" col-12 col-md-6 col-lg-6">

        <div class="card">
            <div class="card-header">
                <b><?php echo esc($utilizador->nome); ?></b>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <?php if ($utilizador->fotografia == null) : ?>
                        <img src=" <?php echo site_url('recursos/assets/img/cliente_sem_imagem.png'); ?>" style="width: 50%; margin: 40px; text-align: center;" alt="Cliente sem fotografia">
                    <?php else : ?>
                        <img src=" <?php echo site_url("utlizadores/imagem/$utilizador->fotografia"); ?>" style="width: 50%; margin: 40px; text-align: center;" alt="Fotografia">
                    <?php endif; ?>
                    <a href="<?php echo site_url("utlizadores/editarImagem/$utilizador->id") ?>" class="btn btn-light" style=" margin: 0 10px 10px 40px; ">Editar fotografia</a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p><b>Email:</b> <?php echo $utilizador->email; ?></p>
                        <p><b>Idade:</b> <?php echo $utilizador->idade; ?></p>
                        <p><b>Telemóvel:</b> <?php echo $utilizador->telemovel; ?></p>
                        <p><b>Morada:</b> <?php echo $utilizador->morada; ?></p>
                        <p><b>Código Postal:</b> <?php echo $utilizador->cod_postal; ?></p>
                        <p><b>Localidade:</b> <?php echo $utilizador->localidade; ?></p>
                        <p><b>País:</b> <?php echo $utilizador->pais; ?></p>
                        <a href="<?php echo site_url("Utilizadores/editarUtilizador/$utilizador->id") ?>" class="btn btn-info">Editar Cliente</a>
                        <a href="<?php echo site_url("Utilizadores/index"); ?>" class="btn btn-danger">Voltar</a>                        
                    </div>
                </div>
            </div>
        </div>        
    </div>

</div>

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>

<?php $this->endSection(); ?>