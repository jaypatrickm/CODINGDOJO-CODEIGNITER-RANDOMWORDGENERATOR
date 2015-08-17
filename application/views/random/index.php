<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Word Generator</title>
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
	<div id="wrapper">
		<div class="title">
			<h2>Random Word (attempt #<?= $this->session->userdata('counter') ?>)</h2>
		</div>
		<div class="word">
			<h1><?= $this->session->flashdata('random_word') ?></h1>
		</div>
		<form action="/" method="post">
			<div>
				<button type="submit">Generate</button>
			</div>
		</form>
	</div>	
</body>
</html>