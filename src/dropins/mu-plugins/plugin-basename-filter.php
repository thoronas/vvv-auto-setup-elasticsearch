<?php
add_filter( 'plugins_url', function( $url ) {
	return preg_replace( '/srv\/www\/[^\/]+\/src\/plugins\//', '', $url );
});
