<template>
    <b-container fluid style="padding-top: 15px;">
        <b-row fluid>
            <b-col cols="12" md="8" sm="12">
                <!--
                <vue-flux
                    :options="fluxOptions"
                    :images="fluxImages"
                    :transitions="fluxTransitions"
                    ref="slider">
                </vue-flux>

                <button @click="$refs.slider.showImage('next')">NEXT</button>

                -->
                
                <b-carousel id="carousel1"
                    style="text-shadow: 1px 1px 2px #333;"
                    controls
                    indicators
                    background="#ababab"
                    :interval="4000"
                    img-width="1024"
                    img-height="480"
                    v-model="slide"
                    @sliding-start="onSlideStart"
                    @sliding-end="onSlideEnd"
                    >

                    <!-- Text slides with image -->
                    <b-carousel-slide caption="First slide"
                                        text="Nulla vitae elit libero, a pharetra augue mollis interdum."
                                        img-src="https://picsum.photos/1024/480/?image=52"
                    ></b-carousel-slide>

                    <!-- Slides with custom text -->
                    <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=54">
                        <h1>Hello world!</h1>
                    </b-carousel-slide>

                    <!-- Slides with image only -->
                    <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=58">
                    </b-carousel-slide>

                    <!-- Slides with img slot -->
                    <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
                    <b-carousel-slide>
                        <img slot="img" class="d-block img-fluid w-100" width="1024" height="480"
                            src="https://picsum.photos/1024/480/?image=55" alt="image slot">
                    </b-carousel-slide>

                    <!-- Slide with blank fluid image to maintain slide aspect ratio -->
                    <b-carousel-slide caption="Blank Image" img-blank img-alt="Blank image">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        eros felis, tincidunt a tincidunt eget, convallis vel est. Ut pellentesque
                        ut lacus vel interdum.
                        </p>
                    </b-carousel-slide>

                </b-carousel>
            </b-col>
            <b-col cols="12" md="4" sm="*">
                <!--<b-card title="Card Title"
                    img-src="http://plan.crru.ac.th/web_planning/img/direeee.png"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style="max-width: 20rem;"
                    class="mb-2">
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <b-button href="#" variant="primary">Go somewhere</b-button>
                </b-card>-->

                <b-card header="สายตรงผู้อำนวยการ"
                        header-tag="header"
                        header-bg-variant="primary"
                        header-text-variant="white"
                        header-class=""
                        footer="นางใกล้รุ่ง เกตวันดี<br>ผู้อำนวยการกองนโยบายและแผน"
                        footer-tag="footer"
                        footer-class="text-right"
                        title="">
                    <b-img src="http://plan.crru.ac.th/web_planning/img/direeee.png" width="250" right/>
                    <!--img src="http://plan.crru.ac.th/web_planning/img/direeee.png" width="250" alt="" class="text-right"-->
                </b-card>
            </b-col>
            <b-col cols="1" md="1"></b-col>
        </b-row>
    </b-container>
</template>

<script>
    import { Layout } from 'bootstrap-vue/es/components';
    //import { VueFlux, Transitions } from 'vue-flux';
    //import 'vue-flux/dist/vue-flux.css';

    Vue.use(Layout);

    import { Carousel } from 'bootstrap-vue/es/components';
    Vue.use(Carousel);

    /*export default {
    components: {
        'vue-flux': VueFlux
    },

    data: () => ({
        fluxOptions: {
            autoplay: true
        },
        fluxImages: [
            'URL1',
            'URL2',
            'URL3'
        ],
        fluxTransitions: {
            transitionTurn3d: Transitions.transitionTurn3d
        }
    })
    }*/
    export default {
        data () {
            return {
            slide: 0,
            sliding: null
            }
        },
        methods: {
            onSlideStart (slide) {
            this.sliding = true
            },
            onSlideEnd (slide) {
            this.sliding = false
            }
        }
    }
</script>
