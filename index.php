<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
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

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border: 1px solid #333;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #333;
            color: white;
        }

        a.create-link {
            display: block;
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px;
            text-decoration: none;
        }

        a.create-link:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Blog Posts</h1>

    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
        <!-- Display blog posts here -->
    </table>

    <a href="create.php" class="create-link">Create New Blog Post</a>
</body>
</html>
