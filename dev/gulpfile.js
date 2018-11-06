var gulp = require( 'gulp' ),
    browserSync = require( 'browser-sync' ),
    autoprefixer = require( 'gulp-autoprefixer' ) ,
    sass = require( 'gulp-ruby-sass' ) ,
    csscomb = require( 'gulp-csscomb' ) ,
    cssmin = require('gulp-cssnano' ),
    plumber = require( 'gulp-plumber' ) ,
    notify = require( 'gulp-notify' ) ,
    changed = require( 'gulp-changed' ) ,
    imagemin = require( 'gulp-imagemin' ) ,
    imagemin_png = require( 'imagemin-pngquant' ) ,
    imagemin_jpg = require('imagemin-jpeg-recompress' ),
    imagemin_gif = require('imagemin-gifsicle' ),
    svgmin = require('gulp-svgmin'),
    ejs = require( 'gulp-ejs') ,
    rename = require( 'gulp-rename') ,
    babel = require( 'gulp-babel'),
    uglify = require('gulp-uglify');



var dir = {
  top: '../public/wp-content/themes/akim/',
  below: '/',
  index: 'index.html',
  js: '../public/wp-content/themes/akim/'
},
    sassDir = {
  css: 'css',
  sass: 'scss',
  dir: ''
},
    ejsDir = {
  template: '_ejs/**/*' + '.ejs',//[ ejs ] 更新対象ejsのファイル
  rename: 'index.html'// [ ejs ] .ejs→htmlリネーム
}


/**
* browser sync setting
*/
gulp.task('browserSync' , function(){
  browserSync({
    notify : true ,
    server: dir.top
    // files: ["./**/*.ejs"], //ウォッチ対象のファイル
    // proxy: 'localhost'
  });
});
gulp.task('browserSyncReload' , function(){
  browserSync.reload();
});



/**
* sass compile setting
* scss/ディレクトリのscssをコンパイルする
*/
gulp.task('sass' , function(){

  return sass( dir.top + `/**/${sassDir.sass}/*.scss` , {
    compass : false,
    style : 'nested'
  })
  .pipe(autoprefixer({
    browsers: ['last 4 versions', '> 2%', 'ie > 10', 'iOS >= 10', 'Android >= 7']
  }))
  .pipe(csscomb()) 
  .pipe(plumber({
    errorHandler : notify.onError('<%= error.message %>') //gulp notify エラーメッセージ
  }))
  // .pipe(rename(function(path){
  //   path.dirname = path.dirname.replace( sassDir.sass, sassDir.css); // scss→cssに 
  //   console.log('COMPILE→ ', path);
  // })) 
  // .pipe(gulp.dest( dir.top ))
  .pipe( cssmin() )
  .pipe( rename( function( path ){
    path.dirname = path.dirname.replace( sassDir.sass, sassDir.css );
    path.basename += '.min'; 
  }))
  .pipe(gulp.dest( dir.top ));

});
gulp.task('sassCompileReload' , ['sass'] , function(){
  browserSync.reload();
});



/**
* 画像圧縮
* @link https://qiita.com/MikaShirahama/items/ab91624709510c496e53
*/

gulp.task( 'imagemin', function(){
  gulp.src( dir.top + '/**/img/*.(png|jpg|gif|png)' )
  .pipe( imagemin( [
      imagemin_png(),
      imagemin_jpg(),
      imagemin_gif({
        interlaced: false,
        optimizationLevel: 3,
        colors: 256
      })
    ] ) )
  .pipe( gulp.dest( dir.top + '/assets/img/min/') );
} );

gulp.task( 'svgmin', function(){
  gulp.src( dir.top + '/**/img/*.svg' )
  .pipe( changed(function( e ){
    console.log( e )
  }) )
  // pipe( svgmin() ).pipe( gulp.dest( dir.top ) )
})


/**
* ejs
* HTMLを生成するテンプレートエンジン「EJS」
* 
* @link http://qiita.com/yuichiroharai/items/63b0769bc8ebe0220018
* @see fs JSONファイルの読み込み 
* @param ejs.template str テンプレートファイル 
*/
gulp.task("ejs", function(){
     gulp.src(
      ejsDir.template
    )
    .pipe(plumber())
    .pipe(ejs(/*{}, {ext: '.html'}*/))
    .pipe( rename({
      extname: '.html'      
    }) )
    .pipe(gulp.dest(dir.top + dir.below ));
});
gulp.task('ejsWatch', ['browserSync'], function(){
  gulp.watch('_ejs/**/*.ejs', ['ejs','browserSyncReload']);
});



gulp.task( 'jsUglify', function(){
  gulp.src(dir.top + '/**/**/*!(min).js' )
  .pipe( plumber() )
  .pipe( uglify() )
  .pipe( rename({ extname: '.min.js' }))
  .pipe( gulp.dest( dir.top ) );
});



/**
* html整形
* .ejsでテンプレートを読み込んだ場合に乱れた構造を一括整形
*/
// gulp.task('prettify', function() {
//   gulp.src( dir.top + dir.below + '**/*.html')
//     .pipe( prettify({
//       indent_size: 3
//     }) )
//     .pipe(gulp.dest( dir.top + dir.below ))
// });



/**
* default tasks
*/
gulp.task('default' ,['browserSync'], function(){
  gulp.watch('_ejs/**/*.ejs', ['ejs', 'browserSyncReload']);
  gulp.watch( [dir.top + `/**/${sassDir.sass}/*.scss`, dir.top +`/**/_scss/*.scss`, dir.top +`/**/sass/*.scss`], ['sassCompileReload']);
  gulp.watch( [dir.top + '/**/*.html',dir.top + '/**/*.php' ] , ['browserSyncReload']);
  // gulp.watch(dir.top + '/**/*!(min).js', ['jsUglify'] );
});