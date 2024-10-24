
<?php
function get(){
    
     $page = isset($_GET['page']) ? $_GET['page'] : 0;
     return $page;
}

function title(){
   
    if(get()==1){
        echo '<h1>Welcome</h1>';
    }elseif(get()==2){
        echo '<h1>My Hobbies</h1>';
    }elseif(get()==3){
        echo '<h1>About</h1>';
    }elseif(get()==4){
        echo '<h1>My Dream Vacation</h1>';
    }elseif(get()==5){
        echo '<h1>My Favorite Movie</h1>';
    }else{
        echo '';
    }
}

?>

