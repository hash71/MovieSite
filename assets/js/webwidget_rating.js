(function(a){
    a.fn.webwidget_rating=function(p){
        var p=p||{};

        var b=p&&p.rating_star_length?p.rating_star_length:"5";
        var c=p&&p.rating_function_name?p.rating_function_name:"";
        var e=p&&p.rating_default_value?p.rating_default_value:"";
        var d=p&&p.directory?p.directory:"images";
        var f="";
        var g=a(this);
        b=parseInt(b);
        init();
        g.next("ul").children("li").hover(function(){
            $(this).parent().children("li").css('background-position','0px 0px');
            var a=$(this).parent().children("li").index($(this));
            $(this).parent().children("li").slice(0,a+1).css('background-position','0px -25px')
            },function(){});
        g.next("ul").children("li").click(function(){
            var a=$(this).parent().children("li").index($(this));
            f=a+1;
            g.val(f);
            if(c!=""){
                eval(c+"("+g.val()+")")
                }
				//edited
				document.getElementById("myrate").value = g.val();
            });
    g.next("ul").hover(function(){},function(){
        if(f==""){
            $(this).children("li").slice(0,f).css('background-position','0px 0px')
            }else{
            $(this).children("li").css('background-position','0px 0px');
            $(this).children("li").slice(0,f).css('background-position','0px -50px')
            }
        });
function init(){
    $('<div style="clear:both;"></div>').insertAfter(g);
    g.css("float","left");
    var a=$("<ul>");
    a.addClass("webwidget_rating");
    for(var i=1;i<=b;i++){
        a.append('<li style="background-image:url(http://localhost/MovieSite/assets/images/web_widget_star.gif)"><span>'+i+'</span></li>')
        }
        a.insertAfter(g);
    if(e!=""){
        f=e;
        g.val(e);
        g.next("ul").children("li").slice(0,f).css('background-position','0px -50px')
        }
    }
}
})(jQuery);