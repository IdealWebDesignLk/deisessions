<?php 
require( dirname(__FILE__) . '/../../../wp-load.php' );

// it allows us to use wp_handle_upload() function
require_once( ABSPATH . 'wp-admin/includes/file.php' );
global $wpdb;


/*echo $_POST["fname"];
echo $_POST["lname"];
echo $_POST["email"];
echo $_POST["phone"];*/
 $_POST["timezone"];
 $_POST["languages"];
 $_POST["curr"];
/*echo $_POST["bio"];
echo $_POST["img"];*/



$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$timezone = $_POST["timezone"];
$languages = $_POST["languages"];
$currency = $_POST["curr"];
$bio = $_POST["bio"];
$img = $_POST["img"];
$linkedin = $_POST["linkedin"];



$table_name = "wp_821991_amelia_users";

$result = $wpdb->query("UPDATE wp_821991_amelia_users SET firstName='".$fname."' ,lastName='".$lname."' ,phone='".$phone."' ,pictureFullPath='".$img."' ,bio='".$bio."' ,language='".$languages."' ,timeZone='".$timezone."' ,linkedin='".$linkedin."' ,pictureThumbPath='".$img."' WHERE externalId='".get_current_user_id()."'");

// var_dump($wpdb->last_error) ;

if($result > 0){
echo "Successfully Updated";
}else{
  exit( var_dump( $wpdb->last_query ) );
// 	 exit( var_dump($wpdb->last_error) );
}

$wpdb->flush();