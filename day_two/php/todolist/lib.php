<?php

# Save the php array into json_encoded data.json file
function save($todolist){
  # Putting an (object) in front of an array converts it into an object
  # This way, we can save the index of the todolist item with the datafile
  file_put_contents("data.json", json_encode($todolist));
}

# Load the php array from the json_encoded data.json file
function load_data(){
  return (array)json_decode(file_get_contents("data.json"));
}

# Add item to the todolist
function todolist_add($item){
  $todolist = load_data();
  $todolist[] = strip_tags($item);
  save($todolist);
}

# Delete the item from the todolist
function todolist_delete($key){
  $todolist = load_data();
  unset($todolist[$key]);
  save($todolist);
}

# Set a todolist item to done by just adding a strikethrough tag
function todolist_done($key){
  $todolist = load_data();
  $todolist[$key] = '<span class="done">'.$todolist[$key].'</span>';
  save($todolist);
}

?>
