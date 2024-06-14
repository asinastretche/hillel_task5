<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
    <body>
    <p>"Welcome to the Home Page"</p>
    <table>
        <?php foreach ($data as $key => $row) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['authorID'] ?></td>
            <td><?= $row['title'] ?></td>
            <td><?= $row['body'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    </body>
</html>