import './component';
import './preview';


Shopware.Service('cmsService').registerCmsBlock({
    name: "html",
    label: "Custom HTML",
    category: "text",
    component: "sw-cms-block-html",
    previewComponent: "sw-cms-preview-html",
    defaultConfig: {
        marginBottom: '20px',
        marginTop: '20px',
        marginLeft: '20px',
        marginRight: '20px',
        sizingMode: 'boxed'
    },
    slots: {
        html: 'html'
    }
});
