<?php

function show( $sth ) {
	echo '<pre>';

	print_r( $sth );

	echo '</pre>';
}

function esc ( $str ) {
	return htmlspecialchars( $str );
}