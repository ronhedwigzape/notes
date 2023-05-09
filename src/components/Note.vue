<template>
	<div class="mt-8">
		<div class="bg-amber-300 m-5 p-5">
			<div class="mb-8">
				<EllipsisHorizontalIcon class="h-5 w-5 float-left"/>
				<XMarkIcon class="h-5 w-5 float-right" />
			</div>
			<div>
				<h2 class="text-2xl">{{ sampleTitle }}</h2>
				<div class="mt-4">
					<p class="">{{ sampleNote[0].content}}</p>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: "Note"
}
</script>
<script setup>
import {reactive, ref} from "vue";
import { XMarkIcon, EllipsisHorizontalIcon } from '@heroicons/vue/24/solid';

const sampleTitle = ref("A Sample Title");

const texts = ref([
	{ content: "A sample note A sample note A sample note A sample note A sample note A sample note A sample note A sample note A sample note A sample note " },
	{ content: "A sample note" },
]);

const sampleNote = reactive([
	{ content: "A sample note A sample note A sample note A sample note A sample note A sample note A sample note A sample note A sample note A sample note " },
	{ content: "A sample note" },
]);

 /**********************************************************
 * TODO: Make this asynchronous function complete.
 */
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