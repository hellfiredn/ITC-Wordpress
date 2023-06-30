# ITC-Wordpress
# Document for Wordpress Docker
...
# Document for Wordpress Xampp
## Step 1: Setup Xampp
## Step 2: Clone source code form github
https://github.com/hellfiredn/ITC-Wordpress
## Step 2: Create the new MySQL database.
import the database in the database directory into mySQL via phpmyadmin
## Step 3: copy all files in xampp folder to xampp installation folder
C:\xampp\htdocs\ITC-Wordpress
## Step 4: Open wp-config.php file and change database settings
/** The name of the database for WordPress */
define( 'DB_NAME', 'itc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );
## Step 5: Link access http://localhost/ITC-Wordpress/xampp/admin
username: admin
password: 1
## Step 6: On the menu find Settings >> Permalinks click Update Button
## Done