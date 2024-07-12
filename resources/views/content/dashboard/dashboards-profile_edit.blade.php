<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Profile</title>
</head>
<body>
    <h1>Edit User Profile</h1>

    <form action="{{ route('profile.update', ['profile' => $user->id]) }}" method="POST">
        @csrf <!-- CSRF token for security -->
        @method('PUT') 
        


        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $user->name }}"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $user->email }}"><br><br>

        
        <!-- Add more fields as needed -->

        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
