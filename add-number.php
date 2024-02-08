
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="bootstrap.rtl.css" type="text/css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" type="text/css">
  <title>add-number</title>
</head>
<body>
  
<div class="container">

<form action="new_number.php" method="post" >

<!--first name  : -->
<br><br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">first name :</label>
<br>
  <input type="text" class="form-control" name="fname" id="exampleFormControlInput1" placeholder="">
</div>

<!-- last name : -->

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">last name :</label>
  <input type="text" class="form-control" name="lname" id="exampleFormControlInput1" placeholder=""></div>

<!-- email : -->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">email :</label>
  <input type="email" class="form-control" name="Email" id="exampleFormControlInput1" placeholder="">
</div>

<!-- phone number : -->

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">phone number :</label>
  <input type="text" class="form-control" name="phone"  id="exampleFormControlInput1" placeholder=""></div>

<!-- home phone  : -->

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">home phone :</label>
  <input type="text" name="home" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<!-- submit :  -->

  <button type="submit" class=" btn btn-dark ">Submit</button>
</form></div>
</body>
</html>


