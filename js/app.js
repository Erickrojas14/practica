function mensaje(){

    let input = document.getElementById("picapiedra");
    let nombre = input.dataset.nombre;
    let apellido = input.dataset.apellido
    //let nombre = input.value;

    alert('Hola: ' + nombre + " " + apellido);
    input.value = "hola mundo";
}

console.log("Hi!");