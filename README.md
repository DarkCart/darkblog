# darkblog
Stupidly simple and lightweight PHP blogging thing

## Setting up
Simply clone the repo into your web server's directory. You may have to manually create a posts directory and give the web server's
user account permission to edit it, in case PHP doesn't do it automatically.

## Auth
There is rudimentary basic HTTP auth on the add.php page to prevent unauthorized blog posts. By default, the admin username and password are "admin" and "pass". Obviously change these to something else.
