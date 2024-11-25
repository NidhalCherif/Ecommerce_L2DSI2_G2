<?php
ob_start();
?>
<div class="row">
    <div class="col-6">
        <div class="card">
            <img src="<?= $produit[5] ?>" alt="photo">
        </div>
    </div>
    <div class="col-6">
        <H3><?= $produit[1] ?>(<?= $produit[2] ?>DT)</H3>
        <p><?= $produit[4] ?></p>
        <?php
        if ($produit[6] == 1)
        ?>
        <H4 class="badge bg-success">En Promotion</H4>


    </div>
</div>

<?php
$contenu = ob_get_clean();
$titre = "Liste des produits";
include "layout.php";
?>