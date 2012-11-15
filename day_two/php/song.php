<?

/* So, apparently has PHP 5 came with (better support for) classes.
 * Unfortunately, I never leared how to use them in middle school
 * so that might be why PHP doesn't remind me of Christmas mornings
 * like it does for Pranav.
 *
 * Anyway, PHP has classes. You can learn more in the PHP docs!
 * http://www.php.net/manual/en/language.oop5.basic.php
 */

class Song {
  // property: the artist's name
  public $artist;
  // property: the song's name
  public $name;
  // album
  public $album;

  // This function is considered "magic" by PHP.
  // Read more: http://www.php.net/manual/en/language.oop5.magic.php#object.tostring
  public function __toString() {
    return $this->artist . " - " . $this->name;
  }
}

// This song is thumpin
$thumpin = new Song();
$thumpin->artist = 'Wick-it The Instigator';
$thumpin->name = 'Everlasting Shine Blockaz (feat. Gucci Mane)';
$thumpin->album = 'The Brothers of Chico Dusty';

echo $thumpin;
echo "\n\n";
var_dump($thumpin);

?>


