<template>
    <div class="gallery-slider">
        <div>
            <div class="gallery-slider_bacground">

                <div class="gallery-slider-img">
                    <div class="gallery-background"
                         v-bind:style="{backgroundImage: 'url(' + pr.pictures[selectedNextHead].src + ')'}"
                         :class="{ animation: active }"
                         >
                    </div>
                </div>
                
                <div class="inside-z">
                    <div class="gallery-box">
                        <div class="gallery-box_title">
                            <h3>Innovative</h3>
                            <p class="fzbig">design</p>
                            <p class="fzsmall">Classic california Cruiser</p>
                            <div class="sliderButton">
                                <div v-on:click="selectPrevHead()" class="previus-pic"><span class="prev-arrow"></span></div>
                                <div v-on:click="selectNextHead()" class="next-pic"><span class="next-arrow"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import parts from '../data/parts';

function getPreviousValidIndex(index, length) {
    const deprecatedIndex = index - 1;
    return deprecatedIndex < 0 ? length - 1 : deprecatedIndex;
}

function getNextValidIndex(index, length) {
    const incrementedIndex = index + 1;
    return incrementedIndex > length - 1 ? 0 : incrementedIndex;
}


export default {
    data() {
        return {
            pr: parts,
            selectedNextHead: 0,
            active: false
        }
    },
   
    methods: {
        selectNextHead() {
            this.selectedNextHead = getNextValidIndex(this.selectedNextHead, parts.pictures.length);
            this.active = true;
        },
        selectPrevHead() {
           this.selectedNextHead = getPreviousValidIndex(this.selectedNextHead, parts.pictures.length)
           this.active = true;
        }
    },
    
}
</script>