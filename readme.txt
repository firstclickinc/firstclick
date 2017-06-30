Before we can begin using this repository in your local instance of Wordpress, you'll need to update the wp-config.php file.

First make sure you have connected to the remote and have pulled in the changes.

$ git remote add origin git@github.com/firstclickinc/firstclick
$ git pull origin master

Then, open your wp-config.php file and edit the first section:

define( 'DB_NAME', 'snapshot_firstclick' );
define( 'DB_USER', 'josh' );
define( 'DB_PASSWORD', 'f73j@j8Fn)' );
define( 'DB_HOST', 'localhost' );
define( 'WP_SITEURL', 'http://localhost:8888/firstclick' );
define( 'WP_HOME', 'http://localhost:8888/firstclick' );

These will connect to your local database and set the site URL so you can view the website properly on your local machine.