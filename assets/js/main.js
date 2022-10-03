console.log('hola');

/* Misma altura en título */
function sameHeight(selector) {
	let elements = document.querySelectorAll(selector),
		heights = [],
		maxHeight;

	elements.forEach((element) => heights.push(element.clientHeight));

	maxHeight = Math.max(...heights);

	elements.forEach((element) => (element.style.minHeight = maxHeight + 'px'));
}

// sameHeight('[data-bakery="feature-title"]');
sameHeight('.flex-centered');
