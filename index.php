<?php include ('header.php'); ?>

<?php include('oeuvres.php'); ?>

    <div id="liste-oeuvres">
        <!-- on parcours le tableau -->
        <?php foreach($oeuvres as $oeuvre) { ?>
        <article class="oeuvre">
            <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>"> <!-- on ajoute l'id à l'url -->
                <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>" />
                <h2><?php echo $oeuvre['titre']; ?></h2>
                <p class="description"><?php echo $oeuvre['artiste']; ?></p>
            </a>
        </article>
        <?php } ?>
    </div>

<?php include ('footer.php'); ?>