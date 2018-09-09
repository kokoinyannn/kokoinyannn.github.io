$(document).ready(function(){
$('li.mainmenu').hover(function(){
    $(this).find('ul.submenu').toggle();
});
});