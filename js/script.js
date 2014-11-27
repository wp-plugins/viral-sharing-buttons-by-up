jQuery(document).ready(function() {

jQuery('.numbersOnly').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');
});


var player = jQuery('#updemo');
    var url = window.location.protocol + player.attr('src').split('?')[0];
    var status = jQuery('.status');

    // Listen for messages from the player
    if (window.addEventListener){
        window.addEventListener('message', onMessageReceived, false);
    }
    else {
        window.attachEvent('onmessage', onMessageReceived, false);
    }

    // Handle messages received from the player
    function onMessageReceived(e) {
        var data = JSON.parse(e.data);
        
        switch (data.event) {
            case 'ready':
                onReady();
                break;
        }
    }
   
    jQuery('#unmute').on('click', function() {
        post('setVolume', "0.5");
        jQuery(this).hide();
        
        ga('send', 'event', 'Widget Settings', 'Play Sound Click', 'WP Sharing Button Widget V3')
    });


    // Helper function for sending a message to the player
    function post(action, value) {
        var data = {
          method: action
        };
        
        if (value) {
            data.value = value;
        }
        
        var message = JSON.stringify(data);
        player[0].contentWindow.postMessage(data, url);
    }

    function onReady() {       
		post('play');
		post('setVolume', "0");		
    }

});
