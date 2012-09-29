require(["jquery", "nvc/views/search" ]
    , function($, SearchView) {
        var v= new SearchView({el:$('#main')});
        v.render();
    });