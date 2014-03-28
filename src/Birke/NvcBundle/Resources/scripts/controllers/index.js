NVC.IndexController = Ember.ArrayController.extend ({
    search: '',

    actions: {
        query: function() {
            var newContent = Ember.A();
            $.post(Routing.generate('birke_nvc_search'), {q: this.get('search')}, function(data){
                var i;
                for(i=0;i<data.needs.length;i++) {
                    console.log("pushing need", data.needs[i]);
                    newContent.pushObject(NVC.Need.createRecord(data.needs[i]));
                }
            }, 'json');
            this.set("content", newContent);
        }
    }
});