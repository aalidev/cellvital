import template from './template.twig';
import './styles.scss';

const { Component, Mixin } = Shopware;


Shopware.Component.register('sw-cms-el-html', {
    template,

    mixins: [
        Mixin.getByName('cms-element')
    ],

    created() {
        this.createdComponent();
    },

    methods: {
        createdComponent() {
            this.initElementConfig('html');
        }
    }
});
