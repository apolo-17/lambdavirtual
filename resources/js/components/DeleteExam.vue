<template>
    <div>
        <button @click="deleteExam">Borrar</button>
    </div>
</template>
<script>
export default {
    props:['exam_id'],

    methods: {
        deleteExam(){
            let confirmation = confirm('Deseas elminar este examen ?');
            if(confirmation) {
                let exam_id = this.exam_id
                axios.get(`/admin-exam-delete/${exam_id}`).then(response => {
                    response.data
                }).catch(error => {
                    console.log(error)
                    //this.errors = error.response.data.errors;
                });
            } else {
                alert('Abortado...')
            }
        }
    },
}
</script>
