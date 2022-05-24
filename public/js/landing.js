document.addEventListener("click", function(){
    document.getElementsByClassName('cookie-about-modal')[0].classList.remove('active');
    document.getElementsByTagName('body')[0].classList.remove('cookie-about-opened');
});
function openAboutModal(eve){
    eve.stopPropagation();
    document.getElementsByClassName('cookie-about-modal')[0].classList.add('active');
    document.getElementsByTagName('body')[0].classList.add('cookie-about-opened');
}
function preventClose(eve){
    eve.stopPropagation();
}

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}
function allowCookies(){
    setCookie('_ga', 'set', 730);
    setCookie('_gat', 'set', 730);
    document.getElementsByClassName('cookie-block')[0].classList.remove('active');
}
setTimeout(function(){
    if(getCookie('_ga') != 'set' || getCookie('_gat') != 'set'){
        document.getElementsByClassName('cookie-block')[0].classList.add('active');
    }
}, 500);