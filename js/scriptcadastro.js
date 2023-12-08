const $ = document.querySelector.bind(document)

function TabNavagtion() {
    const html = {
        links: [...$('.tab-link').children],
        content: [...$('.content').children],
        buttom: $('#avan')
    }

    function hideAllTabContent() {
        html.content.forEach(section =>{
            section.style.display = "none";
        })
        
    }
    function showCurrentTab(id) {
        const tabcontent = $('#' + id)
        tabcontent.style.display = "block"
    }

    function selectTab(event){
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
        html.content[0].style.display="block";
        console.log(html.buttom)
    }

    return {
        init
    }
}

window.addEventListener('load', ()=>{
    const tabNavagtion = TabNavagtion()
    tabNavagtion.init()
    
})






