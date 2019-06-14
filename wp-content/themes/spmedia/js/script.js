r(function(){
  const modalSearchToggle = document.getElementById('modalSearchToggle'),
    modalMenuToggle = document.getElementById('modalMenuToggle');
   modalSearchToggle.addEventListener('click', toggleActive);
   modalMenuToggle.addEventListener('click', toggleActive);
});
function r(f){/in/.test(document.readyState)?setTimeout('r('+f+')',9):f()}

function toggleActive1() {
  const clickedElement = this,
    parent = clickedElement.closest('.modal'),
    rest = document.querySelectorAll('.modal').not(clickedElement);
  if(clickedElement.classList.contains('active')){
    parent.classList.remove('active');
  } else {
    parent.classList.add('active');
  }
  rest.classList.remove('active');
}

function toggleActive(){
  const clickedElement = this,
    modals = document.querySelectorAll('.modal');
  if(clickedElement.closest('.modal').classList.contains('active')){
    for(const modal of modals){
      modal.classList.remove('active');
    }
  } else {
    for(const modal of modals){
      modal.classList.remove('active');
    }
    clickedElement.closest('.modal').classList.add('active');
  }
}