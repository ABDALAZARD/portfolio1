$(document).ready(function() {

    // Stacks

    $('#PHP').on('mouseenter', function() {
        console.log('Mouse sobre PHP');
        $('#PHP').css('background-color', 'black')
        .css('color','white')

        $('#Portfolio_Creator').css('background-color', 'black')
        .css('color','white')
        
    }).on('mouseleave', function() {
        console.log('Mouse fora de PHP');
        $('#PHP').css('background-color', 'white')
        .css('color','black')
        
        $('#Portfolio_Creator').css('background-color', 'white')
        .css('color','black')         
    });
    $('#Laravel').on('mouseenter', function() {
        console.log('Mouse sobre Laravel');
        $('#Laravel').css('background-color', 'black')
        .css('color','white')
        
        // Dentro da ferramenta Laravel, lado profile
        
    }).on('mouseleave', function() {
        console.log('Mouse fora de Laravel');
        $('#Laravel').css('background-color', 'white')
        .css('color','black')
        
        // Dentro da ferramenta Laravel, lado profile
        
    });
    $('#JQuery').on('mouseenter', function() {
        console.log('Mouse sobre JQuery');
        $('#JQuery').css('background-color', 'black')
            .css('color','white')
            
        $('#Portfolio_Creator').css('background-color', 'black')
        .css('color','white')
        
        // Dentro da ferramenta JQuery, lado profile
        
    }).on('mouseleave', function() {
        console.log('Mouse fora de JQuery');
        $('#JQuery').css('background-color', 'white')
        .css('color','black')
        
        $('#Portfolio_Creator').css('background-color', 'white')
        .css('color','black')        
    });
    $('#React').on('mouseenter', function() {
        console.log('Mouse sobre React');
        $('#React').css('background-color', 'black')
        .css('color','white')
        
        // Dentro da ferramenta React, lado profile
        
    }).on('mouseleave', function() {
        console.log('Mouse fora de React');
        $('#React').css('background-color', 'white')
        .css('color','black')
        
        // Dentro da ferramenta React, lado profile
        
    });
    $('#React-Native').on('mouseenter', function() {
        console.log('Mouse sobre React-Native');
        $('#React-Native').css('background-color', 'black')
        .css('color','white')
        
        // Dentro da ferramenta React-Native, lado profile
        
    }).on('mouseleave', function() {
        console.log('Mouse fora de React-Native');
        $('#React-Native').css('background-color', 'white')
        .css('color','black')
        
        // Dentro da ferramenta React-Native, lado profile
        
    });



    // Projetos
    $('#Portfolio_Creator').on('mouseenter', function() {

        $('#Portfolio_Creator').css('background-color', 'black')
        .css('color','white')

        $('#PHP').css('background-color', 'black')
        .css('color','white')
        
        $('#JQuery').css('background-color', 'black')
        .css('color','white')

    }).on('mouseleave', function() {
        console.log('Mouse fora de Portfolio Creator');
        $('#Portfolio_Creator').css('background-color', 'white')
        .css('color','black')

        $('#PHP').css('background-color', 'white')
        .css('color','black')

        $('#JQuery').css('background-color', 'white')
        .css('color','black')
                
    });
});
