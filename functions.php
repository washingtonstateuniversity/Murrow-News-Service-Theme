<?php

add_filter( 'wnpa_content_type', 'wsu_murrow_wnpa_content_type' );
function wsu_murrow_wnpa_content_type() {
	return 'post';
}
