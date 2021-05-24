const catalogBtn = document.getElementById('header-menu__link'),
    catalog = document.getElementById('header-catalog');

catalogBtn.onclick =  function (e) {
    if (catalog.style.display === 'block') catalog.style.display = 'none';
    else catalog.style.display = 'block';
    e.preventDefault();
}
