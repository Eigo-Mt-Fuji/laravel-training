<template>
  <div>
    <table id="items" class="table table-striped table-light">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ユーザ</th>
                <th scope="col">スコア</th>
            </tr>
        </thead>
        <tbody v-for="item in items">
	    <tr :id="'item-' + no">
	        <td scope="row">{{ item.no }}</td>
	        <td>{{ item.userName }}(ID: {{ item.userId }})</td>
	        <td>{{ item.score }}</td>
	    </tr>
        </tbody>
    </table>
  </div>
</template>
<script lang="ts">
    import { Vue, Component, Prop } from 'vue-property-decorator';

    @Component({
       props: {
         _items: Array
       }
    })
    export default class DiaryListComponent extends Vue {
      private _items: Array<Object> = [];
      private items: Array<Object> = [];
      data() {
        return {
          items: this._items
        };
      }
    }
</script>
