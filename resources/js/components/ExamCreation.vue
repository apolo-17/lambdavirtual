<template>
    <div class="container">
        <exam-form @createQuestion="createQuestionary" v-if="show_exam_form"></exam-form>
        <exam-question-and-answers v-if="!show_exam_form"
            :questionary="questionary"
            :questions="questions"
        ></exam-question-and-answers>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                questionary:[],
                questions:null,
                show_exam_form: true
            }
        },
        mounted() {

            if (this.$route.name == 'exam-edit') {
                this.show_exam_form = false;

                let params = {id:this.$route.params.id}
                axios.post('/admin-exam-edit-information',{...params}).then(response => {
                    this.questionary = response.data
                    this.questions = JSON.parse(response.data.questionary)
                })
            }
        },
        methods: {
            createQuestionary(questionary) {
                this.questionary = questionary;
                this.questions = JSON.parse(questionary.questionary)
                this.show_exam_form = false;
            }
        }
    }
</script>
