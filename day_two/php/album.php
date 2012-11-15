<?

/* Okay, here's a good excuse to use arrays. Let's create
 * an album to hold songs */

// Need to use the Song class we just created
// http://php.net/manual/en/function.require.php
require('song.php');

// An Album is a (String) name, (String) artist, (Song[]) trackList, 
// and (int) year.
class Album {
  // album name
  public $name;
  // artist
  public $artist;
  // an Array of Songs
  public $trackList;
  // when it dropped
  public $year;

  function __construct() {
    $this->tracklist = array();
  }
}

$album = new Album();
$album->name = 'The Brothers of Chico Dusty';
$album->artist = 'Wick-it The Instigator';
$album->year = 2010;

// Add some tracks
$dopeness = array(
  "You Ain't the Next DJ (feat. Yelawolf)",
  'Afraid of The General',
  'Everlasting Shine Blockaz (feat. Gucci Mane)',
  'The Only Fat Sax',
  'Black Bug',
  'Follow The One (feat. Vonnegutt)',
  'Go Get Tangerine (feat. T.I.)',
  'Backup Pistol'
);

// foreach: http://www.php.net/manual/en/control-structures.foreach.php
foreach ($dopeness as &$songName) {
  $song = new Song();
  // Create a reference to the album (http://www.php.net/manual/en/language.oop5.references.php)
  $song->album = &$album;
  $song->name = $songName;
  $song->artist = $album->artist;

  // Append the Song to the trackList
  $album->trackList[] = $song;
  unset($song);
}

var_dump($album);
print_r($album->trackList);

?>
