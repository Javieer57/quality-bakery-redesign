/* configuración general splidejs */
Splide.defaults = {
	// textos de accesibilidad: https://splidejs.com/guides/i18n/
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
	live: true,
	cover: true,
	mediaQuery: 'min',
	role: 'group',
	arrows: false,
	rewind: true,
};

/* configuración de slider */
new Splide('#splide-slider', {
	type: 'loop',
	fixedWidth: '100%',
	fixedHeight: '46.875rem',
	autoplay: true,
	interval: 5000,
	label: 'Banners sobre quality-bakery',
	breakpoints: {
		900: {
			fixedHeight: '',
			arrows: true,
			heightRatio: '0.5625',
		},
		1200: {
			heightRatio: '0.4285',
		},
	},
}).mount();

/* configuración de galería */
new Splide('#splide-gallery', {
	// https://splidejs.com/extensions/grid/
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
	label: 'Galería con algunos de nuestros productos',
	perPage: 2,
	drag: 'free',
	gap: '.5rem',
	heightRatio: 0.5,
	// clases para personalizar: https://splidejs.com/guides/options/#classes
	classes: {
		pagination: 'splide__pagination gallery-pagination',
		page: 'splide__pagination__page gallery-pagination-page',
	},
	breakpoints: {
		900: {
			arrows: true,
			perPage: 3,
			heightRatio: 0.3,
		},
	},
}).mount(window.splide.Extensions);
