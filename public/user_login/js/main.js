$(function () {

     'use strict';

     // Form

     var contactForm = function () {

          if ($('#contactForm').length > 0) {
               $("#contactForm").validate({
                    rules: {
                         name: "required"
                    },
                    messages: {
                         name: "Silahkan masukkan NIK anda terlebih dahulu"
                    },
                    /* submit via ajax */
                    submitHandler: function (form) {
                         var $submit = $('.submitting'),
                              waitText = 'Login in...';

                         $.ajax({
                              type: "POST",
                              url: "php/send-email.php",
                              data: $(form).serialize(),

                              beforeSend: function () {
                                   $submit.css('display', 'block').text(waitText);
                              },
                              success: function (msg) {
                                   if (msg == 'OK') {
                                        $('#form-message-warning').hide();
                                        setTimeout(function () {
                                             $('#contactForm').fadeOut();
                                        }, 1000);
                                        setTimeout(function () {
                                             $('#form-message-success').fadeIn();
                                        }, 1400);

                                   } else {
                                        $('#form-message-warning').html(msg);
                                        $('#form-message-warning').fadeIn();
                                        $submit.css('display', 'none');
                                   }
                              },
                              error: function () {
                                   $('#form-message-warning').html("Ups sepertinya terjadi kesalahan. Silahkan coba lagi.");
                                   $('#form-message-warning').fadeIn();
                                   $submit.css('display', 'none');
                              }
                         });
                    }

               });
          }
     };
     contactForm();

});