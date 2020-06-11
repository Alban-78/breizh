<?php
include_once "app/views/BackEnd/layouts/headBack.php";
include_once "app/views/BackEnd/layouts/headerBack.php";

?>
<form class="addAdmin" action="indexAdmin.php?action=newArticle" method="post" enctype="multipart/form-data">

<label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="Nom d'article" value="<?php if (isset($_POST["title"])) {
    echo $_POST["title"];
} ?>">
<label for="description">Description:</label>
            <textarea  name="description" id="description" placeholder="description"  rows="4" cols="50" value="<?php if (isset($_POST["description"])) {
    echo $_POST["description"];
} ?>"> </textarea>           
<label for="image">Image:</label>
            <input type="file" id="image"  name="image">
            <input type="submit" id= "submitArticle" value="Envoyer !">
</form>



<?php
    include_once 'app/views/BackEnd/layouts/footerBack.php';
    ?>