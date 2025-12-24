<?php
require_once 'config.php';

$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
    <style>
        body {
            font-family: Arial;
            background: #0f172a;
            color: #fff;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #555;
            padding: 10px;
        }
        th {
            background: #1e293b;
        }
        tr:nth-child(even) {
            background: #020617;
        }
    </style>
</head>
<body>

<h2>📋 Submitted Thoughts</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Time</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['message']) ?></td>
        <td><?= $row['created_at'] ?></td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>

<?php $conn->close(); ?>
