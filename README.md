![thumb](data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAABGZJREFUeAHtnbuKVEEQhkdXUUFd8ApGm5gIRj6EGPoGGugb+AI+gZuJ+ACCqSxmGysYCOIlWoxExbsi3q2Cmd1kR46nq6qrp7+GYoblnKrqr/7t7jN95sxkQoMABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIDCKwQ47aOejI/ztI/dKSEjgjea2LfRT742y/xP8nsWdi18QOitEqEtgrsV+IeRd+nv/7Ent/xf53H/pcxeLPRLEmOezqvhL/AOAxJ8/CnZ69qfiqIrwhxjphThE8BXBiTszoP1+UgLomoAUTuCXxZkNxhtdVyYeRIFAE68kEoCK8LbYcyCB9qCXHDK+I72OO/se4PiUnXRDbJ/Ztaj/l9bcYzZjAa/GXYehvOQcV6UOx88a12XTnNSfqpdd3MS//mx3o5M0P6edJsefW/fW6CjgiiVJ8u2rtFldn7dxtefISQLa5f6vH7b5b8UgdAXhQ9fHpsreBAHyK5eHVZV/DSwDHPQh07rMpAbAGsFcrArBn2pTHAx7Zek0BRz2S7dxnUyMAawB7tTYlAP0giGZLwEUAtiniDQIQgAAEIACB3ghckg7fE9P78lvef28h9y/C+JHYVTG99b560zt/WgC3iDneLK2+xZ79hiSxUpoI548i8FbOOjzqzOlJFgLQ++ks/JT0o9dz9etwRV98sfgoWJOg1SHwuTSshQB0GKLVIfCuNCwCKCVY9/z3peERQCnBuuczAtTlXz06AqhegroJMAXU5V89eooR4E11DP0mkEIAXAbWEyBTQD32KSIzAqQoQ70kEEA99ikiMwWkKEO9JFKMAFwFNCwAq21cfYBB0bZkPYZNR9Y7gvQpIqObxV6ABi+ei0b3oN8Tv0rXi4qv6KwEwGcB8UIsnv8RQHzRLCOajLpWIwALQcvSDvPFCDCM08IehQAWtrTDOpZqCmAROKxolkcxAljSbNBXKgGwCIxXEFNAPPNUEVONAKwB4rWBAOKZp4rIFJCqHPHJpBoBVI386EKsCFIJQL97b5JQLMOmo6WaApQkC8E4PenP3OjTWIqb1WaQJoIAissx2IHJf79GQwCDmac6EAGkKkd8MmbrLcsRgI+D44SQUgCsAeIEwBQQxzplJEaAlGWJSwoBxLFOGYkpIGVZ4pJKOQJwFdC5ALgKiBNAyilAk2JHMEYEKacALf6HmP53HyWlALQqTAMx2kw5BWjXWQj6C0DvvUAA/pzTRtD7AMye0G65GaTEXqXFtjiJvbTsirUAHlsmh69tCTzZ9q8j/2gtgDsj8+C04QTWhh9a58hVCbuIP9CUoU8PhO0ey7IuWTqb+rorrxtih8SWxTRhq4dRiavumv5M3FOx62KXxfTZQDQIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgMPkLMGuGdeuw1wsAAAAASUVORK5CYII=) RGD2 Portfolio
===

---

A simple portfolio site using [Kirby CMS](http://getkirby.com) and [Grunt](http://gruntjs.com).

## Kirby

This project is built on Kirby, a file-based CMS. The Kirby admin interface can be accessed at `[project root]/panel` and is used to manage all pages, projects, and assets, as well as other content and associated data.

Because Kirby is written in PHP and uses a directory and file structure to manage content (as opposed to a database system) it's extremely simple to get set up. the only requirement to use Kirby is a basic web server running on your local machine. I suggest using XAMMP or MAMMP, although there are Grunt plugins which will spool up a basic server as well.

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





<style>
img[alt*=thumb] {
	display: inline-block;
	max-height: 1.25em;
	width: auto;
	margin-right: .125em;
	vertical-align: -.25em
}
</style>









