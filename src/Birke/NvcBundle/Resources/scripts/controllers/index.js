NVC.IndexController = Ember.Controller.extend ({
    search: '',
    isSearching: false,
    strategiesContent: Ember.A(),
    needsContent: Ember.A(),
    actions: {
        query: function() {
            var nContent = Ember.A(), sContent = Ember.A(), controller = this;
            this.set("isSearching", true);
            $.post(Routing.generate('birke_nvc_search'), {q: this.get('search')}, function(data){
                var i;
                for(i=0;i < data.needs.length; i++) {
                    console.log("pushing need", data.needs[i]);
                    nContent.pushObject(NVC.Need.createRecord(data.needs[i]));
                }

                for(i=0; i < data.strategies.length; i++) {
                    console.log("pushing strat", data.strategies[i]);
                    sContent.pushObject(NVC.Strategy.createRecord(data.strategies[i]));
                }
                controller.set("strategiesContent", sContent);
                controller.set("needsContent", nContent);
                controller.set("isSearching", false);
            }, 'json');
        }
    }
});