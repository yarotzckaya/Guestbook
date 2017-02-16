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

</form>