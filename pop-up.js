function fechaPopUp(){
document.getElementById('pop-up').style.background='none';
}
function abrePopUp(){
document.getElementById('pop-up').style.background='block'; setTimeout("fechaPopUp()",3000);
}
var popup = window.open('pop-up.html','conteudo','height=325, width=500, resizable=no');

function movePopUp(){
popup.moveTo(400,200);
popup.focus();
}