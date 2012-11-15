#!/usr/bin/ruby

require './song'
require './album'

# Let's do some stuff

def song_stuff
  jam = Song.new('Wick-it The Instigator',
                 'Everlasting Shine Blockaz (feat. Gucci Mane)',
                 'The Brothers of Chico Dusty')

  p jam
end

def album_stuff
  album = Album.new('The Brothers of Chico Dusty',
                    'Wick-it The Instigator',
                    2010)

  ["You Ain't the Next DJ (feat. Yelawolf)",
  'Afraid of The General',
  'Everlasting Shine Blockaz (feat. Gucci Mane)',
  'The Only Fat Sax',
  'Black Bug',
  'Follow The One (feat. Vonnegutt)',
  'Go Get Tangerine (feat. T.I.)',
  'Backup Pistol'].each do |songname|
    album.tracks << Song.new(album.artist, songname, album)
  end

  p album

  puts album.name
  puts album.artist
  puts album.year
  puts album.tracks
end


# song_stuff

album_stuff
