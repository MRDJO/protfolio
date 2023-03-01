(function(){

    /**
     * VARIABLE SCROLLY
     */
    var scrollY = function (){
        var supportPageOffset = window.pageXOffset !== undefined;
        var isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");
        return supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;
    }


    var logo_menu = document.querySelector(".mdi-menu")
    var logo_menu_close = document.querySelector(".mdi-close")
    var menu = document.querySelector(".ul-deroulant")

    /**
     * THEME SOMBRE 
     * THEME CLAIRE
     * 
     * SUN || LUNE
     */
    var icon= document.getElementById("icon");
    icon.onclick = function (){
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
            icon.classList.remove("mdi-brightness-3")
            icon.classList.add("mdi-brightness-7")
        }else{
            icon.classList.remove("mdi-brightness-7")
            icon.classList.add("mdi-brightness-3")
        }
    }

    /**
     * BACK TO TOP 
     */
    jQuery(function () {
        var btn = document.querySelector(".btn-scroll")
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop()>100) {
                    btn.style.right="20px"
                } else {
                    btn.style.right="-30px"
                }
            })
            $(".btn-scroll").click(function (){
                $("html,body").animate({ scrollTop : 0 },800)
                return false;
            })
            
        })
    })

    /**
     * FIXATION DE LA BARRE DE MENU
     */

    var element = document.querySelector('.nav-header')
    var top = element.getBoundingClientRect().top + scrollY()


    var onScroll = function (){
        if(scrollY() > top){
            element.classList.add("fixed")
        }
        else{
            element.classList.remove("fixed")

        }
    }
    $(window).scroll(onScroll)


    /**
     * RESPONSIVE
     */
    var btnMenu = document.querySelector(".btn-deroulant")
    var ulH = document.querySelector(".ul-header")
    var nav = document.querySelector(".nav-header")
    var imenu = document.querySelector("#menu")
    btnMenu.addEventListener("click",function(){
        btnMenu.classList.toggle("active")
        ulH.classList.toggle("activeul")
        var ulhA = document.querySelector(".activeul")

        if(btnMenu.classList.contains("active")){
            
            imenu.classList.remove("mdi-menu")
            imenu.classList.add("mdi-close")
        }else{

            nav.style.height="60px"
            imenu.classList.remove("mdi-close")
            imenu.classList.add("mdi-menu")
        }
    })

    //  CHANGEMENT D'ARRIÈRE PLAN
    var title = document.querySelector(".TT")
    var header = document.querySelector(".index-header")

    if(title.textContent === "Potfolio | Réalisations")
    {
        header.style.background="none"
        header.style.height="10vh"
    }
    else{
        if(title.textContent === "Potfolio | Contact")
        {
            header.style.background="none"
            header.style.height="10vh"
        }else{
            if(title.textContent === "Not Found")
            {
                header.style.background="none"
                header.style.height="10vh"
    
            }
        }

    }



    // LOADER
    var loader = document.querySelector(".chargement")
    setTimeout(() => {
        // loader.style.display="none"
        loader.style.opacity="0"
        loader.style.transition="opacity 0.4s ease-in-out"
    }, 2000);

    window.addEventListener("load",()=>{
        loader.style.opacity="0"
        loader.style.transition="opacity 0.4s ease-in-out"
        loader.style.display="none"
    })
})()








