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
              var state_of_location = document.getElementsByName('state_of_location')[0].value;
              var logo = document.getElementsByName('logo').files[0];
              var postData = {
                  cid : $('#cid').val(),
                  //logo : $('#logo').val(),
                  logo : logo,
                  company_name : $('#company_name').val(),
                  business_type :  $('#business_type').val(),
                  company_address :  $('#company_address').val(),
                  company_RC_NO :  $('#company_RC_NO').val(),
                  date_of_establishment :  $('#date_of_establishment').val(),
                  state_of_location :  state_of_location,
                  lga_of_location :  $('#displaylga').val(),
                  company_TIN : $('#company_TIN').val(),
                  company_email :  $('#company_email').val(),
                  website :  $('#website').val(),
                  company_contact_person :  $('#company_contact_person').val(),
                  company_contact_phone : $('#company_contact_phone').val(),
                  company_contact_email : $('#company_contact_email').val()
                };
                $.ajax({
                  url: '../../include/savecorporate.php',
                  type: 'POST',
                  data: postData,
                  success: function (data, status, xhr) {
                    $('#result').html(data);
                    alert(data);
                  },
                  error: function(jqXHR, status, errorThrown){
                    $("#result").html('there was an error ' + errorThrown + ' with status ' + textStatus);
                    alert(data);
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
