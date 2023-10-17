<!DOCTYPE html>
<html>
<head>
    <title>Create Blog Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px;
        }

        form {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        a {
            display: block;
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px;
            text-decoration: none;
        }

        a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Create Blog Post</h1>

    <form method="post" action="process_create.php">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>

        <button type="submit">Create</button>
    </form>

    <a href="index.php">Back to Blog Posts</a>
</body>
</html>
