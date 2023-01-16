function processa_login() {
    let user_adm = 'adm';
    let senha_adm = '123';
    let user = document.getElementById('email').value
    let pass = document.getElementById('senha').value

    if (user == user_adm && pass == senha_adm) {
        document.getElementById('form_display').style.display = "none";
        document.getElementById('display_conteudo').style.display = "flex";
    } else {
        alert('Erro')
    }
}

function reduzirBarraLateral() {
    //CRIA O ICONE
    let aside = document.getElementById('aside')
    let ul = document.createElement('ul')
    let li = document.createElement('li')
    let a = document.createElement('a')
    let i = document.createElement('i')
    //ATRIBUI VALORES AOS ELEMENTOS QUE SERÃO CRIADOS
    li.id = 'opcoes'
    li.setAttribute('onclick','aumentarBarraLateral()')
    i.classList = 'fa-solid fa-bars'
    //CRIA OS ELEMENTOS
    aside.firstElementChild.remove()
    aside.appendChild(ul)
    ul.appendChild(li)
    li.appendChild(a)
    a.appendChild(i)
    //DIMINUI A BARRA
    document.getElementById('aside').style.width = '50px'
    document.getElementById('box_1').style.paddingLeft = '50px'
    document.getElementById('aside').style.overflow = 'hidden'
    document.getElementById('opcoes').style.backgroundColor = 'transparent'
}

function aumentarBarraLateral() {
    //CRIA O ICONE
    let aside = document.getElementById('aside')
    let ul = document.createElement('ul')
    let a1 = document.createElement('a')
    let a2 = document.createElement('a')
    let a3 = document.createElement('a')
    let li1 = document.createElement('li')
    let li2 = document.createElement('li')
    let li3 = document.createElement('li')
    let i2 = document.createElement('i')
    let i3 = document.createElement('i')
    //ATRIBUI VALORES AOS ELEMENTOS QUE SERÃO CRIADOS
    a1.textContent =  'Opções'
    li1.id = 'opcoes'
    li1.setAttribute('onclick','reduzirBarraLateral()')
    a2.textContent =  'Solicitações'
    a3.textContent =  'Aprovações'
    i2.classList = 'fa-solid fa-angles-right'
    i3.classList = 'fa-solid fa-angles-right'
    //CRIA OS ELEMENTOS
    aside.firstElementChild.remove()
    aside.appendChild(ul)
    ul.appendChild(li1)
    li1.appendChild(a1)
    ul.appendChild(li2)
    li2.appendChild(a2)
    a2.appendChild(i2)
    ul.appendChild(li3)
    li3.appendChild(a3)
    a3.appendChild(i3)
    //DIMINUI A BARRA
    document.getElementById('aside').style.width = '250px'
    document.getElementById('box_1').style.paddingLeft = '250px'
    document.getElementById('opcoes').style.backgroundColor = '#54157b'
}

function box_cx_selec() {
    let cxSelec = document.querySelector('#box_cx_selec');

    if (cxSelec.classList.contains('show')) {
        cxSelec.classList.remove('show');
        cxSelec.classList.add('hidden')
    } else {
        cxSelec.classList.remove('hidden');
        cxSelec.classList.add('show')
    }
}

function fechar_form() {
    document.getElementById('box_3').style.display = 'none'
    document.getElementById('box_3').style.zIndex = '-1'
}

function abrir_form() {
    document.getElementById('box_3').style.display = 'flex'
    document.getElementById('box_3').style.zIndex = '98'
}