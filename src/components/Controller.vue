<template>
	<div class="flex m-5 items-center justify-center">
		<div class="mx-3">
			<button
				type="button"
				@click="openModal"
				class="rounded-md bg-black bg-opacity-20 px-4 py-2 text-sm font-medium text-white hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75"
			>
				<PlusIcon class="h-6 w-6 text-black opacity-70" />
			</button>
		</div>
<!--		<div class="mx-3">-->
<!--			<button-->
<!--				type="button"-->
<!--				@click=""-->
<!--				class="rounded-md bg-black bg-opacity-20 px-4 py-2 text-sm font-medium text-white hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75"-->
<!--			>-->
<!--				<TrashIcon class="h-6 w-6 text-black opacity-70" />-->
<!--			</button>-->
<!--		</div>-->
	</div>
	<TransitionRoot appear :show="isOpen" as="template">
		<Dialog as="div" @close="closeModal" class="relative z-10">
			<TransitionChild
				as="template"
				enter="duration-300 ease-out"
				enter-from="opacity-0"
				enter-to="opacity-100"
				leave="duration-200 ease-in"
				leave-from="opacity-100"
				leave-to="opacity-0"
			>
				<div class="fixed inset-0 bg-black bg-opacity-25" />
			</TransitionChild>

			<div class="fixed inset-0 overflow-y-auto">
				<div
					class="flex min-h-full items-center justify-center p-4 text-center"
				>
					<TransitionChild
						as="template"
						enter="duration-300 ease-out"
						enter-from="opacity-0 scale-95"
						enter-to="opacity-100 scale-100"
						leave="duration-200 ease-in"
						leave-from="opacity-100 scale-100"
						leave-to="opacity-0 scale-95"
					>
						<DialogPanel
							class="w-full max-w-md transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all"
						>
							<DialogTitle
								as="h3"
								class="text-lg font-medium leading-6 text-gray-900"
							>
								New Note
							</DialogTitle>
							<div class="mt-2">
								<div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
									<div class="col-span-full">
										<label
											for="title"
											class="block text-sm font-medium leading-1 text-gray-900"
										>
											Title
										</label>
										<div class="mt-2">
											<input
												type="text"
												name="title"
												id="title"
												autocomplete="title"
												class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
											>
										</div>
									</div>
									<div class="col-span-full">
										<label
											for="description"
											class="block text-sm font-medium leading-1 text-gray-900"
										>
											Description
										</label>
										<div class="mt-2 ">
											<textarea
												id="description"
												name="description"
												rows="3"
												class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
											></textarea>
										</div>
									</div>
								</div>
								<div class="mt-6 flex items-center justify-end gap-x-6">
<!--									<button-->
<!--										type="button"-->
<!--										class="text-sm font-semibold leading-6 text-gray-900"-->
<!--									>-->
<!--										Cancel-->
<!--									</button>-->
									<button
										type="submit"
										class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
									>
										Add
									</button>
								</div>
							</div>

						</DialogPanel>
					</TransitionChild>
				</div>
			</div>
		</Dialog>
	</TransitionRoot>
</template>
<script setup>
import { ref } from 'vue'
import {
	TransitionRoot,
	TransitionChild,
	Dialog,
	DialogPanel,
	DialogTitle,
} from '@headlessui/vue'
import { PlusIcon, TrashIcon } from '@heroicons/vue/24/solid'

const isOpen = ref(true)

function closeModal() {
	isOpen.value = false
}
function openModal() {
	isOpen.value = true
}
</script>
<style scoped>
.list {
	list-style-type: none;
}
</style>