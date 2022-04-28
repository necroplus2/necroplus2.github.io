const imgGaleri = document.querySelectorAll('div .img-thumbnail');



const klikImg = function(f){
  const body = document.querySelector('body');
  const footer = document.querySelector('footer');
  const galer = document.createElement('div');
  galer.classList.add('galer');

  const container2 = document.createElement('div');
  container2.classList.add('container2', 'mx-auto');

  const closeImg = document.createElement('div');
  closeImg.classList.add('closeImg', 'text-center');

  const galerImg = document.createElement('img');
  galerImg.src = f.target.currentSrc;
  galerImg.classList.add('position-absolute', 'top-50', 'start-50', 'translate-middle', 'py-1', 'px-1');
  galerImg.alt = ' ';

  container2.appendChild(closeImg);
  container2.appendChild(galerImg);
  galer.appendChild(container2);
  body.insertBefore(galer, footer);

  closeImg.addEventListener('click', () => {
    galer.remove();
    container2.remove();
    closeImg.remove();
    galerImg.remove();
  });

  document.body.addEventListener('keydown', esc => {
    if (esc.key == "Escape") {
      galer.remove();
      container2.remove();
      closeImg.remove();
      galerImg.remove();
    }
  });

  galer.addEventListener('click', con => {
    if( con.target == galer || con.target == container2){
      galer.remove();
      container2.remove();
      closeImg.remove();
      galerImg.remove();
    }
  });
  
};

imgGaleri.forEach(e => e.addEventListener('click', klikImg));


