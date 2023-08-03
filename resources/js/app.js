
import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent     from './components/ExampleComponent.vue';
import CarritoComponent     from './components/compra/CarritoComponent.vue';
import ComprarComponent     from './components/compra/ComprarComponent.vue';
import ConfirmarComponent   from './components/compra/ConfirmarComponent.vue';
import AddComponent         from './components/menu/AddComponent.vue';
import CheckinComponent     from './components/menu/CheckinComponent.vue';
import HistoryComponent     from './components/menu/HistoryComponent.vue';
import InventaryComponent   from './components/menu/InventaryComponent.vue';


app.component('comprar-component', ComprarComponent);
app.component('example-component', ExampleComponent);
app.component('confirmar-component',ConfirmarComponent);
app.component('carrito-component', CarritoComponent);
app.component('add-component', AddComponent);
app.component('checkin-component', CheckinComponent);
app.component('historial-component', HistoryComponent);
app.component('inventary-component', InventaryComponent);

app.mount('#app');
