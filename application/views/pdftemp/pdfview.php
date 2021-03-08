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
        color: white;
        background-color: transparent;
        font-size: 28px;
        font-weight: normal;
        margin: 10px 0 5px 0;
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
		background-color: #2b2b31;
    }

    .image {
        max-width: 150px;
        margin-top: 8px;
		margin-bottom:50px;
		margin-left:38px;
		border-radius: 8px;
		border: 2px solid;
    }

    .title {
        font-size: 24px;
        font-weight: bold;
		color: white;
    }

    .theatre {
        font-size: 35px;
        font-weight: bold;
        margin-bottom: 5px;
		color: white;
    }

    .ticket {
        font-size: 20px;
        font-weight: bold;

        margin-bottom: 20px;
        margin-top: 13px;
		color: white;
    }

    small {
        font-size: 13px;
		color: #b8b8b8;
    }

    .table {
        width: 100%;
    }
    </style>
</head>

<body>

    <div id="container">
        <h1>Movie Ticket</h1>

        <div id="body">

            <table class="table">
                <tr>
                    <td>
                        <img class="image" src="<?php echo $img ?>" alt="Image">
                    </td>
                    <td>
						
                        <p class="title"><?php echo $movie_title ?></p>
						
                        <p class="theatre"><small>Start time : </small><?php echo $theatre_time?></p>
                        <p class="ticket"><small>Total ticket : </small><?php echo $ticket_quan?></p>
                    </td>

                </tr>

            </table>






        </div>


    </div>

</body>

</html>