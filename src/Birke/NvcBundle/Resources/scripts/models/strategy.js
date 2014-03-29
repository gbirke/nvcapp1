NVC.Strategy = DS.Model.extend({
    name: DS.attr('string'),
    needConnections: DS.hasMany('needToStrategyRelation')
});

