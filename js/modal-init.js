// JavaScript source code

fuction() {
    var $content = $('#popUp').detach();

    $('#share').on('click', function () {
        modal.open({ content: $content });
    });
};