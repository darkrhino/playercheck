const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir(mix => {
    mix.sass('app.scss')
    .webpack('app.js')
    .version('css/app.css');
});
elixir(mix => {
    mix.sass('admin.scss')
    .version('css/admin.css');
});