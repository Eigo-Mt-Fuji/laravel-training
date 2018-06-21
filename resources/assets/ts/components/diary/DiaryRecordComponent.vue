<template>
    <tr :id="'item-' + no">
        <td scope="row">{{ no }}</td>
        <td>{{ userName }}(ID: {{ userId }})</td>
        <td>{{ score }}</td>
    </tr>
</template>

<script lang="ts">
  import { Vue, Component, Prop } from 'vue-property-decorator';

  @Component({
    props: {
      no: Number,
      userName: String,
      userId: Number,
      score: Number
    }
  })
  export default class DiaryRecordComponent extends Vue {

    @Prop()
    no: number = 0;
    
    @Prop()
    userName: String = "";
    
    @Prop()
    userId: number = 0;
    
    @Prop()
    score: number = 0;

  }
</script>

