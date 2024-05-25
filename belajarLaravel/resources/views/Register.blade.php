<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2> Sign Up Form</h2>
</body>
<form action="/welcome" method="GET">
    @csrf
    <label>Nama Depan:</label><br>
    <input type="text"  name="fname"><br>
    <label>Nama Belakang:</label><br>
    <input type="text"  name="lname"> <br>
    <label for="other">Other</label>

    <label for="other">Gender :</label> <br><br>
    <input type="radio" id="male" name="fav_language" value="male">
    <label for="male">Laki - Laki</label><br>
    <input type="radio" id="famele" name="fav_language" value="Famele">
    <label for="famele">Perempuan</label><br>
    <input type="radio" id="other" name="fav_language" value="other">
    <label for="other">Other</label>
    <br><br>
    <p>Nationality:</p>

    <select>
      <option> Indonesian </option>
      <option> English</option>
      <option> Rusia</option>
  </select>

  <p>Languenge Spoken:</p>

      <input type="checkbox" name="Bahasa Indonesia" value="Bahasa Indonesia">
      <label for="vehicle1"> Bahasa Indonesia </label><br>
      <input type="checkbox" name="English" value="English">
      <label for="vehicle2"> English </label><br>
      <input type="checkbox"  name="Other" value="Other">
      <label for="vehicle3"> Other </label> 

      <p>Bio:</p>
      <textarea name="message" rows="10" cols="30"></textarea> <br>
    <input type="submit" value="Sign Up">
  </form>
  <a href="/">Kembali</a>
</html>