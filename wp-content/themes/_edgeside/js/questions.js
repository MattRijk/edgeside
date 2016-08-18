window.onload = function() {
    if (window.jQuery.ui) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}


var parent = $('#toggle-view'), // storing main ul for use below
    delay = 200; // storing delay for easier configuration

// bind the click to all headers
jQuery('li h3, li span', parent).click(function() {
    
    // get the li that this header belongs to
    var li = $(this).closest('li');
    
    // check to see if this li is not already being displayed
    if (!$('p', li).is(':visible'))
    {
        // loop on all the li elements
        $('li', parent).each(function() {
            
            // slide up the element and set it's marker to '+' 
            $('p', $(this)).slideUp(delay);
           
        });
    
        // display the current li with a '-' marker
        $('p', li).slideDown(delay);
       
    }
    else {
        $('p', li).slideUp(delay);
          
    }
    $('span',li).toggleClass('glyphicon-plus glyphicon-minus');
});