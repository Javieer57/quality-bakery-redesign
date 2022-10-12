/* ::: SplideJS config ::: */
Splide.defaults = {
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

new Splide('#splide-hero', {
	type: 'loop',
	fixedWidth: '100%',
	fixedHeight: '46.875rem',
	autoplay: true,
	interval: 5000,
	label: 'Galería banners acerca de nosotros',
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

new Splide('#splide-gallery', {
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
