const RegistroDeEquipo = async() =>{
    document.getElementById('registroEquipo').onsubmit = function(e) {
        e.preventDefault();
    };
    var planta = document.querySelector("#planta").value;
    var gcia = document.querySelector("#gcia").value;
    var direcionEncargada = document.querySelector("#direcionEncargada").value;
    var nombre = document.querySelector("#Nombres").value;
    var Apellidos = document.querySelector("#Apellidos").value;
    var cedula = document.querySelector("#Cedula").value;
    var Usuario = document.querySelector("#Usuario").value;
    var cargo = document.querySelector("#Cargo").value;
    var tipoDeEquipo = document.querySelector("#tipo_de_equipo").value;
    var marcaEquipo = document.querySelector("#marca_equipo").value;
    var modeloEquipo = document.querySelector("#modelo_equipo").value;
    var serialEquipo = document.querySelector("#serial_equipo").value;
    var monitorMarga = document.querySelector("#monitor_marca").value;
    var monitorModelo = document.querySelector("#monitor_modelo").value;
    var serialMonitor = document.querySelector("#serial_monitor").value;
    var bienNacional = document.querySelector("#bien_nacional").value;
    var serialTecnologia = document.querySelector("#serial_tecnologia").value;
    var sistemaOperativo = document.querySelector("#sistema_operativo").value;
    var discoDuro = document.querySelector("#disco_duro").value;
    var memoriaRam = document.querySelector("#memoria_ram").value;
    var nombreDeEquipo = document.querySelector("#nombre_de_equipo").value;
    var macDeEquipo = document.querySelector("#mac_de_equipo").value;
    var observaciones = document.querySelector("#observaciones").value;
    var responsableTecnico = document.querySelector("#responsable_tecnico").value;
    
    // Enviar datos al backend para comprobacion

    const datos = new FormData();

    datos.append("planta", planta);
    datos.append("gcia", gcia);
    datos.append("direcionEncargada", direcionEncargada);
    datos.append("Nombres", nombre);
    datos.append("Apellidos", Apellidos);
    datos.append("Cedula", cedula);
    datos.append("Usuario", Usuario);
    datos.append("Cargo", cargo);
    datos.append("tipo_de_equipo", tipoDeEquipo);
    datos.append("marca_equipo", marcaEquipo);
    datos.append("modelo_equipo", modeloEquipo);
    datos.append("serial_equipo",serialEquipo);
    datos.append("monitor_marca", monitorMarga);
    datos.append("monitor_modelo", monitorModelo);
    datos.append("serial_monitor", serialMonitor);
    datos.append("bien_nacional", bienNacional);
    datos.append("serial_tecnologia", serialTecnologia);
    datos.append("sistema_operativo", sistemaOperativo);
    datos.append("disco_duro", discoDuro);
    datos.append("memoria_ram", memoriaRam);
    datos.append("nombre_de_equipo", nombreDeEquipo);
    datos.append("mac_de_equipo", macDeEquipo);
    datos.append("observaciones", observaciones);
    datos.append("responsable_tecnico", responsableTecnico);

    var respuesta = await fetch("php/registroEquipo.php", {
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
        document.querySelector("#registroEquipo").reset();
      }else{
        Swal.fire({
          icon: "error",
          title: "ERROR",
          text: resultado.mensaje,
        });
      }
}