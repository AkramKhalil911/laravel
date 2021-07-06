<template>
    <div>
        <h2>My Component</h2><br>
        Prop1: {{ prop1 }}<br>
        Prop2: {{ prop2 }}<br>
    </div>
</template>

<script>
export default {
    props: ['prop1', 'prop2', 'prop3', 'prop4'],
    mounted() {
        console.log(this.prop1);
    }
}
</script>

