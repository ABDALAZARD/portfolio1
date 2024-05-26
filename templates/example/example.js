$(document).ready(function() {
    $('.modal').modal();

    // Stacks
    $('#PHP').on('mouseenter', function() {
        $('#PHP').css('background-color', 'black')
        .css('color','white')

        $('#Portfolio_Creator').css('background-color', 'black')
        .css('color','white')
        
    }).on('mouseleave', function() {
        $('#PHP').css('background-color', 'white')
        .css('color','black')
        
        $('#Portfolio_Creator').css('background-color', 'white')
        .css('color','black')         
    });
    $('#Laravel').on('mouseenter', function() {
        $('#Laravel').css('background-color', 'black')
        .css('color','white')
        
        // Dentro da ferramenta Laravel, lado profile
        
    }).on('mouseleave', function() {
        $('#Laravel').css('background-color', 'white')
        .css('color','black')
        
        // Dentro da ferramenta Laravel, lado profile
        
    });
    $('#JQuery').on('mouseenter', function() {
        $('#JQuery').css('background-color', 'black')
            .css('color','white')
            
        $('#Portfolio_Creator').css('background-color', 'black')
        .css('color','white')
        
        // Dentro da ferramenta JQuery, lado profile
        
    }).on('mouseleave', function() {
        $('#JQuery').css('background-color', 'white')
        .css('color','black')
        
        $('#Portfolio_Creator').css('background-color', 'white')
        .css('color','black')        
    });
    $('#React').on('mouseenter', function() {
        $('#React').css('background-color', 'black')
        .css('color','white')
        
        // Dentro da ferramenta React, lado profile
        
    }).on('mouseleave', function() {
        $('#React').css('background-color', 'white')
        .css('color','black')
        
        // Dentro da ferramenta React, lado profile
        
    });
    $('#React-Native').on('mouseenter', function() {
        $('#React-Native').css('background-color', 'black')
        .css('color','white')
        
        // Dentro da ferramenta React-Native, lado profile
        
    }).on('mouseleave', function() {
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
        $('#Portfolio_Creator').css('background-color', 'white')
        .css('color','black')

        $('#PHP').css('background-color', 'white')
        .css('color','black')

        $('#JQuery').css('background-color', 'white')
        .css('color','black')
                
    });

    // Others
    $('#palestra1').on('mouseenter', function() {
        $('#palestra1').css('background-color', 'black')
        .css('color','white')       
    }).on('mouseleave', function() {
        $('#palestra1').css('background-color', 'white')
        .css('color','black')
    });
});
