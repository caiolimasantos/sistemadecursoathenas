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
        
    }

    return {
        init
    }
}
function mascaraForm(){
    console.log($)
   /* $('#telefone').mask("(99) 9999-9999?9");
    /*$('#dtn').mask('99/99/9999');
       /* $('#dataini').mask('99/99/9999');
        $('#datafim').mask('99/99/9999');
        $('form').on('focusout', '#telefone', function(event) {
          var target, phone, element;
          target = (event.currentTarget) ? event.currentTarget : event.srcElement;
          phone = target.value.replace(/\D/g, '');
          element = $(target);
          element.unmask();
          if (phone.length > 10) {
            element.mask("(99) 99999-999?9");
          } else {
            element.mask("(99) 9999-9999?9");
          }
        });
        $('#cpf').mask('999.999.999-99');
    
       /* $('#posdata').mask('99/99/9999');
        $('#poshora').mask('99:99');*/
    
      }

window.addEventListener('load', ()=>{
    const tabNavagtion = TabNavagtion()
    tabNavagtion.init()
    
})







