require('./bootstrap');

import 'vue-flux/style.css';
import { createApp } from 'vue';
import home from './home.vue';

createApp(home).mount('#home')

