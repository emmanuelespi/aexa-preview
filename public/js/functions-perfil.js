const formPerfil = document.querySelector('#formAgregarPerfil');
let error_nombre_perfil = document.querySelector('#error_nombre_perfil');
let tablePerfiles;

document.addEventListener('DOMContentLoaded', function(){
    tablePerfiles = $("#perfiles").DataTable({
        "serverSide": true,
        "ajax": {
            'url' : '/catalogos/perfiles/obtenerDatos',
            'dataSrc': ''
        },
        "columns" : [
            {'data':'id'},
            {'data':'nombre_perfil'},
            {'data':'estatus'}
        ],
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "order": [[0, "desc"]],
        "info": false,
        "autoWidth": true,
        "lengthMenu": [5, 10, 25, 50],
        "DisplayLength": 10,
        language: {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
        }
    });
});

function limpiarFormulario()
{
    document.getElementById('formAgregarPerfil').reset();
    error_nombre_perfil.innerHTML = "";
}

formPerfil.addEventListener('submit', (e) => {
    e.preventDefault();
    let url = '/catalogos/perfiles/store'

    const formData = new FormData(formPerfil);

    fetch(url,{
        method: 'POST',
        body: formData,
        headers: {
            'Accept' : 'application/json'
        }
    })

    .then(response => response.json())
    .then(data => {
        if(data.estatus)
        {
            $('#delInputPerfil').click();
            limpiarFormulario();
            swal.fire('Perfil', data.message, 'success');
            $("#perfiles").DataTable().ajax.reload();
        }
    })

    .catch(error => {
        console.error('Error:', error)
    });
});