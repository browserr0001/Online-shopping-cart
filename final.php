<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Portal</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

    /* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 1000px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://images.adsttc.com/media/images/587c/cbc4/e58e/cea3/7600/087d/large_jpg/eiffel-tower-768501_1920.jpg?1484573627");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    
  </style>
</head>

<body>
  <main>
    <div class="intro">
      <h1>Online Travel Portal</h1>
	  <br><br><br>
	  
	
	<form action="index.php" method="POST" >

<table  height="300px" width="300px"  bgcolor="CornflowerBlue" align="center">

<tr>
<td colspan=2>
<center><font size=4><b>To display the names of the customers based on the type of trip:</b></font></center>
</td>
</tr>

<tr>
<td><b>&emsp;Select the trip type:</b></td>
<td><select name="type">
<option value="-1" selected>Select</option>
<option value="Beach">Beach</option>
<option value="Eco Tour">Eco Tour</option>
<option value="Adventure">Adventure</option>
<option value="Medical">Medical</option>
</select></td>
</tr>

<tr>
<td>&emsp;<input type="reset"></td>
<td colspan="2"><input type="submit" value="submit" /></td>
</tr>
</table>
</form>
	
	</div><br>
	
  </footer>
</body> 

</html>