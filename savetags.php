<?php 
require( dirname(__FILE__) . '/../../../wp-load.php' );

// it allows us to use wp_handle_upload() function
require_once( ABSPATH . 'wp-admin/includes/file.php' );
global $wpdb;




//$user = $_POST["user"];
//$service = $_POST["service"];
$tag = $_POST["tag"];



$arraydata =explode(",",$tag);
 $table_name = "services_tags";
$wpdb->query($wpdb->prepare( "DELETE FROM ".$table_name));
//$wpdb->query("TRUNCATE TABLE '".$table_name."'");

foreach ($arraydata as $value) {
  $trim_value =trim($value);
   
$result = $wpdb->insert($table_name, array(
  
   "Tag" => $trim_value,

));
}



if($result > 0){
echo "Successfully Updated";
}else{
  exit( var_dump( $wpdb->last_query ) );
}
$wpdb->flush();

/*
$result = $wpdb->query($wpdb->prepare( "UPDATE ".$table_name." SET user='".$fname."',service='".$lname."',review='".$phone."',starreview='".$img."',bio='".$bio."' WHERE email='".$email."'"));
*/