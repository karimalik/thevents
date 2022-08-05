$(function () {
    // $.validator.setDefaults({
    //   submitHandler: function () {
    //     alert( "Form successful submitted!" );
    //   }
    // });
    $('#submitForm').validate({
      rules: {
        name: {
          required: true,
        },
        date: {
          required: true,
        },
      },
      messages: {
        name: {
          required: "Please enter a name",
        },
        date: {
          required: "Please provide a password",
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
});