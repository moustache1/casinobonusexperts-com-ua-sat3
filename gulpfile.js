var gulp = require('gulp'),
  sass = require('gulp-sass'),
  cleanCSS = require('gulp-clean-css'),
  uglifycss = require('gulp-uglifycss'),
  browserify = require('browserify'),
  babelify = require('babelify'),
  source = require('vinyl-source-stream'),
  buffer = require('vinyl-buffer'),
  sourcemaps = require('gulp-sourcemaps'),
  util = require('gulp-util'),
  uglify = require("gulp-uglify"),
  size = require('gulp-size'),
  runSequence = require('run-sequence'),
  postcss = require('gulp-postcss'),
  color = require('gulp-color'),
  fs = require('fs'),
  image = require('gulp-image'),
  replacecolor = require('gulp-replace'),
  replace = require('gulp-batch-replace');

var themeName = 'white-template'; // Your theme folder name here
var projectPath = './src/wp-content/themes/' + themeName;

gulp.task('default', function () {
  console.log('Task sequence is running...');
  console.log('🌅 Run '+color('"gulp images"', 'GREEN')+' to optimaze img size.');
  console.log(color('---------------------------', 'MAGENTA'));
  console.log(color('‼️ ', 'RED') +' BEFORE DEPLOY RUN:');
  console.log("1. "+color('"gulp unique-color"', 'YELLOW')+" - changes color shades;");
  console.log("2. "+color('"gulp prod"', 'YELLOW')+" - changes classnames to hash;");
  console.log(color('---------------------------', 'MAGENTA'));
  console.log('To run dev - '+ color('"gulp"', 'GREEN'));
  console.log(color('---------------------------', 'MAGENTA'));
  if (fs.existsSync('./hashMap.json')) {
    runSequence('sass',
      'template-to-dev',
      'babelify',
      ['sass:watch', 'babelify:watch'])
    } else {
      runSequence('sass',
        'babelify',
        ['sass:watch', 'babelify:watch'])
  }
});


gulp.task('sass', function () {
  return gulp.src(projectPath + '/scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS({
      compatibility: 'ie7'
    }))
    .pipe(uglifycss({
      "maxLineLen": 80,
      "uglyComments": true
    }))
    .pipe(gulp.dest(projectPath));
});
gulp.task('sass:watch', function () {
  gulp.watch(projectPath + '/scss/*.scss', ['sass']);
})

gulp.task('images', function () {
  return gulp.src(projectPath + '/images/**')
    .pipe(image())
    .pipe(size({
      title: 'size of images'
    }))
    .pipe(gulp.dest(function (file) {
      return file.base;
    }));
});

gulp.task('babelify', function () {
  var b = browserify({
    entries: projectPath + '/js/app.js',
    debug: false,
    transform: [babelify.configure({
      presets: ['es2015']
    })]
  });

  return b.bundle()
    .pipe(source('./bundle.js'))
    .pipe(buffer())
    .pipe(sourcemaps.init({
      loadMaps: true
    }))
    .pipe(uglify())
    .on('error', util.log)
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(projectPath + '/js'));
});
gulp.task('babelify:watch', function () {
  gulp.watch(projectPath + '/js/app.js', ['babelify']);
})


// ---------------------------
// Tasks for hashing and unhashing css,scss and php
// ---------------------------

gulp.task('prod', function () {
  if (fs.existsSync('./hashMap.json')) {
    runSequence('sass','style-to-prod', 'template-to-prod')
  } else {
    runSequence('style-to-prod', 'template-to-prod')
  }
});

function randprefix() {
  var text = "";
  var possible = "abcdefghijklmnopqrstuvwxyz";
  for (var i = 0; i < 3; i++) text += possible.charAt(Math.floor(Math.random() * possible.length));
  return text + '[hash]'; // [hash] - variable replaced with generated hash
}
var opts = {
  hashType: 'md5',
  digestType: 'base32',
  maxLength: 8, // length of hashes
  outputName: 'hashMap', // output hashmap in hashMap.json
  classnameFormat: randprefix(), // generates random prefix to avoid classnames whitch start with number
  type: '.json'
};
var processors = [
  require('postcss-hash-classname')(opts)
];

gulp.task('style-to-prod', function () {
  return gulp.src([projectPath + '/style.css'])
    .pipe(postcss(processors))
    .pipe(gulp.dest(file => file.base));
});

gulp.task('template-to-prod', function (cb) {
  var hashMap = JSON.parse(fs.readFileSync('./hashMap.json'));
  var keys = Object.keys(hashMap);
  var replaceThis = [];
  // generate array with replacement rules
  keys.forEach(key => {
    replaceThis.push([new RegExp('(\\.|"|\\s|#)' + key + '("|\\s|\')', 'g'), '$1' + hashMap[key] + '$2'])
  })
  gulp.src([projectPath + '/*.php', projectPath + '/js/*.js', '!' + projectPath + '/functions.php'])
    .pipe(replace(replaceThis))
    .pipe(gulp.dest(file => file.base))

  // task done function  
  cb();
})

gulp.task('template-to-dev', function (cb) {
  var hashMap = JSON.parse(fs.readFileSync('./hashMap.json'));
  var keys = Object.keys(hashMap);
  var replaceThis = [];
  // generate array with replacement rules
  keys.forEach(key => {
    replaceThis.push([new RegExp('(\\.|"|\\s|#)' + hashMap[key] + '("|\\s|\')', 'g'), '$1' + key + '$2'])
  })
  gulp.src([projectPath + '/*.php', projectPath + '/js/*.js', '!' + projectPath + '/functions.php'])
    .pipe(replace(replaceThis))
    .pipe(gulp.dest(file => file.base))

  // task done function  
  cb();
})

function getRandHEXsymbol() {
  var text = "";
  var possible = "abcdef0123456789";
  text += possible.charAt(Math.floor(Math.random() * possible.length));
  return text;
}
gulp.task('unique-color', function () {
  gulp.src([projectPath + '/scss/*.scss'])
    .pipe(replacecolor(/(#\w{5})\w/g, '$1'+getRandHEXsymbol()))
    .pipe(gulp.dest(file => file.base))
  
    runSequence('sass');
})
