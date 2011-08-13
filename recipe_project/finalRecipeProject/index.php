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
 <form method="post" name="search" >
            <div id="banner">
	      <h1>Welcome To Recipe System</h1>
	      </div>
	      <div id="content"><br/>
<?php
    $message = NULL;

    function __autoload($class_name) {
        include $class_name . '.php';
    }

    if (empty($_POST["name"]) && empty($_POST["description"]) && empty($_POST["image"]) && empty($_POST["url"])) {
        echo '<h3>Please Enter Recipe Name and Hit Search</h3>';
    } else {
        $thing = new Recipe();
        $result = $thing->SearchThing("name", $_POST["name"]);
        if ($result == 1) {
            echo $thing->SearchCreativeWork();
            echo $thing->SearchRecipeWork();
        } else {
            $message = "Recipe does not exist";
        }
    }
    ?>
            <h4 align="center"><label id=questionLabel ><? echo $message; ?></label></h4>
            <?php
            ini_set("display_errors", "On");
            $thing = new Thing();
            $form = new FormGenerator();

            $form->generate($thing);
            ?>
            <input type="submit" name="Check" title="Check"
            value="Search Recipe" id="button"/>
            <br/><br/>
                <a href='Add.php'>Add</a>
  <br/><br/>
                <a href='UpdateRecipe.php'>Update</a>
            <br/><br/>
                <a href='DeleteRecipe.php'>Delete</a>
           
	      </div>
	      </div>
	</form>
    </body>
</html>