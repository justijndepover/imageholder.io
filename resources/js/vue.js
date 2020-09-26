import Vue from 'vue';
import InputFile from './components/InputFile.vue';

Vue.config.devtools = false;
Vue.config.productionTip = false;

const App = new Vue({
    el: '#app',
    components: {
        InputFile,
    },
});
