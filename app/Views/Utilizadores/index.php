<?php $this->extend('Layout/principal'); ?>

<?php $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<?php $this->section('estilos'); ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.css"/>

<?php $this->endSection(); ?>

<?php $this->section('conteudo'); ?>

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4><?php echo $titulo; ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="ajaxTable" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Fotografia</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Telemóvel</th>
                                        <th>Situação</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.js"></script>

<script>

    $(document).ready(function () {

        const DATATABLE_PTBR = {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                }
            }
        }

        $('#ajaxTable').DataTable({
            "oLanguage": DATATABLE_PTBR,
            ajax: "<?php echo site_url('utilizadores/listagem'); ?>",
            columns: [
                { data: 'fotografia' },
                { data: 'nome' },
                { data: 'email' },
                { data: 'telemovel' },
                { data: 'ativo' },
            ],
            "deferRender": true,
            "processing": true,
            "language" : {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>',
            },
            "responsive" : true,
            "pagingType" : "numbers",
        });
    });
</script>

<?php $this->endSection(); ?>