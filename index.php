<html>
    <head>
        <title>Lollapalooza</title>
        <link rel="stylesheet" href="style.css">
        <?php include 'timeleft.php'?>
    </head>
    <body>
        <div class="bg-image"></div>

        <div class="title">
            <img src="./image/title.png" alt="Lollapalooza" width="800px" height="auto">
            <div class="buttons">
                <button class="btn whatis"><a href="whatis.html">What is?</a></button>
                <button class="btn experience"><a href="experiences.html">Experiences</a></button>
                <button class="btn lineup"><a href="lineup.html">Lineup</a></button>
            </div>
        </div>

        <div class="timeleft">
            <div class="text">There are</div>
            <div class="cards">
                <div class="card">
                    <div class="time"><?php echo $years; ?></div>
                    <div class="text">Years</div>
                </div>
                <div class="card">
                    <div class="time"><?php echo $months; ?></div>
                    <div class="text">Months</div>
                </div>
                <div class="card">
                    <div class="time"><?php echo $days; ?></div>
                    <div class="text">Days</div>
                </div>
                <div class="card">
                    <div class="time"><?php echo $hours; ?></div>
                    <div class="text">Hours</div>
                </div>
            </div>
            <div class="text">to the next Lollapalooza festival</div>
        </div>
        
        <div class="logo">
            <img src="./image/small_logo.png" alt="Lollapalooza" width="275px" height="auto">
        </div>
    </body>
</html>