<?php
include_once 'functions.php';

$city=['rangpur','Nilphamri','Dhaka','Dinajpur'];
       
 $fname='';
 $lname='';
 $checked='';
//  $cities='';

//  print_r($_REQUEST);
//  if(isset($_REQUEST['city']) && !empty($_REQUEST['city'])){

//     $cities=$_REQUEST['city'];
//  }

 
if(isset($_REQUEST['cb1']) && $_REQUEST['cb1']==1){
    $checked='checked';
}

 if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname']) ){

    //  $fname=htmlspecialchars( $_REQUEST['fname']);
    $fname=filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
    }
 if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname']) ){
    $lname=$_REQUEST['lname'];
 }

// print_r($_REQUEST);//print array
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTTP Verbs</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Form</h2>
            <!-- <?php //if(isset($_GET['fname']) && !empty($_GET['fname'])) : ?>
             </br>
            <?php //endif;
            //if(isset($_GET['lname']) && !empty($_GET['lname'])):?>
            Last Name:<?php //echo $_GET['lname']?></br>
            <?php //endif; ?> -->
            First Name: <?php  echo $fname?></br>
            List Name: <?php   echo $lname?></br>
            <!-- City :<?php  //echo $cities ?> -->

            <?php
            // $c=isset($_POST['city'])??array();
             if(count($_POST['city'])>0){
                echo "htr".join(', ',$c);
             }
            ?>
        </div>
    </div>  

    <div class="row">

        <div class="column column-50 column-offset-20 ">
        <form action="" method="POST">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" value="<?php echo $fname?>">
            
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" value="<?php echo $lname?>">
            <div>
                <input type="checkbox" name="cb1" id="cb1" value="1"<?php echo $checked?>>
                <label for="cb1" class="label-inline">check</label>
                <label class="label" for="">select some fruits</label>
                <input type="checkbox" name="fruits[]" id="" value="mango" <?php isChecked('fruits','mango') ?>>
                <label for="fruits" class="label-inline">Mango</label>
                <input type="checkbox" name="fruits[]" id="" value="apple" <?php isChecked('fruits','apple') ?>>
                <label for="fruits" class="label-inline">Apple</label>
            
                <input type="checkbox" name="fruits[]" id="" value="banana"<?php isChecked('fruits','banana') ?>>
                <label for="fruits" class="label-inline">Banana</label>
                <input type="checkbox" name="fruits[]" id="" value="lemon"<?php isChecked('fruits','lemon') ?>>
                <label for="fruits" class="label-inline">Lemon</label>
            

            
            </div>  
            <select name="city[]" id="" multiple>
                <option value="" disabled selected>Selected city</option>
                <?php seletedCity($city) ?>
            </select>
           
        


         
            <button type="submit">Submit</button>
        </form>

        </div>

    </div>
        
</div>
    
</body>
</html>