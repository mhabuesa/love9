var countdownDateStr1 = document.getElementById("date1").textContent;
var countDownDate1 = new Date(countdownDateStr1).getTime();

// var countDownDate = new Date("03 14 2024 17:55").getTime();
// var countDownDate = document.querySelector('.date').innerHTML;
var hasReloaded1 = false; // Flag to track if the page has already been reloaded

var x = setInterval(function() {
  var now1 = new Date().getTime();
  var distance1 = countDownDate1 - now1;
  var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
  var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

  document.getElementById("countdown-timer").innerHTML ='<div class="text-center" style="vertical-align-middle">'+hours1+":"+ minutes1 + ":" + seconds1+'</div>';

  if (distance1 <= 0 && !hasReloaded1) {
    clearInterval(x);
    document.getElementById("countdown-timer").innerHTML = "সমাপ্ত";
    // Reload the page
    window.location.reload();
    hasReloaded1 = true; // Set the flag to true to prevent further reloads

    // After reloading once, prevent further reloading
    setTimeout(function() {
      hasReloaded1 = false;
    }, 1000); // Adjust the timeout duration as needed
  }
}, 1000);
