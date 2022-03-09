require('./vendor/modernizr-webp.js');

// LazyLoad
import LazyLoad from "vanilla-lazyload";
const logEvent = (eventName, element) => {
	console.log(
		Date.now(),
		eventName,
		element.getAttribute("data-src"),
		element.getAttribute("src")
	);
};

const lazyLoadOptions = {
	elements_selector: ".lazy",
	to_webp: true,

	// callback_enter: element => {
	// 	logEvent("ENTERED", element);
	// },
	// callback_load: element => {
	// 	logEvent("LOADED", element);
	// },
	// callback_set: element => {
	// 	logEvent("SET", element);
	// },
	// callback_error: element => {
	// 	logEvent("ERROR", element);
	// 	element.src = "https://placehold.it/220x280?text=Placeholder";
	// }
};
var lazyLoadInstance = new LazyLoad(lazyLoadOptions);

// Glightbox
import GLightbox from 'glightbox';
const lightbox = new GLightbox({});

// Glide.js
import Glide from '@glidejs/glide'

let glide = new Glide('.glide', {
	type: 'slider',
	bound: true,
	perView: 4,
	rewind: true,
	// focusAt: -1,

	breakpoints: {
		767: {
			perView: 2,
			autoplay: 2000,
		},
		576: {
			perView: 1,
			autoplay: 2000,
		}
	}
})

if (document.querySelector('.glide')) {
	glide.mount();
}


// Bootstrap
import { Tab } from 'bootstrap';

// JQuery
import $ from 'jquery';
window.jQuery = $;
window.$ = $;

(function ($) {
	$('#projectsFilterContent').on('change', 'input, select', function () {
		let $form = $(this).closest('form');
		$form.request();
	});
})(jQuery);

// require('./vendor/jquery.smoothState.js');

// Imagesloaded
require('imagesloaded');

// lighthouse fix  Does not use passive listeners to improve scrolling performance
// more https://stackoverflow.com/questions/60357083/does-not-use-passive-listeners-to-improve-scrolling-performance-lighthouse-repo

$.event.special.touchstart = {
  setup(_, ns, handle) {
    this.addEventListener('touchstart', handle, {passive: !ns.includes('noPreventDefault')});
  },
};
$.event.special.touchmove = {
  setup(_, ns, handle) {
    this.addEventListener('touchmove', handle, {passive: !ns.includes('noPreventDefault')});
  },
};
$.event.special.wheel = {
  setup(_, ns, handle) {
    this.addEventListener('wheel', handle, {passive: true});
  },
};
$.event.special.mousewheel = {
  setup(_, ns, handle) {
    this.addEventListener('mousewheel', handle, {passive: true});
  },
};

// -- Скрипт ниже загружает модуль для тестирования, его не должно быть в финальном билде и на проде для клиента
// import {testInstruments} from './vendor/testInstruments';
