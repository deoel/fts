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
        <h2 style="margin-top:0px">Produit <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Designation <?php echo form_error('designation') ?></label>
            <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation" value="<?php echo $designation; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Description <?php echo form_error('description') ?></label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="<?php echo $description; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Prix <?php echo form_error('prix') ?></label>
            <input type="text" class="form-control" name="prix" id="prix" placeholder="Prix" value="<?php echo $prix; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Categorie <?php echo form_error('categorie') ?></label>
            <select class="form-control" name="categorie" id="categorie">
                <option value="ALIMENTATION">ALIMENTATION</option>
                <option value="HABILLEMENT">HABILLEMENT</option>
                <option value="BIJOUTERIE">BIJOUTERIE</option>
                <option value="QUINCAILLERIE">QUINCAILLERIE</option>
                <option value="PHARMACIE">PHARMACIE</option>
            </select>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('produit') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>