<video-component
v-cloak 
inline-template>	
	<div class="video">
		<video id="videoElement"  v-on:canplay="updatePaused" v-on:playing="updatePaused" v-on:pause="updatePaused">
			<source src="video/cruz.mp4">
		</video>
		<div class="opacity" v-bind:style="{ background: computedWidth }">
			<h1>Handcrafted in California</h1>
			<p>The Vintage Electric vision goes beyond just building bikes. Founded upon old school American manufacturing values and paired with the most cutting edge technology on the market</p>
			<div class="player" v-if="paused" v-on:click="play"><span></span></div>
			<div class="paused" v-else="playing" v-on:click="pause"><span></span></div>
			<div class="padding"></div>
		</div>
	</div>
</video-component>