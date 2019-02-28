 <forget-password-component  v-cloak inline-template>
  <transition name="scale">
  <div class="popUp" :class="{'show': isVisible}" v-if="isVisible" v-on:click.self="closeModal()">
    <div class="forget-password">
      <h2 class="text-left p-0 pb-3">Forget password</h2>

      <form autocomplete="off" v-on:submit.prevent="onSubmit">
        <div class="form-group">
         <label class="sr-only">Email</label>
         <input 
         onkeyup="this.setAttribute('value', this.value);"   
         value="" 
         v-model="form.email" 
         type="email" 
         name="email" 
         class="form-control" 
         placeholder='Email'
         required>
         <span class="text-danger">@{{ errors.email ? errors.email.join('') : '' }}</span>
       </div>
       <a class="popup-link d-block text-right" href="" v-on:click.prevent="openLoginModal()">
         Back to login
       </a>
       <div class="form-group button">
        <button type="submit" class="" :class='sent ? "sent" : "" '>
          <span v-if="sent">Sent</span>
          <span v-else>Send</span>
        </button>
      </div>    
{{--         <div v-if="sent" class="text-center pt-3">
          Message is sent successfully
        </div> --}}
      </form>   
    </div>
  </div>
</transition>
</forget-password-component>


