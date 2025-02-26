<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>

    <!-- === CSS === -->
    <link rel="stylesheet" href="src/main.css">

    <!-- === JavaScript === -->
    <script src="src/main.js"></script>

    <!-- === Libraries === -->
</head>
<body>
<h2>User Management</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="userTableBody">
            <!-- Data will be inserted here -->
        </tbody>
    </table>
    
    <div class="center">
        <h3>Add User</h3>
        <input type="text" id="name" placeholder="Name">
        <input type="email" id="email" placeholder="Email">
        <button>Add</button>
    </div>
</body>
</html>