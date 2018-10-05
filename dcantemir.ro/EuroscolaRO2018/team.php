<?php $lang = $_GET["lang"];
include("$lang/$lang.php");
$srHome = "";
$srCantemir = "";
$srTeam = "active";
?>
<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title> <?= $team . ' ' . $title ?></title>
</head>
<body>
<?php include("assets/misc/navbar/navbar.php"); ?>

<!-- Group photo plus text -->

<div class="container my-5">
    <div class="text-center">
        <img src="../assets/img/team/team.png" class="rounded">
        <div class="m-3"
        <div class="container">
            <div class="row">
                <div class="col-9 mx-auto">
                    <h5 class="team-text"><?= $teamText ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Each person's photo, name and role in this project -->

<?php
function newPerson($name, $img, $post)
{
    echo '<div class="col-4">
            <img class="rounded" src="' . $img . '" width="140" height="140">
            <h4 class="mt-1">' . $name . '</h4>
            <p class="mb-3">' . $post . '</p>
        </div>';
}

?>

<!--
vars at your disposal: (for production)
$profs
$web
$fb
$posters
$interview
$articles
$event
$journal
-->

<div class="container people">

    <div class="row">
        <?php newPerson('Filip Felicia', '../assets/img/team/felicia.jpg', substr($profs, 0, -1)); ?>
        <?php newPerson('Basoc Lenuța', '../assets/img/team/basoc.jpg', substr($profs, 0, -1)); ?>
    </div>

    <hr>

    <div class="row">
        <?php newPerson('Alexe Vlad-Andrei', '../assets/img/team/alexe.jpg', $web); ?>
        <?php newPerson('Balint Robert', '../assets/img/team/balint.jpg', $interview); ?>
        <?php newPerson('Birtea Bogdan-Octavian', '../assets/img/team/birtea.jpg', $posters); ?>
    </div>

    <div class="row">
        <?php newPerson('Calfa Mihai', '../assets/img/team/calfa.jpg', $posters); ?>
        <?php newPerson('Cărăușu Maria', '../assets/img/team/carausu.jpg', $interview); ?>
        <?php newPerson('Cătea Francesca-Rita', '../assets/img/team/catea.jpg', $journal); ?>
    </div>

    <div class="row">
        <?php newPerson('Cercel Cosmin', '../assets/img/team/cercel.jpg', $articles); ?>
        <?php newPerson('Ciobanu Francesco', '../assets/img/team/ciobanu.jpg', $posters); ?>
        <?php newPerson('Enea Flavia', '../assets/img/team/enea.jpg', $posters); ?>
    </div>

    <div class="row">
        <?php newPerson('Filip Bianca-Maria', '../assets/img/team/filip.jpg', $posters); ?>
        <?php newPerson('Ghineț Iustin-Gabriel', '../assets/img/team/ghinet.jpg', $posters); ?>
        <?php newPerson('Guramba Robert-Petru', '../assets/img/team/guramba.jpg', $posters); ?>
    </div>

    <div class="row">
        <?php newPerson('Gotschik Clara-Maria', '../assets/img/team/gotschik.jpg', $journal); ?>
        <?php newPerson('Hanganu Sonia-Serena', '../assets/img/team/hanganu.jpg', $articles); ?>
        <?php newPerson('Hîrbu Andrei', '../assets/img/team/hirbu.jpg', $web); ?>
    </div>

    <div class="row">
        <?php newPerson('Lupu Răzvan-Ioan', '../assets/img/team/lupu.jpg', $interview); ?>
        <?php newPerson('Neculăiță-Mocanu Mălina-Andreea', '../assets/img/team/mocanu.jpg', $journal); ?>
        <?php newPerson('Palaghiță Mara-Andreea', '../assets/img/team/palaghita.jpg', $fb); ?>
    </div>

    <div class="row">
        <?php newPerson('Popa Tudor-Valentin', '../assets/img/team/popa.jpg', $articles); ?>
        <?php newPerson('Stancu Diana-Elena', '../assets/img/team/stancu.jpg', $web); ?>
        <?php newPerson('Pricopi Andrei', '../assets/img/team/pricopi.jpg', $articles); ?>
    </div>

    <div class="row">
        <?php newPerson('Suditu Mara-Ioana', '../assets/img/team/suditu.jpg', $events); ?>
        <?php newPerson('Zotica Ștefan-Lucian', '../assets/img/team/zotica.jpg', $interview); ?>
    </div>

</div>

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>