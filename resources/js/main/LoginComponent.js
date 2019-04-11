
import Events from '../Events'
import axios from 'axios'
export default {
    data() {
        return {
            isVisible: false,
            errors: {},
            form: {},
            test: 'http://127.0.0.1:8000/dashboard'
        }
    },
    methods: {
        closeModal() {
            this.isVisible = false;
          },
          onSubmit() {
            axios
              .post('/login', this.form)
              .then(({ data }) => {
                window.location.href = this.test;
                // this.errors = {};
                console.log(window.location.href);
              })
              .catch(errors => {
                console.log(errors);
                this.errors = errors.response.data.errors;
              });
          },
          add() {
            console.log(this.form);
          }
    },
    mounted() {
        Events.$on('login:open', () => {
            this.isVisible = true;
        })
    },
}