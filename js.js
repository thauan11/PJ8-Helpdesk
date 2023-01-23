
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
    let ul = document.getElementById('ul')
    let ul1 = document.createElement('ul')
    let li = document.createElement('li')
    let a = document.createElement('a')
    let i = document.createElement('i')
    //ATRIBUI VALORES AOS ELEMENTOS QUE SERÃO CRIADOS
    li.id = 'opcoes'
    li.setAttribute('onclick','aumentarBarraLateral()')
    i.classList = 'fa-solid fa-bars'
    ul1.id = 'ul'
    //CRIA OS ELEMENTOS
    ul.remove()
    aside.appendChild(ul1)
    ul1.appendChild(li)
    li.appendChild(a)
    a.appendChild(i)
    //DIMINUI A BARRA
    document.getElementById('aside').style.width = '50px'
    document.getElementById('box_1').style.paddingLeft = '50px'
    document.getElementById('aside').style.overflow = 'hidden'
    document.getElementById('opcoes').style.backgroundColor = 'transparent'
    document.getElementById('user_identificacao').style.display = 'none'
}

function aumentarBarraLateral() {
    //CRIA O ICONE
    let aside = document.getElementById('aside')
    let ul = document.getElementById('ul')
    let ul1 = document.createElement('ul')
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
    ul1.id = 'ul'
    li1.id = 'opcoes'
    li1.setAttribute('onclick','reduzirBarraLateral()')
    a2.textContent =  'Minhas solicitações'
    a3.textContent =  'Portal de atendimento'
    a3.href =  'solicitacoes.php'
    i2.classList = 'fa-solid fa-angles-right'
    i3.classList = 'fa-solid fa-angles-right'
    //CRIA OS ELEMENTOS
    ul.remove()
    aside.appendChild(ul1)
    ul1.appendChild(li1)
    li1.appendChild(a1)
    ul1.appendChild(li2)
    li2.appendChild(a2)
    a2.appendChild(i2)
    ul1.appendChild(li3)
    li3.appendChild(a3)
    a3.appendChild(i3)
    //AUMENTA A BARRA
    document.getElementById('aside').style.width = '250px'
    document.getElementById('box_1').style.paddingLeft = '250px'
    document.getElementById('opcoes').style.backgroundColor = '#54157b'
    document.getElementById('user_identificacao').style.display = 'grid'
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
    //RETIRA DA TELA O FORMULARIO
    document.getElementById('box_3').style.display = 'none'
    document.getElementById('box_3').style.zIndex = '-1'
    document.getElementById('box_4').style.display = 'none'
    document.getElementById('box_4').style.zIndex = '-1'
}

function abrir_form(section) {
    //ADICIONA A SOLICITAÇÃO
    document.getElementById('departamento').value = section
    document.getElementById('usuario').value = document.getElementById('username').innerHTML
    //EXIBE NA TELA O FORMULARIO
    document.getElementById('box_3').style.display = 'flex'
    document.getElementById('box_3').style.zIndex = '99'
    document.getElementById("titulo").focus();
}

function view_solicitacoes() {
    document.getElementById('box_4').style.display = 'flex'
    document.getElementById('box_4').style.zIndex = '99'
}