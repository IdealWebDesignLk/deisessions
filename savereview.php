<?php 
require( dirname(__FILE__) . '/../../../wp-load.php' );

// it allows us to use wp_handle_upload() function
require_once( ABSPATH . 'wp-admin/includes/file.php' );
global $wpdb;



//echo $_POST["user"];
//echo $_POST["service"];
//echo $_POST["review"];
//echo $_POST["star"];


//$user = $_POST["user"];
//$service = $_POST["service"];
$review = $_POST["review"];
$star = $_POST["star"];
$email = $_POST["email"];

$employee =  $wpdb->get_results("SELECT * FROM wp_821991_amelia_users where wp_821991_amelia_users.email='$email'");
$ename = $employee[0]->firstName." ".$employee[0]->lastName;

$service =  $wpdb->get_results("SELECT wp_821991_amelia_services.* FROM wp_821991_amelia_users inner join wp_821991_amelia_providers_to_services inner join wp_821991_amelia_services on wp_821991_amelia_services.id=wp_821991_amelia_providers_to_services.serviceId and wp_821991_amelia_providers_to_services.userId=wp_821991_amelia_users.id where wp_821991_amelia_users.email='$email'");
$serviceid = $service[0]->id;

//echo "service idddddddddddddddd".$serviceid;

$table_name = "review_details";

$result = $wpdb->insert($table_name, array(
   "user" => $ename,
   "service_id" => $serviceid,
   "review" => $review,
   "starreview" => $star,
));

if($result > 0){
echo "Successfully Updated";
}else{
  exit( var_dump( $wpdb->last_query ) );
}
$wpdb->flush();

/*
$result = $wpdb->query($wpdb->prepare( "UPDATE ".$table_name." SET user='".$fname."',service='".$lname."',review='".$phone."',starreview='".$img."',bio='".$bio."' WHERE email='".$email."'"));
*/