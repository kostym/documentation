<img src="http://imgh.us/Kostym_logo.svg" alt="Kostym logo" title="Kostym - Dressed maintainability" width="300"/>


## What is Kostym and why use it?

### Why?

If you have ever jumped into an already started project or gone back to an old site, and just did not remember or understand how things worked, that's what Kostym is for. Maintainability in component-based web applications.

### How?

By standardizing how to structure code into components from the front-end down to the backend, based on the reliable and well tested styling solution [Suit](https://github.com/suitcss/suit), we achieve code that is modular, maintainable and in some cases even reusable in other projects.

### What?

Regardless how the code is being generated, whether it be sass, less, inline styling, babel, coffeescript, twig, jsx or any other source, you always know where to look for that specific component code. 

#### Example component: SalesPitch

**HTML**

``` html
<section class="SalesPitch">
  <p class="SalesPitch-paragraph">
    Components based solution for front-end maintainability
  </p>
  <button class="Button js-SalesPitch">Like</button>
</section>
``` 

**CSS**

``` css
.SalesPitch {
  margin-left: 10px;
  margin-right: 10px;
}

.SalesPitch-paragraph {
  background-color: #eee;
  padding: 25px 35px;
  text-align: center;
}
```
**JS**

``` js
$(".js-SalesPitch").on('click', like);
```

**Tree structure**

<pre>
.
└── kostym_components
    ├── Button
    └── SalesPitch <-- <i>Here is everything related to the SalesPitch component</i>
</pre>

## Suit documentations
The whole [Suit documentation](https://github.com/suitcss/suit) is quite large.

This is the essential parts that you should be familiar with:

* [Suit component example](https://github.com/suitcss/suit#example)
* [Suit naming convention](https://github.com/suitcss/suit/blob/master/doc/naming-conventions.md)
* [Suit design principles](https://github.com/suitcss/suit/blob/master/doc/design-principles.md)

## Implementations
###Drupal 7

Resources to get the Kostym components to operate and easy to work with in Drupal 7

* [Kostym module](https://github.com/kostym/drupal-7-module) *required*
* [gulpfile.js](https://github.com/kostym/drupal-7-gulpfile.js) *highly recommended*
* [yeoman generator](https://github.com/kostym/drupal-7-yeoman-generator) *highly recommended*
* [Kostym component examples](https://github.com/kostym/drupal-7-examples)
