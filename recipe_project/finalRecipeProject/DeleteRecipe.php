<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html;
charset=UTF-8" />
<link rel="stylesheet" href="css/recipe.css" type="text/css">
        <title>Schema Creator</title>
    </head>
<body>
<div id="container">
  <form action="DeleteRecipe.php" method="post" />
  <div id="banner">
            <h1>Delete Recipe</h1>
    </div>
    <div id="content"><br/>
    <?php

    function __autoload($class_name) {
        include $class_name . '.php';
    }

    if (empty($_POST["name"]) && empty($_POST["description"]) && empty($_POST["image"]) && empty($_POST["url"])) {
        echo '<h3>Please Enter Recipe Information</h3>';
    } else {
        $thing = new Recipe('', '', ''); //As Thing, the super parent class extends Tag. Tag construtor is invoked.
        echo $thing->RemoveThing("name", $_POST["name"]);
//echo $thing->RemoveCreativeWork();
//echo $thing->RemoveRecipe();
        echo 'Recipe Deleted Successfully.';
    }
    ?>
            <h5 style="color: red">
                <h5>
                    <?php
                    $recipe = new Recipe();
                    $form = new FormGenerator();
                    $form->generate($recipe);
                    ?>
                    <input type="submit" name="Check" title="Check"
        value="Delete Recipe" id="button" >
<br/><br/>
      <a href='index.php'>Home</a></td>
        </div>
	</div>
	</form>
    </body>
</html>