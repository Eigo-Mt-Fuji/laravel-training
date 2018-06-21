<template>
  <div class="App">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>{{ message }}</h1>
          <p class="text-center">
            <button class="btn btn-primary" @click="load">Load Users</button>
          </p>
          <users :_users="users"></users>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
  import { Vue, Component, Prop } from 'vue-property-decorator';
  import UsersComponent from './Users.vue';
  import User from '../models/User';

  @Component({
    components: {
      'users': UsersComponent
    }
  })
  export default class App extends Vue {

     message:String = 'Laravel + Vue.js + TypeScript';
     users: User[] = [];
     data() {
       return {
          message: "hoge",
          users: []
       }
     }

     load() {
     }
  };	  
</script>

<style scoped>
  h1 {
    text-align: center;
    margin: 4rem 0;
  }
</style>
