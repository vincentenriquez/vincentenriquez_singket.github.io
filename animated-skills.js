$(document).ready(function () {
    var skillsOffset = $("#skills").offset().top;
    var skillsAnimated = false; // Flag to check if animation has already run
  
    $(window).scroll(function () {
      var windowHeight = $(window).height();
      var scrollPos = $(window).scrollTop();
  
      if (!skillsAnimated && scrollPos + windowHeight > skillsOffset) {
        skillsAnimated = true; // Set flag to true after the animation starts
  
        $(".skills-item").each(function () {
          var progress = $(this).data("progress");
          var skillItem = $(this);
          var percentageSpan = $(this).find("span");
  
          // Animate the border progress and text percentage
          $({ progressValue: 0 }).animate(
            { progressValue: progress },
            {
              duration: 3500,
              easing: "swing",
              step: function (now) {
                // Update border gradient
                var gradient = `conic-gradient(#F2ECBE 0% ${now}%, #9A3B3B ${now}% 100%)`;
                skillItem.css("border-image", gradient).css("border-image-slice", "1");
  
                // Update the percentage text
                percentageSpan.text(Math.floor(now) + "%");
              },
            }
          );
        });
      }
    });
  });
  