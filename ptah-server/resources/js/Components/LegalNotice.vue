<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="flex flex-col items-center">
    <div>

        <div
            class="w-full flex flex-col gap-4 items-center px-6 py-4 text-xs text-gray-500"
        >
            <div>
                <a
                    href="https://costmatic.co"
                    class="underline hover:text-blue-500"
                    target="_blank"
                    >Infra</a
                >
                &copy; {{ new Date().getFullYear() }}
            </div>
            <div class="flex gap-4">
                
                    <div>
                        Contact Email:
                        <a
                            href="mailto:contact@costmatic.co"
                            class="underline hover:text-blue-500"
                            >contact@costmatic.co</a
                        >
                    </div>
                </div>
            </div>
        </div>

        <div class="flex gap-8 text-xs">
            <Link
                :href="route('terms.show')"
                class="underline hover:text-blue-500"
                >Terms of Service</Link
            >
            <Link
                :href="route('policy.show')"
                class="underline hover:text-blue-500"
                >Privacy Policy</Link
            >
            <Link
                :href="route('refund-policy.show')"
                class="underline hover:text-blue-500"
                >Refund Policy</Link
            >
        </div>
    </div>
</template>
