NVC.NeedToStrategyRelation = DS.Model.extend({
    need: DS.belongsTo('need'),
    strategy: DS.belongsTo('strategy'),
    score: DS.attr('number')
});

