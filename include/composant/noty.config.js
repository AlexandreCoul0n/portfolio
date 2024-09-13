import {insererComposant} from './fonction';

const lesRessources = {
    css: [
        'https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'
    ],
    js: [
        'https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js'
    ]
};

insererComposant('css', lesRessources.css);
insererComposant('js', lesRessources.js);