class Song
  attr_accessor :artist, :name, :album

  def initialize(artist, name, album)
    @artist = artist
    @name = name
    @album = album
  end

  def to_s
    return "#{artist} - #{name}"
  end
end
