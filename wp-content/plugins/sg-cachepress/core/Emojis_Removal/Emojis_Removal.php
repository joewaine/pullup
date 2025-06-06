<?php
namespace SiteGround_Optimizer\Emojis_Removal;

/**
 * SG Emojis_Removal main plugin class
 */
class Emojis_Removal {

	/**
	 * Remove the tinymce emoji plugin
	 *
	 * @since  5.0.0
	 *
	 * @param  array $plugins An array of default TinyMCE plugins.
	 *
	 * @return array          Difference betwen the two arrays.
	 */
	public function disable_emojis_tinymce( $plugins ) {
		// Bail if the plugins is not an array.
		if ( ! is_array( $plugins ) ) {
			return array();
		}

		// Remove the `wpemoji` plugin and return everything else.
		return array_diff( $plugins, array( 'wpemoji' ) );
	}

	/**
	 * Remove emoji CDN hostname from DNS prefetching hints.
	 *
	 * @param  array  $urls          URLs to print for resource hints.
	 * @param  string $relation_type The relation type the URLs are printed for.
	 * @return array                 Difference betwen the two arrays.
	 */
	public function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {

		if ( 'dns-prefetch' == $relation_type ) {
		  foreach ( $urls as $key => $url ) {
			// Check if the current item is an array of attributes.
			if ( is_array( $url ) && isset( $url['href'] ) ) {
			  // Continue with other urls if the href doesn't match.
			  if ( @strpos( $url['href'], 'https://s.w.org/images/core/emoji/' ) === false ) {
				continue;
			  }
			  // Remove the url.
			  unset( $urls[ $key ] );
			} elseif ( is_string( $url ) ) {
			  // Continue with other urls if the url doesn't match.
			  if ( @strpos( $url, 'https://s.w.org/images/core/emoji/' ) === false ) {
				continue;
			  }
			  // Remove the url.
			  unset( $urls[ $key ] );
			}
		  }
		}
	  
		// Finally return the urls.
		return $urls;
	  }

}
