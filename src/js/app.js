import Axios from 'axios';
window.axios = Axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


require('popper.js');
require('bootstrap');
require('materialize-css');


window.$ = window.jQuery = require('jquery');

require('./like');

