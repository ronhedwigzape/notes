<template>
	<div>
		<!--	Navigation Bar 	-->
		<Navigation />

		<!--	Main Content	-->
		<main>
			<Note />
			<Note />
			<Note />
		</main>
	</div>
</template>

<script>
import Navigation from "./Navbar.vue";
import Note from "./Note.vue";

export default {
	name: "Main",
	components: {
		Navigation,
		Note
	}

}
</script>
<script setup>

</script>

<style scoped>

</style>