$(function() {
  // start bootstrapValidator
  var document = {
    message: "This value is not valid",
    feedbackIcons: {
      valid: "glyphicon glyphicon-ok",
      invalid: "glyphicon glyphicon-remove",
      validating: "glyphicon glyphicon-refresh"
    },
    fields: {
      name: {
        validators: {
          notEmpty: {
            message: "Name should not be blank"
          }
        }
      },
      email: {
        validators: {
          notEmpty: {
            message: "Email should not be blank"
          },
          regexp: {
            regexp: /^[\w+\-.]+@[a-z\d\-.]+\.[a-z]+$/i,
            message: "Enter a valid email address"
          }
        }
      },
      message: {
        validators: {
          notEmpty: {
            message: "Message should not be blank"
          }
        }
      }
    }
  };

  $("#contactForm").bootstrapValidator(document)
  .on("success.form.bv", function(e) {
    // Prevent form submission
    e.preventDefault();

    // Get the form instance
    var $form = $(e.target);

    // Get the BootstrapValidator instance
    var bv = $form.data("bootstrapValidator");

    // Use Ajax to submit form data
    $.post(
      $form.attr("action"),
      $form.serialize(),
      function(result) {
        $("button[type=submit]").removeAttr("disabled");

        if(!result.errors.length) {
          alert("Your message has been sent successfully!");
        } else {
          var error_message = "";
          for (var i = 0; i < result.errors.length; i++) {
            error_message += result.errors[i][1] + "\n";
          }

          alert(error_message.slice(0,-1)); // remove newline character
        }
      },
      "json"
    );
  });
  // end bootstrapValidator

  // start hideNavbar
	$("#navbar-main").hide();

	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$("#navbar-main").fadeIn();
		} else {
			$("#navbar-main").fadeOut();
		}
	});
  // end hideNavbar
});
