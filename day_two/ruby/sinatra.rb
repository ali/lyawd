require 'sinatra'

# Sinatra is a really cool, lightweight Ruby
# framework for making websites.
# You can learn more at http://sinatrarb.com

# A GET request to the root of the domain ('/')
get '/' do
  # Create an array of nouns and an array of adjectives
  nouns = ['Crew',
    'Ali',
    'Pranav',
    'Spencer',
    'Ian',
    'dnb',
    'cba']
  adjectives = ['magical',
    'irresponsible',
    'lame',
    'a unicorn',  # okay, some of these aren't really adjectives
    'dead',
    'beautiful',
    'Barbara Streissand']

  # Pick a random element from each array
  noun = nouns.sample
  adjective = adjectives.sample

  # Output
  "#{noun} is #{adjective}"
end
