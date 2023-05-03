import * as bootstrap from 'bootstrap'
import { createApp } from 'vue'
import menuComponent from './components/menuComponent.vue'
import cartaExpediente from './components/cartaExpediente.vue'
import Menu from './components/atoms/Home/Menu.vue';
import Profile from './components/atoms/Home/Profile.vue';
import MenuA from './components/atoms/Home/MenuA.vue';
import Mapa from './components/pagina3.vue';



//Componente Menu Cartas de llamada
createApp(menuComponent).mount('#menuComponent');

//Componente Expedientes
createApp(cartaExpediente).mount('#cartaExpediente');

//Menú perfil
createApp(Profile).mount('#Profile');

//Menú barras
createApp(Menu).mount('#Menu');

//Menú barrasA
createApp(MenuA).mount('#MenuA');


createApp(Mapa).mount('#mapa');