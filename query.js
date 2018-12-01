function meuCampo(){
var campo=document.getElementById('c_senha');

if(campo.value.length>0){
campo.focus();
campo.select();
return false;
}
else{
return true;

}
}
