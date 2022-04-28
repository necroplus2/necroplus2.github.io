// edit_web.html
const ubahJs = document.querySelectorAll('.ubahJs');

const ubah = function(el){
  el.addEventListener('click', function(e){
    // tombol ubah
    ubahJs.forEach(u => u.classList.add('hyde'));
    // isi dari span
    e.target.parentElement.parentElement.children[2].children[0].classList.add('hyde');
    // tombol simpan
    e.target.nextElementSibling.classList.remove('hyde');
    // tombol batal
    e.target.nextElementSibling.nextElementSibling.classList.remove('hyde');
    // form input
    e.target.parentElement.parentElement.children[2].children[1].classList.remove('hyde');

    // tombol batal event
    e.target.nextElementSibling.nextElementSibling.addEventListener('click', function(){
      ubahJs.forEach(u => u.classList.remove('hyde'));
      e.target.parentElement.parentElement.children[2].children[0].classList.remove('hyde');
      e.target.nextElementSibling.classList.add('hyde');
      e.target.nextElementSibling.nextElementSibling.classList.add('hyde');
      e.target.parentElement.parentElement.children[2].children[1].classList.add('hyde'); 
    });

    // tombol simpan event
    e.target.nextElementSibling.addEventListener('click', function(){
      e.target.parentElement.parentElement.children[2].children[0].innerHTML = e.target.parentElement.parentElement.children[2].children[1].value;
      ubahJs.forEach(u => u.classList.remove('hyde'));
      e.target.parentElement.parentElement.children[2].children[0].classList.remove('hyde');
      e.target.nextElementSibling.classList.add('hyde');
      e.target.nextElementSibling.nextElementSibling.classList.add('hyde');
      e.target.parentElement.parentElement.children[2].children[1].classList.add('hyde'); 
    });

  })
};


ubahJs.forEach(ubah);

