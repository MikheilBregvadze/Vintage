export default {
  data() {
    return {
      top: scrollY*.6,
      maxHeight: 0,
      resizeHeader: false,
      bgSize: 1350,
      headerBg: false
    }
  },
  methods: {
    handleScroll(event) {
      this.top = scrollY*.6
      this.headerSm()
    },
    menuToggle(){
      
      if( this.maxHeight == 0 ){
        this.maxHeight = 300;
        this.headerBg = true;
        document.querySelector('.menu-toggle').className += ' open';
      }else{
        this.maxHeight = 0;
        this.headerBg = false;
        document.querySelector('.menu-toggle.open').className = 'menu-toggle';
      }
      document.querySelector('.responsive-menu').style.maxHeight = this.maxHeight + 'px';

    },

    handleResize(event){
        this.responsiveMenu() 
        // if(window.innerWidth > 1700){
        //   this.bgSize = 90
        // }else if(window.innerWidth > 1500){
        //   this.bgSize = 105
        // }else if(window.innerWidth > 1200){
        //   this.bgSize = 135
        // }else if(window.innerWidth > 992){
        //   this.bgSize = 195
        // }else{
        //   this.bgSize = 500
        // }
    },
    responsiveMenu(){
      let maxHeight = document.querySelector('.responsive-menu').style.maxHeight;
      if(window.innerWidth < 991){
         document.querySelector('.responsive-menu').style = `max-height: ${this.maxHeight}px; overflow: hidden`;
      } else{
        document.querySelector('.responsive-menu').style = `max-height: unset; overflow: inherit`;  
      } 
    },
    headerSm(){
      if( scrollY > 240 || window.location.pathname != '/' || this.maxHeight != 0) {
        this.resizeHeader = true;
      }else{
        this.resizeHeader = false;
      }
    },
  },
  created () {
    window.addEventListener('scroll', this.handleScroll);
    window.addEventListener('resize', this.handleResize); 
    this.handleResize ()
  },
  mounted(){
    this.responsiveMenu()
  },
  destroyed () {
    window.removeEventListener('scroll', this.handleScroll);
  }
};