<!DOCTYPE>
<html>
<head>
<!-- Athor Evan (evan06alam@gmail.com) -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drag and Drop Image Upload system using php</title>
<link href='css/boogaloo.css' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/multiupload.js"></script>
<script type="text/javascript">
var config = {
	support : "image/jpg,image/png,image/bmp,image/jpeg,image/gif",		// Valid file formats
	form: "demoFiler",					// Form ID
	dragArea: "dragAndDropFiles",		// Upload Area ID
	uploadUrl: "upload.php"				// Server side upload url
}
$(document).ready(function(){
	initMultiUploader(config);
});
</script>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body lang="en">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tgo -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-3995546819230349"
     data-ad-slot="4579678782"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tgo -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-3995546819230349"
     data-ad-slot="4579678782"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<center><h1 class="title">Multiple Drag and Drop File Upload</h1></center>
<div id="dragAndDropFiles" class="uploadArea">
	<h1>Drop Images Here</h1>
</div>
<form name="demoFiler" id="demoFiler" enctype="multipart/form-data">
<input type="file" name="multiUpload" id="multiUpload" multiple />
<input type="submit" name="submitHandler" id="submitHandler" value="Upload" class="buttonUpload" />
</form>
<div class="progressBar">
	<div class="status"></div>
</div>
<center>Drag n Drop Covered and shared by Evan (evan06alam@gmail.com).. http://www.hostrare.com</center>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tgo -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-3995546819230349"
     data-ad-slot="4579678782"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tgo -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-3995546819230349"
     data-ad-slot="4579678782"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>
</html>