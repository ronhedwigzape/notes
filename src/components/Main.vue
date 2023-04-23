<template>
	<div>
		<!--	Controller Bar 	-->
		<Controller />

		<!--	Main Content	-->
		<main>
		<Note />
		</main>
	</div>
</template>

<script>
import Controller from "./Controller.vue";
import Note from "./Note.vue";

export default {
	name: "Main",
	components: {
		Controller,
		Note
	}

}
</script>
<script setup>

</script>

<style scoped>

</style>