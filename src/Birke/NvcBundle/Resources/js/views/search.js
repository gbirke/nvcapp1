
(function($) {
    var SearchView = Backbone.View.extend({
        id:"q",
        initialize: function() {
            this.$el.autocomplete({
               source: function(term, callback) {
                   $.post(Routing.generate('birke_nvc_search'), {q:term.term}, function(data) {
                       var result2map = function(result) {
                           return {value:result.id, label:result.name};
                       };
                      callback(_.map(data.needs, result2map).concat(_.map(data.strategies, result2map)));
                   }, 'json');
               }
            });
            //TODO: render needs and strategies differently
        }
    });
    var sv = new SearchView({el:$('#q')});
})(jQuery)