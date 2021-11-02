var gulp = require("gulp");
var sass = require("gulp-sass");

gulp.task("sass", function() {
  return gulp
    .src("./resources/styles/**/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("./assets/styles"));
});

gulp.task("sass:watch", function() {
  gulp.watch("./resources/styles/**/*.scss", gulp.series("sass"));
});
