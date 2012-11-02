
define(['backbone', 'underscore', 'text!nvc/templates/need.html'], function(Backbone, _, tpl){
    var NeedView = Backbone.View.extend({
        initialize: function() {
          this.template = _.template(tpl);
        },
        render: function() {
            $(this.el).html(this.template(this.model.toJSON()));
            return this;
        }
    });
    return NeedView;
});
