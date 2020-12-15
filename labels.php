<html>
    <head>
        <link rel="stylesheet" href="styles.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php for($i=0;$i<4;$i++) : ?>
        <div class="label">
            <div class="innerlabel">
                <div class="company">
                    Yunnie'd<br />to wash
                </div>
                <div class="names">
                    <div><?php echo $_GET['Nom']; ?></div>
                    <div><?php echo $_GET['frag']; ?></div>
                </div>
            </div>
            <div class="ingredients"><?php echo $_GET['ingredient']; ?></div>
        </div>
        <?php endfor; ?>
    </body>
</html>