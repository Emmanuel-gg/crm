// Función para generar tarjetas de usuarios
const generarTarjeta = (id, name) => {
    const tarjeta = document.createElement("div");
    tarjeta.classList.add("col-sm-auto");
    tarjeta.id = `${id}_${name}`
    tarjeta.innerHTML = `
        <div class="card">
            <div class="card-body">
                <h5 class="card-title
                ">${name}</h5>
                
            </div>
        </div>
    `;
    return tarjeta;
};
// Input que contiene los id de los usuarios a los que se les asignara el servicio
const users_id = document.getElementById("users_id").value.length ? document.getElementById("users_id").value.split(",") : [];

// Agregar un evento al select para generar las tarjetas de los usuarios
document.querySelector('[name=user_id]').addEventListener('change', function(e) {
    const id = e.target.value;
    if(id.length){
        const name = e.target.options[e.target.selectedIndex].text;
        const tarjeta = generarTarjeta(id, name);
        // Agregar tarjeta si no existe
        if(!document.getElementById(`${id}_${name}`)){
            document.querySelector("#usuarios_seleccionados").appendChild(tarjeta);
            users_id.push(id);
        }else{
            //eliminar tarjeta si ya existe
            document.getElementById(`${id}_${name}`).remove();
            users_id.splice(users_id.indexOf(id), 1);
        }
        console.log({users_id})
        // Actualizar el input con los id de los usuarios
        document.querySelector('[name=users_id]').value = users_id;

        // Limpiar el select
        document.querySelector('[name=user_id]').value = "";
    }
    
});