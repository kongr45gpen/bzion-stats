
$(document).ready(function() {

    // Store the object
    var $duration = $(".duration");


    var resizer = function () {
        console.log("ready");
        var desiredWidth = $(".landing").width() - 0.015*$(window).width();

        var currentWidth = $duration.outerWidth();
        var currentSize = parseFloat($duration.css('font-size'));
        var desiredSize = currentSize * desiredWidth / currentWidth;
        var currentSpace = parseFloat($duration.css('letter-spacing'));
        var desiredSpace = currentSpace * desiredWidth / currentWidth;

        $duration.css('letter-spacing', desiredSpace);
        $duration.css('font-size', desiredSize);

    };

    //activeCallback.add(resizer);

    resizer();

    setTimeout(resizer, 2000);

});