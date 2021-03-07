<!DOCTYPE html>

<html>

<head>
    <title>Loop</title>
</head>

<body>
    <div>
        <ul>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo  '<li>' . $i . '</li>';
            }
            ?>
        </ul>
    </div>

</body>

</html>