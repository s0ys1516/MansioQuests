import LocomotiveScroll from 'locomotive-scroll';

const scroll = new LocomotiveScroll({
	el: document.getElementById('siteWrapper'),
	smooth: true,
	inertia: 0.7,
	// multiplier: 1.0,
	// reloadOnContextChange: true,
	smartphone: {
		smooth: false,
	},
	tablet: {
		smooth: false,
	},
});

export const initScroll = () => {
	scroll.init();
};

export const updateScroll = () => {
	scroll.update();
};

export const destroyScroll = () => {
	scroll.destroy();
};

const createUpButton = () => {
	let btn = document.createElement('button');
	btn.type = 'button';
	btn.classList.add('up-button');
	document.querySelector('body').appendChild(btn);
};

export const scrollMenu = () => {

  createUpButton();
  const upButton = document.querySelector('.up-button');
  const html = document.querySelector('html');
  const header = document.getElementById('pageHeader');
	let wHeight = $(window).outerHeight();

  if ($('.header').length > 0) {
    let headerTopPos = wHeight;

    if (!html.classList.contains('has-scroll-init')) {

			upButton.onclick = () => {
				window.scrollTo(0,0);
			}

      $(document).on('scroll', function () {

        if ($(window).scrollTop() > 50) {
          header.classList.add('header--bg-dark');
          upButton.classList.add('up-button--shown');
        } else {
          header.classList.remove('header--bg-dark');
          upButton.classList.remove('up-button--shown');
        }
      });
    }

    if (html.classList.contains('has-scroll-init')) {

			upButton.onclick = () => {
				scroll.scrollTo('top');
				updateScroll();
			}

      scroll.on('scroll', (obj) => {
				if (obj.scroll.y > headerTopPos) {
          // header.classList.add('header--bg-dark');
          upButton.classList.add('up-button--shown');
        } else {
          // header.classList.remove('header--bg-dark');
          upButton.classList.remove('up-button--shown');
        }
      });
    }
  }
};
