<template>
	<div class="mt-10">
		<div class="bg-amber-300 m-5 p-5">
			<h1>hi</h1>

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