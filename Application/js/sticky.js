window.onscroll = function() {stickyMenu(), showBtnUpToTop()};
const menuTop = document.getElementById('menuTop');
var sticky = menuTop.offsetTop;

function show(id){
    document.getElementById(id).style.display = 'block';
}
function hide(id){
    document.getElementById(id).style.display = 'none';
}
function stickyMenu(){
    if(scrollY > 50){
        menuTop.classList.add('sticky');
    }
    else{
        menuTop.classList.remove('sticky');
    }
}
function showBtnUpToTop(){
    if(scrollY > 50){
        show('btnUpToTop')
    }
    else{
        hide('btnUpToTop')
    }
}