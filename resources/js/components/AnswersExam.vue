<template>
    <div>
        <div class="ml-24 my-4">
            <ul class="" >
                <li class="my-4 flex items-center" >
                    <input @change="valueAnswers" :name="'group_question_'+number_question" :checked="checked" class="mr-4" type="radio">
                    <label>{{ answer.answer }}</label>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    props:['answer','number_question'],

    data(){
        return {
            checked: this.answer.value
        }
    },
    computed: {

    },
    methods: {
        valueAnswers(event) {
            if (event.target.value != 'off' ) {
                this.answer.value = true
                this.$emit('nextQuestion',this.answer.value)
            }
        }
    },
}
</script>
