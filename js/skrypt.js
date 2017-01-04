$(document).ready(function () {
    $('.selectpicker').selectpicker();
    });
    
    $('.komunikat').hide();
$('.pass-is').hide();
            $('.user-is').hide();
            $('.email-is').hide();
    $('#register1').submit(function(e){
          e.preventDefault(); //bez przeladowywania
            $('.pass-is').hide();
            $('.user-is').hide();
            $('.email-is').hide();
          $.ajax({
              type: "POST",
              url: $('#register1').attr('action'),
              data: $('#register1').serialize(),
              success: function(data)
              {
                  console.log(data);
                  $('#register').modal('hide');
                  $('#komunikat-p').modal('show');
              },
              error: function(data)
              {
                  if(data.responseJSON.check_pass)
                  {
                    $('.pass-is').show();
                  }

                  if(data.responseJSON.check_user)
                  {
                    $('.user-is').show();
                  }

                  if(data.responseJSON.check_email)
                  { 
                    $('.email-is').show();
                  }

                  console.log(data);
              }
          });
      });
$('.zly-pass').hide();
$('.zly-user').hide();

    $('#login-nav').submit(function(e){
          e.preventDefault(); //bez przeladowywania
          $('.zly-pass').hide();
          $('.zly-user').hide();
          $.ajax({
              type: "POST",
              url: $('#login-nav').attr('action'),
              data: $('#login-nav').serialize(),
              success: function(data)
              {
                  console.log(data);
                  window.location.href = "http://serwis.dev:8080";
              }, 
              error: function(data)
              {
                  if(data.responseJSON.check_user)
                  {
                    $('.zly-user').show();
                  }
                  console.log(data);
              }
          });
      });



// NAJECHANIE W DÓŁ
$(function() {
      $('.kliknij').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

          var target = $(this.hash);

          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 80
            }, 700);
                
                
            return false;
          }
        }
      });
          
          
    });