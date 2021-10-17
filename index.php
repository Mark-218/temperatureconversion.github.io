
<html>
<head>
	<style>

*{box-sizing: border-box;
margin:0;
padding:0;}

h1{color:#4298f5;
text-align:center;
font-family: Arial, Helvetica, sans-serif;
line-height: 20vh;}

.maindiv{
    width:100%;
    height:80vh;
    display: flex;
    justify-content:space-around;
    align-items: center;
}
.leftdiv{
    width:50%;
  float: left;
  display: flex;
  justify-content: center;
  align-items: center;

}

.leftdiv img{
    max-width: 300px;
    height:300px;
    background-color:#c7bfbf ;
    border-radius: 28% 72% 52% 48% / 63% 25% 75% 37%  ;
}

.rightdiv{
    width:50%;
    float:auto;
}


.form{
    width:400px;
    height: 300px;
    background-color: #dfe6e9;
    border-radius: 15px;
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

#va{
width:250px;
height: 40px;
padding:5px;
outline:none;
border-radius:5px;
    
}

.selection{
  width:100%;
  margin:20 0;


}

.btn{
    padding:10 16;
    border-radius: 5px;
    outline:none;
    border: none;
    background-color: #6c63ff;
    color:white;
    font-size: 0.9rem;
}

P{
    margin:20px 0 0 0;
}


</style>
</head>
<body>
<h1>Temperature Conversion</h1>
<div class="maindiv">

	<div class="leftdiv">
  <img src="sun.png">
	</div>

    <div class="rightdiv">
    
    <div class="form">
    <form method="POST">
    <input type="text" placeholder="find tamprature value" name="value" id="va"><br/>
    <div class="selection">
   <lebel>Celc</lebel>
    <input type="radio" name="units" value="cel">
    <lebel>Faren</lebel>
        <input type="radio" name="units" value="farn">
    </div>
    
        <input type="submit" name="submit" value="Convert Now " class="btn">
     
    </form>

<div>
    <p>
        <?php
         if(isset($_POST['submit'])){
             $num= $_POST['value'];
             $temp=$_POST['units'];

             if($temp =="cel"){
                $result= $num * 9 / 5 + 32;
                echo "the Conversion value of cel in faren is ".$result;
             }
             else{
                $result= ($num - 32) * 5 / 9;
                echo "the Conversion value of faren in cel is ".$result;
             }

         }

        ?>

    </p>

</div>



    </form>

    </div>
</div>
<!--this information use to create this temprature calculator:Design an HTML form to accept input data from the user.

The user should be able to enter:

● temperature ● select from ​o​C or ​o​F

This data will be sent to a PHP script where you will then convert the temperature from ​o​C to ​o​F or vice-versa.

The formula to convert from ​o​F to ​o​C is:
 C = (F - 32) * 5 / 9


The formula to convert from ​o​C to ​o​F is:
 F = C * 9 / 5 + 32-->

</body>
</html>