<template>
    <div>
        <div class="flex px-2 py-2" v-if="!show_question">
            <div class="w-full">
                <div class="w-4/5">
                    <label for="">{{ question.question }}</label>
                </div>
                <answers-exam v-for="(answer, index) in question.answers" :key="index.id"
                    :answer="answer"
                    :number_question="question.id"
                    @questionDisable="questionDisable"
                ></answers-exam>
                <button @click="testButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Button
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
            disabled: false,
            show_question: false
        }
    },

    computed: {

    },
    methods: {
        testButton(){
            if (this.disabled) {
                console.log('ES verdadero')
                this.show_question = true
            }

        },
        questionDisable(answer) {
            this.disabled = answer
        }
    },

}
</script>
