<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="content">
        <h2 id="heading">Click the button</h2>
        <button id="btnchange">Click</button>
        <hr>
        <input type="text" id="txtchange">
        <br>
        <label id="lbl"></label>
        <br>
        <button id="color">change color</button>
        <br>
        <p id="h" class="text-primary">This is green</p>
        <br>
        <button id="change">Click to change color</button>
    </div>
    <div class="content">
        <h2>Divisional Districts</h2>
        <select name="division" id="division">
            <option value="">SELECT DIVISION</option>
            
        </select>
        <br>
        <select name="district" id="district">
            <option value="">SELECT District</option>
        </select>
    </div>
</div>
<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>
              <script>
              $(document).ready(function(){
                  $("#btnchange").click(function(){
                    $("#heading").text("Thanks For Clicking")
                  });
                  $("#txtchange").keyup(function(){
                      var txt =$("#txtchange").val();
                      $("#lbl").text(txt);
                  });
                  $("#color").click(function(){
                    $("#lbl").css("color","green");
                  });
                  $("#change").click(function(){
                    $("#h").removeClass("text-primary");
                    $("#h").addClass("text-success");
                  });
                  $.ajax({
                      url:"http://localhost:8000/api/divisions",
                      dataType:'json',
                      success: function(res){
                          var data= res.data;
                          for(var i=0; i<data.length;i++){
                              var x= '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                              $("#division").append(x);
                          }
                      }
                  });

                  $("#division").change(function(){
                      var id=$(this).val();
                      $.ajax({
                        url:"http://localhost:8000/api/districts/"+id,
                        dataType:'json',
                         success: function(res){
                            var data= res.data;
                            for(var i=0; i<data.length;i++){
                                var x= '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                                $("#district").append(x);
                            }
                        }
                  });
                      
                  });
              });
              </script>
</body>
</html>