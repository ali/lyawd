class Song
  # attr_accessor defines "setters and getters" for three field
  # variables
  attr_accessor :artist, :name, :album

  # A constructor! Now we can make Songs using
  #   Song.new(artist, name, album)
  def initialize(artist, name, album)
    @artist = artist
    @name = name
    @album = album
  end

  # Returns a string representation of this Song
  # to_s in Ruby is like toString() in Java
  def to_s
    return "#{artist} - #{name}"
  end
end
