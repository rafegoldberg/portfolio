RGD2 Portfolio
===

A simple portfolio site using [Kirby CMS](http://getkirby.com) and [Grunt](http://gruntjs.com).

## Kirby

This project is built on Kirby, a file-based CMS. The Kirby admin interface can be accessed at `[project root]/panel` and is used to manage all pages, projects, and assets, as well as other content and associated data.

Because Kirby is written in PHP and uses a directory and file structure to manage content (as opposed to a database system) it's pretty simple to set up. the only requirement to use Kirby is a basic web server running on your local machine. I suggest using XAMMP or MAMMP, although there are Grunt plugins which will spool up a basic server as well.

## Grunt

The architecture of the Grunt project is based on [@rafegoldberg's](https://github.com/rafegoldberg) [boilerplate architecture](https://github.com/rafegoldberg/grunt_base) for Grunt projects. The gruntfile, packages, and other necessary files are located in the root directory along with Kirby.
 
### Plugins
 
A number of Grunt plugins are pre-declared, including:

1. [`grunt`](http://gruntjs.com/getting-started)
2. [`autoprefixer`](https://github.com/nDmitry/grunt-autoprefixer)
3. [`contrib-clean`](https://github.com/gruntjs/grunt-contrib-clean)
4. [`contrib-jshint`](https://github.com/gruntjs/grunt-contrib-jshint)
5. [`contrib-nodeunit`](https://github.com/gruntjs/grunt-contrib-nodeunit)
6. [`contrib-sass`](https://github.com/gruntjs/grunt-contrib-sass)
7. [`contrib-uglify`](https://github.com/gruntjs/grunt-contrib-uglify)
8. [`contrib-watch`](https://github.com/gruntjs/grunt-contrib-watch)

### Installation

The above plugins are declared but are _not_ installed, The actual innards of each plugin should be installed by Node and are therefore ignored in the repository. Once you've pulled this repo down to your local machine you can install them running the following `npm install` from the command line prompt at the root of your local copy. And voila! If you have Node set up this 'lil guy should go about installing all of the necessary dependencies listed above.






