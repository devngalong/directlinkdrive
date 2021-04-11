<?php
error_reporting(0);
include "curl_gd.php";

if($_GET['url'] != ""){
	$url = $_GET['url'];
	$linkdown = Drive($url);
	$file = '[{"type": "video/mp4", "label": "HD", "file": "'.$linkdown.'"}]';
}
?>
<div id="myElement">
		    
		</div>
		<script src="https://content.jwplatform.com/libraries/DbXZPMBQ.js"></script>
	<script type="text/javascript">
		jwplayer("myElement").setup({
			playlist: [{
				"sources":<?php echo $file?>
			}],
                skin: {
       name: "stormtrooper",
       active: "mediumpurple",
       inactive: "#bcbcbc",
       background: "rgba(65, 65, 65, 0.82)"
    },
			allowfullscreen: true,
			width: '100%',
			aspectratio: '16:9',
		});
	</script>
