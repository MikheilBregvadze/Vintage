<modal-confirmation inline-template>
    <div :class="{'modal-confirm': isVisible}" v-if="isVisible">
        <div class="card m-5"> are you sure?</div>
    </div>
</modal-confirmation>