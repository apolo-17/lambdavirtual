<template>
    <div>
        <questions-exam v-for="(question, index) in createQuestion" :key="index"
            :question="question"
        ></questions-exam>
    </div>
</template>

<script>
export default {
    props:['exam_ready'],

    data() {
        return {
            response: null,
            questions: []
        }
    },
    mounted() {

    },
    computed: {
        createQuestion(){
            return _.isEmpty(this.exam_ready) ? null : this.questions = JSON.parse(this.exam_ready.questionary)
        },
    },
}
</script>
