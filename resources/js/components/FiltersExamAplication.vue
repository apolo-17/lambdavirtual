<template class="filtersTemplate">
    <div class="filters">
        <div class="filters__items">
            <label for="">Pais:</label>
            <select @change="updateCountrySelected">
                <option value="">Seleccione un Pais</option>
                <option v-for="country in country"
                        :value="country.id"
                        :key="country.id"
                >{{ country.name }}</option>
            </select>
        </div>
        <div class="filters__items">
            <label for="">Departamento:</label>
            <input
                type="text"
                placeholder="Buscar departamento"
                v-model="department"
                @input="updateDepartmentFilter"
            >
        </div>
        <div class="filters__items">
            <label for="">Email:</label>
            <input
                type="email"
                placeholder="Buscar Email"
                v-model="emailStudent"
                @input="updateEmailFilter"
            >
        </div>
    </div>
</template>

<script>
export default {
    props:['country'],
    data() {
        return {
            department:'',
            emailStudent:''
        }
    },
    methods: {
        updateCountrySelected(event){
            this.$emit('updateCountrySelected',event.target.value)
        },
        updateDepartmentFilter(){
            this.$emit('updateDepartmentFilter',this.department)
        },
        updateEmailFilter(){
            this.$emit('updateEmailFilter',this.emailStudent)
        }
    },
}
</script>
