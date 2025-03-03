<!-- ADD component -->

<h2>Add New User</h2>
    <form action="../API/index.php" method="POST">
        <div class="mb-3 input">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3 input">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname" required>
        </div>
        <div class="mb-3 input">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="mb-3 input">
            <label for="sex" class="form-label">Sex</label>
            <select class="form-control" id="sex" name="sex" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="mb-3 input">
            <label for="telephone" class="form-label">Telephone Number</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="123-456-789" required>
        </div>
        <div class="mb-3 input">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
    </form>
