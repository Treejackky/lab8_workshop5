<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <div >
        <?php
        $stmt = $pdo->prepare("SELECT * FROM  imguser");
        $stmt->execute();
        ?>
        <?php while ($row = $stmt->fetch()) : ?>
            <div style="padding: 15px; ">
            
                <a href="detail.php?pid=<?= $row["img_num"] ?>">
                    <img src='img/<?= $row["img_num"] ?>.jpg'>
                </a>
               
                <br> <br>ชื่อ :<?= $row["name"] ?><br>ที่อยู่ :<?= $row["address"] ?>
                <hr>
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>