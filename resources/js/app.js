import './bootstrap';
// import * as bootstrap from 'bootstrap';
import { createApp } from 'vue';
import Button from './components/atoms/Button/Button.vue';
import Navbar from './components/atoms/Button/Navbar.vue';
import Menu from './components/atoms/Home/Menu.vue';
import Profile from './components/atoms/Home/Profile.vue';
// import App from './App.vue'
// createApp(App).mount("#app")


// createApp(Navbar).mount('#Navbar');



// const app = createApp({})
// app.component('navegacio', Navbar)
// app.mount('#app')

createApp(Menu).mount('#Menu');
createApp(Navbar).mount('#Navbar');
createApp(Profile).mount('#Profile');


// createApp(Button).mount('#Button');