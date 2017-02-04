<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <title>Edit GuestBook</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Edit GuestBook</h1>
    <hr/>
    <form method="POST" id="id-form_messages">

        <div class="form-group">
            <label for="name">Name: *</label>
            <input class="form-control" placeholder="Name" name="name" type="text" id="name">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input class="form-control" placeholder="E-mail" name="email" type="email" id="email">
        </div>

        <div class="form-group">
            <label for="message">Message: *</label>
            <textarea class="form-control" rows="5" placeholder="Message" name="message" cols="50"
                      id="message"></textarea>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Send">
        </div>

        <div class="text-right"><b>Total:</b> <i class="badge">0</i></div>
        <br/>


    </form>
</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>