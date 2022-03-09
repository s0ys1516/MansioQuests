export const textAnimate = () => {

  let animatedBlocks = $(
      'h1, h2, h3, h4, h5, h6, p:not([class^="action-call"]), li, dt, dd, .btn:not(.card__modal-btn):not(.filter__submit), .article-card, .we-do__item-link, .product__btn, .features-item__title'
  );

  animatedBlocks.addClass('animated-text');
  animatedBlocks.attr('data-scroll', '');
  animatedBlocks.attr('data-scroll-offset', '50');

  let contentInTabs = document.querySelectorAll('.product__content *, .article-card__btn, .modal *, .tabs *, filter__inner *');

  contentInTabs.forEach((item) => {
    if (item.classList.contains('animated-text')) {
      item.classList.remove('animated-text');
    }
  });
};

export const addAttrScrollToImg = () => {
  $('.js-picture').attr('data-scroll', '');
  $('.js-picture').attr('data-scroll-repeat', '');

  $('.js-picture__img').attr('data-scroll', '');

  $('.js-picture__img--big-scroll').attr('data-scroll-speed', '-1.5');
  $('.js-picture__img--mid-scroll').attr('data-scroll-speed', '-1');
};


// function limitImgHeight() {
//   let pictures = document.querySelectorAll('.js-picture');
//   pictures.forEach((picture) => {
//     picture.removeAttr('style');
//     let img = picture.find('.js-picture__img').height();
//     picture.css('height', img + 'px');
//   });
// }

// export const limitImgHeight = () => {

//   $('.js-picture').each(function () {
//     $(this).removeAttr('style');
//     let imgHeight = $(this).find('.js-picture__img').height();
//     $(this).css('height', imgHeight + 'px');
//   });
// };

// $('body').imagesLoaded(function () {

// 	if (!$('body').hasClass('disable-effects')) {

// 		document.body.classList.remove('loading');
// 		limitImgHeight();
// 		updateScroll();

// 		$(window).resize(function () {
// 			setTimeout(function () {
// 				limitImgHeight();
// 				updateScroll();
// 			}, 700);
// 		});
// 	}
// });
