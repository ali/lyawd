class Album
  attr_accessor :name, :artist, :tracks, :year

  def initialize(name, artist, year, tracks = [])
    @name = name
    @artist = artist
    @tracks = tracks
    @year = year
  end
end
