
import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import CarritoComponent from './components/compra/CarritoComponent';
import ComprarComponent from './components/compra/ComprarComponent';
import ConfirmarComponent from './components/compra/ConfirmarComponent';
import AddComponent from './components/menu/AddComponent';
import CheckinComponent from './components/menu/CheckinComponent';
import HistoryComponent from './components/menu/HistoryComponent';
import InventaryComponent from './components/menu/InventaryComponent';


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
