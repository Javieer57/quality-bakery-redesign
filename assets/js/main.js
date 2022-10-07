function sameHeight(selector) {
	let elements = document.querySelectorAll(selector),
		heights = [],
		maxHeight;

	elements.forEach((element) => heights.push(element.clientHeight));

	maxHeight = Math.max(...heights);

	elements.forEach((element) => (element.style.minHeight = maxHeight + 'px'));
}

sameHeight('[data-bakery="feature-title"]');

/* ::: SplideJS config ::: */
new Splide('.splide', {
	grid: {
		dimensions: [
			[1, 1],
			[2, 2],
			[1, 2],
			[1, 1],
		],
		gap: {
			row: '.5rem',
			col: '.5rem',
		},
	},
	role: 'group', // https://splidejs.com/guides/accessibility/
	label: 'Galería con algunos de nuestros productos',
	rewind: true,
	live: true,
	perPage: 2,
	drag: 'free',
	gap: '.5rem',
	cover: true,
	heightRatio: 0.5,
	classes: {
		pagination: 'splide__pagination custom-pagination',
		page: 'splide__pagination__page custom-pagination-page',
		arrow: 'splide__arrow custom-arrow',
	},
	i18n: {
		prev: 'Diapositiva anterior',
		next: 'Siguiente diapositiva',
		first: 'Ir a la primera diapositiva',
		last: 'Ir a la última diapositiva',
		slideX: 'Ir a diapositiva %s',
		pageX: 'Ir a la página %s',
		play: 'Iniciar reproducción automática',
		pause: 'Pausar reproducción automática',
		select: 'Elige una diapositiva para mostrar',
		slide: 'diapositiva',
		slideLabel: '%s de %s',
	},
	mediaQuery: 'min',
	arrows: false,
	breakpoints: {
		900: {
			arrows: true,
			perPage: 3,
			heightRatio: 0.3,
		},
	},
}).mount(window.splide.Extensions);
