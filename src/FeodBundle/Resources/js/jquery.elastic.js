(function(g){g.fn.extend({elastic:function(){var i=["paddingTop","paddingRight","paddingBottom","paddingLeft","fontSize","lineHeight","fontFamily","width","fontWeight"],m=function(f){f=f||"";var b=function(){return((1+Math.random())*65536|0).toString(16).substring(1)};return f+b()+b()+"-"+b()+"-"+b()+"-"+b()+"-"+b()+b()+b()};return this.each(function(){function f(e,j){curratedHeight=Math.floor(parseInt(e,10));a.height()!=curratedHeight&&a.css({height:curratedHeight+"px",overflow:j})}function b(){var e=
a.val().replace(/&/g,"&amp;").replace(/  /g,"&nbsp;").replace(/<|>/g,"&gt;").replace(/\n/g,"<br />"),j=c.html().replace(/<br>/ig,"<br />");if(e+"&nbsp;"!=j||a.width()!=c.width()){c.width(a.width());c.html(e+"&nbsp;");if(Math.abs(c.height()+k-a.height())>3){e=c.height()+k;if(e>=h)f(h,"auto");else e<=l?f(l,"hidden"):f(e,"hidden")}}}if(this.type!="textarea")return false;var a=g(this),c=null,d=a.data("elastic-twin");if(d){c=g("#"+d);b();return false}var k=parseInt(a.css("line-height"),10)||parseInt(a.css("font-size"),
"10"),l=parseInt(a.css("height"),10)||k*3,h=parseInt(a.css("max-height"),10)||Number.MAX_VALUE;d=0;d=m("elastic");c=g("<div />").css({position:"absolute",display:"none","word-wrap":"break-word"});c.attr("id",d);a.data("elastic-twin",d);if(h<0)h=Number.MAX_VALUE;c.appendTo(a.parent());for(d=i.length;d--;)c.css(i[d].toString(),a.css(i[d].toString()));a.css({overflow:"hidden"});a.keyup(function(){b()});a.bind("elasticupdate",function(){b()});a.live("input paste",function(){setTimeout(b,500)});b()})}})})(jQuery);