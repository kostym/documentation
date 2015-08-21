# Kostym Drupal 7

## Implementation 
**Note:** This is a working process. This will change and if you figure out a better solution or have feedback please don't be quiet.

### Short explanation
In your profile's module folder there is a module called components. The components module is a helper module with functions like doing theme overrides in modules much easier. It's also here you place your components, right in the componets module. 

<pre>
.yourProfile
└─── modules
     ├───components
     │     │   components.info
     │     │   components.module
     │     │   <i>Your components gose here.</i>
 </pre>

Because of almost all styling and templates are in components you don't touch the theme that much. But one key part is still in the theme, a task runner, usually grunt or gulp. It is responsible for compiling, minifying, linting, etc. CSS, JavaScript and SVG.

<pre>
.yourProfile
└─── themes
     ├───yourTheme
     │     │   yourTheme.info
     │     │   template.php
     │     └───dist
     │     │     │   <i>All the compiled files.</i>
 </pre>


### Long explanation

```
.yourProfile
└─── modules
     ├───features
     │     │   ...
     ├───components
     │     │   ...
     └───contrib
     │     │   ...
     └───themes
		└───yourTheme
    	    │   
```