<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Naughty Login form</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap'><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="{{asset('frmPayment/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
        <h2>Payments</h2>
      <input type="text" placeholder="ID" id="ID" />
      <input type="text" placeholder="Subject ID" id="Sub_ID" />
      <input type="number" placeholder="Price" id="Price" />
      <input type="text" placeholder="User ID" id="User_ID" />
      <input type="text" placeholder="Expire Date" id="Exp_Date" />
      <input type="text" placeholder="Status" id="Status" />
      <button id="submit">Submit</button>
    </div>
<!-- partial -->
  <script  src="{{asset('frmPayment/script.js')}}"></script>

</body>
</html>
