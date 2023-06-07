let form = document.getElementById('fgpswdform');
let formtwigger = document.getElementById('fgpswdtwigger');


formtwigger.addEventListener('click',(e)=>{
  e.preventDefault();
  form.classList.toggle('active')

  // document.body.classList.add('overflow')
})