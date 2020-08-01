<template>
    <div>
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
    props:['question'],

    data(){
        return {
            show_next_question: false,
        }
    },

    computed: {

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
