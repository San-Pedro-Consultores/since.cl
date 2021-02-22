import '../css/tsubit.scss';

// JQUERY
import $ from 'jquery';
window.jQuery = $;
window.$ = $;


// MUSTACHE
require('script-loader!../../node_modules/mustache/mustache.js');

// JQUERY FORM
require('script-loader!../../node_modules/jquery-form/src/jquery.form.js');

require('script-loader!./plugins/core.js');
