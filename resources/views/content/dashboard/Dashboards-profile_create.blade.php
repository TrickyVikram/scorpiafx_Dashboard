<!-- Dashboards-profile_create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User Profile</title>
</head>
<body>
    <h1>Create User Profile</h1>

    <form action="{{ route('profile.store') }}" method="POST">
        @csrf <!-- CSRF token for security -->
        
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <!-- Add more fields as needed -->

        <button type="submit">Create Profile</button>
    </form>
</body>
</html>
