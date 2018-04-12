$(document).ready(function(){
    $('.btn').on('click',function(e){

        if (this.hash !== ""){
            e.preventDefault();
            var hash = this.hash;

            $('html, body').animate(
                {scrollTop: $(hash).offset().top},
                500,
                function(){
                    window.location.hash = hash;
                }
            );
        }

    })

    $('.navigation__link').on('click',function(){
        $('.navigation__checkbox').prop('checked',false);
    });

});
