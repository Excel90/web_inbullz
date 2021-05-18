<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Timer : <span id="timer"></span></p>
    <form>
        <!-- no 1 -->
        <label for="no1">1. Otak dari sebuah komputer…?</label><br>
        <input type="radio" name="no1" value="a">a. Processor<br>
        <input type="radio" name="no1" value="b">b. Power Supply<br>
        <input type="radio" name="no1" value="c">c. CPU<br>
        <input type="radio" name="no1" value="d">d. Motherboard<br>
        <br>

        <!-- no 2 -->
        <label for="no1">2. Fungsi untuk membersihkan layar console…?</label><br>
        <input type="radio" name="no2" value="a">a. Crlsjr<br>
        <input type="radio" name="no2" value="b">b. Clrscr<br>
        <input type="radio" name="no2" value="c">c. Crlscr<br>
        <input type="radio" name="no2" value="d">d. Clrscrn<br>
        <br>


    </form>


    <script>
// Set the date we're counting down to
var countDownDate = new Date().getTime() + 7*60000 + 2*1000;


// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timer").innerHTML = 
   minutes + ":" + seconds ;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</body>
</html>