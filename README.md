<img src="http://imgh.us/Kostym_logo.svg" alt="Kostym logo" title="Kostym - Dressed maintainability" width="300"/>


## What is Kostym and why use it?
Kostym is a system for better maintainability in projects, based on the reliable and well tested styling solution [Suit](https://github.com/suitcss/suit). Kostym embraces that way of thinking from the front-end down to the backend, resulting in code that is contained in components and therefore modular and maintainable and in some cases even reusable in other projects.

Kostym is technology agnostic when it comes to component-based web applications. It's a standard on how to structure your code into components. In the example below the end result to the browser is a piece of HTML, CSS and JS.

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
.SalesPitch{
  margin-left: 10px;
  margin-right: 10px;
}

.SalesPitch-paragraph{
  background-color: #eee;
  padding: 25px 35px;
  text-align: center;
}
```
**JS**

``` js
$(".js-SalesPitch").on('click', like);
```


Regardless how the code above is being generated, whether it be sass, less, inline styling, babel, coffeescript, twig, jsx or any other source, you always know where to look for that specific component code.

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
