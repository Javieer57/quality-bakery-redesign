const PRODUCTS_CONTAINER = document.getElementById('product-container');
const BASE_URL = 'http://localhost/quality-bakery/assets/';
const JSON_URL = BASE_URL + 'mocks/cakes.json';
const PRODUCTS_IMAGES_URL = BASE_URL + 'img/pasteles/';
const FILTER_BUTTONS = document.querySelectorAll('.filter-buttons button');
let products = [];

/* llamar a archivo json de los productos */
fetch(JSON_URL)
	.then((response) => response.json())
	.then((data) => renderProducts(data))
	.catch((err) => {
		console.log('error: ' + err);
	});

/* crear e inyectar elementos */
function renderProducts(data) {
	/*
	 * <template>: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/template
	 * document fragments: https://developer.mozilla.org/es/docs/Web/API/DocumentFragment
	 */

	let template = document.getElementById('template-product-card').content,
		fragment = document.createDocumentFragment(),
		templateSelector = '.product-card',
		categories = '';

	/* secciones del template */
	let container = template.querySelector(`${templateSelector}`),
		imagen = template.querySelector(`${templateSelector}__img img`),
		name = template.querySelector(`${templateSelector}__name`),
		description = template.querySelector(`${templateSelector}__desc`),
		price = template.querySelector(`${templateSelector}__price-tag`);

	/* configuración del template */
	data.forEach((data) => {
		// console.table(data);
		categories = data.categories.join(' ');
		container.setAttribute('data-category', categories);
		imagen.setAttribute('src', PRODUCTS_IMAGES_URL + data.image);
		name.textContent = data.name;
		description.textContent = data.description;
		price.textContent = data.price;

		/* copiar template e inyectar en fragmento */
		const clone = template.cloneNode(true);
		fragment.appendChild(clone);
	});

	/* inyectar fragmento con productos al contenedor */
	PRODUCTS_CONTAINER.appendChild(fragment);

	/* guardar productos */
	products = document.querySelectorAll('#product-container .product-card');
}

/* agregar evento de filtrado a todos los botones */
FILTER_BUTTONS.forEach((button) => {
	button.addEventListener('click', (e) => filterProduct(e));
});

/* configurar estilos y atributo ARIA al clickear botones */
const setActiveBtn = (e) => {
	let currentBtn = e.target;

	FILTER_BUTTONS.forEach((button) => {
		button.classList.remove('active');
		button.setAttribute('aria-pressed', 'false');
	});

	currentBtn.setAttribute('aria-pressed', 'true');
	currentBtn.classList.add('active');
};

/* filtrar productos de acuerdo al botón clickeado */
const filterProduct = (e) => {
	let category = '',
		btnFilter = '';

	/* configurar botón clickeado */
	setActiveBtn(e);

	products.forEach((product) => {
		/* dataset: https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/dataset */
		category = product.dataset.category;
		btnFilter = e.target.dataset.filter;
		product.classList.remove('hide');

		/* ocultar producto si no tiene la categoría */
		if (category.search(btnFilter) === -1) {
			product.classList.add('hide');
		}

		if (btnFilter === 'todos') {
			product.classList.remove('hide');
		}
	});
};
