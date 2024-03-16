// next prev
var divs = $('.show-section section');
var now = 0; // currently shown div
divs.hide().first().show(); // hide all divs except first

//show active step
function showActiveStep()
{
    if ($('#step0').is(':visible'))
    {
        $(".step-count-bar").eq(0).addClass("active");
    }

    else if ($('#step1').is(':visible'))
    {
        $(".step-count-bar").eq(1).addClass("active");
    }
    else if ($('#step2').is(':visible'))
    {
        $(".step-count-bar").removeClass("active");
        $(".step-count-bar").eq(2).addClass("active");
    }
    else if ($('#step3').is(':visible'))
    {
        $(".step-count-bar").removeClass("active");
        $(".step-count-bar").eq(3).addClass("active");
    }
    else if ($('#step4').is(':visible'))
    {
        $(".step-count-bar").removeClass("active");
        $(".step-count-bar").eq(4).addClass("active");
    }
    else if ($('#step5').is(':visible'))
    {
        $(".step-count-bar").removeClass("active");
        $(".step-count-bar").eq(5).addClass("active");
    }
    else if ($('#step6').is(':visible'))
    {
        $(".step-count-bar").removeClass("active");
        $(".step-count-bar").eq(6).addClass("active");
    }
    else if ($('#step7').is(':visible'))
    {
        $(".step-count-bar").removeClass("active");
        $(".step-count-bar").eq(7).addClass("active");
    }
    else if ($('#step8').is(':visible'))
    {
        $(".step-count-bar").removeClass("active");
        $(".step-count-bar").eq(8).addClass("active");
    }
    else if ($('#step9').is(':visible'))
    {
        $(".step-count-bar").removeClass("active");
        $(".step-count-bar").eq(9).addClass("active");
    }
    else
    {

    }
}


$(".radio-btn input").on('click', function()
{
    $(".radio-btn").removeClass("active");
    $(this).parent().addClass("active");
})

// // timer
// var count = 160;

// var interval = setInterval(function()
// {

//   if(count == 0)
//   {
//     clearInterval(interval);
//   }
//   else
//   {
//     count = count -1;
//   }
//   document.getElementById("countdown-timer").innerHTML = count;
// },1000);


// countdown


var countdownDateStr = document.getElementById("date").textContent;
var countDownDate = new Date(countdownDateStr).getTime();

// var countDownDate = new Date("03 14 2024 17:55").getTime();
// var countDownDate = document.querySelector('.date').innerHTML;
var hasReloaded = false; // Flag to track if the page has already been reloaded

var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("countdown-timer").innerHTML = minutes + " : " + seconds;

  if (distance <= 0 && !hasReloaded) {
    clearInterval(x);
    document.getElementById("countdown-timer").innerHTML = "সমাপ্ত";
    // Reload the page
    window.location.reload();
    hasReloaded = true; // Set the flag to true to prevent further reloads

    // After reloading once, prevent further reloading
    setTimeout(function() {
      hasReloaded = false;
    }, 1000); // Adjust the timeout duration as needed
  }
}, 1000);



function next()
{
    divs.eq(now).hide();
    now = (now + 1 < divs.length) ? now + 1 : 0;
    divs.eq(now).show(); // show next
    console.log(now);

    showActiveStep();
}
$(".prev").on('click', function()
{

    $('.radio-btn').addClass('bounce-left');
    $('.radio-btn').removeClass('bounce-right');
    divs.eq(now).hide();
    now = (now > 0) ? now - 1 : divs.length - 1;
    divs.eq(now).show(); // show previous
    console.log(now);

    showActiveStep();

})


// quiz validation
var checkedradio = false;

function radiovalidate(stepnumber)
{
    var checkradio = $("#step"+stepnumber+" input").map(function()
    {
    if($(this).is(':checked'))
    {
        return true;
    }
    else
    {
        return false;
    }
    }).get();

    checkedradio = checkradio.some(Boolean);
}


function textvalidate(stepnumber) {
    var inputText1 = $("#step" + stepnumber + " input[name='name']").val().trim();
    var inputText2 = $("#step" + stepnumber + " input[name='phone']").val().trim();

    textFieldsValidated = inputText1 !== "" && inputText2 !== "";
}




