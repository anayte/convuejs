
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


app.component(
    'comprar-component', ComprarComponent,
    'confirmar-component',ConfirmarComponent,
    'carrito-component', CarritoComponent,
    'example-component', ExampleComponent,
    'add-component', AddComponent,
    'checkin-component', CheckinComponent,
    'historial-component', HistoryComponent,
    'inventario-component',InventaryComponent
);

app.mount('#app');
