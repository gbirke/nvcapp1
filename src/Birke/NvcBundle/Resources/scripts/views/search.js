
define(['backbone', 'underscore', 'text!nvc/templates/search.html', 'jqueryui'], function(Backbone, _, tpl){
    var SearchView = Backbone.View.extend({
        render: function() {
            this.$el.html(tpl);

            this.$('#q').autocomplete({
               source: function(term, callback) {
                   $.post(Routing.generate('birke_nvc_search'), {q:term.term}, function(data) {
                       var result2map = function(result) {
                           return {value:result.id, label:result.name};
                       };
                      callback(_.map(data.needs, result2map).concat(_.map(data.strategies, result2map)));
                   }, 'json');
               }
            });

            console.log("rendering view", this.$el, tpl);
            //TODO: render needs and strategies differently
        }
    });
    return SearchView;
});