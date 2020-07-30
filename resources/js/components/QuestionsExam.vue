<template>
    <div>
        <div class="flex px-2 py-2" >
            <div class="w-full">
                <div class="w-4/5">
                    <label for=""><strong>{{ question.question }}</strong></label>
                </div>
                <answers-exam v-for="(answer, index) in question.answers" :key="index.id"
                    :answer="answer"
                    :number_question="question.id"
                    @nextQuestion="nextQuestion"
                ></answers-exam>
                <button v-if="show_next_question" @click="testButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Siguiente pregunta
                </button>
            </div>
        </div>
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
        testButton(){

            this.$emit('question_solved',this.question)

        },
        nextQuestion(answer) {

            this.show_next_question = true
        }
    },

}
</script>
