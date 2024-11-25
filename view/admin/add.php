<?php
ob_start();
?>
<form action="../../controller/admin/add.php" method="post" class="form-control">
    <label for="">Libellé</label><input type="text" name="lib" id="" class="form-control"></br>
    <label for="">Prix</label><input type="text" name="pu" id="" class="form-control"></br>
    <label for="">Quantité</label><input type="text" name="qte" id="" class="form-control"></br>
    <label for="">Description</label><textarea name="des" id="" class="form-control"></textarea></br>
    <label for="">Image</label><input type="text" name="img" id="" class="form-control"></br>
    <label for="">En promo</label><input type="text" value="0" name="pro" id="" class="form-control"></br>
    <input type="submit" class="btn btn-primary btn-lg" name="ok" value="Ajouter">
</form>
<?php
$contenu = ob_get_clean();
$titre = "Ajouter Un produit";
include "layout.php";
?>