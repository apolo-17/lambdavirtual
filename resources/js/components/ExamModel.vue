<template>
    <div>
        <div><h2>Preguntas faltantes: {{question_out_solved}}/ {{question_solved}}preguntas contestadas</h2></div>
        <questions-exam v-if="show_question_exam"
            :question="questionsUpdated"
            @question_solved="updateQuestionary"
        ></questions-exam>

    </div>
</template>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
<script>
export default {
    props:['exam_id'],

    data() {
        return {
            question_solved: 0,
            question_out_solved: 0,
            question_exam: null,
            show_question_exam: false,
            questionary: null
        }
    },

    mounted() {

        axios.get(`/get-exam-created/${this.exam_id}`).then(response => {
            this.questionary = JSON.parse(response.data.questionary)

            this.show_question_exam = true
        });

    },
    computed: {
        questionsUpdated(){
            let questions = this.questionary

            let answer_solved = null;
            let question_out_solved = [];
            let question_solved = [];
            let questions_splice = [];

            questions.forEach(question => {
                if(question.question_solved == false){
                    question_out_solved.push(question)
                } else {
                    question_solved.push(question)
                }

            });

            let question_aleatorio = Math.floor(Math.random()* question_out_solved.length);
            this.question_out_solved = question_out_solved.length
            this.question_solved = question_solved.length
            return question_out_solved[question_aleatorio];
        }
    },

    methods: {
        updateQuestionary(question_solved){
            let params = {
                exam_id: this.exam_id,
                question_solved: question_solved
            }
            console.log(params)
            /* axios.post('/exam-student-update', {...params}).then(response => {

                this.questionary = JSON.parse(response.data.questionary)
                console.log('This updated: ',this.questionary)
            }); */
        }
    },
}
</script>
