<template>
    <table id="items" class="table table-striped table-light">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ユーザ</th>
                <th scope="col">スコア</th>
            </tr>
        </thead>
        <tbody>
            <tr is="diary-record" v-for="item in items"
                :no="item.no"
                :user-name="item.userName"
                :user-id="item.userId"
                :score="item.score" />
        </tbody>
    </table>
</template>
<script>
    const DiaryRecordComponent = require("./DiaryRecordComponent");
    export default {
      props:{
        items: Array
      },
      components: { "diary-record": DiaryRecordComponent }
    }
</script>