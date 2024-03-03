<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Blog System</title>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Blogging Platform</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Create Blog Entry</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
        </li>
    </ul>
</nav>

<!-- Create Blog Entry Form -->
<div class="container mt-5">
    <form action="create_blog.php" method="post">
        <div class="form-group">
            <label for="blogTitle">Blog Title</label>
            <input type="text" class="form-control" id="blogTitle" name="blogTitle" required>
        </div>
        <div class="form-group">
            <label for="blogContent">Blog Content</label>
            <textarea class="form-control" id="blogContent" name="blogContent" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="blogCategory">Blog Category</label>
            <select class="form-control" id="blogCategory" name="blogCategory">
                <option value="Value for Money">Value for Money</option>
                <option value="Life Hacks">Life Hacks</option>
                <option value="Travel and Leisure">Travel and Leisure</option>
            </select>
        </div>
        <div class="form-group">
            <label for="blogPic">Blog Picture</label>
            <input type="file" class="form-control-file" id="blogPic" name="blogPic">
        </div>
        <button type="submit" class="btn btn-primary">Add Entry</button>
    </form>
</div>

<!-- Display Blog Entry with Comments -->
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Value for Money: An Inexpensive Trip to Singapore</h5>
            <p class="card-text">Hello, I went to Singapore last month...</p>
            <p class="card-text"><small class="text-muted">Filed under: Travel and Leisure | Date: 2023-10-31 10:07 AM</small></p>
        </div>
    </div>

    <!-- Display Comments -->
    <div class="mt-3">
        <div class="media">
            <img src="user_avatar.jpg" class="mr-3" alt="User Avatar">
            <div class="media-body">
                <h5 class="mt-0">Ryan123</h5>
                <p>I also went there, and the cost of living is really expensive. 11/01/2023 9:30 AM</p>
            </div>
        </div>

        <div class="media mt-3">
            <img src="user_avatar.jpg" class="mr-3" alt="User Avatar">
            <div class="media-body">
                <h5 class="mt-0">Josh1984</h5>
                <p>Yes, if you are on a tight budget, go for hawkers. They have a lot of food to choose from. 10/31/2023 4:40 PM</p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
