<!doctype html>
<html>
    <head>
        <title>FTS</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Produit Read</h2>
        <table class="table">
	    <tr><td>Designation</td><td><?php echo $designation; ?></td></tr>
	    <tr><td>Description</td><td><?php echo $description; ?></td></tr>
	    <tr><td>Prix</td><td><?php echo $prix; ?></td></tr>
	    <tr><td>Categorie</td><td><?php echo $categorie; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('produit') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>