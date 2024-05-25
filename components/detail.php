<section class="sec-bg">
    <div>
        <h1> <?php echo htmlspecialchars($_GET['parkhaus'])?></h1>
        <h2>Informieren sie sich bis zu 1 Woche rückwirkend über den Auslastungstrend des Parkhauses.</h2>
    </div>
</section>
<section>
    <div id="graph">
        <div class="nav">
            <div class="link">
                <a href="?parkhaus=<?php echo htmlspecialchars($_GET['parkhaus'])?>&time=24h">
                    24 H
                </a>
            </div>
            <div class="link">
                <a href="?parkhaus=<?php echo htmlspecialchars($_GET['parkhaus'])?>&time=1w">
                    1 Woche
                </a>
            </div>
        </div>
        <div class="detail">
        </div>
    </div>
    <div id="back">
        <div class="link">
            <a href="index.php">
                Zurück zur Übersicht
            </a>
        </div>
    </div>
</section>
