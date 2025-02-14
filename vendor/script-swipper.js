(function() {
   "use strict";

   /* Easy selector helper function */
   const select = (el, all = false) => {
      el = el.trim()
      if (all) return [...document.querySelectorAll(el)]
      else return document.querySelector(el)
   }
   /* End */ 

   /* Easy event listener function */
   const on = (type, el, listener, all = false) => {
      let selectEl = select(el, all)
      if (selectEl) {
         if (all) selectEl.forEach(e => e.addEventListener(type, listener))
         else selectEl.addEventListener(type, listener)
      }
   }
   /* End */ 

   /* Easy on scroll event listener */
   (el, listener) => {
      el.addEventListener('scroll', listener)
   }
   /* End */ 

   /* Scrolls to an element with header offset */
   const scrollto = (el) => {
      let elementPos = select(el).offsetTop
      window.scrollTo({
         top: elementPos,
         behavior: 'smooth'
      })
   }
   /* End */ 

   /* Scrool with ofset on links with a class name .scrollto */
   on('click', '.scrollto', function(e) {
      if (select(this.hash)) {
         e.preventDefault()
         select('body')
         scrollto(this.hash)
      }
   }, true)
   /* End */ 

   /* Animation on scroll */
   window.addEventListener('load', () => {
      AOS.init({
         duration: 1000,
         easing: 'ease-in-out',
         once: true,
         mirror: false
      })
   })
   /* End */ 

  
})()
