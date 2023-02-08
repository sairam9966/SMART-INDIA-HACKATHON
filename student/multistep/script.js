$(document).ready(function () {
  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var isFilled = 0;
  var steps = $("fieldset").length;

  setProgressBar(current);

  $(".next").click(function () {
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    isFilled = 0;

    if (current == 1) {
        //Add Class Active
        $("#progressbar li")
          .eq($("fieldset").index(next_fs))
          .addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate(
          { opacity: 0 },
          {
            step: function (now) {
              // for making fielset appear animation
              opacity = 1 - now;

              current_fs.css({
                display: "none",
                position: "relative",
              });
              next_fs.css({ opacity: opacity });
            },
            duration: 500,
          }
        );

        isFilled = 1;
        // setProgressBar(++current);
    }

    if (current == 2) {
        //Add Class Active
        $("#progressbar li")
          .eq($("fieldset").index(next_fs))
          .addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate(
          { opacity: 0 },
          {
            step: function (now) {
              // for making fielset appear animation
              opacity = 1 - now;

              current_fs.css({
                display: "none",
                position: "relative",
              });
              next_fs.css({ opacity: opacity });
            },
            duration: 500,
          }
        );
        isFilled = 1;
        // setProgressBar(++current);
    }

    // if (current == 3) {
    //   if (
    //     document.getElementById("idea-file").files.length == 0 ||
    //     document.getElementById("idea-image1").files.length == 0 ||
    //     document.getElementById("idea-image2").files.length == 0 ||
    //     document.getElementById("idea-image3").files.length == 0
    //   ) {
    //     swal("Fill all !!", "Try again with differrent email", "warning");
    //     isFilled = 0;
    //   } else {
    //     isFilled = 1;
    //     swal({
    //       title: "Idea submitted successfully !",
    //       // text: "You clicked the button!",
    //       icon: "success",
    //       button: "OK",
    //     }).then(function(){
    //       document.getElementById("msform").submit();
    //     })
    //   }
    // }

    if (isFilled == 1) setProgressBar(++current);
  });

  $("#msform").submit(function(e){
    e.preventDefault();
    var formd = new FormData(this);
    if (document.getElementById("idea-file").files.length == 0 || document.getElementById("idea-image1").files.length == 0 || document.getElementById("idea-image2").files.length == 0 || document.getElementById("idea-image3").files.length == 0) {
      swal("Fill all !!", "Try again with differrent email", "warning");
      isFilled = 0;
    } 
    else {
      isFilled = 1;
      swal({
        title: "Idea submitted successfully !",
        icon: "success",
        button: "OK",
      }).then(function(){
        $.ajax({
          url:'process.php',
          type:'POST',
          data: formd,
          contentType: false,
          processData: false
        });
        window.location.href = './view-idea.php'
        window.location.reload();
      })
    }
    return false;
  })

  $(".previous").click(function () {
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li")
      .eq($("fieldset").index(current_fs))
      .removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: "none",
            position: "relative",
          });
          previous_fs.css({ opacity: opacity });
        },
        duration: 500,
      }
    );
    setProgressBar(--current);
  });

  function setProgressBar(curStep) {
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar").css("width", percent + "%");
  }

  $(".submit").click(function () {
    console.log("submit clicked current = ", current);
    return false;
  });
});
