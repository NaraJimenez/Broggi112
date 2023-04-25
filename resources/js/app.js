import * as bootstrap from 'bootstrap'
import { createApp } from 'vue'
import menuCarta from './components/menuCarta.vue'
import helpBoxboton from './components/helpBoxboton.vue'
import carta1Box from './components/carta1Box.vue'
import carta1Incidentes from './components/carta1Incidentes.vue'
import filtroExpedientes from './components/filtroExpedientes.vue'
import carta2Catalunya from './components/carta2Catalunya.vue'
import carta2Botones from './components/carta2Botones.vue'
import carta2Localizacion from './components/carta2Localizacion.vue'
import menuComponent from './components/menuComponent.vue'
import cartaExpediente from './components/cartaExpediente.vue'
import Menu from './components/atoms/Home/Menu.vue';
import Profile from './components/atoms/Home/Profile.vue';
import MenuA from './components/atoms/Home/MenuA.vue';

//Componente Menu Cartas de llamada
createApp(menuCarta).mount('#menuCarta');
createApp(helpBoxboton).mount('#helpBoxboton');
createApp(menuComponent).mount('#menuComponent');

//Componentes Carta1
createApp(carta1Box).mount('#carta1Box');
createApp(carta1Incidentes).mount('#carta1Incidentes');
createApp(filtroExpedientes).mount('#filtroExpedientes');

//Componenetes Carta2
createApp(carta2Catalunya).mount('#carta2Catalunya');
createApp(carta2Botones).mount('#carta2Botones');
createApp(carta2Localizacion).mount('#carta2Localizacion');

//Componente Expedientes
createApp(cartaExpediente).mount('#cartaExpediente');

//Menú perfil
createApp(Profile).mount('#Profile');

//Menú barras
createApp(Menu).mount('#Menu');

//Menú barrasA
createApp(MenuA).mount('#MenuA');