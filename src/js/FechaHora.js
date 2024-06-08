function actualizarHoraFecha() { 
    let fechaHtml = document.getElementById("fecha");
    let horaHtml = document.getElementById("hora");
  
  
    const fechaHoraActual = new Date();
    // Obtener la hora, minutos y segundos
    const hora = fechaHoraActual.getHours();
    const minutos = fechaHoraActual.getMinutes();
    const segundos = fechaHoraActual.getSeconds();
  
    // Obtener la fecha
    const dia = fechaHoraActual.getDate();
    const mes = fechaHoraActual.getMonth() + 1; // Los meses van de 0 a 11, por lo que sumamos 1 para obtener el número de mes correcto
    const año = fechaHoraActual.getFullYear();
  
    // Formatear la hora y fecha si es necesario
    const horaFormateada = `${hora}:${minutos}:${segundos}`;
    const fechaFormateada = `${dia}/${mes}/${año}`;
    
    fechaHtml.innerText = fechaFormateada;
    horaHtml.innerText = horaFormateada;
  
    // Mostrar la hora y fecha en la consola
    console.log("Hora actual:", horaFormateada);
    console.log("Fecha actual:", fechaFormateada);
  }
  
  // Actualizar la hora y fecha cada segundo
  setInterval(actualizarHoraFecha, 1000);
  