NVC.IndexController = Ember.Controller.extend ({
    search: '',
    isSearching: false,
    strategiesContent: Ember.A(),
    needsContent: Ember.A(),
    searchTimeout: null,
    actions: {
        query: function(event) {

            var nContent = Ember.A(), sContent = Ember.A(), controller = this, q = this.get("search");

            var doSearch = function() {
                controller.set("isSearching", true);
                $.post(Routing.generate('birke_nvc_search'), {q: q}, function(data){
                    var i;
                    for(i=0;i < data.needs.length; i++) {
                        nContent.pushObject(NVC.Need.createRecord(data.needs[i]));
                    }

                    for(i=0; i < data.strategies.length; i++) {
                        sContent.pushObject(NVC.Strategy.createRecord(data.strategies[i]));
                    }
                    controller.set("strategiesContent", sContent);
                    controller.set("needsContent", nContent);
                    controller.set("isSearching", false);
                }, 'json');
            };

            clearTimeout(this.get("searchTimeout"));
            this.set("searchTimeout", setTimeout(doSearch, 200)); // de-bounce repetitve keypresses


        }
    }
});