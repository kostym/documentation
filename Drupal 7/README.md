# Kostym Drupal 7
**Note:** This is a working process. This will change and if you figure out a better solution or have feedback please don't be quiet.

# Table of Contents
* [Implementation](#implementation)
	* [Short explanation](#short-explanation)
		* [Components helper module](#components-helper-module)
		* [Task runner](#task-runner)
		* [Custom theme]("custom-theme)
	* [Long explanation](#long-explanation)

## <a id="implementation">Implementation </a>
### <a id="short-explanation">Short explanation</a>
To make the components run you need three things

* The Componets helper module
* A Task runner
* A custom theme

#### <a id="components-helper-module">Components helper module</a>
Components helper module have functions like doing theme overrides in modules/components easier. And the most important part, <b>this is where you place your own components.</b>

#### <a id="task-rummer">Task runner</a>
The task runner's (Ex. gulp or grunt) main job is to compile, minify and lint your assets and put it all in the custom theme.

#### <a id="custom-theme">Custom theme</a>
The theme's basic mission is to just read in the compiled assets and do some Drupal markup clean up.

#### <a id="tree-structure">Tree structure</a>
This is to get a quick overview of where thing goes. It's <b>not</b> the hole tree structure of your profile. 
<pre>
.yourProfile
│
├───modules
│   │
│   └───components <i><b>Componets helper module</b></i>
│       │   components.info
│       │   components.module
│       │   <i>Your components gose here.</i>
│
└───themes
      │
      ├───yourTheme  <i><b>Custom theme</b></i>
      │   │   yourTheme.info
      │   │   template.php
      │   │   gulpfile.js  <i><b>Task runner.</b></i>
      │   │
      │   └───dist
      │       │   <i>All the compiled files.</i>
 </pre>

### <a id="long-explanation">Long explanation</a>
In your profile's module folder there is a module called components. The components module is a helper module with functions like doing theme overrides in modules much easier. It's also here you place your components, right in the componets module. 

Because of almost all styling and templates are in components you don't touch the theme that much. But one key part is still in the theme, a task runner, usually grunt or gulp. It is responsible for compiling, minifying, linting, etc. CSS, JavaScript and SVG.
<pre>
.yourProfile
│
├───modules
│   │
│   ├───features
│   │   │   <i>All features</i>
│   │
│   ├───components     
│   │   │   components.info
│   │   │   components.module     
│   │   │   components.libraries.php
│   │   │
│   │   ├───<b>ExampleComponent</b>
│   │   │   │   ExampleComponent.info
│   │   │   │   ExampleComponent.module
│   │   │   │   _ExampleComponent.scss
│   │   │
│   │   │   <i>Rest of your components gose here.</i>
│   │   
│   └───contrib
│       │   <i>contrib modules.</i>
│
└───themes
    │
    ├───yourTheme
    │   │   yourTheme.info
    │   │   template.php
    │   │
    │   └───dist
    │       │   <i>All the compiled files.</i>
 </pre>