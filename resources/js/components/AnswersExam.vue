<template>
    <div>
        <section class="examenContent__respuestas">
            <div v-for="(answer, index) in answers" :key="index.id">
                <input @change="valueAnswers" :name="'group_question_'+number_question" v-model="clear_radio" :value="answer.id" class="mr-4" type="radio">{{ answer.answer }}
            </div>
            <div class="examenContent__btn">
                <!-- <button v-if="show_next_question" @click="nextQuestion" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Siguiente pregunta
                </button> -->
                <input type="submit" class="examenContent__btn">
            </div>
        </section>
    </div>
</template>

<script>
export default {
    props:['answers','number_question'],

    data(){
        return {
            show_next_question: false,
            clear_radio: null
        }
    },
    computed: {

    },
    watch: {

    },
    methods: {
        valueAnswers(event) {
            this.show_next_question = true;
            this.$emit('showButtonNextQuestion',event.target.value)

        },
        nextQuestion(){
            this.show_next_question = false;
            this.clear_radio = null
            this.$emit('question_solved')
        },
        clear(){
            const clean = null
            return clean
        }
    },
}
</script>
