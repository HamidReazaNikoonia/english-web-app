(function() {

    // HasWegGL
    var canvas;
    var ctx;

    try {
        canvas = document.createElement("canvas");
        ctx = canvas.getContext("webgl") || canvas.getContext("experimental-webgl");
    }
    catch (e) {
        //console.log("catch error " + e);
    }

    canvas = undefined;


    var isChromeOniPad = ( navigator.userAgent.match(/iPad/gi) != null && navigator.userAgent.match(/CriOS/gi) != null );

    // modern
    if (isChromeOniPad == false && ctx && ctx !== undefined) {// Detection for ipad and chrome
        // document.write('<script type="text/javascript" src="http://curvy.dk/beagle/site/js/application.js"></script>');
        document.write('<script type="text/javascript" src="./assets/js/application.js"></script>');
        //document.write('<link type="text/css" rel="stylesheet" media="all" href="/style/application.css" />');
    }
    // fallback - no webgl
    else {
        document.write('<script type="text/javascript" src="http://curvy.dk/beagle/site/fallback/fallback.js"></script>');
        document.write('<link type="text/css" rel="stylesheet" media="all" href="'+window.APPLICATION_CSS+'" />');
    }


})();