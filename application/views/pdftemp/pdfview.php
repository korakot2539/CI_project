<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}


	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}


	#body {
		margin: 0 15px 0 15px;
	}


	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
    text-align: center;
    width: 600px;

	}
  .image{
    max-width: 100px;
    margin-top: 15px;
  }
  .title{
    font-size: 24px;
    font-weight: bold;
    color: #3b3b3b;
  }
  .theatre{
    font-size: 35px;
    font-weight: bold;
    color: #3b3b3b;
    margin-bottom: 5px;
  }
  .ticket{
    font-size: 20px;
    font-weight: bold;
    color: #3b3b3b;
    margin-bottom: 20px;
    margin-top:13px;
  }
  small{
    font-size: 13px;
    color:#666565;
  }
  
	</style>
</head>
<body>

<div id="container">
	<h1>Movie Ticket</h1>

	<div id="body">
		<img class="image" src="<?php echo $img ?>" alt="Image">
		<p class="title"><?php echo $movie_title ?></p>

		<p class="theatre"><small>Start time : </small><?php echo $theatre_time?></p>
    <p class="ticket"><small>Total ticket : </small><?php echo $ticket_quan?></p>
</div>

</body>
</html>