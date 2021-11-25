<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="men.css"/>
        <title>ACCUEIL</title>
    </head>
    <body>
        <!-- menu-->

    <?php include("menu.php"); ?>

           <!---  javaScript   --->
    <div align="center">
    <img name="diapo" width="1300px" id="image" height="400px" >
    </div align='center'>
<script>
    var images=[];
    images[0]="foto/1.jpg";
    images[1]="foto/5.jpg";
    images[2]="foto/6.jpg"; 
    images[3]="foto/7.jpg";
    images[4]="foto/8.jpg";
    var i=0;
    var timer=3000;
    
      

    function changeimage(){
        document.diapo.src=images[i];
        if(i<images.length-1){
            i++;
        }
        else{
            i=0;
        }
        setTimeout("changeimage()",timer)
    }
    window.onload=changeimage;
</script>
<!--fin javScript-->

<!---corps page accueil-->
  
    <?php include('corps.php')?>
<!--fin corps page accueil-->

    </body>


<!--- debut footer-->
    <footer>
        <p>
            copyright &copy; IDA /2A 2021-2022
        </p>
    </footer>

<!--fin footer-->

</html>
