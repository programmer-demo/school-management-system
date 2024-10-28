<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('formSub/style.css')}}">
</head>
<body>
    <h1>Add SubJect</h1>
    <hr>
    <!-- partial:index.partial.html -->
<body>
    <section class="container">
      <div class="login-container">
        <div class="circle circle-one"></div>
        <div class="form-container">
          {{-- <img src="https://drive.google.com/uc?export=view&id=1bKgdKUQ2Uhx6rjY7LNTuBjLfZhJxKVSq" alt="illustration" class="illustration" /> --}}
          <h1 class="opacity">Add Subject</h1>
          <form method="POST" action="">
            @csrf
            <input type="text" placeholder="ID" />
            <input type="text" placeholder="Name" />
            <input type="text" placeholder="Level" />
            <input type="text" placeholder="Status" />
            <button class="opacity">SUBMIT</button>
          </form>       
        </div>
        <div class="circle circle-two"></div>
      </div>
      <div class="theme-btn-container"></div>
    </section>
  </body>
  <!-- partial -->
  <script src="{{ asset('formSub/script.js') }}"></script>


</body>
</html>