<?php 
$ffmpeg_path = 'ffmpeg'; //or: /usr/bin/ffmpeg - depends on your installation
$filename= 'Wildlife.webm'; 
//phpinfo();

/*
if (file_exists($vid)) {

    $video_attributes = _get_video_attributes($vid, $ffmpeg_path);
var_dump($video_attributes );
    print_r('Video codec: ' . $video_attributes['codec'] . ' - width: '  . $video_attributes['width'] 
            . ' - height: ' .  $video_attributes['height'] . ' <br/>');

    print_r('Video duration: ' . $video_attributes['hours'] . ':' . $video_attributes['mins'] . ':'
           . $video_attributes['secs'] . '.'. $video_attributes['ms']);
} else { echo 'File does not exist.'; }
*/

$file = $getID3->analyze($filename);
var_dump($file);
var_dump(123);
echo("Duration: ".$file['playtime_string'].
" / Dimensions: ".$file['video']['resolution_x']." wide by ".$file['video']['resolution_y']." tall".
" / Filesize: ".$file['filesize']." bytes<br />");
