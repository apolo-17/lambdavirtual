<template>
    <div>
        <div class="examenContent__conteo">
            <div class="examenContent__number">{{question_solved}}/{{question_out_solved}} </div><div class="examenContent__numbertext"> preguntas</div>
        </div>
        <div class="examenContent__pregunta">
            {{ question.question }}
        </div>
        <answers-exam
            :answers="question.answers"
            :number_question="question.id"
            @showButtonNextQuestion="showNextQuestion"
            @question_solved="questionSolved"
        ></answers-exam>
    </div>
</template>
<script>
export default {
    props:['question','question_out_solved','question_solved'],

    data(){
        return {
            show_next_question: false,
        }
    },

    computed: {
        /* questionSolved(){
            return this.question_solved
        },
        questionOutSolved(){
            return this.question_out_solved
        } */
    },
    methods: {
        nextQuestion(){
            this.show_next_question = false;

            this.$emit('question_solved',this.question.question_solved = true)
        },
        showNextQuestion(answer) {
            this.question.answer_selected = answer;

        },
        questionSolved(){
            this.question.question_solved = true
            this.$emit('updateQuestionSolved')

        }
    },

}
</script>
