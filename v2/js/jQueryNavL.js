$(document).ready(function(){
$('a[navid="Home"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/about.php','Title':'Home','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="atari"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/atari.php','Title':'Registro','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="gb"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/gb.php','Title':'Download','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="gba"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/gba.php','Title':'Donate','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="gbc"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/gbc.php','Title':'Chat','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="master"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/master.php','Title':'Sobre','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="mega"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/mega.php','Title':'Sobre','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="n64"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/about.php','Title':'Sobre','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="nes"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/nes.php','Title':'Sobre','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="snes"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/snes.php','Title':'Sobre','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
})