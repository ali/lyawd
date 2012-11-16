# Demo of Ruby, and the Song and Album classes

# First we need to import/require/include the classes we want to use
require './song'
require './album'

def song_stuff
  # Create a Song
  jam = Song.new('Wick-it The Instigator',
                 'Everlasting Shine Blockaz (feat. Gucci Mane)',
                 'The Brothers of Chico Dusty')

  # ...and then output it
  p jam
end

def album_stuff
  # Create an Album
  album = Album.new('The Brothers of Chico Dusty',
                    'Wick-it The Instigator',
                    2010)

  # Take an array of song titles...
  ["You Ain't the Next DJ (feat. Yelawolf)",
  'Afraid of The General',
  'Everlasting Shine Blockaz (feat. Gucci Mane)',
  'The Only Fat Sax',
  'Black Bug',
  'Follow The One (feat. Vonnegutt)',
  'Go Get Tangerine (feat. T.I.)',
  'Backup Pistol'].each do |songname|
    # and for EACH item in the array (we'll put each one in a var
    # called "songname"...
    # create a new Song and add it to the tracks array in our Album
    album.tracks << Song.new(album.artist, songname, album)
  end

  # Print out the album
  p album

  # Print out the album (in a different way)
  puts album.name
  puts album.artist
  puts album.year
  puts album.tracks

  # "p" is considered more "debug friendly", and "puts" just
  # prints out the string representation of the object.
end

song_stuff
album_stuff
