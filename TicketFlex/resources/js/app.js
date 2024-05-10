require('./bootstrap');

import 'vue-flux/style.css';
import { createApp } from 'vue';
import home from './home.vue';
import login from './login.vue';
import register from './register.vue';


createApp(home).mount('#home')
createApp(login).mount('#login')
createApp(register).mount('#register')
