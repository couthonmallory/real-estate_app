import './bootstrap';

import Alpine from 'alpinejs';
import 'tw-elements';
import { createApp } from 'vue';
import HomePage from'./components/HomePage.vue'
import LocationPage from './components/LocationPage.vue'
import PropertiesPage from './components/PropertiesPage.vue'
import PopupPage from './components/PopupPage.vue'
import AdmShow from './components/AdmShow.vue'
import AdmPopup from './components/AdmPopup.vue'
import EditUser from './components/EditUser'
import CartComponent from './components/CartComponent'

window.Alpine = Alpine;

Alpine.start();

const app = createApp()

app.component('HomePage', HomePage)
app.component('LocationPage', LocationPage)
app.component('PropertiesPage', PropertiesPage)
app.component('PopupPage', PopupPage)
app.component('AdmShow', AdmShow)
app.component('AdmPopup', AdmPopup)
app.component('EditUser', EditUser)
app.component('CartComponent', CartComponent)

app.mount('#app')
