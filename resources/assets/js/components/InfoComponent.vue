<template>
    <b-container>
        <b-card-group deck class="mb-4">
            <b-card bg-variant="primary"
                    text-variant="white"
                    header="นโยบายรัฐบาล"
                    class="text-left">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>

            <b-card bg-variant="secondary"
                    text-variant="white"
                    header="ข้อมลพื้นฐานมหาวิทยาลัย"
                    class="text-left">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>

            <b-card bg-variant="success"
                    text-variant="white"
                    header="ข้อมลพื้นฐานกองนโยบายและแผน"
                    class="text-left">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
        </b-card-group>
    </b-container>
</template>

<script>
import { Layout } from 'bootstrap-vue/es/components';
Vue.use(Layout);

export default {};
</script>
