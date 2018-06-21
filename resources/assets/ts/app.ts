import Vue from 'vue';
import bootstrap from './bootstrap';
import AppComponent from './components/App.vue';

import DiaryListComponent from "./components/diary/DiaryListComponent.vue";
Vue.component('diary-list', DiaryListComponent);

bootstrap();

if (document.getElementById("app"))  {

const app = new Vue({
  el: '#app',
  render: h => h(AppComponent)
});

}else {
  const app = new Vue({
    el: '#main'
  });
}

Vue.config.devtools = true;
