<?php

require( dirname(__FILE__) . '/../../../wp-load.php' );

// it allows us to use wp_handle_upload() function
require_once( ABSPATH . 'wp-admin/includes/file.php' );

// $upload = $_FILES['file'];
// echo  $fileName;

// // you can add some kind of validation here
// if( empty( $_FILES[ 'profile_picture' ] ) ) {
// 	wp_die( 'No files selected.' );
// }

$filecount = $_FILES['file'];

//echo count($filecount);

$upload = wp_handle_upload( 
	$_FILES['file'], 
	array( 'test_form' => false ) 
);

if( ! empty( $upload[ 'error' ] ) ) {
	wp_die( $upload[ 'error' ] );
}

// it is time to add our uploaded image into WordPress media library
$attachment_id = wp_insert_attachment(
	array(
		'guid'           => $upload[ 'url' ],
		'post_mime_type' => $upload[ 'type' ],
		'post_title'     => basename( $upload[ 'file' ] ),
		'post_content'   => '',
		'post_status'    => 'inherit',
	),
	$upload[ 'file' ]
);

if( is_wp_error( $attachment_id ) || ! $attachment_id ) {
	wp_die( 'Upload error.' );
}

// update medatata, regenerate image sizes
require_once( ABSPATH . 'wp-admin/includes/image.php' );

wp_update_attachment_metadata(
	$attachment_id,
	wp_generate_attachment_metadata( $attachment_id, $upload[ 'file' ] )
);

// just redirect to the uploaded file
//wp_safe_redirect( $upload[ 'url' ] );
echo $upload[ 'url' ];
//exit;

// // or you can use update_user_meta() if you're going ot use it as a profile picture