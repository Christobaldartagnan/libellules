$(document).ready(function(){

// var $i=$('.js-like-article-count').html();

$('.js-like-article').on('click',function(e){
    
    e.preventDefault();
var $link=$(e.currentTarget);
$link.toggleClass('fa-heart-o').toggleClass('fa-heart');

// $link.hasClass('fa-heart-o')?$i--:$i++;

$.ajax({
method:"POST",
url:$link.attr('href')
}).done(function(data){
    $('.js-like-article-count').html(data.hearts);
});



});

});