<?php
ini_set( "display_errors", true );
define( "DB_HOST",'mysql:host=localhost;dbname=cms' );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "password" );
//define('DB_NAME', 'cms');

define( "CORE_PATH", "op-core" );
define("CONTROL_PATH", "op-control");
define( "CONTENT_PATH", "op-content" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require( CONTROL_PATH . "/admin/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
