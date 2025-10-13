function menu_show(){
    let mobile_menu = document.querySelector('.mobile-menu');
    if(mobile_menu.classList.contains('open')){
        mobile_menu.classList.remove('open');
    }else{
        mobile_menu.classList.add('open');
    }
}
