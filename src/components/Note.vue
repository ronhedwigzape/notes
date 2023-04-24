<template>
	<div class="note">

		<div v-for="text in texts" :key="text">
			{{ text.content }}
		</div>
	</div>
</template>

<script>
export default {
	name: "Note"
}
</script>
<script setup>
import {ref} from "vue";

const texts = ref([
	{ content: "A sample note" },
	{ content: "A sample note" },
]);

const getNotes = async () => {
	try {
		const response = fetch('');
		const data = await response.json();
	}
	catch (error) {
		alert(error);
	}
}
</script>
<style scoped>
.note {
	background-color: yellow;
}
</style>