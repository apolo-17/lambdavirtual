<template>
    <div>
        <input type="checkbox" @click="getValue" v-model="status" true-value="true" false-value="false">
    </div>
</template>
<script>
export default {
    props:['exam_id','active'],
    data() {
        return {
            status: this.active
        }
    },

    methods: {
        getValue(event) {
            let params = {
                exam_id: this.exam_id,
                active: event.target.checked
            }

            axios.post('/admin-exam-status-update',{...params}).then(response => {
                //console.log(response.data)
            })
        }
    },
}
</script>
