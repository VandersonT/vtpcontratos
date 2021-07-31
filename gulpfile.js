/*----------------------------------------Requires-------------------------------------------------------*/
const { src, dest, parallel } = require('gulp');
const rename = require('gulp-rename');
const minifyJS = require('gulp-uglify');
const minifyCSS = require('gulp-uglifycss');
const imageOptimize = require('gulp-image');
/*-------------------------------------------------------------------------------------------------------*/



/*--------------------------------------JavaScript-------------------------------------------------------*/
function minifyJavaScript(){
    return src('src/assets/js/*.js')
        .pipe(minifyJS())
        .pipe(rename({extname:'.min.js'}))
        .pipe(dest('public/assets/js/'))
}

function minifyJavaScriptAdmin(){
    return src('src/assets/js/admin/*.js')
        .pipe(minifyJS())
        .pipe(rename({extname:'.min.js'}))
        .pipe(dest('public/assets/js/admin/'))
}

function minifyJavaScriptContracts(){
    return src('src/assets/js/contracts/*.js')
        .pipe(minifyJS())
        .pipe(rename({extname:'.min.js'}))
        .pipe(dest('public/assets/js/contracts/'))
}
/*-------------------------------------------------------------------------------------------------------*/



/*------------------------------------------Css----------------------------------------------------------*/
function minifyCss(){
    return src('src/assets/css/*.css')
    .pipe(minifyCSS({"uglyComments":false}))
    .pipe(rename({extname:'.min.css'}))
    .pipe(dest('public/assets/css/'))
}

function minifyCssAdmin(){
    return src('src/assets/css/admin/*.css')
    .pipe(minifyCSS({"maxLineLen":80, "uglyComments":false}))
    .pipe(rename({extname:'.min.css'}))
    .pipe(dest('public/assets/css/admin/'))
}

function minifyCssContracts(){
    return src('src/assets/css/contracts/*.css')
    .pipe(minifyCSS({"uglyComments":false}))
    .pipe(rename({extname:'.min.css'}))
    .pipe(dest('public/assets/css/contracts/'))
}
/*-------------------------------------------------------------------------------------------------------*/



/*-----------------------------------------Images--------------------------------------------------------*/
function imageJpg(){
    return src('src/assets/images/*.jpg')
    .pipe(imageOptimize())
    .pipe(dest('public/assets/images/'))
}

function imagePng(){
    return src('src/assets/images/*.png')
    .pipe(imageOptimize())
    .pipe(dest('public/assets/images/'))
}

function imageJpeg(){
    return src('src/assets/images/*.jpeg')
    .pipe(imageOptimize())
    .pipe(dest('public/assets/images/'))
}
/*-------------------------------------------------------------------------------------------------------*/




/*---------------------------------------ExportsAll------------------------------------------------------*/
exports.default = parallel(
    minifyJavaScript,
    minifyJavaScriptAdmin,
    minifyJavaScriptContracts,
    minifyCss,
    minifyCssAdmin,
    minifyCssContracts,
    imageJpg,
    imagePng,
    imageJpeg
);
/*-------------------------------------------------------------------------------------------------------*/