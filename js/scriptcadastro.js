const $ = document.querySelector.bind(document)

function TabNavagtion() {
    const html = {
        links: [...$('.tab-link').children],
        content: [...$('.content').children],
        buttom: $('#avan')
    }

    function hideAllTabContent() {
        html.content.forEach(section => {
            section.style.display = "none";
        })

    }
    function showCurrentTab(id) {
        const tabcontent = $('#' + id)
        tabcontent.style.display = "block"
    }

    function selectTab(event) {
        hideAllTabContent()
        const target = event.currentTarget
        showCurrentTab(target.dataset.id)
    }


    function listenForChange() {
        html.links.forEach(tab => {
            tab.addEventListener('click', selectTab)
        })

    }

    function init() {
        hideAllTabContent()
        listenForChange()
        html.content[0].style.display = "block";

    }

    return {
        init
    }
}


$('#cpf').addEventListener('input', ()=> {
    var i = $('#cpf').value.length; //aqui pega o tamanho do input
    if (i === 3 || i === 7) //aqui faz a divisoes colocando um ponto no terceiro e setimo indice
        $('#cpf').value = $('#cpf').value + ".";
    else if (i === 11) //aqui faz a divisao colocando o tracinho no decimo primeiro indice
        $('#cpf').value = $('#cpf').value + "-";
})



window.addEventListener('load', () => {
    const tabNavagtion = TabNavagtion()
    tabNavagtion.init()

})







