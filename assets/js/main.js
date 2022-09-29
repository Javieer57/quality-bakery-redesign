console.log('hola');

/* Misma altura en título */
let servicios = document.querySelectorAll('.flex-center');

let alturas = [];
servicios.forEach((servicio) => {
	alturas.push(servicio.clientHeight);
});

let maxHeight = Math.max(...alturas);

servicios.forEach((servicio) => {
	servicio.style.minHeight = maxHeight + 'px';
});
