<header>
    <a href="index.php">
        <img width="27" height="27" src="img/icon_home.png" alt="Startseite" />
    </a>
    <?php if(isset($_GET['parkhaus'])) {
        ?>
        <div class="mobile">
            <span><?php echo htmlspecialchars($_GET['parkhaus'])?></span>
        </div>
        <?php
    }
    ?>
</header>
