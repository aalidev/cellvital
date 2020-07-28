import "./preview";
import "./config";
import "./component";

Shopware.Service('cmsService').registerCmsElement({
    name: "html",
    label: "Custom HTML",
    component: "sw-cms-el-html",
    configComponent: "sw-cms-el-config-html",
    previewComponent: "sw-cms-el-preview-html",
    defaultConfig: {
        html: {
            source: 'static',
            value: 'Code me'
        },
        css: {
            source: 'static',
            value: ''
        },
        js: {
            source: 'static',
            value: ''
        }
    }
});
