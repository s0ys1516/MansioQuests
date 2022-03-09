// webpack.mix.js

let mix = require('laravel-mix');
let distPath = './themes/mansio-theme/assets';

mix.setPublicPath(distPath)
	 .options({ processCssUrls: false })
	 .js(`${distPath}/javascript/vendor.js`, 'dist/')
	 .js(`${distPath}/javascript/main.js`, 'dist/')
	 .sass(`${distPath}/scss/main.scss`, 'dist/')
	 .minify([`${distPath}/dist/vendor.js`, `${distPath}/dist/main.js`, `${distPath}/dist/main.css`])
	 .browserSync({
		 proxy: 'mansio.local',
		 host: 'mansio.local',
		 notify: true,
		 files: [`${distPath}/dist/main.css`, `${distPath}/dist/*.js`, `./themes/mansio-theme/**/*.htm`]
		});
