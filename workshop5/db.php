<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <div >
        <?php
        $stmt = $pdo->prepare("SELECT * FROM  member");
        $stmt->execute();
        ?>
        <?php while ($row = $stmt->fetch()) : ?>
            <div style="padding: 15px; ">
                <a href="detail.php?username=<?= $row["username"] ?>">
                    <img src='img/<?= $row["username"] ?>.jpg'>
                </a>
                <br> <br>ชื่อ :<?= $row["name"] ?><br>ที่อยู่ :<?= $row["address"] ?>
                <hr>
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>