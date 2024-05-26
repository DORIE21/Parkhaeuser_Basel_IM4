<header>
    <a href="index.php">
        <img width="27" height="27" src="img/icon_home.png" alt="Startseite" />
    </a>
    <?php if(isset($_GET['parkhaus'])) {
        ?>        
            <span class="mobile"><?php echo htmlspecialchars($_GET['parkhaus'])?></span>
        <?php
    }
    else{
        ?>
        <span class="mobile">THE BIG 5 - Basel Stadt</span>
    <?php
    }
    ?>
    <div class="spacer"></div>
    </div>
</header>
