function loadNavbar() {
    fetch('../HTML/navBar.html')
        .then(response => response.text())
        .then(data => {
            document.querySelector('header').innerHTML = data;
            setActiveNavLink();
        })
        .catch(error => console.error('Erro ao carregar a navbar:', error));
}

function setActiveNavLink() {
    const currentPage = window.location.pathname.split('/').pop();
    console.log('Página atual:', currentPage); 
    const navLinks = document.querySelectorAll('.nav-item a');
    navLinks.forEach(link => {
        console.log('Verificando link:', link.getAttribute('href')); 
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
            console.log('Link ativo encontrado:', link);
        }
    });
}

document.addEventListener('DOMContentLoaded', loadNavbar);
