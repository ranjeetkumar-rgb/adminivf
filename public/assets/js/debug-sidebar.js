// Debug script for hamburger menu functionality
console.log('Debug script loaded');

// Check if jQuery is available
if (typeof $ !== 'undefined') {
    console.log('jQuery is available');
    
    // Check if the hamburger button exists
    if ($('#vertical-menu-btn').length > 0) {
        console.log('Hamburger button found');
        
        // Get button details
        var $btn = $('#vertical-menu-btn');
        console.log('Button HTML:', $btn.prop('outerHTML'));
        console.log('Button position:', $btn.offset());
        console.log('Button dimensions:', {width: $btn.width(), height: $btn.height()});
        console.log('Button is visible:', $btn.is(':visible'));
        console.log('Button CSS display:', $btn.css('display'));
        console.log('Button CSS pointer-events:', $btn.css('pointer-events'));
        
        // Don't remove existing click handlers - let the main app.js handle the functionality
        // Just add a debug listener that doesn't interfere
        $btn.on('click.debug', function(e) {
            console.log('=== HAMBURGER BUTTON CLICKED (DEBUG) ===');
            console.log('Event:', e);
            console.log('Window width:', $(window).width());
            console.log('Current sidebar size:', document.body.getAttribute('data-sidebar-size'));
            console.log('Sidebar enable class:', $('body').hasClass('sidebar-enable'));
            console.log('Body attributes:', document.body.getAttributeNames());
        });
        
    } else {
        console.log('Hamburger button not found');
        console.log('All buttons on page:', $('button').length);
        console.log('All elements with vertical-menu-btn class:', $('.vertical-menu-btn').length);
    }
    
    // Check sidebar state on page load
    $(document).ready(function() {
        console.log('=== PAGE LOADED ===');
        console.log('Initial sidebar size:', document.body.getAttribute('data-sidebar-size'));
        console.log('Initial sidebar enable class:', $('body').hasClass('sidebar-enable'));
        console.log('Window width:', $(window).width());
        console.log('Body data attributes:', document.body.getAttributeNames());
        
        // Check if sidebar is visible
        console.log('Sidebar visibility:', $('.vertical-menu').is(':visible'));
        console.log('Sidebar CSS display:', $('.vertical-menu').css('display'));
        
        // Check for schema management menu activation
        setTimeout(function() {
            console.log('=== CHECKING SCHEMA MENU ===');
            var schemaMenu = $('a[href*="schema"]').closest('li').parent().parent();
            console.log('Schema menu found:', schemaMenu.length > 0);
            if (schemaMenu.length > 0) {
                console.log('Schema menu classes:', schemaMenu.attr('class'));
                console.log('Schema menu aria-expanded:', schemaMenu.find('> a').attr('aria-expanded'));
            }
            
            // Check if current page is schema related
            var currentUrl = window.location.href;
            console.log('Current URL:', currentUrl);
            console.log('Is schema page:', currentUrl.includes('schema'));
        }, 500);
    });
} else {
    console.log('jQuery is not available');
} 