<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Animated Login Form with Glowing Input</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="{{asset('frmTeacher/style.css')}}">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <div class="text">
    Teacher Add
  </div>
  <form >
    <div class="field">
      
      <div class="fas fa-user-plus"></div>
      <input type="text" placeholder="Name">
    </div>
    <div class="field">
      <div class="fas fa-venus-mars"></div>
      <input type="text" placeholder="Gender">
    </div>
    <div class="field">
  
      <div class="fas fa-map"></div>
      <input type="text" placeholder="Address">
    </div>
    <div class="field">
      <div class="fas fa-image"></div>
      <input type="file" placeholder="Image">
    </div>
    <div class="field">
      <div class="fas fa-id-card"></div>
      <input type="text" placeholder="Subject ID">
    </div>
    <div class="field">
      <div class="fas fa-id-badge"></div>
      <input type="text" placeholder="Student ID">
    </div>
    <div class="field">
      <div class="fas fa-house-user"></div>
      <input type="text" placeholder="Room ID">
    </div>
    <div class="field">
      <div class="fas fa-users"></div>
      <input type="text" placeholder="User ID">
    </div>

    <button>Submit</button>
    <button><a href="{{url('teachers')}}">Back</a></button>
  </form>
</div>
<!-- partial -->
  
</body>
</html>
