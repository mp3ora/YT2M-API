<?php
/*
*
* iFrame API usage
*/

/*
*  Required Veriables
*/
include_once('api/yt2m_api.php');
$youtube='youtube_id';



/* Mp4 with iFrame */

$api=NEW YT2MAPI($youtube_id,'mp4','iframe');
echo $api->api();                     


/* Mp4 with JS */

$api=NEW YT2MAPI($youtube_id,'mp4','js');
echo $api->api();


/* Mp4 with Link (hyperlink) */

$api=NEW YT2MAPI($youtube_id,'mp4','link');
echo $api->api();


/* Mp3 with iFrame */

$api=NEW YT2MAPI($youtube_id,'mp3','iframe');
echo $api->api();                     


/* Mp3 with JS */

$api=NEW YT2MAPI($youtube_id,'mp3','js');
echo $api->api();


/* Mp3 with Link (hyperlink) */

$api=NEW YT2MAPI($youtube_id,'mp3','link');
echo $api->api();



