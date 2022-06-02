<?php 
session_start();
if(!isset($_SESSION['Completed']) ){
    $_SESSION['Completed']=array();
    // 
}
if(!isset($_SESSION['Incomplete'])){
    $_SESSION['Incomplete']=array();
}
if(isset($_POST['add'])){
    $task=$_POST['new-task'];
    
    array_push($_SESSION['Incomplete'],$task);
}
if(isset($_POST['check'])){
    $complete='';
    $complete=$_POST['check'];
    foreach($_SESSION['Incomplete'] as $key=>$value){
        if($value==$complete){
            unset($_SESSION['Incomplete'][$key]);
        }
    }
    array_push($_SESSION['Completed'],$complete);   
}

if(isset($_POST['edit'])){
    $update=$_POST['edit'];
    
    
    foreach($_SESSION as $key =>$val){

          foreach($val as $j=>$jval){
           
        if($jval==$update){ 
            
            unset($_SESSION[$key][$j]);}
        
        }
    }
}
if(isset($_POST['delete'])){
    $toDelete=$_POST['delete'];
    
    foreach($_SESSION as $key=>$value){
        foreach($value as $k=>$v){
            if($v==$toDelete){
                unset($_SESSION[$key][$k]);
            }
        }
    }
}
?>


<html>
    <head>
        <title>TODO List</title>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="post">
        <div class="container">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <p>
                <input id="new-task" type="text" name="new-task" value='<?php if(isset($update)){echo $update;} ?>'><button type="submit" name="add">Add</button>
            </p>
    
            <h3>Todo</h3>
            <ul id="incomplete-tasks">
                <!-- <li><input type="checkbox"><label>Pay Bills</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                <li><input type="checkbox"><label>Go Shopping</label><input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button></li> -->
                <?php
                foreach($_SESSION['Incomplete'] as $ca){
                    echo "<li><input type='checkbox' name='check' onchange='this.form.submit()' value=".$ca."><label>".$ca."</label><input type='text'><button type='submit' class='edit' name='edit' value=".$ca.">Edit</button><button type='submit' class='delete' name='delete' value=".$ca.">Delete</button></li>";
                } 
                ?>
            </ul>
    
            <h3>Completed</h3>
            <ul id="completed-tasks">
                <!-- <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li> -->

                <?php
                foreach($_SESSION['Completed'] as $ca){
                    echo "<li><input type='checkbox' checked><label>".$ca."</label><input type='text'><button type='submit' class='edit' name='edit' value=".$ca.">Edit</button><button type='submit' class='delete' name='delete' value=".$ca.">Delete</button></li>";
                } 
                ?>
            </ul>
        </div>
    </form>
        <!-- <script src="todo.php"></script> -->

        <a href="destroyTodo.php">Click to destroy Todo</a>
    </body>
</html>