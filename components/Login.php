<!-- LOGIN component -->

<head>
    <link rel="stylesheet" href="./src/login.css">
</head>

    <h2>Login</h2>
    <form action="./auth/index.php?action=login" method="POST">
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <div class="errorMess" ><?php if(isset($mess)) echo $mess; ?> </div>
    </form>
