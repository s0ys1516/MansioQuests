const { series, parallel, src, dest, watch, lastRun } = require("gulp");
const gulp = require("gulp");
const imagemin = require("gulp-imagemin");
const svgstore = require("gulp-svgstore");
const rename = require("gulp-rename");
const webp = require("gulp-webp");

let srcFolder = "themes/mansio-theme/assets/";

const optimizeImages = () => {
	const root = `bg/`;
	return gulp
		.src(`${srcFolder}/images/${root}**/*.{png,jpg}`)
		.pipe(
			imagemin([
				imagemin.optipng({ optimizationLevel: 3 }),
				imagemin.mozjpeg({ quality: 75, progressive: true }),
			])
		)
		.pipe(gulp.dest(`${srcFolder}/images/${root}`));
};
exports.imagemin = optimizeImages

const createWebp = () => {
	const root = `bg/`;
	return gulp
		.src(`${srcFolder}/images/${root}**/*.{png,jpg}`)
		.pipe(webp({ quality: 90 }))
		.pipe(gulp.dest(`${srcFolder}/images/${root}`));
};
exports.webp = createWebp;

const svgo = () => {
	return gulp
		.src(`${srcFolder}/images/**/*.svg`)
		.pipe(
			imagemin([
				imagemin.svgo({
					plugins: [
						{ removeViewBox: false },
						{ removeRasterImages: true },
						{ removeUselessStrokeAndFill: false },
					],
				}),
			])
		)
		.pipe(gulp.dest(`${srcFolder}/images/`));
}
exports.svgo = svgo;

const sprite = () => {
	return gulp
		.src(`${srcFolder}/images/sprite/*.svg`)
		.pipe(svgstore({ inlineSvg: true }))
		.pipe(rename("sprite_auto.svg"))
		.pipe(gulp.dest(`${srcFolder}/images/`));
}
exports.sprite = sprite;

exports.default = function defaultTask(cb) {
	gulp.watch(`${srcFolder}/images/sprite/*.svg`, series(sprite));
	cb();
}
