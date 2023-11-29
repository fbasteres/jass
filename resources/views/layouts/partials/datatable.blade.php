<script>
    $('#tabla_tusuario').DataTable( {
        scrollX: true,
        ordering: false,
        columnDefs:[{
            targets: "_all",
            sortable: false
        }],
        language: {
            emptyTable:     "No hay datos disponibles en la tabla",
            info:           "Mostrando _START_ al _END_ de _TOTAL_ entradas",
            lengthMenu:     "Filtrar _MENU_ entradas",
            search: "Buscar:",
            paginate: {
            previous:   "Anterior",
            next:       "Siguiente",
        },
        }
    } );
</script>