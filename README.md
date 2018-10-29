# darkblog
Stupidly simple and lightweight PHP blogging thing

## Setting up
Simply clone the repo into your web server's directory. You may have to manually create a posts directory and give the web server's
user account permission to edit it, in case PHP doesn't do it automatically.

## BBCode
BBCode support requires https://github.com/chriskonnertz/bbcode.
Once you've downloaded the repo, take the two .php files (BBCode.php and Tag.php) and place them in a directory called "bbcode" in the same directory darkblog's php files are in. (TODO: Make this way easier).
Then, change the "useBBCode" variable in options.php to TRUE and bbcode should be enabled for posts.
NOTE: Any old posts using html tags instead of bbtags will NOT be converted, and will be broken. (TODO: Find some way to avoid this) 
