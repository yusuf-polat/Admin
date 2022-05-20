<?php

$servername = "kepenk-tamiri.net";
$database = "kepenkt1_youtubeapi";
$username = "kepenkt1_POLATX1";
$password = "@Polat6547";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
$yeniler = @file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=20&playlistId=PLFgquLnL59alkIbVx9idhCZ0oRQGV5C29&key=AIzaSyCb9Mto5X3pwprM9X6eqmoR8unHXYAbto4");
$populer = @file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=20&playlistId=PLFgquLnL59an-05S-d-D1md6qdfjC0GOO&key=AIzaSyCb9Mto5X3pwprM9X6eqmoR8unHXYAbto4");
$newjson = json_decode($yeniler, true);
$say = count(@$newjson[items]);
for ($i = 0; $i < $say; $i++) {
    $title = @$newjson[items][$i][snippet][title];
    $publishedAt = @$newjson[items][$i][snippet][publishedAt];
    $channelId = @$newjson[items][$i][snippet][channelId];
    $description = @$newjson[items][$i][snippet][description];
    $channelTitle = @$newjson[items][$i][snippet][channelTitle];
    $playlistId = @$newjson[items][$i][snippet][playlistId];
    $videoOwnerChannelTitle = @$newjson[items][$i][snippet][videoOwnerChannelTitle];
    $videoOwnerChannelId = @$newjson[items][$i][snippet][videoOwnerChannelId];
    $videoid = @$newjson[items][$i][snippet][resourceId][videoId];
    $sql="INSERT INTO `youtube_api`(`publishedAt`, `channelId`, `title`, `description`, `channelTitle`, `playlistId`, `videoOwnerChannelTitle`, `videoOwnerChannelId`) VALUES ('".$publishedAt."','".$channelId."','".$title."','".$description."','".$channelTitle."','".$playlistId."','".$videoOwnerChannelTitle."','".$videoOwnerChannelId."')";

    if (mysqli_query($conn, $sql)) {
        echo "Veri Eklendi";
  } else {
        echo "Error:  <br>" . mysqli_error($conn);
  }
 
}
mysqli_close($conn);