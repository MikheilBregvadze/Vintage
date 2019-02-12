<video-component
v-cloak 
inline-template>	
	<div class="cruz-video">
        <video id="videoElement"  v-on:canplay="updatePaused" v-on:playing="updatePaused" v-on:pause="updatePaused">
            <source src="video/cruz.mp4">
        </video>
        <div class="cruz-opacity" v-bind:style="{ background: computedWidth }">
            <div class="player cruz-player" v-if="paused" v-on:click="play"><span></span></div>
            <div class="cruz-paused" v-else="playing" v-on:click="pause"><span></span></div>
            {{-- <div class="padding"></div> --}}
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
    </div>

</video-component>