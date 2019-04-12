import axios from 'axios'
import Events from '../Events'
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
                console.log(window.location.href);
              })
              .catch(errors => {
                this.errors = errors.response.data.errors;
              });
          },
    },
    mounted() {
        Events.$on('login:open', () => {
            this.isVisible = true;
        })
    },
}