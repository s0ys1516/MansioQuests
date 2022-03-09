export default () => {
	let modalBackCallText = document.querySelector('.modal--back-call .action-call__dsc');
	let modalBackCallBtns = document.querySelectorAll('[data-modal="back-call"]');
	let defaultText = modalBackCallText.textContent;


	modalBackCallBtns.forEach((btn) => {
		let bank = btn.dataset.bank;

		if (bank) {
			btn.addEventListener('click', () => {
				switch (bank) {
					default:
						break;

					case ('dom-rf'):
						modalBackCallText.textContent = 'Специалист MANSIO GROUP проконсультирует по кредитным продуктам ДомРФ';
						break;

					case ('sber'):
						modalBackCallText.textContent = 'Специалист MANSIO GROUP проконсультирует по кредитным продуктам Сбербанка';
						break;

					case ('pochta-bank'):
						modalBackCallText.textContent = 'Специалист MANSIO GROUP проконсультирует по кредитным продуктам ПочтаБанка';
						break;

					case ('rosselkhoz'):
						modalBackCallText.textContent = 'Специалист MANSIO GROUP проконсультирует по кредитным продуктам Россельхозбанка';
						break;
				}
			});
		} else {
			btn.addEventListener('click', () => {
				modalBackCallText.textContent = defaultText;
			})
		}
	});
}
