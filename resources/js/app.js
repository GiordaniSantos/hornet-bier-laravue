/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});
const appSite = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import Login from './components/Login.vue';
import HomeSiteComponent from './components/site/HomeSiteComponent.vue';
import FooterComponent from './components/site/partials/FooterComponent.vue';
import HeaderComponent from './components/site/partials/HeaderComponent.vue';
app.component('example-component', ExampleComponent);
app.component('login-component', Login);
appSite.component('home-site-component', HomeSiteComponent);
appSite.component('header-site-component', HeaderComponent);
appSite.component('footer-site-component', FooterComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
appSite.mount('#app-site');
