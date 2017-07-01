This is the master version of the firstclick repository for use in your local instance of Wordpress. You'll need to update the placeholder.gitignore and wp-config.php files.

Initial Setup
-------------
$ git init
$ git remote add origin git@github.com:firstclickinc/firstclick
$ git pull origin master
$ git add --all
$ git commit -m "initial commit"

Rename the placeholder.gitignore file to ".gitignore" 

Then, open your wp-config.php file and edit the first lines:

define( 'DB_NAME', 'snapshot_firstclick' );
define( 'DB_USER', 'your_user' );
define( 'DB_PASSWORD', 'your_password' );
define( 'DB_HOST', 'localhost' );
define( 'WP_SITEURL', 'http://localhost/your_workingfilepath' );
define( 'WP_HOME', 'http://localhost/your_workingfilepath' );

NOTE: the WP_SITEURL and WP_HOME require http:// to work. Update this URL to be your local instance of Wordpress where you plan to do local development (this should be your working directory). If using a port (ie localhost:8888) include that in the URL as well.
