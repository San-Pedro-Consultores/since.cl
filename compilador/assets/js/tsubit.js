import 'bootstrap/dist/css/bootstrap.css';
import '../css/tsubit.scss';

import '../img/books-1920-300.jpg';

require('script-loader!./plugins/vue.js');
require('script-loader!./plugins/axios.min.js');

// JQUERY
import $ from 'jquery';
window.jQuery = $;
window.$ = $;

// BOOSTRAP
import 'bootstrap/dist/js/bootstrap.bundle';

// MUSTACHE
require('script-loader!../../node_modules/mustache/mustache.js');

// JQUERY FORM
require('script-loader!../../node_modules/jquery-form/src/jquery.form.js');

require('script-loader!./plugins/core.js');
