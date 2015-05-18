//Проверка, поддерживает ли браузер history.js
function check_if_enabled(){
    if(History.enabled){
        return true;
    }else{
        return false;
    };
}
//Главный обработчик
//Параметр - url, к которому будет обращаться обработчик
function handle_links(url){
    $('a').on('click',function(e){//При клике на любую ссылку
        e.preventDefault();
        if(check_if_enabled()){//Если браузер поддерживает History.js
            addr = $(this).attr("href");
            $.ajax({
               type:"POST",
               url:url,
               data:"address=" + addr,
               success:function(content){
                   $('.content-container').html(content);
               }
            });
        }else{
            console.log('Ваш браузер не поддерживает History.js.Асинхронная загрузка контента невозможна');
        }
    })
}