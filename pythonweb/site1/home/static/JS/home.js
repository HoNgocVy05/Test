let lastScrollTop = 0;
        const taskbar = document.querySelector('.taskbar'); 

        window.addEventListener('scroll', function() {
            let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
            
            if (currentScroll > lastScrollTop) {
                taskbar.style.top = "-80px"; 
            } else {
                    taskbar.style.top = "0"; 
            }
            
            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
        }, false);
