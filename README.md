# micromvc
This is a (really) small collection of classes written in PHP, intended as a minimal setup for start thinking in server-side MVC Design Pattern terms.
The goal is understand the Pattern's ideas, pros, cons while avoiding black-box setups.

The motto is "We do little but understand all of it". (Can you imagine the opposite of this?)

We use this as a starting point at our web programming courses.

## Execution

URL determines the Controller to be executed, ie, you could do http://localhost/myproject/controllers/hello.php with your browser, being DOCROOT/myproject the root.

Controller calls Models and Views in order to build the page and serve it.

Execution starts at the controller.

## Extensions

* There is no routing. A primitive one could be implemented with Apache's RewriteEngine.
* There is no database abstraction, we do straight SQL, so SQL injection is a main concern here.
* Each View is a complete web page. You can envision a Composite pattern to extend this and create "components" like headers, footers, menus, etc.
* There is no templating system, just plain HTML and CSS.
