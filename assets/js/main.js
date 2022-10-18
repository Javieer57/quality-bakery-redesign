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

/* ::: Web Components ::: */
// https://developer.mozilla.org/en-US/docs/Web/Web_Components

class Banner extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		let title = this.getAttribute('data-title'),
			img = './assets/img/hero/hero-cake.png';

		this.innerHTML = `
		<div class="banner" style="background-image: url('${img}')">
			<h1 class="banner__title">${title}</h1>
		</div>
		`;
	}
}

customElements.define('section-banner', Banner);
