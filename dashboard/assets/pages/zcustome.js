!function($) {
    "use strict";

    var FormWizard = function() {};

    FormWizard.prototype.createBasic = function($form_container) {
        $form_container.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onFinishing: function (event, currentIndex) {
                //NOTE: Here you can do form validation and return true or false based on your validation logic
                console.log("Form has been validated!");
                return true;
            },
            onFinished: function (event, currentIndex) {
               //NOTE: Submit the form, if all validation passed.
                console.log("Form can be submitted using submit method. E.g. $('#basic-form').submit()");
                $("#basic-form").submit();

            }
        });
        return $form_container;
    },
    //creates form with validation
    FormWizard.prototype.createValidatorForm = function($form_container) {
        $form_container.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.after(error);
            }
        });
        $form_container.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                $form_container.validate().settings.ignore = ":disabled,:hidden";
                return $form_container.valid();
            },
            onFinishing: function (event, currentIndex) {
                $form_container.validate().settings.ignore = ":disabled";
                return $form_container.valid();
            },
            onFinished: function (event, currentIndex) {
              var dob = document.getElementsByName('dob')[0].value;
              var lga_of_origin = document.getElementsByName('lga_of_origin')[0].value;
              var postData = {
                  uid : $('#uid').val(),
                  fname : $('#lname').val(),
                  lname :  $('#fname').val(),
                  mname :  $('#mname').val(),
                  email :  $('#email').val(),
                  address :  $('#address').val(),
                  nok :  $('#nok').val(),
                  dob : dob,
                  permaddress : $('#permananet_address').val(),
                  gender :  $('#gender').val(),
                  marital_status :  $('#marital_status').val(),
                  phone :  $('#phone').val(),
                  state_of_origin : $('#state_of_origin').val(),
                  LGA_of_origin : lga_of_origin,
                  state_of_residence : $('#state_of_residence').val(),
                  LGA_of_residence : $('#LGA_of_residence').val()
                };
                $.ajax({
                  url: '../include/savedetails.php',
                  type: 'POST',
                  data: postData,
                  success: function (data, status, xhr) {
                    $('#result').html(data);
                  },
                  error: function(jqXHR, status, errorThrown){
                    $("#result").html('there was an error ' + errorThrown + ' with status ' + textStatus);
                  }
                });
                alert("Records Successfully saved!");
                // alert("Submitteddd!");
            }
        });

        return $form_container;
    },
    //creates vertical form
    FormWizard.prototype.createVertical = function($form_container) {
        $form_container.steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            stepsOrientation: "vertical"
        });
        return $form_container;
    },
    FormWizard.prototype.init = function() {
        //initialzing various forms

        //basic form
        this.createBasic($("#basic-form"));

        //form with validation
        this.createValidatorForm($("#wizard-validation-form"));

        //vertical form
        this.createVertical($("#wizard-vertical"));
    },
    //init
    $.FormWizard = new FormWizard, $.FormWizard.Constructor = FormWizard
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.FormWizard.init()
}(window.jQuery);
