<?php

/**
 * Get short url from a post.
 *
 * @param int $post_id
 * @param bool $only_short_url Default false
 *
 * @return string|null
 */
function get_short_url( $post_id, $only_short_url = false ) {
	return short_url()->get_short_url( $post_id, $only_short_url );
}
