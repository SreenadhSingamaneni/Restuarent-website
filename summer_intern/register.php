
<title> BB Foodiess </title>
<style>
    
body {
    height: 820px;
        background-size: cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
       background-image: url(https://cdn5.vectorstock.com/i/1000x1000/26/44/spot-light-background-vector-3622644.jpg);
        color: black;
}
.rtable{
    padding: 50px;
    border-style: solid;
    border-radius: 25px;
}

</style>




<div style="color:red">
 
</div> 

<h2 >
    <div class="rtable">
   <br><br><br><br><br><br><br><br>
    <h2>You have registered with the following details:</h2><br>
<b>Name:</b><div style="color:red"><?php echo $_POST["name"]; ?></div><br>
<b>Email address:</b> <div style="color:red"> <?php echo $_POST["email"]; ?></div><br>
<b>Phone number:</b><div style="color:red"> <?php echo $_POST["phone"]; ?></div><br>
<b>Date:</b> <div style="color:red"><?php echo $_POST["date"]; ?></div><br>
<b>Time:</b><div style="color:red"> <?php echo $_POST["time"]; ?></div> <br>
<center><h2> Thank You 😁🍛 </h2></center>
    </div>
</h2>

