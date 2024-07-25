<script setup>
import ChatLayout from "@/Layouts/ChatLayout.vue";
import Sidebar from "@/Components/Sidebar/Sidebar.vue";
import Messages from "@/Components/Chat/Messages.vue";

defineProps({
    chat: {
        required: true,
    }
})
</script>

<template>
    <ChatLayout>
        <template v-slot:sidebar>
            <Sidebar/>
        </template>
        <div class="flex flex-col flex-grow overflow-hidden py-6 px-4 sm:px-6 lg:pl-8 xl:pl-6">
            <div class="flex-grow overflow-auto space-y-5 pb-24">
                <Messages>

                </Messages>
            </div>
            <Messages :chat="chat"/>
        </div>
    </ChatLayout>
</template>

<style scoped></style>
