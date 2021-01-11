$('body').scrollspy({ target: '#navbar-example2' })

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("jumbotron").style.fontSize = "20px";
        document.getElementById("logo").style.width="30px";
        document.getElementById("logo").style.height="20px";
    }
    else {
        document.getElementById("jumbotron").style.fontSize = "40px";
        document.getElementById("logo").style.width="240px";
        document.getElementById("logo").style.height="240px";
    }
}
