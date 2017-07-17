# Youtube to Mp3 Conversion API - by YT2M.Pro

# PHP API Method

```
include_once('yt2m_api.php');
$api=NEW YT2MAPI('youtube_id','mp3','iframe');
echo $api->api();
```

In `NEW YT2MAPI($para1,$para2,$para3);`

`$para1` always Youtube ID

`$para2` default `mp3` - available `mp4 | mp3`

`$para3` default 'iframe' - available `iframe | js | link`



# MP3 Converter API Code:

## Javascript Method 1:

##### Somehwere in `<head>`

`<script async src="https://yt2m.pro/api.js"></script>`

##### Somehwere in `<body>`

`<div id="yt2m" vid-id='**YouTube-Video-ID**'></div><br>`

Don't remove "async" from the Script tag, otherwise its won't work!

## HTML Method 2:

##### Somehwere in `<head>`

```
<style>@media screen and (min-width: 651px) {#myframe{height:100px!important;}}@media (min-width: 400px) and (max-width: 650px) {#myframe{height:200px!important;}}@media (min-width: 200px) and (max-width: 399px) {#myframe{height:300px!important;}}</style>
```

##### Somehwere in `<body>`

```
<iframe id="myframe" src="https://yt2m.pro/**YouTube-Video-ID**" width="100%" height="100px" allowtransparency="true" scrolling="no" style="border:none;"></iframe>
```

## Direct Link Method 3:

##### Direct Link to Our site

```
<a href="https://yt2m.pro/**YouTube-Video-ID**" target="_blank" rel="nofollow"><b>Download</b></a>
```

## Mp3OraXtr (v2.1+ Only) Customer Method 4:

##### Simply Copy Paste in "Custom API" under Admin Panel

```
<iframe id="myframe" src="https://yt2m.pro/mp3-api/**<YOUTUBE_ID>**" width="100%" height="100px" allowtransparency="true" scrolling="no" style="border:none;"></iframe>
```

**OR**

```
<div id="yt2m" vid-id='**<YOUTUBE_ID>**'></div>
<script async src="https://yt2m.pro/api.js"></script>
```

How our website api look like and working!

![That's how its working!](https://yt2m.pro/img/mp3-bit_iframe.png)

***

## MP4 Converter API Code:

## Javascript Method 1:


##### Somehwere in `<head>`

```
<script async src="https://yt2m.pro/api_mp4.js"></script>
```

##### Somehwere in `<body>`

```
<div id="yt2mp4" vid-id='**YouTube-Video-ID**'></div><br>
```

Don't remove "async" from the Script tag, otherwise its won't work!


### HTML Method 2:

##### Somehwere in `<head>`

```
<style>@media screen and (min-width: 651px) {#myframe{height:100px!important;}}@media (min-width: 400px) and (max-width: 650px) {#myframe{height:200px!important;}}@media (min-width: 200px) and (max-width: 399px) {#myframe{height:300px!important;}}</style>
```

##### Somehwere in `<body>`

```
<iframe id="myframe" src="https://yt2m.pro/**YouTube-Video-ID**/mp4/" width="100%" height="100px" allowtransparency="true" scrolling="no" style="border:none;"></iframe>
```


### Direct Link Method 3:

##### Direct Link to Our site

```
<a href="https://yt2m.pro/**YouTube-Video-ID**/mp4/>" target="_blank" rel="nofollow"><b>Download</b></a>
```

## Mp3OraXtr (v2.1+ Only) Customer Method 4:

##### Simply Copy Paste in "Custom API" under Admin Panel

```
<iframe id="myframe" src="https://yt2m.pro/mp4-api/**<YOUTUBE_ID>**" width="100%" height="100px"  allowtransparency="true" scrolling="no" style="border:none;"></iframe>
```

**OR **

```
<div id="yt2mp4" vid-id='**<YOUTUBE_ID>**'></div>
<script async src="https://yt2m.pro/api_mp4.js"></script>
```

How our website api look like and working

![That's how its working!](https://yt2m.pro/img/mp4_iframe.png)

***

Note: Dont forget to replace (YouTube-Video-ID) to your Video ID it can be random or static depends on your script or website. Video ID must contain a valid 11 digits/characters format like `"NDHQJ6FgpwQ"`


***

For any technical issue or API code & usage support please write to us [support@msmsys.com](mailto:support@msmsys.com)


----------

