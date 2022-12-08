var service_id
let clickABoton = false

//URL que maneja los botones generales y los de la tabla de servicios
const url = window.location.href.split('/').slice(0, -1).join('/');
const urlButtons = url + '/functions/buttons.php';

/* Evento del boton del modal que comienza cada uno de los procesos */

document.getElementById('start-trabajo')?.addEventListener('click', function (e) {
    clickButton('start', 'trabajo');
});

document.getElementById('finish-trabajo')?.addEventListener('click', function (e) {
    clickButton('finish', 'trabajo');
});

document.getElementById('start-comida')?.addEventListener('click', function (e) {
    clickButton('start', 'comida');
});

document.getElementById('finish-comida')?.addEventListener('click', function (e) {
    clickButton('finish', 'comida');
});

document.getElementById('start-tienda')?.addEventListener('click', function (e) {
    clickButton('start', 'tienda');
});

document.getElementById('finish-tienda')?.addEventListener('click', function (e) {
    clickButton('finish', 'tienda');
});

document.getElementById('start-gasolina')?.addEventListener('click', function (e) {
    clickButton('start', 'gasolina');
});

document.getElementById('finish-gasolina')?.addEventListener('click', function (e) {
    clickButton('finish', 'gasolina');
});

document.getElementById('start-ruta')?.addEventListener('click', function (e) {
    clickButton('start', 'ruta', service_id);
});

document.getElementById('finish-ruta')?.addEventListener('click', function (e) {
    clickButton('finish', 'ruta', service_id);
});

document.getElementById('start-limpieza')?.addEventListener('click', function (e) {
    clickButton('start', 'limpieza', service_id);
});

document.getElementById('finish-limpieza')?.addEventListener('click', function (e) {
    clickButton('finish', 'limpieza', service_id);
});



/* Iniciacion de botones generales */
const botonStartComida = document.getElementById('start-comida_btn');
const botonStartTienda = document.getElementById('start-tienda_btn');
const botonStartGasolina = document.getElementById('start-gasolina_btn');


/* Proceso de avisar al servidor para guardar la accion que se comenzo */
function clickButton(action, type, id = null) {

    // Boton de la pantalla principal para abrir el modal de start
    const botonStart = document.getElementById(`start-${type}${id ? `-${id}` : ''}_btn`);

    // Boton de la pantalla principal para abrir el modal de finish
    const botonFinish = document.getElementById(`finish-${type}${id ? `-${id}` : ''}_btn`);

    // Boton del modal para cerrar el modal
    const botonCerrarModal = document.getElementById(`${action}-${type}_cerrar-modal`);

    // Debe ser inline-block porque limpieza y ruta estan en la tabla principal
    const displayMode = ['limpieza','ruta'].includes(type) ? 'inline-block' : 'block';
    

    
    // Para evitar multiples clicks
    if (!clickABoton) {
        clickABoton = true

        // Cambiar el cursor del boton, para que el usuario sepa que no puede hacer click
        if(action === 'start'){
            botonStart.style.cursor = 'default';
        }else{
            botonFinish.style.cursor = 'default';
        }

        // Crear el objeto FormData para enviar los datos al servidor
        let formaData = new FormData()
        formaData.append('action', action)
        formaData.append('type', type)
        if(id){
            formaData.append('service_id', id)
        }

        fetch(urlButtons, {
            method: "POST",
            body: formaData
        })
            .then(response => response.json())
            .then((response) => {
                // Para que el usuario pueda iniciar otro proceso
                clickABoton = false;

                // Si no hay error, continuar el proceso
                if (!response.error) {
                    botonCerrarModal.click();
                    
                    if (action == 'start') {
                        // Ocultar el boton de start
                        botonStart.style.display = 'none';

                        // Mostrar el boton de finish
                        botonFinish.style.cursor = 'pointer';
                        botonFinish.style.display = displayMode;

                        // Si se inicio un proceso de trabajo, mostrar los botones de comida, tienda y gasolina
                        if(type === 'trabajo'){
                            botonStartComida.style.display = 'block';
                            botonStartTienda.style.display = 'block';
                            botonStartGasolina.style.display = 'block';

                            // Actualizar la tabla de servicios
                            getData(paginaActual);
                        }

                        // Si se inicio un proceso de limpieza, mostrar el boton de subir archivos y recolectar firmas
                        if(type === 'limpieza'){
                            const td = botonStart.parentNode;
                            td.querySelector('.carpeta').style.display = displayMode;
                            td.querySelector('.firma').style.display = displayMode;
                        }
                    } else {

                        // Ocultar el boton de finish
                        botonFinish.style.cursor = 'default';
                        botonFinish.style.display = 'none';

                        // Procesos que se pueden repetir
                        if(['gasolina', 'comida', 'tienda'].includes(type)){
                            botonStart.style.display = 'block';  
                        }

                        // Si se termino un proceso de trabajo, ocultar los botones de comida, tienda y gasolina
                        if(type === 'trabajo'){
                            getData(paginaActual);
                            botonStartComida.style.display = 'none';
                            botonStartTienda.style.display = 'none';
                            botonStartGasolina.style.display = 'none';
                        }

                        // Si se termino un proceso de ruta, mostrar el boton de iniciar limpieza
                        if(type === 'ruta'){
                            document.getElementById(`start-limpieza-${id}_btn`).style.display = displayMode;
                        }

                        // Si se termino un proceso de limpieza, ocultar el boton de subir archivos y recolectar firmas
                        if(type === 'limpieza'){
                            const td = botonStart.parentNode;
                            td.querySelector('.carpeta').style.display = 'none';
                            td.querySelector('.firma').style.display = 'none';
                            td.querySelector('.terminoLimpieza').style.display = displayMode;
                        }
                        
                    }
                } else {
                    alert("Error al iniciar el proceso");
                }


            })
            .catch((error) => {
                console.error('Error:', error);
                alert("Error al iniciar el proceso");
            });

    }

}