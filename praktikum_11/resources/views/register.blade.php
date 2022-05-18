<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <h1>Buat Account Baru!</h1>
  <h4>Sign Up Form</h4>

  <form action="/welcome" method="post">
    @csrf
    <label for="namadpn">First name:</label><br><br>
    <input type="text" id="namadpn" name="namadpn"><br><br>
    <label for="namablkng">Last name:</label><br><br>
    <input type="text" id="namablkng" name="namablkng"><br>

    <p>Gender :</p>

    <input type="radio" id="gender" name="gender" value="Male">
    <label for="Male">Male</label><br>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="Other">
    <label for="other">Other</label>

    <p>Nationality</p>
    <select>
      <option value="Indonesian">Indonesian</option>
      <option value="Korean">Korean</option>
      <option value="Japan">Japan</option>
      <option value="USA">USA</option>
    </select>

    <p>Language Spoken :</p>

    <input type="checkbox" id="have_bike" name="languange spoken" value="I have a bike">
    <label for="have_bike">I have a bike</label><br>
    <input type="checkbox" id="have_car" name="languange spoken" value="I have a car">
    <label for="have_car">I have a car</label><br>
    <input type="checkbox" id="have_boat" name="languange spoken" value="I have a boat">
    <label for="have_boat">I have a boat</label>

    <p>Bio : </p>

    <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>

    <button type="submit">Sign Up</button>



  </form>

</body>

</html>