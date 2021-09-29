import Vue from 'vue';

Vue.component('stock-graph', require('./components/StockGraph.vue').default);

const app = new Vue({
    el: '#app'
});
