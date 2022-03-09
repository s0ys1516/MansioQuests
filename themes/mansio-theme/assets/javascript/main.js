import {initModals} from './modules/init-modals';
import replaceModalText from './modules/promo-bank';
import {showSideMenu} from './modules/show-side-menu';
import {textAnimate} from './modules/animate';
import { initScroll, destroyScroll, updateScroll, scrollMenu} from './modules/scroll';
import {showFilter} from './modules/catalog-filter';
import {tabs} from './modules/product-tabs';


document.addEventListener('DOMContentLoaded', () => {
  initModals();
	replaceModalText();
  showSideMenu();
  // addAttrScrollToImg();
  showFilter();
  tabs();
});

window.addEventListener('load', () => {
	scrollMenu();
	textAnimate();
	updateScroll();

	document.querySelectorAll('button[role="tab"]').forEach(btn => {
		onclick = () => {
			updateScroll();
		}
	});
});

