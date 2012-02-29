# Foundation, for WordPress

Foundation, for WordPress, is a blank starter theme with the exceptional capabilities of [ZURB's Foundation Framework](http://foundation.zurb.com/) and [HTML5 Boilerplate](http://html5boilerplate.com/).

As a neat-freak designer, it's sometimes intimidating and frustrating looking at a WordPress theme framework that's jam-packed with unnecessary extras and bloated code. That's why I created Foundation, for WordPress, which offers only the necessary essentials to get your site running, with all the jazz of responsive web-design.

"The ability to simplify means to eliminate the unnecessary so that the necessary may speak." ~ Hans Hofmann, Introduction to the Bootstrap, 1993

## Demonstration

You can view Foundation, for WordPress (FWP) online at this address: [http://fwp.drewsymo.com](http://fwp.drewsymo.com)
## Features

Foundation, for WordPress, features everything ZURB's Foundation Framework and HTML5 Boilerplate have to offer, however, some changes have been made to tailer it to WordPress, these include:

* All your common WordPress template files
* Orbit for WordPress, ZURB's image and content slider tailored for WordPress, with the ability to manage your slider through WordPress
* A ySlow score of 99 (in regards to 'Small Site or Blog')
* Clean, validated code
* Two sidebars (one on the right & one on the footer)
* A little snippet that 'hides' the address bar on the iPhone
* An extremely awesome pagination script by @ericmartin, using Foundations pagination CSS
* An improved viewport snippet, allowing the same scale over horizontal and portrait orientations

## Download

Clone the git repo - `git clone git://github.com/drewsymo/Foundation.git` - or, [download the archive](https://github.com/drewsymo/Foundation/zipball/master). 

## Snippets

### Orbit, for WordPress

Demonstration: [http://fwp.drewsymo.com/orbit](http://fwp.drewsymo.com/orbit)

Orbit, for WordPress, is Foundation's awesome slider built to work in WordPress. It allows you to manage your slider images and content through the backend. Neat, right? 

Just head into your admin panel, and:

* Click the link named 'Orbit' in the left hand side navigation
* Create a new post within that category
* Click 'Featured Image' on the right hand side
* Upload your image and click 'Set as featured image'
* Hit publish, and you're done!

```HTML
<h3>Orbit, for WordPress</h3>
	<div class="row">
		<div class="twelve columns">
			<div id="featured"> 
				<?php echo SliderContent(); ?>
			</div>
		</div>
	</div>
```

When using Orbit, it's best to upload an image to it as the height is inherited - that, or - change the min-height of Orbit within app.css (if your only using text), like so:

``` 
.orbit-wrapper {
	min-height:400px;
}
```

You can manage Orbit's options through app.js (don't worry, theres an options page coming shortly)

## Authors

**ZURB**

+ Foundation was made by ZURB, an interaction design and design strategy firm in Campbell, CA.
+ Follow [ZURB on Twitter](http://twitter.com/#!/foundationzurb)

**Drew Morris**

+ Drew Morris is a freelance Website Designer currently living in Sydney, Australia.
+ Follow [Drew on Twitter](http://www.twitter.com/drewsymo)
+ Follow [Drew on Google +](https://plus.google.com/114153589610660530694?rel=author)
+ View [Drew's Website](http://www.drewsymo.com)

## License

### Foundation, for WordPress

Foundation, for WordPress, is listed under Public Domain.

### Major Components

For more information about the licensing involved with Foundation, for WordPress' major components, please see:

* [ZURB's Foundation Framework](http://foundation.zurb.com/) (MIT Open License)
* [HTML5 Boilerplate](http://html5boilerplate.com/) (Public Domain)

