$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'ย้อนกลับ',
            next : 'ถัดไป',
            finish : 'ยืนยัน',
            current : ''
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            var fullname = $('#first_name').val() + ' ' + $('#last_name').val();   
            var category_name = $('#category_name').val();
            var length = $('#length').val();
            var id_card = $('#id_card').val();
            var email = $('#email').val();
            var age = $('#age').val()+' ปี';
            var price = $('#price').val();

            $('#fullname-val').text(fullname);
            $('#category_name-val').text(category_name);
            $('#length-val').text(length);
            $('#id_card-val').text(id_card);
            $('#email-val').text(email);
            $('#age-val').text(age);
            $('#price-val').text(price);

            $(function(){ 
                $("#category_name").change(function(){
                    var display = $("#category_name option:selected").text();         
                      if ( display =='FUN RUN' || display=='MINI MARATHON'){ 
                        $("#price").val('550 บาท')
                      }
                      else if ( display=='VIP'){ 
                        $("#price").val('1000 บาท')
                      }
                      else if ( display=='Super VIP'){ 
                        $("#price").val('1200 บาท')
                      }
                   
                    
                })
            })
           
           
            return true;
        }

    });
    $("#day").datepicker({
        dateFormat: "MM - DD - yy",
        showOn: "both",
        buttonText : '<i class="zmdi zmdi-chevron-down"></i>',
    });
});
