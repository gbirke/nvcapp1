NVC.Need = DS.Model.extend({
    name: DS.attr('string'),
    strategyConnections: DS.hasMany('needToStrategyRelation')
});

