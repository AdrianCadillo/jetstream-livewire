import axios from 'axios';
import JQuery from 'jquery';

window.$=JQuery;
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
