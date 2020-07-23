<form method="POST" action="../Admin/EdittingUser>">
    <div>
        <p>Username: <?php echo $data["SelectedCustomer"]["username"] ?></p>
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="email" class="form-input" name="email" id="email" placeholder="Email" />
    </div>
    <div>
        <label for="name">Name: </label>
        <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" />
    </div>
    <div>
        <label for="phone_number">Phone Number: </label>
        <input type="tel" pattern="[0-9]*" class="form-input" name="phone_number" id="phone_number" placeholder="Phone Number" />
    </div>
</form>