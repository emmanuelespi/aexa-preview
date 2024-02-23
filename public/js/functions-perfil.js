const formPerfil = document.querySelector('#formAgregarPerfil');

formPerfil.addEventListener('submit', async (e) => {
    e.preventDefault();
    const nombre_perfil = document.querySelector('#nombre_perfil');
    let url = '/catalogos/perfiles/store'

    const formData = new FormData(formPerfil);

    fetch(url,{
        method: 'POST',
        body: formData,
        headers: {
            'Accept' : 'Application/json'
        }
    })

    .then(response => response.json())
    .then(data => {
        if(data.errors && data.errors.nombre_perfil){
            const errorElement = document.getElementById('error_nombre_perfil');
            errorElement.innerHTML = data.errors.nombre_perfil[0];
        } else {
            console.log(data);
        }
    })

    .catch(error => {
        console.error('Error:', error)
    });
});

function limpiarFormulario()
{
    document.getElementById('formAgregarPerfil').reset();
}



document.addEventListener('DOMContentLoaded', function(){
    $(function() {
        $("#perfiles").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "lengthMenu": [5, 10, 25, 50],
            "iDisplayLength": 10,
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
});
