/*
 cookie-warn.js

 Copyright 2016, Tam?s Schalk (github.com/schalkt)
 Licensed under the MIT

 @version 1.0.1

*/
(function(h){var f=function(a,b,c){if(void 0===b){var d,e=document.cookie.split(";");for(b=0;b<e.length;b++)if(c=e[b].substr(0,e[b].indexOf("=")),d=e[b].substr(e[b].indexOf("=")+1),c=c.replace(/^\s+|\s+$/g,""),c==a)return d}else c=c?c:14,d=new Date,d.setDate(d.getDate()+c),b+=null==c?"":"; expires="+d.toGMTString(),document.cookie=a+"="+b};f(h)||(window[h]={close:function(a){f(h,!0,a);(a=document.getElementById("cookieWarnBox"))&&a.parentNode.removeChild(a)}},document.addEventListener("DOMContentLoaded",
function(){var a,b,c,d,e,f,g;a=document.getElementById("cookieWarn");b=a.getAttribute("data-text");c=a.getAttribute("data-button");d=a.getAttribute("data-link");e=a.getAttribute("data-info");f=parseInt(a.getAttribute("data-expire"));a=a.getAttribute("data-style");({type:"text/css",style:document.createElement("style"),content:"#cookieWarnBox {position:fixed;line-height:24px; bottom:0;left:0;right:0;background-color:#212121;color:#f1f1f1;opacity:0.9;text-align:center;padding:10px;font-size:16px;}#cookieWarnBox span {text-transform:uppercase;cursor:pointer;background-color:#f1f1f1;color:#d71e41;padding:3px 14px;margin-left:10px;}#cookieWarnBox span:hover {background-color:#fefefe;} #cookieWarnBox a {text-decoration:none;color:#d71e41;}"+
a,append:function(){this.style.type=this.type;this.style.appendChild(document.createTextNode(this.content));document.head.appendChild(this.style)}}).append();g=document.createElement("div");g.setAttribute("id","cookieWarnBox");g.setAttribute("style",a.box);c='<span id="cookieWarnClose" onclick="'+h+".close("+f+');">'+c+"</span>";g.innerHTML='<div class="text">'+b+(d&&e?' <a target="_blank" href="'+d+'">'+e+"</a> ":"")+c+"</div>";document.getElementsByTagName("body")[0].appendChild(g)},!1))})("cookieWarn");