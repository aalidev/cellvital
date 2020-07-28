import './component';
import './preview';


Shopware.Service('cmsService').registerCmsBlock({
    name: "category-viewport",
    label: "Category Viewport",
    category: "commerce",
    component: "sw-cms-block-category-viewport",
    previewComponent: "sw-cms-preview-category-viewport",
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
        title: 'text',
        products: 'product-grid',
    }
});
