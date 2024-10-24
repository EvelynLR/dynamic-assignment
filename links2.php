<?php require_once'includes/functions.php'; ?>
<?php 
//following file is under directory includes.
include './includes/header.php'; ?>



<?php
        // put your code here

$page = get();
echo "Page id: " . $page . "<br />";
   
if($page==1){
        echo '<p>Welcome to my page</p>';
}elseif($page==2){
        echo '<p>I like crocheting and baking, which allow me to express creativity and bring joy through handmade crafts and flavorful creations.</p>';
}elseif($page==3){
        echo '<p>I just started learning Web Development. Hopefully by the end of the program, I can make something really cool!</p>';
}elseif($page==4){
        echo '<p>My favorite vacation spot is Xi An, China and my dream vacation is going on a cruise trip.  </p>';
}elseif($page==5){
        echo '<p>my favorite movie is <a href="https://www.imdb.com/title/tt1028532/?ref_=fn_al_tt_5">Hachi</a></p>';
}else{
        echo '';
}
?>

<?php
$project_number=strpos($_SERVER['SCRIPT_NAME'], '/links2.php');
$project_path=substr($_SERVER['SCRIPT_NAME'], 0, $project_number);
//需要接解决的问题：如何把define的加到下面的路径define("PROJECT_FOLDER", $project_path);
echo "<a href = '$project_path ./links.php'>Return to Menu</a>";
?>






<?php include './includes/footer.php'; ?>
  