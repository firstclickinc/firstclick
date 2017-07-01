This is the master version of the firstclick repository for use in your local instance of Wordpress. You'll need to update the placeholder.gitignore and wp-config.php files and import the database

Initial Setup
-------------
$ git init
$ git remote add origin git@github.com:firstclickinc/firstclick
$ git pull origin master

Rename the placeholder.gitignore file to ".gitignore" 

Then, open your wp-config.php file and edit the first lines:

define( 'DB_NAME', 'wp_firstclick' );
define( 'DB_USER', 'your_user' );
define( 'DB_PASSWORD', 'your_password' );
define( 'DB_HOST', 'localhost' );
define( 'WP_SITEURL', 'http://localhost/your_workingdirectorypath' );
define( 'WP_HOME', 'http://localhost/your_workingdirectorypath' );

NOTE: the WP_SITEURL and WP_HOME require http:// to work. Update this URL to be your local instance of Wordpress where you plan to do local development (this should be your working directory). If using a port (ie localhost:8888) include that in the URL as well.

$ git add --all
$ git commit -m "initial commit"


Connect to Database
-------------------
Import wp_firstclick.sql as a new database. You can use phpMyAdmin or mysql from you command line. Test your connection by visiting your working directory. You should delete this file from your repositry when it is added.


Connect to Remotes
------------------
$ git remote add production git@github.wpengine.com:production/firstclick.git
$ git remote add staging git@github.wpengine.com:staging/firstclick.git

Sync with the most current version or the version that is being edited.

$ git pull ______ master
$ git add --all
$ git commit -m "syncing versions"
