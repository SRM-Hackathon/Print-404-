<!DOCTYPE html>
<html>
<head>
	<title>Question generation</title>
</head>
<body>

<?php

// get video id from url

if(isset($_POST['submit'])){
$video_url = 'https://www.youtube.com/watch?v=kYX87kkyubk';
preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $video_url, $matches);

// get video info from id
$video_id = $matches[0];
$video_info = file_get_contents('http://www.youtube.com/get_video_info?&video_id='.$video_id);
parse_str($video_info, $video_info_array);


    $tracks = explode(',', $video_info_array['caption_tracks']);

    // print info for each track (including url to track content)
    foreach ($tracks as $track) {
        parse_str($track, $output);
        print_r($output);
    }

}

?>
<form method="post" action="index.php">
	<input type="submit" name="submit" value="get">
</form>



</body>
</html>