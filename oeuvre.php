<?php include ('header.php'); ?> 

<?php 
// on récupère l'id, le tableau et l'on récupère la bonne oeuvre

$id = $_GET['id']; //on récupére l'id à partir de l'url
$o = null; //on créé une variable qui contiendra l'oeuvre à afficher

// on récupère le tableau, on le parcours et on injecte l'oeuvre dans $o si l'id correspond
include('oeuvres.php');
foreach($oeuvres as $oeuvre) { 
    if ($id == $oeuvre['id']){
        $o = $oeuvre;
    }
}
?> 

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $o['image']; ?>" alt="<?php echo $o['titre']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $o['titre']; ?></h1>
            <p class="description"><?php echo $o['artiste']; ?></p>
            <p class="description-complete">
            <?php echo $o['description']; ?>
            </p>
        </div>
    </article>

<?php include ('footer.php'); ?>