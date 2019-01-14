<modal-confirmation inline-template>
    <div :class="{'modal-confirm': isVisible}" v-if="isVisible">
        <div role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                <p>Are you sure!@{{ id }}</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success">Yes</button>
                  <button type="button" class="btn btn-danger" v-on:click="closeModal">No</button>
                </div>
              </div>
            </div>
        </div>
    </div>
</modal-confirmation>