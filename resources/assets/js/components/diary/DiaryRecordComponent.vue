<template>
    <tr :id="'item-' + no">
        <td scope="row">{{ no }}</td>
        <td>{{ userName }}(ID: {{ userId }})</td>
        <td>{{ score }}</td>
    </tr>
</template>

<script>
  export default {

    props: {
      no: Number,
      userName: String,
      userId: Number,
      score: Number
    }
  }
</script>

