<?php
/**
 * Loadmore Single Posts
 *
 * @package FutureWordPress BSP
 */

namespace FUTUREWORDPRESS_PROJECT\Inc;

use FUTUREWORDPRESS_PROJECT\Inc\Traits\Singleton;
// use \WP_Query;

class Translate {

	use Singleton;
	private $translatedText;
	private $translatedDomain;

	protected function __construct() {
		$this->setup_hooks();
    $this->translatedText = [];
    $this->translatedDomain = 'fwp-gbe';
	}

	protected function setup_hooks() {
		add_filter( 'gettext', [ $this, 'translate' ], 10, 3 );
		// add_filter( 'gettext_' . $this->translatedDomain, [ $this, 'translate' ], 10, 3 );
    add_action( 'admin_footer', [ $this, 'wp_footer' ], 10, 0 );
	}
	public function translate( $translation, $text, $domain ) {
    if( $domain == $this->translatedDomain ) {
      $this->translatedText[] = [
        'text'          => $text,
        'translation'   => $translation,
        'domain'   => $domain
      ];
    }
		return $translation;
	}
  public function wp_footer() {
    // print_r( $this->translatedText );
		wp_die( $this->saveFile() );
  }
  private function saveFile() {
    global $wpdb;
    $dataText='msgid ""
    msgstr ""
    "Project-Id-Version: Smooth Scroll to top Button\n"
    "POT-Creation-Date: ' . date( 'Y-m-d h:i' ) . '-0500\n"
    "PO-Revision-Date: ' . date( 'Y-m-d h:i' ) . '-0500\n"
    "Last-Translator: \n"
    "Language-Team: \n"
    "Language: bn\n"
    "MIME-Version: 1.0\n"
    "Content-Type: text/plain; charset=UTF-8\n"
    "Content-Transfer-Encoding: 8bit\n"
    "Plural-Forms: nplurals=2; plural=(n != 1);\n"
    "X-Generator: Poedit 2.3.1\n"
    "X-Poedit-Basepath: ..\n"
    "X-Poedit-Flags-xgettext: --add-comments=translators:\n"
    "X-Poedit-WPHeader: token-of-trust.php\n"
    "X-Poedit-SourceCharset: UTF-8\n"
    "X-Poedit-KeywordsList: __;_e;_n:1,2;_x:1,2c;_ex:1,2c;_nx:4c,1,2;esc_attr__;"
    "esc_attr_e;esc_attr_x:1,2c;esc_html__;esc_html_e;esc_html_x:1,2c;_n_noop:1,2;"
    "_nx_noop:3c,1,2;__ngettext_noop:1,2\n"
    "X-Poedit-SearchPath-0: .\n"
    "X-Poedit-SearchPathExcluded-0: *.min.js\n"';
    // $stmt = $wpdb->query( "SELECT GROUP_CONCAT(ID) ID, GROUP_CONCAT(msgid) msgid, GROUP_CONCAT(fpath) fpath, GROUP_CONCAT(line) line, GROUP_CONCAT(msgstr) msgstr FROM wp_te_language_junck;" )->fetch();
    // $list=[];$fields=$stmt;
    // // print_r( $stmt );
    // $list[] = explode( ',', $fields[0] );
    // $list[] = explode( ',', $fields[1] );
    // $list[] = explode( ',', $fields[2] );
    // $list[] = explode( ',', $fields[3] );
    // $list[] = explode( ', ', $fields[4] );
    foreach ( $this->translatedText as $i => $lang ) {
      //   $data .= '
      // #: ' . $list[2][$i] . ':' . $list[3][$i] . '
      // msgid "' . $list[1][$i] . '"
      // msgstr "' . $list[4][$i] . '"
      // ';
      $dataText .= '
      msgid "' . esc_attr( $lang[ 'text' ] ) . '"
      msgstr "' . esc_attr( $lang[ 'translation' ] ) . '"
      ';
    }
    // $fp = fopen( 'languages/base-po-file.po', 'w+' );
    // fwrite( $fp, $data );
    // fclose( $fp );
    return $dataText;
  }
}
