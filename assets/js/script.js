document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab');
    const content = document.querySelectorAll('.content');
    tabs.forEach((elem) => {
        elem.addEventListener('click', (e) => {
            let target = e.target,
            activeTrigger = document.querySelector('.tab-active'),
            activeContent = document.querySelector('.content-active');

            if (target === tabs[0] && tabs[0].className !== "tab-active" ) {
                activeTrigger.classList.toggle('tab-active');
                elem.classList.toggle("tab-active");
                activeContent.classList.remove("content-active");
                content[0].classList.add('content-active');
                
            }
            if (target === tabs[1] && tabs[1].className !== "tab-active" ) {
                activeTrigger.classList.toggle('tab-active');
                elem.classList.toggle("tab-active");
                activeContent.classList.remove('content-active');
                content[1].classList.add('content-active');
                
            }

        }) 
    });
        
});
