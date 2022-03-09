export const tabs = () => {
  const tabsBtns = document.querySelectorAll('.product__btn');

  tabsBtns.forEach((btn) => {
    btn.addEventListener('click', () => {

      let btnId = btn.getAttribute('data-product');
      let tabId = document.querySelector(`.product__content[data-product="${btnId}"`);
      let activeBtn = document.querySelector('.product__btn--active');
      let activeTab = document.querySelector('.product__content--active');

			activeBtn.classList.remove('product__btn--active');
			activeTab.classList.remove('product__content--active');
      tabId.classList.add('product__content--active');
      btn.classList.add('product__btn--active');
    });
  });
};
