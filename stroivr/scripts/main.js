$(document).ready(function(){
            $('#as_applicationBut').click(function(){
                // собираем данные с формы
                var user_name    = $('#as_applicationName').val();
                var user_phone   = $('#as_applicationTelephone').val();
                
                if($.trim(user_name)&& $.trim(user_phone)){
                // отправляем данные
                $.ajax({
                    url: "mail.php", // куда отправляем
                    type: "post", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                        "name":    user_name,
                        "telephone":    user_phone
                    },
                    // после получения ответа сервера
                    complete: function(data){
                        $('#as_applicationName').val('');
                        $('#as_applicationTelephone').val('');
                        change1();
                        
                       // console.log(data.result);
                       // change1();// выводим анимацию
                   }       
                });}else{
                    change2();
                }
            });

            $('#as_appBut').click(function(){
                // собираем данные с формы
                var user_name    = $('#as_appName').val();
                var user_phone   = $('#as_appTelephone').val();
                
                if($.trim(user_name)&& $.trim(user_phone)){
                // отправляем данные
                $.ajax({
                    url: "mail.php", // куда отправляем
                    type: "post", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                        "name":    user_name,
                        "telephone":    user_phone
                    },
                    // после получения ответа сервера
                    complete: function(data){
                        $('#as_appName').val('');
                        $('#as_appTelephone').val('');
                        change4();
                        
                       // console.log(data.result);
                       // change1();// выводим анимацию
                   }       
                });}else{
                    change5();
                }
            });
        });

    function change1(){
        document.getElementById('as_text').innerHTML = "Заявка принята!";
        setTimeout(change0, 5000);
    }

    function change0(){
        document.getElementById('as_text').innerHTML = "Оставить заявку";
    }
    
    function change2(){
        document.getElementById('as_text').innerHTML = "Заполните все поля!";
        setTimeout(change0, 5000);
    }

    function change4(){
        document.getElementById('as_change_text').innerHTML = "Заявка принята!";
        setTimeout(change3, 5000);
    }

    function change3(){
        document.getElementById('as_change_text').innerHTML = "Оставить заявку";
    }
    
    function change5(){
        document.getElementById('as_change_text').innerHTML = "Заполните все поля!";
        setTimeout(change3, 5000);
    }