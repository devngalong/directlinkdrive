<?php
error_reporting(0);
include "curl_gd.php";

if($_POST['submit'] != ""){
	$url = $_POST['url'];
	$linkdown = Drive($url);
	$file = '[{"type": "video/mp4", "label": "HD", "file": "'.$linkdown.'"}]';
    $iframex = '<textarea class="form-control" style="margin:10px;width: 97%;height: 80px;"><iframe src="http://yoursite.com/embed.php?url='.$url.'" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen</iframe></textarea>'; 
} else {
    $iframex = "";
}
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Google Drive Player Script</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<!-- Plyr.io Player -->
	<link rel="stylesheet" href="https://cdn.plyr.io/3.3.12/plyr.css">
</head>
<body>

	<main role="main" class="container">
		<h1 class="mt-5 text-center">Google Drive Player Script</h1>
		<br />
		<video poster="<?php echo $results['image']; ?>" id="player" playsinline controls>
			<source src="<?php echo $results['file'];?>" type="<?php echo $results['type'];?>">
		</video>

		<br />
		<strong>Embed: </strong>
		<?php if($results['embed_id']){ echo '<textarea class="form-control">&lt;iframe src="'.base_url.'embed.php?id='.$results['embed_id'].'" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen&gt;&lt;/iframe&gt;</textarea>';}?>

		<br />
		<strong>JSON: </strong><a href="<?php echo base_url.'json.php?id='.$id;?>"><?php echo base_url.'json.php?id='.$id;?></a>
		<div style="background-color: #e9ecef;">
			<pre><code> <?php echo json_encode($results, JSON_PRETTY_PRINT);?>  </code></pre>
		</div>

		<br /><br />
  </main>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<!-- Plyr JS -->
	<script src="https://cdn.plyr.io/3.3.12/plyr.js"></script>
	<script>const player = new Plyr('#player');</script>

</body>
</html>
