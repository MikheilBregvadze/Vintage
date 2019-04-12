<template>
    <div class="gallery-slider">
        <div class="position-relative text-center" style="overflow: hidden; z-index: 0">
		<div class="swiper-container-customers">
            <div class="swiper-wrapper">
                <div class="swiper-slide" v-for="(img, index) in pr" v-bind:key="index">
                    <div class="pb-4 text-center">
                        <div class="d-table m-auto circle sldParetn">
                            <div class="sld" v-bind:style="{backgroundImage: 'url(' + img.src + ')'}"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2"></div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="inside-z">
            <div class="gallery-box">
                <div class="gallery-box_title">
                    <h3>Innovative</h3>
                    <p class="fzbig">design</p>
                    <p class="fzsmall">Classic california Cruiser</p>
                    <div class="sliderButton">
                        <!-- <div v-on:click="selectPrevHead()" class="previus-pic"><span class="prev-arrow"></span></div> -->
                        <!-- <div v-on:click="selectNextHead()" class="next-pic"><span class="next-arrow"></span></div> -->

                        <div class="previus-pic swiper-default swiper-button-next"><span class="next-arrow"></span></div>
                        <div class="next-pic swiper-default swiper-button-prev"> <span class="prev-arrow"></span></div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    </div>
</template>

<script>
import parts from '../data/parts';



export default {
    data() {
        return {
            pr: parts,
            active: false
        }
    },

    mounted() {
        this.pr = parts.pictures
    }, 
}
</script>

<style>
.sldParetn {
    position: relative;
    width: 100%;
}
.sld {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-bottom: 34.333333%;
}
</style>
