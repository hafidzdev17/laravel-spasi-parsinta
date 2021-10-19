<!DOCTYPE html>
<html>
<head>
    <title>Laravel Ajax Post Request Example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div class="container">
        <h1>Laravel Ajax Post Request Example with <a href="https://codingdriver.com/">Coding Driver</a></h1>
          <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
        <form id="ajaxform" action="/contact">
          @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                <span class="text-danger" id="nameError"></span>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                <span class="text-danger" id="emailError"></span>
            </div>

            <div class="form-group">
                <label>Subject:</label>
                <input type="text" name="subject" class="form-control" placeholder="Enter subject">
                <span class="text-danger" id="subjectError"></span>
            </div>

            <div class="form-group">
                <strong>Mobile Number:</strong>
                <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile">
                <span class="text-danger" id="mobileNumberError"></span>
            </div>
            <div class="form-group">
                <strong>Message:</strong>
                <textarea name="message" class="form-control" placeholder="Enter Your Message"></textarea>
                <span class="text-danger" id="messageError"></span>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-success save-data" onclick="submitForm()">Save</button>
            </div>
        </form>
    </div>

<script>
    function submitForm() {
      let name = $("input[name=name]").val();
      let email = $("input[name=email]").val();
      let subject = $("input[name=subject]").val();
      let mobile_number = $("input[name=mobile_number]").val();
      let message = $("textarea[name=message]").val();
      let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: "/contact",
        type:"POST",
        data:{
          name:name,
          email:email,
          subject:subject,
          mobile_number:mobile_number,
          message:message,
          _token: _token
        },
        success:function(response) {
          console.log(response);
        },
        error:function (response) {
          $('#nameError').text(response.responseJSON.errors.name);
          $('#emailError').text(response.responseJSON.errors.email);
          $('#subjectError').text(response.responseJSON.errors.subject);
          $('#mobileNumberError').text(response.responseJSON.errors.mobile_number);
          $('#messageError').text(response.responseJSON.errors.message);
        }
       });

    }
</script>
</body>
</html>