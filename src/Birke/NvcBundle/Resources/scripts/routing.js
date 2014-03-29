NVC.Router.map(function() {
    //this.resource('needs'); // TODO: List of needs
    this.resource('need', { path: '/need/:need_id' });
});

NVC.NeedRoute = Ember.Route.extend({
    model: function(params) {
        return this.store.find('need', params.need_id);
    }
});