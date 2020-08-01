<template>
    <div>
        <div class="ml-24 my-4">
            <ul class="" >
                <li class="my-4 flex items-center" >
                    <label for="" class="mr-2">{{answer.id}}</label>
                        <input @change="valueAnswers" :name="'group_question_'+number_question" :checked="checked" class="mr-4" type="radio">
                    <input v-model="answer.answer" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-1/2 appearance-none leading-normal" type="text" placeholder="Respuesta">

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
            checked: this.answer.value,
            answer_correct:''
        }
    },
    computed: {

    },
    methods: {
        valueAnswers(event) {
            if (event.target.value != 'off' ) {
                this.answer.value = this.answer.id
            }
        }
    },
}
</script>
