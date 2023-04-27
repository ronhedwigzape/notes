<template>
	<div>
		<!--	Controller Bar 	-->
		<Controller />

		<div class="border-b-2 border-b-gray-600 mt-10"></div>

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