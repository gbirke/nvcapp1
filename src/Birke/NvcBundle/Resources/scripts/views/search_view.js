// Thanks to https://gist.github.com/jcf/3604118
NVC.FieldView = Ember.ContainerView.extend({
    tagName: '',
    type: 'text',
    label: "",
    value: null,
    action: null,
    size: 30,
    bubble:true,
    childViews: ["labelView", "dataView"],

    labelView: Ember.View.extend({
        tagName:'label',
        attributeBindings: ['for'],
        forBinding: 'parentView.dataView.elementId',
        textBinding: 'parentView.label',
        defaultTemplate: Ember.Handlebars.compile('{{view.text}}')
    }),

    dataView: Ember.TextField.extend({
        bubble:true,
        attributeBindings: 'type value size placeholder action'.w(),
        typeBinding: 'parentView.type',
        sizeBinding: 'parentView.size',
        valueBinding: 'parentView.value',
        actionBinding: 'parentView.action'
    })

});

NVC.TextField = NVC.FieldView.extend();

NVC.SearchField = NVC.FieldView.extend({
    type: "search",
    dataView: Ember.TextField.extend({
        keyUp: function(evt) {
            this.sendAction(); // TODO: Only send action if key is not enter/cursor/esc/tab
        },
        attributeBindings: 'type value size placeholder action'.w(),
        typeBinding: 'parentView.type',
        sizeBinding: 'parentView.size',
        valueBinding: 'parentView.value',
        actionBinding: 'parentView.action'

    })
});