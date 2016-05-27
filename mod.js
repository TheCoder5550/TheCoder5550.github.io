if (window.innerWidth < 1000) {
  setCookie("mod", "m", 365);
}
else {
  setCookie("mod", "d", 365);
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
