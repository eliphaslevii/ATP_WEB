document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelector('.sidenav');
    var instances = M.Sidenav.init(elems)
})
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
});

document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems)
})

document.addEventListener('DOMContentLoaded',function () {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems)

})

document.addEventListener('DOMContentLoaded',function () {
    var elems = document.querySelectorAll('.character-counter')
    var instances = M.CharacterCounter.init(elems)
})

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
});

document.addEventListener('DOMContentLoaded',function () {
    var elems = document.querySelectorAll('tabs');
    var instances = M.Tabs.init(elems);
})



// Or with jQuery

$(document).ready(function () {

    $('#menu').hover(
        function (){ $(this).addClass('pulse') },
        function(){ $(this).removeClass('pulse') }
    )

    $('#desc_item').val('')


    $("#edit").click(function(){

        $('#id').prop('readonly',true)
        $('#name').prop('readonly',false)
        $('#email').prop('readonly',false)
        $('#born').prop('readonly',false)
        $('#contact').prop('readonly',false)
        $('#name').select()

        M.toast({html: 'Cuidado! Você está prestes a alterar seus dados', classes: 'rounded yellow darken-2 black-text text-darken-5'});

        });

})

$('.dropdown-trigger').dropdown();

function onClick(e) {
    e.preventDefault();
    grecaptcha.ready(function () {
        grecaptcha.execute('6LeOU_MUAAAAAM_5L24vwHRgVnGxM7NQz9X5zplL', {action: 'submit'}).then(function (token) {
        });
    });
}

