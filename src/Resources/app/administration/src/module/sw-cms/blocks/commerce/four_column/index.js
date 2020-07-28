import './component';
import './preview';


Shopware.Service('cmsService').registerCmsBlock({
    name: "four-column",
    label: "Four Column",
    category: "commerce",
    component: "sw-cms-block-four-column",
    previewComponent: "sw-cms-preview-four-column",
    defaultConfig: {
        titlePosition: {
            source: 'static',
            value: 'top'
        },
        numberOfItems: {
            source: 'static',
            value: 4
        }
    },
    slots: {
        col1: 'product-box',
        col2: 'product-box',
        col3: 'product-box',
        col4: 'product-box'
    }
});
