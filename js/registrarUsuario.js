const RegistrarUsuario = async() =>{
    document.getElementById('registroUser').onsubmit = function(e) {
        e.preventDefault();
    };

    var usuario = document.querySelector("#usuario").value;
    var password = document.querySelector("#password").value;
   
    if (
        usuario.trim() === '' ||
        password.trim() === ''
    ) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Faltan Campos por completar",
          });
        return;
    }
    // Enviar datos al backend para comprobacion

    const datos = new FormData();

    datos.append("usuario", usuario);
    datos.append("password", password);

    var respuesta = await fetch("php/registrarUsuario.php", {
        method: 'POST',
        body: datos
      });
    var resultado=await respuesta.json();
    if (resultado.success == true) {
        Swal.fire({
          icon: "success",
          title: "EXITO",
          text: resultado.mensaje,
        });
        document.querySelector("#registroUser").reset();
      }else{
        Swal.fire({
          icon: "error",
          title: "ERROR",
          text: resultado.mensaje,
        });
      }
}