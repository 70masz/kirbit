<template>
    <div class="w-full bg-white shadow-md border rounded-lg">
        <h2 class="font-semibold text-lg p-3 bg-pink-400 text-white rounded-t-lg">
            <slot name="title" />
        </h2>
        <ul role="list" class="divide-y divide-slate-300 p-4">
            <li v-for="post in posts" :key="post.id" class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                    <Link :href="route('frontend.communities.post.show', [community.slug, post.slug])" class="text-slate-800 font-semibold truncate text-sm hover:text-pink-400">
                        {{ post.title }}
                    </Link>
                    <div>
                        Votes({{ post.votes }})
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>

<script setup>

import {Link} from '@inertiajs/inertia-vue3';

defineProps({
    community: Object,
    posts: Object
});

</script>