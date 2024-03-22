<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Activity5-preview.php" method="post">
      Name: <input type="text" name="your_name"/>  <br /> <br />
      User Name: <input type="text" name="user_name"/>  <br /> <br />
      Password: <input type="text" name="password"/>  <br /> <br />
      Address: <input type="text" name="address"/>  <br /> <br />
    
      Country: 

      <select id="country" name="country">
      <option value="Turkey">Turkey</option>
<option value="USA">USA</option>
<option value="Russia">Russia</option>
<option value="Germany">Germany</option>

                <br\>
</select>
<br />
<br />
<label for="zip_code">Zip Code:</label>
        <input type="text" id="zip_code" name="zip_code"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        Sex: 
          <input type="radio" id="female" name="female" value = "female"/>Female
        <input type="radio" id="male" name="male" value = "male"/>  Male <br /> <br />
        <label for="language" id="lang">Language:</label>
<input type="checkbox" id="ENG" name="language[]" value="English"> English
<input type="checkbox" id="FR" name="language[]" value="French"> French
<input type="checkbox" id="GR" name="language[]" value="Germany"> Germany
<br /> <br />

        <br /> <br />

        <label for="about" id="about">About: </label><textarea name="about"></textarea><br> <br /> <br />



      <input type="submit" value="Submit" />




    </form>


</body>
</html>