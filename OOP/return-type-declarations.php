<?php

require_once 'playlist.php';
require_once 'song.php';

$playlist = new Playlist();

$song1 = new Song('Blackbird', 100);
// $song2 = 'Yesterday';
$song2 = new Song('BigGuy', 20);


$playlist->addSong($song1);
$playlist->addSong($song2);

if($playlist->getLength() < 10) {
   print 'Short playlist...';
}




?>