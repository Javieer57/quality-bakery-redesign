function sameHeight(selector) {
	let elements = document.querySelectorAll(selector),
		heights = [],
		maxHeight;

	elements.forEach((element) => heights.push(element.clientHeight));

	maxHeight = Math.max(...heights);

	elements.forEach((element) => (element.style.minHeight = maxHeight + 'px'));
}

sameHeight('[data-bakery="feature-title"]');

/* ::: Header ::: */
let navToggle = document.querySelector('.header-mobile__nav-toggle');
let navWrapper = document.querySelector('.header-mobile__nav-wrapper');

navToggle.addEventListener('click', function () {
	if (navWrapper.classList.contains('active')) {
		console.log('cerrar');
		this.setAttribute('aria-expanded', 'false');
		this.setAttribute('aria-label', 'Abrir menú');
		navWrapper.classList.remove('active');
	} else {
		navWrapper.classList.add('active');
		this.setAttribute('aria-label', 'Cerrar menú');
		this.setAttribute('aria-expanded', 'true');
	}
});

/* ::: Banners ::: */
class Banner extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		let title = this.getAttribute('data-title'),
			img = this.getAttribute('data-img');

		this.innerHTML = `
		<div class="banner" style="background-image: url('${img}')">
			<h1 class="banner__title">${title}</h1>
		</div>
		`;
	}
}

customElements.define('section-banner', Banner);

/* ::: Productos ::: */
const productsContainer = document.getElementById('product-container');

fetch('/quality-bakery/assets/mocks/cakes.json')
	.then((response) => response.json())
	.then((data) => renderProducts(data))
	.catch((err) => {
		console.log('error: ' + err);
	});

function renderProducts(data) {
	const template = document.getElementById('template-product-card').content;
	const imgsURl = '/quality-bakery/assets/img/pasteles/';

	data.forEach((data) => {
		template.querySelector('[data-template="image"]').setAttribute('src', `${imgsURl}${data.image}`);
		template.querySelector('[data-template="image"]').setAttribute('alt', data.name);
		template.querySelector('[data-template="name"]').textContent = data.name;
		template.querySelector('[data-template="description"]').textContent = data.description;
		template.querySelector('[data-template="price"]').textContent = data.price;

		const clone = template.cloneNode(true);
		productsContainer.appendChild(clone);
	});
}
