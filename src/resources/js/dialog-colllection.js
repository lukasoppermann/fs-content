var formsubmit = function(){
    var elements = document.querySelectorAll('[data-submit-form]');
    Array.prototype.forEach.call(elements, function(el, i){
        el.addEventListener('click', function(){
            var element = document.querySelector('[name='+el.getAttribute('data-submit-form')+']');
            element.querySelector('[type=submit]').click();
        });
    });
}
// Toggle dialog js
var elements = document.querySelectorAll('[data-dialog-link]');
Array.prototype.forEach.call(elements, function(el, i){
    el.addEventListener('click', function(evt){
        evt.preventDefault()
        // show dialog
        document.querySelector('[data-dialog]').classList.remove('is-hidden');

        fetch(el.getAttribute('data-dialog-link'), {
            credentials: 'same-origin'
        })
        .then(function(response) {
            return response.text()
        }).then(function(dialog) {
            document.querySelector('[data-dialog-loading]').classList.add('is-hidden');
            document.querySelector('[data-dialog-content]').innerHTML = dialog;
            inputs();
            formsubmit();
        });
    });
});

document.querySelector('[data-close-dialog]').addEventListener('click', function(){
    document.querySelector('[data-dialog]').classList.add('is-hidden');
    document.querySelector('[data-dialog-content]').innerHTML = "";
    document.querySelector('[data-dialog-loading]').classList.remove('is-hidden');
});
