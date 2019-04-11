$(document).ready(function(){
    $('.logo-img').hide();
    wait(1000);
    $('.logo-img').show(3000,"linear");
    $('.logo-img').fadeIn(3000);
    setInterval(anime,5000);
});

function wait(ms){
        var start = new Date().getTime();
        var end = start;
        while(end < start + ms) {
            end = new Date().getTime();
        }
};

function anime(){
    $('.logo-img').fadeIn(3000);
    wait(2000);
    $('.logo-img').fadeOut(3000);
}