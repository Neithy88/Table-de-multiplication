<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table de Multiplication</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Ubuntu');
    </style>
</head>
<header><div class="acs"><img src="images/mini_ACS" alt="logo Access Code School" id='acs'></div>
         <p class="header"> Initiation au PHP / AJAX - Réalisé par Alexandra Moullet & Alain Fougerolle</p>
</header>

<div class="background"> 
    <!-- <img src="images/background1.jpg" alt="mathématiques" class="imgback"> -->
    
</div>


<body>

  
    
 <div class="paragraphe">
    <h1>Les Tables de Multiplication</h1>
    <br>
    <br>
    
    <h2>Réaliser une mini application de tables de multiplications.</h2>
    <br>
    <br>
    
   
    <?php
        for ($i=1; $i <= 10; $i++) { 
            echo "3 x " . $i .  " = " . $i*3 . "<br>";
        }
    ?>
    <br>
    <br>
    
    <h2>Sélectionner une table de multiplication entre 1 et 10 dans une liste déroulante.</h2>
    <br>
    <br>

    <form action="" method="post">

        <select name="select" id="select" onchange="this.form.submit();">

            <!-- onchange=this.options[this.selectedIndex].value; -->
            <option value="0">Choisir une Table</option>
            <option value="1">un</option>
            <option value="2">deux</option>
            <option value="3">trois</option>
            <option value="4">quatre</option>
            <option value="5">cinq</option>
            <option value="6">six</option>
            <option value="7">sept</option>
            <option value="8">huit</option>
            <option value="9">neuf</option>
            <option value="10">dix</option>
        </select>
        <!-- <input type='submit' name="valider1" value='valider'/> -->
    </form>
    <br>
    <br>

    <?php
   
    if(isset($_POST['select'])){
        for ($i=1; $i <= 10; $i++) 
        { 
            echo $_POST['select']. " x " . $i . " = " . $i*$_POST['select'] . "<br>";
        }

    }  
    ?>
    
    
    

    <h2>Selectionner plusieurs tables de multiplication au choix :</h2>
    <br>
    <br>


        <form name="check" action="" method="post">
            <legend>Veuillez choisir une table :</legend>

            <input type="checkbox" name="table[]" value="1"> <label for="un">un</label>
            <input type="checkbox" name="table[]" value="2"> <label for="deux">deux</label>
            <input type="checkbox" name="table[]" value="3"> <label for="trois">trois</label>
            <input type="checkbox" name="table[]" value="4"> <label for="quatre">quatre</label>
            <input type="checkbox" name="table[]" value="5"> <label for="cinq">cinq</label>
            <input type="checkbox" name="table[]" value="6"> <label for="six">six</label>
            <input type="checkbox" name="table[]" value="7"> <label for="sept">sept</label>
            <input type="checkbox" name="table[]" value="8"> <label for=" huit"> huit</label>
            <input type="checkbox" name="table[]" value="9"> <label for="neuf">neuf</label>
            <input type="checkbox" name="table[]" value="10"> <label for="dix">dix</label>
            <br>
            <br>
            <button type="submit" value="Valider" name="valider">Valider</button>
            <br>
            <br>
        </form>

   
    <br>
    <?php

    if(isset($_POST['table'])) {

        foreach($_POST['table'] as $valeur){
            for ($num1=1; $num1 <= 10; $num1++){

                if ($num1 == 10){
    
                    echo $valeur. ' x ' .$num1. ' = ' .$num1 * $valeur.'<br><br>';
    
                } 
                else {
    
                    echo $valeur. ' x ' .$num1. ' = ' .$num1 * $valeur.'<br>';
                }
    
            }
        } 
    }

    ?>


    

    <h2>Super mode révision:</h2>
    <br>
    <br>
    <h3>Calculez le produit de ces opérations.</h3>
    <br>
    <br>

    <?php

        // if (empty($_POST['total']) 
        // = 0
       
        // srand();
        session_start();

        $random1=rand(1,10);
        $random2=rand(1,10);

        if(empty($_SESSION['calcul'])) {
            $_SESSION['calcul'] = $random1 ." x ". $random2;
        }
        if(empty($_SESSION['resultat'])) {
            $_SESSION['resultat'] = $random1 * $random2;
        }

    ?>



    <?php
      if(!empty($_POST['essai']) )
      {
          
         if($_POST['essai'] == $_SESSION['resultat']) {
             echo $_SESSION['resultat']. " - Bravo :)  " ;
             $_SESSION['calcul'] =  $random1 ." x ". $random2 . " = ";
             $_SESSION['resultat'] = $random1 * $random2;
         }

         else {
             echo "Faux, le bon resulat est ". $_SESSION['resultat'].", essaie encore ";
             $_SESSION['calcul'] =  $random1 ." x ". $random2 . " = " ;
             $_SESSION['resultat'] = $random1 * $random2;
         }
      }
  
    
      echo $_SESSION['calcul'];  '<br><br>';

    //   $_SESSION['essai'] == $_score;
    //   $_score = 0;
    //   $_score <= 5;
   
    ?>
    
    <form name="test" action="" method="post">
         <br>
        <input type="text" name="essai" id="essai">
        <br> 
        <br> 
        <button type="submit" value="Valider" name="valider">Valider</button>
        <br>

    </form>

    
    <!-- 
    // srand(); // initialiser le générateur de nombres aléatoires.
    // $rand1=rand(0,10); // Nombre aléatoire 1, on sort des valeurs aléatoires comprises entre 0 et 5
    // $rand2=rand(0,10); // Nombre aléatoire 2, on sort des valeurs aléatoires comprises entre 6 et 9
    // $resultat=$rand1*$rand2; // Calculer la somme


    // function question($value1,$value2)
    // {
    // echo $value1 ." x " .$value2 ;
    // }

    // question($rand1, $rand2)

    // function correction($value1,$value2,){
    //     if
    //     {
        
    //     }
       
    //     echo  " Le total est " .$rand1*$rand2 .;
    // }
    
    
    //   echo $_POST['resultat'];
       
    // if( !empty($_SESSION['value1']) && !empty($_SESSION['value2']) && !empty($_POST['resultat'])){
    //     $calcul=$_SESSION['value1']*$_SESSION['value2'];

    //     if ($_POST['resultat'] != ""){
    //         if($calcul == $_POST['resultat']){
    //             echo "C'est gagné !";
    //         }
    //         else{
    //             echo "Perdu!";
    //         }


    //     }

      
    // }
    //    session_unset(); 
    //    session_destroy();
   -->


 

</body>



</html>