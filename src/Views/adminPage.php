<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="js/addAttraction.js" async></script>
        <script type="text/javascript" src="js/updateAttraction.js" async></script>
        <script type="text/javascript" src="js/deleteAttraction.js" async></script>
        <title>Admin</title>
    </head>
    <body>
        <h2>Ajouter une attraction</h2>
        <form method="POST" action="src/Controller/AddAttractionController.php" id="insert_form">
            <label for="title_input">Titre</label>
            <input type="text" id="title_input" name="title_input">

            <label for="image_input">URL de l'image</label>
            <input type="text" id="image_input" name="image_input">

            <label for="description_input">Description</label>
            <input type="text" id="description_input" name="description_input">

            <input type="submit" id="submit" value="Ajouter">
        </form>
        <h2>Les attractions :</h2>
        <div class="attractions_container">
            <?php 
                foreach($this->attractions as $attraction) {
       
                ?>
                <div class="attractions_block" id="<?php echo $attraction['attraction_id'] ?>">
                    <h2><?php echo $attraction['name'] ?></h2>
                    <img src="images/<?php echo $attraction['url_image'] ?>" alt="image attraction">
                    <p><?php echo $attraction['description'] ?></p>
                    <form method="POST" class="update_form">
                        <label for="title_update">Titre</label>
                        <input type="text" class="title_update" name="title_update">

                        <label for="image_update">URL de l'image</label>
                        <input type="text" class="image_update" name="image_update">

                        <label for="description_update">Description</label>
                        <input type="text" class="description_update" name="description_update">

                        <input type="submit" class="submit" value="Modifier">
                    </form>
                    <button class="delete">Supprimer</button>
                </div> 
            <?php } ?>               
        </div>
    </body>
</html>