<?php 
/**
 * Kind Functions
 *
 * Global Scoped Functions for Handling Kinds.
 *
 */

/**
 * Retrieves an array of post kind slugs.
 *
 * @return array The array of post kind slugs.
 */
function get_post_kind_slugs() {
	return Kind_Taxonomy::get_post_king_slugs();
}

/**
 * Returns a pretty, translated version of a post kind slug
 *
 *
 * @param string $slug A post format slug.
 * @return string The translated post format name.
 */
function get_post_kind_string( $slug ) {
	return Kind_Taxonomy::get_post_kind_string( $slug );
}

/**
 * Returns a link to a post kind index.
 *
 *
 * @param string $kind The post kind slug.
 * @return string The post kind term link.
 */
function get_post_kind_link( $kind ) {
	return Kind_Taxonomy::get_post_kind_link( $kind );
}

function get_post_kind_slug( $post = null ) {
	return Kind_Taxonomy::get_post_kind_slug( $post );
}

function get_post_kind( $post = null ) {
	return Kind_Taxonomy::get_post_kind( $post );
}

/**
 * Check if a post has any of the given kinds, or any kind.
 *
 * @uses has_term()
 *
 * @param string|array $kinds Optional. The kind to check.
 * @param object|int $post Optional. The post to check. If not supplied, defaults to the current post if used in the loop.
 * @return bool True if the post has any of the given kinds (or any kind, if no kind specified), false otherwise.
 */
function has_post_kind( $kinds = array(), $post = null ) {
	return Kind_Taxonomy::has_post_kind( $kinds, $post );
}

/**
 * Assign a kind to a post
 *
 *
 * @param int|object $post The post for which to assign a kind.
 * @param string $kind A kind to assign. Using an empty string or array will default to note.
 * @return mixed WP_Error on error. Array of affected term IDs on success.
 */
function set_post_kind( $post, $kind ) {
	return Kind_Taxonomy::set_post_kind( $post, $kind );
}

?>
