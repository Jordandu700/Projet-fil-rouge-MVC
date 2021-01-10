<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="js/addElement.js" async></script>
        <script type="text/javascript" src="js/updateElement.js" async></script>
        <script type="text/javascript" src="js/deleteElement.js" async></script>
        <title>Admin</title>
    </head>
    <body>
        <h2>Ajouter un élément</h2>
        <form method="POST" id="insert_form">
            <label for="title_input">Titre</label>
            <input type="text" id="title_input" name="title_input">

            <label for="image_input">URL de l'image</label>
            <input type="text" id="image_input" name="image_input">

            <label for="description_input">Description</label>
            <input type="text" id="description_input" name="description_input">

            <label for="element-select">Type d'élément</label>
            <select name="addElementSelect" id="element-select">
                <option value="">Choisissez</option>
                <option value="1">Attraction</option>
                <option value="2">Activité</option>
                <option value="3">Spectacle</option>
                <option value="4">Animation</option>
            </select>

            <input type="submit" id="submit" value="Ajouter">
        </form>
        <h2>Les attractions :</h2>
        <div class="attractions_container">
            <?php 
                foreach($this->attractions as $attraction) {
       
                ?>
                <div class="attractions_block" id="<?php echo $attraction['activity_id'] ?>">
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
        <h2>Les activités</h2>
        <div class="activities_container">
            <?php 
                foreach($this->activities as $activity) {
            ?>
                <div class="activities_block" id="<?php echo $activity['activity_id'] ?>">
                    <h2><?php echo $activity['name'] ?></h2>
                    <img src="images/<?php echo $activity['url_image'] ?>" alt="image attraction">
                    <p><?php echo $activity['description'] ?></p>
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
        <h2>Les spectacles</h2>
        <div class="shows_container">
            <?php 
                foreach($this->shows as $show) {
            ?>
                <div class="shows_block" id="<?php echo $show['activity_id'] ?>">
                    <h2><?php echo $attraction['name'] ?></h2>
                    <img src="images/<?php echo $show['url_image'] ?>" alt="image attraction">
                    <p><?php echo $show['description'] ?></p>
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
        <h2>Les animations</h2>
        <div class="animations_container">
            <?php 
                foreach($this->animations as $animation) {
            ?>
                <div class="shows_block" id="<?php echo $animation['activity_id'] ?>">
                    <h2><?php echo $animation['name'] ?></h2>
                    <img src="images/<?php echo $animation['url_image'] ?>" alt="image attraction">
                    <p><?php echo $animation['description'] ?></p>
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