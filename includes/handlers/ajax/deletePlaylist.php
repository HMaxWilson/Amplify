<?php
  include("../../config.php");

  if(isset($_POST['playlistId'])){
    $playlistId = $_POST['playlistId'];

    $playlistQuery = mysqli_query($connection, "DELETE FROM playlists WHERE id='$playlistId'");
    $songsQuery = mysqli_query($connection, "DELETE FROM playlistsongs WHERE playlistId='$playlistId'");
  } else {
    echo "PlaylistId parameters not passed into deletePlaylist.php";
  }

?>