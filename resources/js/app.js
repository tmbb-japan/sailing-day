import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import Album from './components/Album.vue';
app.component('example-component', ExampleComponent);
app.component('album-component', Album);

app.mount('#app');