// form validation
$(document).ready(function()
{

// check step0
$("#step0btn").on('click', function() {
    textvalidate(0);

    if (!textFieldsValidated) {
        $('#error').append('<div class="reveal alert alert-danger">আপনার তথ্য দিন!</div>');
        setTimeout(function() {
            $('#error').children('.reveal').remove();
        }, 3000);
    } else {
        $('#step0 .radio-btn').removeClass('bounce-left').addClass('bounce-right');
        setTimeout(function() {
            next();
        }, 900);
    }
});


    // check step1
    $("#step1btn").on('click', function()
    {
        radiovalidate(1);

        if(checkedradio == false)
        {

        (function (el) {
            setTimeout(function () {
                el.children().remove('.reveal');
            }, 3000);
            }($('#error').append('<div class="reveal alert alert-danger">একটি উত্তর বাছাই করুন!</div>')));

            radiovalidate(1);

        }

        else
        {
            $('#step1 .radio-btn').removeClass('bounce-left');
            $('#step1 .radio-btn').addClass('bounce-right');
            setTimeout(function()
            {
                next();
            }, 900)

        }


    })

    // check step2
    $("#step2btn").on('click', function()
    {
        radiovalidate(2);

        if(checkedradio == false)
        {

        (function (el) {
            setTimeout(function () {
                el.children().remove('.reveal');
            }, 3000);
            }($('#error').append('<div class="reveal alert alert-danger">একটি উত্তর বাছাই করুন!</div>')));

            radiovalidate(2);

        }

        else
        {
            $('#step2 .radio-btn').removeClass('bounce-left');
            $('#step2 .radio-btn').addClass('bounce-right');
            setTimeout(function()
            {
                next();
            }, 900)

        }
    })

    // check step3
    $("#step3btn").on('click', function()
    {
        radiovalidate(3);

        if(checkedradio == false)
        {

        (function (el) {
            setTimeout(function () {
                el.children().remove('.reveal');
            }, 3000);
            }($('#error').append('<div class="reveal alert alert-danger">একটি উত্তর বাছাই করুন!</div>')));

            radiovalidate(3);

        }

        else
        {
            $('#step3 .radio-btn').removeClass('bounce-left');
            $('#step3 .radio-btn').addClass('bounce-right');
            setTimeout(function()
            {
                next();
            }, 900)

        }
    })

    // check step4
    $("#step4btn").on('click', function()
    {
        radiovalidate(4);

        if(checkedradio == false)
        {

        (function (el) {
            setTimeout(function () {
                el.children().remove('.reveal');
            }, 3000);
            }($('#error').append('<div class="reveal alert alert-danger">একটি উত্তর বাছাই করুন!</div>')));

            radiovalidate(4);

        }

        else
        {
            $('#step4 .radio-btn').removeClass('bounce-left');
            $('#step4 .radio-btn').addClass('bounce-right');
            setTimeout(function()
            {
                next();
            }, 900)

        }
    })


    // check step5
    $("#step5btn").on('click', function()
    {
        radiovalidate(5);

        if(checkedradio == false)
        {

        (function (el) {
            setTimeout(function () {
                el.children().remove('.reveal');
            }, 3000);
            }($('#error').append('<div class="reveal alert alert-danger">একটি উত্তর বাছাই করুন!</div>')));

            radiovalidate(5);

        }

        else
        {
            $('#step5 .radio-btn').removeClass('bounce-left');
            $('#step5 .radio-btn').addClass('bounce-right');
            setTimeout(function()
            {
                next();
            }, 900)

        }
    })
    // check step6
    $("#step6btn").on('click', function()
    {
        radiovalidate(6);

        if(checkedradio == false)
        {

        (function (el) {
            setTimeout(function () {
                el.children().remove('.reveal');
            }, 3000);
            }($('#error').append('<div class="reveal alert alert-danger">একটি উত্তর বাছাই করুন!</div>')));

            radiovalidate(6);

        }

        else
        {
            $('#step6 .radio-btn').removeClass('bounce-left');
            $('#step6 .radio-btn').addClass('bounce-right');
            setTimeout(function()
            {
                next();
            }, 900)

        }
    })
    // check step7
    $("#step7btn").on('click', function()
    {
        radiovalidate(7);

        if(checkedradio == false)
        {

        (function (el) {
            setTimeout(function () {
                el.children().remove('.reveal');
            }, 3000);
            }($('#error').append('<div class="reveal alert alert-danger">একটি উত্তর বাছাই করুন!</div>')));

            radiovalidate(7);

        }

        else
        {
            $('#step7 .radio-btn').removeClass('bounce-left');
            $('#step7 .radio-btn').addClass('bounce-right');
            setTimeout(function()
            {
                next();
            }, 900)

        }
    })
    // check step8
    $("#step8btn").on('click', function()
    {
        radiovalidate(8);

        if(checkedradio == false)
        {

        (function (el) {
            setTimeout(function () {
                el.children().remove('.reveal');
            }, 3000);
            }($('#error').append('<div class="reveal alert alert-danger">একটি উত্তর বাছাই করুন!</div>')));

            radiovalidate(8);

        }

        else
        {
            $('#step8 .radio-btn').removeClass('bounce-left');
            $('#step8 .radio-btn').addClass('bounce-right');
            setTimeout(function()
            {
                next();
            }, 900)

        }
    })

    // check last step
    $("#sub").on('click', function()
    {
        radiovalidate(9);

        if(checkedradio == false)
        {

        (function (el) {
            setTimeout(function () {
                el.children().remove('.reveal');
            }, 3000);
            }($('#error').append('<div class="reveal alert alert-danger">একটি উত্তর বাছাই করুন!</div>')));

            radiovalidate(9);

        }

        else
        {
            showresult();
            $("#sub").html('done');

        }
    })
})
