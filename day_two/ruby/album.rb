class Album
  attr_accessor :name, :artist, :tracks, :year

  # If tracks isn't passed in, use an empty array as the default
  def initialize(name, artist, year, tracks = [])
    @name = name
    @artist = artist
    @tracks = tracks
    @year = year
  end
end
