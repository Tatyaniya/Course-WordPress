$(function() {

    if($('.wayup_sortby').length) {

        var minprice = $('.wayup_sortby').data('minprice');
        var maxprice = $('.wayup_sortby').data('maxprice');

        $( "#slider-range" ).slider({
            range: true,
            min: minprice,
            max: maxprice,
            values: [ minprice, maxprice ],
            step: 1,
            slide: function( event, ui ) {
                $( "#priceMin" ).val( ui.values[ 0 ]);
                $( "#priceMax" ).val( ui.values[ 1 ]);
            },
            stop: function(event, ui) {
                wayup_get_posts();
            }
        });
        $( "#priceMin" ).val( $( "#slider-range" ).slider( "values", 0 ));
        $( "#priceMax" ).val( $( "#slider-range" ).slider( "values", 1 ));
    }

    //Find Selected Genres
    function getCats()
    {
        var cats = []; 
 
        $(".wayup_filter_check input:checked").each(function() {
            var val = $(this).val();
            cats.push(val);
        });     
 
        return cats; 
    }

    function getPricesMin() {
        var min_price = $('#priceMin').val();

        return min_price;
    }

    function getPricesMax() {
        var max_price = $('#priceMax').val();

        return max_price;        
    }

    $('.wayup_filter_check input').on('change', function() {
        wayup_get_posts();
    });

    $(document).on("click",".woocommerce .page-numbers",function(e){
        e.preventDefault();
 
        var url = $(this).attr('href'); //Grab the URL destination as a string
        var paged = url.split('&paged='); //Split the string at the occurance of &paged=
        
        if(~url.indexOf('&paged=')) {
            paged = url.split('&paged=');
        } else {
            paged = url.split('/page/');
        }
        
        wayup_get_posts(paged[1]); //Load Posts (feed in paged value)
    });

    $('#slider-range, #slider-range span').mouseup(function () {
        wayup_get_posts();
    });

  /*  $('.nav-links a.page-numbers').on('click', function(e){
        e.preventDefault();
 
        var url = $(this).attr('href'); //Grab the URL destination as a string
        var paged = url.split('&paged='); //Split the string at the occurance of &paged=
 
        wayup_get_posts(paged[1]); //Load Posts (feed in paged value)
    });*/

    //Main ajax function
    function wayup_get_posts(paged)
    {
        var paged_value = paged; //Store the paged value if it's being sent through when the function is called
        var ajax_url = wayup_settings.ajax_url; //Get ajax url (added through wp_localize_script)
 
        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
                action: 'wayup_filter',
                category: getCats,
                min: getPricesMin,
                max: getPricesMax,
                paged: paged_value //If paged value is being sent through with function call, store here
            },
            beforeSend: function ()
            {
                $('#main').html('идет загрузка...');
            },
            success: function(data)
            {
                //Hide loader here
                $('#main').html(data);
            },
            error: function()
            {
                                //If an ajax error has occured, do something here...
                $("#main").html('<p>There has been an error</p>');
            }
        });
    }
});