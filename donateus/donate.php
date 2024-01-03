<!DOCTYPE html>
<html>
  
<head>
    <title>How to create slide left and
      right toggle effect using jQuery?</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js">
  </script>
    <style type="text/css">
        .box {
            float: center;
            overflow: hidden;
            background: #32a852;
            width: 400px;
            padding: 0px;
        }
        /* Add padding and border to inner content
    for better animation effect */
          
        .box-inner {
            width: 400px;
            padding: 0px;
            border: 1px solid #000000;
        }
       
    </style>
</head>
  
<body>
    <center>
        <h1 style="color:green; font-size:60px;"> 
        DONATE TO CONTRIBUTE
         <hr width="600px" color="green">
    </h1>
        <h2>Feel Free To Donate Us With Your Heart Full Of Green</h2>
        <hr width="300px" color="green"><br>
        <div class="box">
            <div class="box-inner">
            <img class="img-fluid rounded" src="riya.jpeg" style="width: 400px; height: 600px;" >
            </div>
        </div>
        <hr>
        <button type="button" class="slide-left">
          Click For Hide QR
      </button>
        <button type="button" class="slide-right">
          Click For QR
      </button>
        <script type="text/javascript">
            $(document).ready(function() {
                var boxWidth = $(".box").width();
                $(".slide-left").click(function() {
                    $(".box").animate({
                        width: 0
                    });
                });
                $(".slide-right").click(function() {
                    $(".box").animate({
                        width: boxWidth
                    });
                });
            });
        </script>
    </center>
</body>
  
</html>