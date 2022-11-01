<div class="form-group">
    <label>Nome Completo:</label>
    <input name="nome" type="text" class="form-control" value="<?php echo esc($utilizador->nome); ?>">
    <label>Email:</label>
    <input name="email" type="email" class="form-control" value="<?php echo esc($utilizador->email); ?>">
    <label>Idade:</label>
    <input name="idade" type="number" class="form-control" value="<?php echo esc($utilizador->idade); ?>">
    <label>Telemóvel:</label>
    <input name="telemovel" type="number" class="form-control" value="<?php echo esc($utilizador->telemovel); ?>">
    <label>Morada:</label>
    <input name="morada" type="text" class="form-control" value="<?php echo esc($utilizador->morada); ?>">
    <label>Código Postal:</label>
    <input name="cod_postal" type="text" class="form-control" value="<?php echo esc($utilizador->cod_postal); ?>">
    <label>Localidade:</label>
    <input name="localidade" type="text" class="form-control" value="<?php echo esc($utilizador->localidade); ?>">
    <label>País:</label>
    <input name="pais" type="text" class="form-control" value="<?php echo esc($utilizador->pais); ?>">
</div>

<div class="pretty p-switch p-fill">
    <input type="hidden" name="ativo" value="0">
    <input type="checkbox" id="ativo" name="ativo" value="1" <?php if ($utilizador->ativo == true) : ?> checked <?php endif; ?>>
    <div class="state p-success">
        <label>Ativo</label>
    </div>
</div>