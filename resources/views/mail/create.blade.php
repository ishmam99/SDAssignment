<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
    .shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
    }
    .shadow-textarea textarea.form-control {
        padding-left: 0.8rem;
    }
    </style>
</head>
<body>
    <div class="container">
    <form action="{{URL::to('mailsend')}}" method="post" enctype="multipart/form-data">
   @csrf
    
            <div class="form-group">
                    <h4>Enter Subject </h4>
                    <input class="form-control" placeholder="subject" name="subject">
                </div>
        <div class="form-group shadow-textarea">
                <label for="exampleFormControlTextarea6">Enter the message</label>
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..." name="message"></textarea>
              </div>
              <div class="form-group">
                  <h4>Enter destination Email </h4>
                  <input class="form-control" placeholder="email-address" name="email">
              </div>
              <input type="file" name="file">
               <button class="btn-primary">Send</button>
            </div>
           
        </form>
</body>
</html>