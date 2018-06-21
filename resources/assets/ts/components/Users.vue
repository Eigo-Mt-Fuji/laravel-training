<template>
  <div class="Users">
    <div class="list-group">
      <div class="list-group-item" v-for="user in users">
        <h4>{{ user.name }} <small>@{{ user.username }}</small></h4>
        <p>{{ user.email }}</p>
        <p>{{ user.phone }}</p>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
  import { Vue, Component, Prop } from 'vue-property-decorator';
  import User from '../models/User';

  @Component({
  })
  export default class Users extends Vue {
    @Prop({default: []})
    private _users: User[];
    public constructor(options:any) {
      super(options);
      this._users = [];
    }
    users: User[] = [];

    data() {
      return {
        users: this._users
      }
    }
  }
</script>

<style lang="scss" scoped>
  .list-group-item {
    padding: 2rem;
    h4 {
      margin-top: 0;
    }
  }
</style>

